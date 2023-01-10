<?php

namespace backend\controllers;

use common\models\Group;
use common\models\Student;
use common\models\StudentGroup;
use Yii;
use common\models\Payments;
use common\models\PaymentsSearch;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * PaymentsController implements the CRUD actions for Payments model.
 */
class PaymentsController extends Controller
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
                        'actions' => ['login', 'error', 'index', 'delete', 'payment', 'view', 'create', 'search', 'payview'],
                        'allow' => true,
                        'roles' => ['admin'],
                    ],
                    [
                        'actions' => ['logout', 'index', 'delete', 'payment', 'view', 'create', 'search', 'payview'],
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
     * Lists all Payments models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $model = Group::find()->all();
        return $this->render('index', [
            'model' => $model,
        ]);

    }

    /**
     * Displays a single Payments model.
     * @param int $id ID
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView(int $id)
    {
        $model = Group::findOne($id);
        if (!$model) {
            throw new NotFoundHttpException("Bunday guruh yo'q");
        }
        return $this->render('view', [
            'model' => $model,
        ]);
    }

    /**
     * Creates a new Payments model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Payments();
        if ($model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }
        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Payments model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id ID
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionPayment(int $id, int $group_id)
    {
        $models = Student::findOne($id);
        $group = Group::findOne($group_id);
        if (!$models) {
            throw new NotFoundHttpException('Bunday talaba mavjud emas!');
        }
        if (!$group) {
            throw new NotFoundHttpException('Bunday guruh mavjud emas!');
        }

        $model = new Payments([
            'student_id' => $models->id,
            'group_id' => $group->id,
            'course_amount' => Yii::$app->request->get('course_amount'),
        ]);
        if ($model->load($this->request->post()) && $model->save()) {
            Yii::$app->session->setFlash('success', 'To\'lov muvaffaqqiyatli amalga oshirildi!');
            return $this->redirect(['index']);
        }
        return $this->render('payment', [
            'models' => $models,
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Payments model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $id ID
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete(int $id)
    {
        $this->findModel($id)->delete();
        return $this->redirect(['index']);
    }

    /**
     * Finds the Payments model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id ID
     * @return Payments the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel(int $id)
    {
        if (($model = Group::findOne(['id' => $id])) !== null) {
            return $model;
        }
        throw new NotFoundHttpException('The requested page does not exist.');
    }

   
}
