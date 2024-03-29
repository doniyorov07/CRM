<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\select2\Select2;
use yii\helpers\ArrayHelper;
/** @var common\models\Position[] $model */
/** @var $model \common\models\Payments */
/** @var $searchModel \common\models\PaymentSearch */
$this->title = "Ish haqini hisoblash";
?>
<section class="content">
    <div class="container-fluid">
        <div class="card card-default">
            <div class="card-header">
                <h3 class="card-title"></h3>
            </div>
            <div class="card-body">
                <?php $form = ActiveForm::begin(); ?>
                <div class="row">
                    <div class="col-md-5">
                        <div class="form-group">
                            <?= $form->field($searchModel, 'month')->widget(Select2::classname(), [
                                'data' => ArrayHelper::map(\common\models\Payments::find()->all(),'month','month'),
                                'language' => 'de',
                                'options' => ['placeholder' => 'Oyni tanlang ...'],
                                'pluginOptions' => [
                                    'allowClear' => true
                                ],
                            ]);
                            ?>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="form-group">
                            <?= $form->field($searchModel, 'worker_id')->widget(Select2::classname(), [
                                'data' => ArrayHelper::map(\common\models\Worker::find()->all(),'id',function ($data){
                                    return $data->ismi.' '.$data->familiya;
                                }),
                                'language' => 'de',
                                'options' => ['placeholder' => 'Xodimni tanlang ...'],
                                'pluginOptions' => [
                                    'allowClear' => true
                                ],
                            ]);
                            ?>
                        </div>
                    </div>
                    <div style="margin-top: 32px" class="col-md-2">
                        <div class="form-group">
                            <?= Html::submitButton('<i class="fas fa-search"></i> Izlash', [
                                'class' => 'btn btn-primary',
                            ]) ?>
                        </div>
                    </div>
                </div>
                <?php ActiveForm::end(); ?>
            </div>
        </div>
    </div>
</section>





