<?php

namespace backend\controllers;

use common\models\Cost;
use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * CostController implements the CRUD actions for Cost model.
 */
class CostController extends Controller
{
    /**
     * @inheritDoc
     */
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
                        'actions' => ['logout', 'index', 'create', 'delete'],
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
     * Lists all Cost models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $model = new Cost();
        $query = Cost::find()->all();
        if ($model->load($this->request->post()) && $model->save()) {
               Yii::$app->session->setFlash('success', 'Chiqim qo\'shildi!');
               return $this->redirect('index');
            }else{
            $model->loadDefaultValues();
        }
       return $this->render('index', [
           'model' => $model,
           'query' => $query,
       ]);
    }

    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    public function actionDelete($id)
    {
        $this->findModel($id)->delete();
        Yii::$app->session->setFlash('success', 'Chiqim o\'chiqildi!');
        return $this->redirect(['index']);
    }

    protected function findModel($id)
    {
        if (($model = Cost::findOne(['id' => $id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
