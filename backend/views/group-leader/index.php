<?php 

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\select2\Select2;
use yii\helpers\ArrayHelper;
use common\models\Group;
use common\models\Worker;
use common\models\GroupLeader;

  $group = GroupLeader::find()->all();

  $this->title = "Ta'lim"
?>


 

 <section class="content">
      <div class="container-fluid">
        <div class="row">

          <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Guruh rahbarini belgilash</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
             <?php $form = ActiveForm::begin(); ?>
                <div class="card-body">
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
        <div class="form-group">
        <?= $form->field($model, 'worker_id')->widget(Select2::classname(), [
          'data' => ArrayHelper::map(Worker::find()->all(),'id','ismi'),
          'language' => 'de',
          'options' => ['placeholder' => 'Guruh rahbarini tanlang ...'],
          'pluginOptions' => [
            'allowClear' => true
          ],
        ]);
        ?>
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
                <h3 class="card-title">Guruh rahbarlari ro'yxati </h3>
              </div>
              <div class="card-body p-0">
                <table class="table">
                  <thead>
                    <tr>
                      <th>Guruh</th>
                      <th></th>
                      <th></th>
                      <th>Guruh rahbari</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php foreach ($mod as $key) :?>
                    <tr>
                      <td> 
                     <?=$key['group_id']?>
                     </td>
                      <td>
                      </td>
                      <td></td>
                      <td>
                        <?=$key['worker_id']?>
                      </td>
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
                     <?php endforeach; ?>
                  </tbody>
                    
                </table>
              </div>
            </div>
          </div>



        </div>
      </div>
    </section>