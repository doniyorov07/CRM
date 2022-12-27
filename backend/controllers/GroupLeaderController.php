<?php

namespace backend\controllers;

use common\models\GroupLeader;
use common\models\Worker;
use yii\filters\AccessControl;
use yii\filters\VerbFilter;
use yii\web\Controller;
use yii\data\ActiveDataProvider;
use Yii;
use yii\web\NotFoundHttpException;
use yii\web\Response;

class GroupLeaderController extends \yii\web\Controller
{
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'except' => ['error'],
                'rules' => [
                    [
                        'actions' => ['login', 'error', 'index', 'delete', 'view'],
                        'allow' => true,
                        'roles' => ['admin'],
                    ],
                    [
                        'actions' => ['logout', 'index', 'delete', 'view'],
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
    /**
     * @return string|Response
     */
    public function actionIndex()
    {
        $model = new GroupLeader();
        $groupLeaders = GroupLeader::find()->all();
        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                Yii::$app->session->setFlash('success', 'Guruh rahbari muvaffaqiyatli biriktirildi!');
                return $this->redirect(['index']);
            }
        } else {
            $model->loadDefaultValues();
        }
        return $this->render('index', [
            'model' => $model,
            'models' => $groupLeaders
        ]);
    }

    public function actionView()
    {
        $model = GroupLeader::find()->all();
        return $this->render('view', [
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
        if (($model = GroupLeader::findOne(['id' => $id])) !== null) {
            return $model;
        }
        throw new NotFoundHttpException(Yii::t('app', 'The requested page does not exist.'));
    }

}
