<?php

use common\models\Salary;
use yii\helpers\Html;
use yii\web\View;
use yii\widgets\ActiveForm;

/**
 * @var Salary $models
 * @var View $this
 */
?>

<div class="col-5">
    <div class="card">
        <div class="card-body">
            <?php $form = ActiveForm::begin(); ?>
            <?= $form->field($models, 'pay_total')->textInput(['id' => 'pay_total']) ?>
            <?= $form->field($models, 'pay_percentage')->textInput(['id' => 'pay_percentage']) ?>
            <?= $form->field($models, 'pay_basic')->textInput(['id' => 'pay_basic', 'readonly' => true]) ?>
            <?= $form->field($models, 'pay_bonus')->textInput() ?>
            <?= $form->field($models, 'pay_separate')->textInput() ?>
            <?php ActiveForm::end(); ?>
        </div>
        <div style="padding-bottom: 10px" class="align-self-end">
            <?= Html::submitButton('Saqlash', ['class' => 'btn btn-primary']) ?>
        </div>
    </div>
</div>
<?php

$js = <<<JS
$('#pay_total').on('change', function() {
   var total_amount = $('#pay_total').val();
    var pay_percentage = $('#pay_percentage').val();
    let natija = total_amount/100 * pay_percentage
    $('#pay_basic').val(natija);
});
$('#pay_percentage').on('change', function() {
   var total_amount = $('#pay_total').val();
    var pay_percentage = $('#pay_percentage').val();
    let natija = total_amount/100 * pay_percentage
    $('#pay_basic').val(natija);
});
JS;

$this->registerJs($js);
?>
