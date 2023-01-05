<?php

use kartik\form\ActiveForm;
use yii\helpers\Html;


/* @var $this \yii\web\View */
/* @var $model \backend\modules\profilemanager\models\ChangePasswordForm */

$this->params['breadcrumbs'][] = ['url' => ['index'], 'label' => Yii::t('app', 'Ortga')];

$this->title = 'Parolni o\'zgartirish';
?>
<div class="row justify-content-center">
    <div class="col-md-6">

        <?php $form = ActiveForm::begin() ?>
        <?= $form->field($model, 'password')->passwordInput() ?>
        <?= $form->field($model, 'repassword')->passwordInput() ?>
        <?= Html::submitButton(Yii::t('app', 'Saqlash'), ['class' => 'btn btn-primary']) ?>
        <?php ActiveForm::end() ?>
    </div>
</div>
