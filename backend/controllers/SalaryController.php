<?php

namespace backend\controllers;
use common\models\Search;
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
        $model = Worker::find()->where(['status' => 1])->all();
        return $this->render('index', [
            'model' => $model,
        ]);
    }

    public function actionView()
    {
        $model = new Search();
        return $this->render('view', [
            'model' => $model,
        ]);
    }


}

