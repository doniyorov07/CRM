<?php

namespace backend\controllers;

use common\models\Student;
use common\models\StudentSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use Yii;
/**
 * StudentController implements the CRUD actions for Student model.
 */
class StudentController extends Controller
{
    /**
     * @inheritDoc
     */
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
            ]
        );
    }

    /**
     * Lists all Student models.
     *
     * @return string
     */
    public function actionIndex()
    {   
        $model = Student::find()->all();
        $searchModel = new StudentSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
            'model' => $model,
        ]);
    }

    /**
     * Displays a single Student model.
     * @param int $id ID
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {   
         $model = Student::findOne($id);
        return $this->render('view', [
            'model' => $model,
        ]);
    }

    /**
     * Creates a new Student model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {

       
           $model = new Student();

                if(isset($_POST['Student']))
                {
                        $model->attributes=$_POST['Student'];

                        if($model->oqitish_tili!=='')

                         $model->oqitish_tili=implode(',',$model->oqitish_tili);

                        if($model->save())

                            Yii::$app->session->setFlash('success', 'Talaba muvaffaqqiyatli qo\'shildi!');

                              return $this->redirect(['view', 'id' => $model->id]);
                }
               $model->oqitish_tili=explode(',',$model->oqitish_tili);

              return $this->render('create', [
            'model' => $model,
        ]);

    }

    /**
     * Updates an existing Student model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id ID
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model =Student::findOne($id);


                if(isset($_POST['Student']))

                {
                        $model->attributes=$_POST['Student'];

                        if($model->oqitish_tili!=='')

                                $model->oqitish_tili=implode(',',$model->oqitish_tili);

                        if($model->save())

                            Yii::$app->session->setFlash('success', 'Talaba ma\'lumotlari muvaffaqqiyatli o\'zgartirildi!');

                                return $this->redirect(['view', 'id' => $model->id]);

                }

        $model->oqitish_tili=explode(',',$model->oqitish_tili);

                 return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Student model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $id ID
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();
        Yii::$app->session->setFlash('success', 'Talaba  muvaffaqqiyatli o\'chirildi!');
        return $this->redirect(['index']);
    }

    /**
     * Finds the Student model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id ID
     * @return Student the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Student::findOne(['id' => $id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
