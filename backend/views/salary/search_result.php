<?php

use common\models\GroupLeader;
use common\models\Payments;
use common\models\PaymentSearch;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\select2\Select2;
use yii\helpers\ArrayHelper;

/** @var common\models\Position[] $model */
/** @var common\models\Salary[] $models */
/** @var $model Payments */
/** @var $worker Payments */
/** @var $searchModel PaymentSearch */
/** @var $workerGroups GroupLeader */

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
                                'data' => ArrayHelper::map(Payments::find()->all(),'month','month'),
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
<section class="content">
    <div id="pay" class="container-fluid">
        <div class="row">
            <div class="col-7">
                <div class="card">
                    <div class="card-body">
                        <h4> <?= $worker->ismi .' '. $worker->familiya?></h4>
                        <div class="d-flex justify-content-end">
                            <button onclick="ExportToExcel('xlsx')"><i class="fas fa-file-excel"></i></button>
                        </div>
                        <table id="example" class="table table-bordered table-hover">
                            <thead>
                            <tr>
                            <th>Talaba F.I.SH</th>
                            <th>Guruh nomi</th>
                            <th>To'lov vaqti </th>
                            <th>Jami <?php echo '&nbsp &nbsp' . $sum?></th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($model as $item):?>
                                <tr>
                                    <td>
                                        <?= $item->studentsPay ? $item->studentsPay->ism.' '.$item->studentsPay->familiya : ''?>
                                    </td>
                                    <td>
                                        <?= $item->guruh ? $item->guruh->name : ''?>
                                    </td>

                                    <td>
                                        <?= $item->payment_date?>
                                    </td>
                                    <td>
                                        <?= $item->payment_amount?>
                                    </td>
                                </tr>
                            <?php endforeach;?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class="col-5">
                <div class="card">
                    <div class="card-body">
                        <?php $form = ActiveForm::begin(); ?>
                        <?=$form->field($models,'pay_total')->hiddenInput(['value' => $sum])->label(false)?>
                        <?=$form->field($models,'month')->hiddenInput(['value' => isset($month) ? $month->month : 0])->label(false)?>
                        <?= $form->field($models, 'pay_total')->textInput(['id' => 'pay_total']) ?>
                        <?= $form->field($models, 'pay_percentage')->textInput(['id' => 'pay_percentage']) ?>
                        <?= $form->field($models, 'pay_basic')->textInput(['id' => 'pay_basic', 'readonly' => true]) ?>
                        <?= $form->field($models, 'pay_bonus')->textInput() ?>
                        <?= $form->field($models, 'pay_separate')->textInput() ?>
                        <?php ActiveForm::end(); ?>
                    </div>
                    <div style="padding-bottom: 10px" class="align-self-end">
                        <?= Html::submitButton('Hisoblash', ['class' => 'btn btn-primary']) ?>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<script type="text/javascript" src="https://unpkg.com/xlsx@0.15.1/dist/xlsx.full.min.js"></script>
<script>
    function ExportToExcel(type, fn, dl) {
        var elt = document.getElementById('example');
        var wb = XLSX.utils.table_to_book(elt, { sheet: "sheet1" });
        return dl ?
            XLSX.write(wb, { bookType: type, bookSST: true, type: 'base64' }):
            XLSX.writeFile(wb, fn || ('table.' + (type || 'xlsx')));
    }
</script>
<?php

$js = <<<JS
$('#pay_total').on('change', function() {
   var total_amount = $('#pay_total').val();
    var pay_percentage = $('#pay_percentage').val();
    let natija = total_amount/100 * pay_percentage
    $('#pay_basic').val(natija);
});
$('#pay_percentage').on('change', function() {
   var total_amount = $('#pay_total').val();
    var pay_percentage = $('#pay_percentage').val();
    let natija = total_amount/100 * pay_percentage
    $('#pay_basic').val(natija);
});
JS;

$this->registerJs($js);
?>

