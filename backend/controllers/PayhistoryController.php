<?php

namespace backend\controllers;

use common\models\Group;
use common\models\GroupLeader;
use common\models\Payments;
use common\models\PayHistorySearch;
use yii\filters\AccessControl;
use yii\filters\VerbFilter;
use yii\web\Controller;
use Yii;
use yii\web\NotFoundHttpException;

class PayhistoryController extends Controller
{
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'except' => ['error'],
                'rules' => [
                    [
                        'actions' => ['login', 'error', 'index', 'view', 'delete'],
                        'allow' => true,
                        'roles' => ['admin'],
                    ],
                    [
                        'actions' => ['logout', 'index', 'view', 'delete'],
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
        $searchModel = new PayhistorySearch();
        if ($searchModel->load(Yii::$app->request->post()) && $searchModel->validate()){

            $model = Payments::find()
                ->andWhere(['like', 'month', $searchModel->month])
                ->all();
            $group_id = Group::find()
                ->andWhere(['id' => $searchModel->group_id])
                ->one();
            return $this->render('view', [
                'model' => $model,
                'group_id' => $group_id,
                'searchModel' => $searchModel,
            ]);
        }
        return $this->render('index', [
            'searchModel' => $searchModel,
        ]);
    }
    public function actionDelete($id)
{
    $this->findModel($id)->delete();
    Yii::$app->session->setFlash('success', 'To\'lov o\'chirildi!');
    return $this->redirect(['index']);
}

    protected function findModel($id)
    {
        if (($model = Payments::findOne(['id' => $id])) !== null) {
            return $model;
        }
        throw new NotFoundHttpException(Yii::t('app', 'The requested page does not exist.'));
    }

}