<?php 

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\select2\Select2;
use yii\helpers\ArrayHelper;
use common\models\Group;
use common\models\Worker;
use common\models\GroupLeader;
use common\widgets\Alert;
  $group = GroupLeader::find()->all();

  $this->title = "Ta'lim"
?>
<?= Alert::widget(); ?>

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



        <?php  require_once('view.php')?>




        </div>
      </div>
    </section>