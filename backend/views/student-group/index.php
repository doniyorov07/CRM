  <?php

  use yii\helpers\Html;
  use yii\widgets\ActiveForm;
  use kartik\switchinput\SwitchInput;
  use kartik\select2\Select2;
  use kartik\date\DatePicker;
  use yii\helpers\ArrayHelper;
  use common\models\Student;
  use common\models\Group;
  $this->title = "Talabani guruhga biriktirish";
  ?>
  <?php
  echo \dominus77\sweetalert2\Alert::widget(['useSessionFlash' => true]);
  ?>
  <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>
  <div class="card-body">
    <div class="row">
      <div class="col-md-6">
        <div class="form-group">
         <?= $form->field($model, 'student_id')->widget(Select2::classname(), [
          'data' => ArrayHelper::map(Student::find()->all(),'id',  function ($data){
                                    return $data->ism . ' ' . $data->familiya;
          }),
          'language' => 'de',
          'options' => ['placeholder' => 'Talabani tanlang ...'],
          'pluginOptions' => [
            'allowClear' => true
          ],
        ]);
        ?>

      </div>
    </div>
    <div class="col-md-6">
      <div class="form-group">
        <?= $form->field($model, 'group_id')->widget(Select2::classname(), [
          'data' => ArrayHelper::map(Group::find()->all(),'id','name'),
          'language' => 'de',
          'options' => ['placeholder' => 'Guruhni tanlang ...'],
          'pluginOptions' => [
            'allowClear' => true
          ],
        ]);
        ?>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-md-6"> <div class="form-group">
     <?= $form->field($model, 'started_at')->widget(DatePicker::classname(), [
      'name' => 'check_issue_date', 
      'value' => date('yyyy-mm-dd'),
      'options' => ['placeholder' => 'Darsga kelgan sanasi'],
      'pluginOptions' => [
        'format' => 'yyyy-mm-dd',
        'todayHighlight' => true
      ]
    ]);
    ?>
  </div>
  </div>
      <div class="col-md-6">
          <div style="margin-top: 31px" class="form-group">
              <?= Html::submitButton('Biriktirish', ['class' => 'btn btn-primary']) ?>
          </div>
      </div>

  </div>


  </div>

  <?php ActiveForm::end(); ?>