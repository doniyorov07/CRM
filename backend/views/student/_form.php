<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\switchinput\SwitchInput;
use kartik\select2\Select2;
use kartik\date\DatePicker;
use common\models\Group;
use yii\helpers\ArrayHelper;
?>

<div class="student-form">
 
 <section class="content">
  <div class="container-fluid">
    <div class="row">
      <!-- left column -->
      <div class="col-md-6">
        <!-- general form elements -->
        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">Talaba ma'lumotlari</h3>
          </div>
          <?php $form = ActiveForm::begin(); ?>
          <div class="card-body">
            <div class="form-group">
             <?= $form->field($model, 'ism')->textInput(['maxlength' => true]) ?>
           </div>

           <div class="form-group">
             <?= $form->field($model, 'familiya')->textInput(['maxlength' => true]) ?>
           </div>
           
           <div class="form-group">
            <?= $form->field($model, 'raqami')->textInput(['placeholder' => '9xxxxxxxx ko\'rinishida kiriting']) ?>
          </div>

          <div class="form-group">
            <?= $form->field($model, 'yosh')->textInput() ?>
          </div>

          <div class="form-group">
           
            <?=  $form->field($model, 'jinsi')->widget(Select2::classname(), [
              
              'hideSearch' => true,
              'data' => [
                'Erkak' => 'Erkak', 
                'Ayol' => 'Ayol'],
              'options' => ['placeholder' => 'Jinsni tanlang'],
              'pluginOptions' => [
                'allowClear' => true
              ]
            ]); 
            ?>
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
     <?= $form->field($model, 'yonalishi')->textInput(['placeholder' => 'Matematika/Fizika ko\'rinishida kiriting']) ?>
                </div>

<div class="form-group">
 
  <?= $form->field($model, 'qabul_sanasi')->widget(DatePicker::classname(), [
    'name' => 'check_issue_date', 
    'value' => date('yyyy-mm-dd'),
    'options' => ['placeholder' => 'Markazga kelgan sanasi'],
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
  <?= Html::submitButton('Saqlash', ['class' => 'btn btn-success']) ?>
</div>
</div>
</div>
</div>
</div>
</div>
</section>



<?php ActiveForm::end(); ?>

</div>
