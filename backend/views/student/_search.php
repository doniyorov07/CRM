<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\StudentSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="student-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'ism') ?>

    <?= $form->field($model, 'familiya') ?>

    <?= $form->field($model, 'qabul_sanasi') ?>

    <?= $form->field($model, 'raqami') ?>

    <?php // echo $form->field($model, 'dars_boshlanishi') ?>

    <?php // echo $form->field($model, 'dars_kuni') ?>

    <?php // echo $form->field($model, 'jinsi') ?>

    <?php // echo $form->field($model, 'yosh') ?>

    <?php // echo $form->field($model, 'guruxi') ?>

    <?php // echo $form->field($model, 'oqitish_tili') ?>

    <?php // echo $form->field($model, 'yonalishi') ?>

    <?php // echo $form->field($model, 'status') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
