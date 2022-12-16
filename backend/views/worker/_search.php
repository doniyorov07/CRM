<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\WorkerSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="worker-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'ismi') ?>

    <?= $form->field($model, 'familiya') ?>

    <?= $form->field($model, 'shartnoma_muddati') ?>

    <?= $form->field($model, 'lavozim') ?>

    <?php // echo $form->field($model, 'qabul_sanasi') ?>

    <?php // echo $form->field($model, 'tugilgan_yil') ?>

    <?php // echo $form->field($model, 'raqam') ?>

    <?php // echo $form->field($model, 'staj') ?>

    <?php // echo $form->field($model, 'status') ?>

    <?php // echo $form->field($model, 'oqitish_tili') ?>

    <?php // echo $form->field($model, 'image') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
