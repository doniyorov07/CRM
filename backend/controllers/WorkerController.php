<?php

namespace backend\controllers;

use common\models\Worker;
use common\models\WorkerSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * WorkerController implements the CRUD actions for Worker model.
 */
class WorkerController extends Controller
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
     * Lists all Worker models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new WorkerSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Worker model.
     * @param int $id ID
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
         $model = Worker::findOne($id);
        return $this->render('view', [
            'model' => $model,
        ]);
    }

    /**
     * Creates a new Worker model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Worker();  

           if(isset($_POST['Worker']))
                {
                        $model->attributes=$_POST['Worker'];

                        if($model->oqitish_tili!=='')

                         $model->oqitish_tili=implode(',',$model->oqitish_tili);
                         $model->uploadImg();
                        if($model->save(false))
                           return $this->redirect(['view', 'id' => $model->id]);
                }
               $model->oqitish_tili=explode(',',$model->oqitish_tili);

           return $this->render('create', [
            'model' => $model,
        ]);

        // if ($this->request->isPost) {
        //     if ($model->load($this->request->post())) {
        //         $model->uploadImg();
        //         $model->save(false);
        //         return $this->redirect(['view', 'id' => $model->id]);
        //     }
        // } else {
        //     $model->loadDefaultValues();
        // }

        // return $this->render('create', [
        //     'model' => $model,
        // ]);
    }

    /**
     * Updates an existing Worker model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id ID
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
       $model =Worker::findOne($id);
        $oldImage = $model->image;

           if(isset($_POST['Worker']))

                {
                        $model->attributes=$_POST['Worker'];

                        if($model->oqitish_tili!=='')

                         $model->oqitish_tili=implode(',',$model->oqitish_tili);
                         $model->uploadImg($oldImage);
                        if($model->save(false))
                          
                         return $this->redirect(['view', 'id' => $model->id]);

                }

        $model->oqitish_tili=explode(',',$model->oqitish_tili);

                 return $this->render('update', [
            'model' => $model,
        ]);

        // if ($this->request->isPost) {

        //     if ($model->load($this->request->post())) {
        //         $model->uploadImg($oldImage);
        //         $model->save(false);
        //         return $this->redirect(['view', 'id' => $model->id]);
        //     }
        // } else {
        //     $model->loadDefaultValues();
        // }

        // return $this->render('update', [
        //     'model' => $model,
        // ]);
    }

    /**
     * Deletes an existing Worker model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $id ID
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Worker model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id ID
     * @return Worker the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Worker::findOne(['id' => $id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
