<?php

namespace backend\controllers;
use common\models\Cabinet;
use Yii;
use yii\filters\AccessControl;
use yii\filters\VerbFilter;
use yii\web\Controller;
use yii\data\ActiveDataProvider;
class CabinetController extends Controller
{   
  public function behaviors()
  {
    return array_merge(
        parent::behaviors(),
        [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
        ]
    );
}

public function actionIndex()
{
      $model = new Cabinet();
     

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
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
    if (($model = Cabinet::findOne(['id' => $id])) !== null) {
        return $model;
    }

    throw new NotFoundHttpException(Yii::t('app', 'The requested page does not exist.'));
}

}
