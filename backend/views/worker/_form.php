<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm; 
use kartik\switchinput\SwitchInput;
use kartik\select2\Select2;
use kartik\date\DatePicker;
use kartik\file\FileInput;
use yii\helpers\ArrayHelper;
use common\models\Position;
/* @var $this yii\web\View */
/* @var $model common\models\Worker */
/* @var $form yii\widgets\ActiveForm */
?>
<?= \common\widgets\Alert::widget()?>
<div class="worker-form">

    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Xodim ma'lumotlari</h3>
            </div>
            <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>
            <div class="card-body">
              <div class="form-group">
                 <?= $form->field($model, 'ismi')->textInput(['maxlength' => true]) ?>
             </div>

             <div class="form-group">
               <?= $form->field($model, 'familiya')->textInput(['maxlength' => true]) ?>
           </div>

           <div class="form-group">
              <?= $form->field($model, 'raqam')->textInput(['placeholder' => '9xxxxxxxx ko\'rinishida kiriting']) ?>
          </div>

          <div class="form-group">
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
    </div>




</div>
</div>
<!-- /.card -->

</div>
<!--/.col (left) -->
<!-- right column -->
<div class="col-md-6">

   <div class="card card-primary">
      <div class="card-header">
        <h3 class="card-title">Qo'shimcha ma'lumotlar</h3>
    </div>
    <div class="card-body">
       <div class="form-group">
           <?= $form->field($model, 'tugilgan_yil')->widget(DatePicker::classname(), [
            'name' => 'check_issue_date', 
            'value' => date('yyyy-mm-dd'),
            'options' => ['placeholder' => 'Tug\'ilgan yili...'],
            'pluginOptions' => [
              'format' => 'yyyy-mm-dd',
              'todayHighlight' => true
          ]
      ]);
      ?>
  </div>
  <div class="form-group">
      <?= $form->field($model, 'lavozim')->widget(Select2::classname(), [
          'data' => ArrayHelper::map(Position::find()->all(), 'name', 'name'),
          'language' => 'uz',
          'options' => ['placeholder' => 'Lavozimni tanlang ...'],
          'pluginOptions' => [
              'allowClear' => true
          ],
      ]);
      ?>
</div>

    <div class="form-group">
       <?= $form->field($model, 'staj')->textInput(['maxlength' => true]) ?>
   </div>
   <div class="form-group">

    <?= $form->field($model, 'qabul_sanasi')->widget(DatePicker::classname(), [
        'name' => 'check_issue_date', 
        'value' => date('yyyy-mm-dd'),
        'options' => ['placeholder' => 'Ishga kirgan sanasi'],
        'pluginOptions' => [
            'format' => 'yyyy-mm-dd',
            'todayHighlight' => true
        ]
    ]);
    ?>
</div>
<div class="form-group">
    <?= $form->field($model, 'shartnoma_muddati')->widget(DatePicker::classname(), [
        'name' => 'check_issue_date', 
        'value' => date('yyyy-mm-dd'),
        'options' => ['placeholder' => 'Shartnoma muddati oxiri!'],
        'pluginOptions' => [
            'format' => 'yyyy-mm-dd',
            'todayHighlight' => true
        ]
    ]);
    ?>
</div>
<div class="form-group">
  <?= $form->field($model, 'oqitish_tili')->checkboxList(
    [
        'O\'zbekcha' => 'O\'zbekcha',
        'Ruscha' => 'Ruscha',

    ]
) ?>
</div>
<div class="form-group">
    <?= $form->field($model, 'status')->widget(SwitchInput::classname(), [
        'pluginOptions' => [
                'size' => 'large',
                'onColor' => 'success',
                'offColor' => 'danger',
                'onText' => "Faol",
                'offText' => "Faolmas",
            ]
    ])?>
</div>
<br>
<br>
<div class="form-group">
    <?= Html::submitButton('Saqlash', ['class' => 'btn btn-primary']) ?>
</div>
</div>
</div>
</div>
</div>
</div>
</section>



<?php ActiveForm::end(); ?>

</div>
