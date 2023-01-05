<?php

namespace backend\controllers;

use common\models\Group;
use common\models\GroupLeader;
use common\models\Payments;
use common\models\PaymentSearch;
use yii\filters\AccessControl;
use yii\filters\VerbFilter;
use yii\web\NotFoundHttpException;
use yii\web\Controller;
use common\models\Worker;
use Yii;


class SalaryController extends Controller
{
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'except' => ['error'],
                'rules' => [
                    [
                        'actions' => ['login', 'error', 'index'],
                        'allow' => true,
                        'roles' => ['admin'],
                    ],
                    [
                        'actions' => ['logout', 'index', 'view'],
                        'allow' => true,
                        'roles' => ['superadmin'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    public function actionIndex()
    {
        $searchModel = new PaymentSearch();
        $model = Payments::find()->all();
        $worker = Worker::find()->all();
        $groupleader = GroupLeader::find()->all();


        if ($searchModel->load(Yii::$app->request->post()) && $searchModel->validate()) {
            $model = Payments::find()
                ->andWhere(['like', 'month', $searchModel->month])
                ->all();
            $worker = Worker::find()
                ->andWhere(['id' => $searchModel->worker_id])
                ->one();
            $groupleader = GroupLeader::find()
                ->andWhere(['worker_id' => $searchModel->worker_id])
                ->all() == Group::find()
                ->where('id')
                ->all();
            return $this->render('search_result', [
                'model' => $model,
                'worker' => $worker,
                'groupleader' => $groupleader,
                'searchModel' => $searchModel,
            ]);

        }
        return $this->render('index', [
            'searchModel' => $searchModel,
        ]);
    }

}

