<?php

namespace backend\controllers;
use common\models\GroupLeader;
use yii\filters\AccessControl;
use yii\filters\VerbFilter;
use yii\web\Controller;
use yii\data\ActiveDataProvider;
class GroupLeaderController extends \yii\web\Controller
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
        $model = new GroupLeader;
        $mod = GroupLeader::find()->all();
        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['index']);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('index', [
            'model' => $model,
            'mod' => $mod,
          
           
        ]);
}

public function actionView()
{
    $model = GroupLeader::find()->all();

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
    if (($model = GroupLeader::findOne(['id' => $id])) !== null) {
        return $model;
    }

    throw new NotFoundHttpException(Yii::t('app', 'The requested page does not exist.'));
}

}
