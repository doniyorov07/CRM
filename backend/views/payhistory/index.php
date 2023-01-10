<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\select2\Select2;
use yii\helpers\ArrayHelper;
use common\models\Group;
/** @var common\models\Position[] $model */
/** @var $searchModel \common\models\PayHistorySearch */
$this->title = "";
?>
<?php
echo \dominus77\sweetalert2\Alert::widget(['useSessionFlash' => true]);
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
                            <?= $form->field($searchModel, 'group_id')->widget(Select2::classname(), [
                                'data' => ArrayHelper::map(Group::find()->all(),'id', 'name'),
                                'language' => 'de',
                                'options' => ['placeholder' => 'Guruhni tanlang ...'],
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






