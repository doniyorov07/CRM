<?php
namespace backend\controllers;

use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\data\ActiveDataProvider;
use common\models\StudentGroup;

use Yii;
    class StudentGroupController extends \yii\web\Controller
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

           $model = new StudentGroup();

                if(isset($_POST['StudentGroup']))
                {
                    $model->attributes=$_POST['StudentGroup'];

                    if($model->lesson_days!=='')

                        $model->lesson_days=implode(',',$model->lesson_days);

                        if($model->save())
                            Yii::$app->session->setFlash('success', 'Talaba guruhga muvaffaqiyatli biriktirildi!');
                              return $this->redirect(['index']);
                }
               $model->lesson_days=explode(',',$model->lesson_days);

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
