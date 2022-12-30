<?php

namespace backend\controllers;
use common\models\Position;
use Yii;
use yii\filters\AccessControl;
use yii\filters\VerbFilter;
use yii\web\NotFoundHttpException;
use yii\web\Controller;

class PositionController extends Controller
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
                        'actions' => ['logout', 'index', 'delete'],
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
       $model = new Position();
       $position = Position::find()->all();
       if ($this->request->isPost){
           if ($model->load($this->request->post()) && $model->save()) {
               Yii::$app->session->setFlash('success', 'Lavozim muvaffaqiyatli yaratildi');
               return $this->redirect(['index']);
           }
       }else {
           $model->loadDefaultValues();
       }
        return $this->render('index', [
            'model' => $model,
            'position' => $position,
        ]);
    }

    public function actionDelete(int $id)
    {
        $this->findModel($id)->delete();
        return $this->redirect(['index']);
    }
    protected function findModel(int $id)
    {
        if (($model = Position::findOne(['id' => $id])) !== null) {
            return $model;
        }
        throw new NotFoundHttpException(Yii::t('app', 'The requested page does not exist.'));
    }
}