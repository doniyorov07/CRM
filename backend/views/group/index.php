<?php 

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use common\widgets\Alert;
;
$this->title = "Guruhlar"
?>

<?= Alert::widget() ?>
 

 <section class="content">
      <div class="container-fluid">
        <div class="row">

          <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Guruh qo'shish</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
             <?php $form = ActiveForm::begin(); ?>
                <div class="card-body">
                  <div class="form-group">
                    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>
                  </div>
                  <div class="form-group">
                    <?= $form->field($model, 'course_amount')->textInput(['maxlength' => true]) ?>
                  </div>
                </div>
                <div class="card-footer">
              <?= Html::submitButton('Saqlash', ['class' => 'btn btn-success']) ?>
                </div>
             <?php ActiveForm::end(); ?>
            </div>
         
          </div>

          <!-- /.col -->
          <div class="col-md-6">
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Guruhlar</h3>
              </div>
              <div class="card-body p-0">
                <table class="table">
                  <thead>
                    <tr>
                      <th>Guruh</th>
                      <th></th>
                      <th></th>
                      <th>Kurs narxi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach($group as $key) :?>
                    <tr>                    
                      <td><?=$key['name'] ?></td>
                      <td></td>
                      <td></td>
                      <td><?=$key['course_amount'] ?></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td>
                          <?= Html::a('O\'chirish', ['delete', 'id' => $key->id], [
      'class' => 'btn btn-danger',
      'data' => [
        'confirm' => 'Haqiqatdan ham ma\'lumotni o\'chirmoqchimisiz!',
        'method' => 'post',
      ],
    ]) ?>
                      </td>
                    </tr>
                    <?php endforeach;?>                   
                  </tbody>
                </table>
              </div>
            </div>
          </div>
             
                    
      </div>
    </section>