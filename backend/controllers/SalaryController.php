<?php

namespace backend\controllers;

use common\models\GroupLeader;
use common\models\Payments;
use common\models\PaymentSearch;
use common\models\Salary;
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
                        'actions' => ['login', 'error', 'index', 'paycount'],
                        'allow' => true,
                        'roles' => ['admin'],
                    ],
                    [
                        'actions' => ['logout', 'index', 'view', 'paycount'],
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
        $models = new Salary();


        if (($searchModel->load(Yii::$app->request->post()) && $searchModel->validate())) {

            if (($models->load($this->request->post()) && $models->save())){
                return $this->render('site');
            }
            $worker = Worker::find()
                ->andWhere(['id' => $searchModel->worker_id])
                ->one();

            $workerGroups = GroupLeader::find()
                ->andWhere(['worker_id' => $worker->id])
                ->all();

            $ids = [];
            foreach ($workerGroups as $workerGroup) {
                $ids[] = $workerGroup->group_id;
            }

            $model = Payments::find()
                ->andWhere(['in', 'group_id', $ids])
                ->andWhere(['like', 'month', $searchModel->month])
                ->all();

            $sum = Payments::find()
                ->andWhere(['in', 'group_id', $ids])
                ->andWhere(['like', 'month', $searchModel->month])
                ->select('payment_amount')
                ->sum('payment_amount');

            $month = Payments::find()
                ->andWhere(['in', 'group_id', $ids])
                ->andWhere(['like', 'month', $searchModel->month])
                ->one();

            $models = new Salary([
                'pay_total' => $sum,
            ]);


            return $this->render('search_result', [
                'model' => $model,
                'models' => $models,
                'sum' => $sum,
                'worker' => $worker,
                'workerGroups' => $workerGroups,
                'searchModel' => $searchModel,
            ]);

        }
        return $this->render('index', [
            'searchModel' => $searchModel,
        ]);
    }
}

