<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\select2\Select2;
use yii\helpers\ArrayHelper;
use kartik\date\DatePicker;
use common\models\Group;
$data = [
        'Naxt' => 'Naxt',
        'O\'tkazma' => 'O\'tkazma',
];
$group = Group::find()->all();
/* @var $this yii\web\View */
/* @var $model common\models\Payments */
/* @var $form ActiveForm */
$this->title = "Formani to'ldirishda e'tiborli bo'ling!";
?>
<div class="update">
    <?php $form = ActiveForm::begin(); ?>
    <div class="form-group">
    <?= $form->field($model, 'payment_date')->widget(DatePicker::classname(), [
      'name' => 'check_issue_date',
      'value' => date('yyyy-mm-dd'),
      'options' => ['placeholder' => 'To\'lov sanasi'],
      'pluginOptions' => [
        'format' => 'yyyy-mm-dd',
        'todayHighlight' => true
      ]
    ]);
    ?>
    </div>
    <div class="form-group">
    <?= $form->field($model, 'month')->widget(Select2::classname(), [
        'data' => ArrayHelper::map(\common\models\Month::find()->all(),'month_name','month_name'),
        'language' => 'de',
        'options' => ['placeholder' => 'Talaba qaysi oy uchun to\'lov qilyapti...'],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ]);
    ?>
    </div>
    <div class="form-group">
        <?= $form->field($model, 'payment_amount')->textInput()?>
    </div>


    <div class="form-group">
        <label for="chkPassport">
            <input type="checkbox" id="chkPassport" />
           Talaba uchun chegirma mavjudmi?
        </label>
        <div id="dvPassport" style="display: none">
            <?= $form->field($model, 'payment_discount')->textInput()?>
        </div>

    </div>


    <div class="form-group">
        <?= $form->field($model, 'payment_type')->widget(Select2::classname(), [
                                'data' => $data,
                                'language' => 'de',
                                'options' => ['placeholder' => 'To\'lov turini tanlang ...'],
                                'pluginOptions' => [
                                    'allowClear' => true
                                ],
                            ]);
        ?>
    </div>
    <div class="form-group">
        <?= Html::submitButton('Saqlash', ['class' => 'btn btn-primary']) ?>
    </div>
    <?php ActiveForm::end(); ?>

</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script>

    $(function () {
        $("#chkPassport").click(function () {
            if ($(this).is(":checked")) {
                $("#dvPassport").show();
                $("#AddPassport").hide();
            } else {
                $("#dvPassport").hide();
                $("#AddPassport").show();
            }
        });
    });
</script>