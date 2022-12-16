<?php

namespace backend\controllers;
use common\models\Group;
use Yii;
use yii\filters\AccessControl;
use yii\filters\VerbFilter;
use yii\web\Controller;
use yii\data\ActiveDataProvider;
class GroupController extends \yii\web\Controller
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
      $model = new Group();
      $group = Group::find()->all();

        if ($this->request->isPost) {
            if ($model->load($this->request->post())) {
                $model->save(false);
                return $this->redirect(['index']);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('index', [
            'model' => $model,
            'group' => $group,
        ]);
}

public function actionDelete($id)
{
    $this->findModel($id)->delete();

    return $this->redirect(['index']);
}

protected function findModel($id)
{
    if (($model = Group::findOne(['id' => $id])) !== null) {
        return $model;
    }

    throw new NotFoundHttpException(Yii::t('app', 'The requested page does not exist.'));
}

}
