<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use common\models\Cabinet;
use yii\bootstrap4\Modal;
$cabinet = Cabinet::find()->all();
$this->title = "Kabinetlar"
?>
 <section class="content">
      <div class="container-fluid">
        <div class="row">

          <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Kabinet qo'shish</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
             <?php $form = ActiveForm::begin(); ?>
                <div class="card-body">
                  <div class="form-group">
                    <?= $form->field($model, 'cabinet_raqami')->textInput(['maxlength' => true]) ?>
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
                <h3 class="card-title">Kabinetlar</h3>
              </div>
              <div class="card-body p-0">
                <table class="table">
                  <thead>
                    <tr>
                      <th>Kabinet</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach($cabinet as $key) :?>
                    <tr>
                      <td><?=$key['cabinet_raqami'] ?></td>
                      <td></td>
                      <td></td>
                      <td></td>
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
      </div>
    </section>
<?php
    Modal::begin([
'header' => '<h2>Hello world</h2>',
'toggleButton' => ['label' => 'click me'],
]);

echo 'Say hello...';

Modal::end();