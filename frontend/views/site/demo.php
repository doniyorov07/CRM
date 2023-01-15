<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
/**
 *@var $form
 * @var $model \yii\web\View;
 */
?>
<section id="contact" class="contact">
    <div class="container">
        <div style="margin-top: 55px" class="row justify-content-center">
            <div class="col-lg-8">
                <?php $form = \yii\widgets\ActiveForm::begin()?>
                <form style="margin-top: 25px" action="#" method="post" role="form" class="php-email-form">
                <h4 style="padding-bottom: 10px" class="text-center">Demodan foydalanish uchun so’rov qoldiring</h4>
                    <div class="row justify-content-center">
                        <div class="col-md-8 form-group">
                            <?= $form->field($model, 'edu_name')->textInput(['maxlength' => true]) ?>
                        </div>
                        <div class="col-md-8 form-group pt-5 mt-md-0">
                            <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>
                        </div>
                        <div class="col-md-8 form-group pt-5 mt-md-0">
                            <?= $form->field($model, 'number')->textInput(['maxlength' => true]) ?>
                        </div>
                    </div>
                    <div  class="pt-3 text-center">
                        <?= Html::submitButton('Yuborish', ['class' => 'btn btn-warning']) ?>
                    </div>
                </form>
                <?php \yii\widgets\ActiveForm::end()?>
            </div>
        </div>

    </div>
</section><!-- End Contact Section -->