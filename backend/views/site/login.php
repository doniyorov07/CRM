<?php
use yii\helpers\Html;
?>
<div class="d-flex justify-content-center">
<div class="card col-6 text-center">
    <div class="card-header ">
        <a href="../../index2.html" class="h1"><b>CRM</b></a>
    </div>
    <div class="card-body login-card-body">
        <p class="login-box-msg">Tizimga kirish uchun login va parolni kiriting</p>

        <?php $form = \yii\bootstrap4\ActiveForm::begin(['id' => 'login-form']) ?>

        <?= $form->field($model,'username', [
            'options' => ['class' => 'form-group has-feedback'],
            'inputTemplate' => '{input}<div class="input-group-append"></div>',
            'template' => '{beginWrapper}{input}{error}{endWrapper}',
            'wrapperOptions' => ['class' => 'input-group mb-3']
        ])
            ->label(false)
            ->textInput(['placeholder' => $model->getAttributeLabel('username')]) ?>

        <?= $form->field($model, 'password', [
            'options' => ['class' => 'form-group has-feedback'],
            'inputTemplate' => '{input}<div class="input-group-append"></div>',
            'template' => '{beginWrapper}{input}{error}{endWrapper}',
            'wrapperOptions' => ['class' => 'input-group mb-3']
        ])
            ->label(false)
            ->passwordInput(['placeholder' => $model->getAttributeLabel('password')]) ?>

        <div class="row">

            <div class="col-12">
                <?= Html::submitButton('Kirish', ['class' => 'btn btn-primary btn-block']) ?>
            </div>
        </div>

        <?php \yii\bootstrap4\ActiveForm::end(); ?>
        <br>
        <p class="mb-1">
            <a href="#">Parol esdan chiqdimi</a>
        </p>

    </div>
    <!-- /.login-card-body -->
</div>
</div>
