<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\select2\Select2;
use yii\helpers\ArrayHelper;
use kartik\date\DatePicker;
use common\models\Group;
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
        'options' => ['placeholder' => 'Oyni tanlang ...'],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ]);
    ?>
    </div>
    <div class="form-group">
        <?= $form->field($model, 'payment_amount')->textInput()?>
    </div>
<!--    <div class="form-group">-->

<!--    </div>-->
    <div class="form-group">
        <?= Html::submitButton('Saqlash', ['class' => 'btn btn-primary']) ?>
    </div>
    <?php ActiveForm::end(); ?>

</div><!-- update -->