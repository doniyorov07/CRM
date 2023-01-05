<?php

namespace backend\modules\profilemanager\controllers;

use backend\modules\profilemanager\models\ChangePasswordForm;
use backend\modules\profilemanager\models\ProfileUser;
use Yii;
use yii\filters\AccessControl;
use yii\filters\VerbFilter;
use yii\web\Controller;
use yii\web\NotFoundHttpException;

/**
 * Default controller for the `profilemanager` module
 */
class DefaultController extends Controller
{

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
                        'actions' => ['logout', 'index', 'change-login', 'change-password'],
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
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }


    /**
     * @return string|\yii\web\Response
     * @throws \yii\web\NotFoundHttpException
     */
    public function actionChangeLogin()
    {
        $model = ProfileUser::getUserModel();

        if (!$model) {
            throw new NotFoundHttpException(Yii::t('app', 'Sahifa mavjud emas!'));
        }
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            Yii::$app->session->setFlash('success', Yii::t('app', 'Login muvaffaqqiyatli o\'zgartirildi!'));
            return $this->redirect(['index']);
        }
        return $this->render('changeLogin', ['model' => $model]);
    }

    public function actionChangePassword()
    {
        $model = new ChangePasswordForm();

        $id = Yii::$app->request->get('id');

        if ($model->load(Yii::$app->request->post()) && $model->savePassword($id)) {

            Yii::$app->session->setFlash('success', Yii::t('app', 'Parol muvaffaqqiyatli o\'zgartirildi!'));
            return $this->redirect(['index']);

        }
        return $this->render('changePassword', ['model' => $model]);
    }
}
