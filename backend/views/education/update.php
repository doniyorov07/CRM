<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Education */
/* @var $form ActiveForm */
?>
<div class="site-update col-10">

    <?php $form = ActiveForm::begin(); ?>
    <?= $form->field($model, 'edu_number') ?>
    <?= $form->field($model, 'edu_name') ?>
    <?= $form->field($model, 'edu_location') ?>
    <?= $form->field($model, 'edu_email') ?>
    <div class="form-group">
        <?= Html::submitButton('Saqlash', ['class' => 'btn btn-success']) ?>
    </div>
    <?php ActiveForm::end(); ?>

</div><!-- site-update -->



