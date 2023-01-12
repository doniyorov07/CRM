<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\file\FileInput;
/** @var yii\web\View $this */
/** @var common\models\Education $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="education-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'image')->widget(FileInput::classname(),[
        'name' => 'attachment_53',
        'pluginOptions' => [
            'showCaption' => false,
            'showRemove' => false,
            'showUpload' => false,
            'browseClass' => 'btn btn-primary btn-block',
            'browseIcon' => '<i class="fas fa-camera"></i> ',
            'browseLabel' =>  'Rasmni yuklang'
        ],
        'options' => ['accept' => 'image/*']
    ]); ?>
    <?= $form->field($model, 'edu_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'edu_location')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'edu_number')->textInput() ?>

    <?= $form->field($model, 'edu_email')->textInput(['maxlength' => true]) ?>




    <div class="form-group">
        <?= Html::submitButton('Salqash', ['class' => 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
