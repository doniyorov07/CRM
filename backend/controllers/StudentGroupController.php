<?php
namespace backend\controllers;

use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\data\ActiveDataProvider;
use common\models\StudentGroup;
use yii\web\NotFoundHttpException;
use Yii;
    class StudentGroupController extends \yii\web\Controller
    {
        public function behaviors()
        {
            return [
                'access' => [
                    'class' => AccessControl::className(),
                    'except' => ['error'],
                    'rules' => [
                        [
                            'actions' => ['login', 'error', 'index', 'delete'],
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
           $model = new StudentGroup();
           if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                Yii::$app->session->setFlash('success', 'Talaba guruhga muvaffaqiyatli biriktirildi!');
                return $this->redirect(['index']);
            }
        } else {
            $model->loadDefaultValues();
        }
             return $this->render('index', [
                     'model' => $model,
    ]);
    }

    public function actionDelete($id)
    {
        $this->findModel($id)->delete();
        return $this->redirect(['index']);
    }

    protected function findModel($id)
    {
        if (($model = StudentGroup::findOne(['id' => $id])) !== null) {
            return $model;
        }
        throw new NotFoundHttpException(Yii::t('app', 'The requested page does not exist.'));
    }

    }
