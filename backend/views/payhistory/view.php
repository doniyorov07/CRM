<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\select2\Select2;
use yii\helpers\ArrayHelper;
use common\models\Month;
use common\models\Group;
/** @var common\models\Position[] $model */
/** @var common\models\Position[] $group_id */
/** @var common\models\Position[] $month */
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
                                    'data' => ArrayHelper::map(Month::find()->all(),'id','month_name'),
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
<section class="content">
    <div id="pay" class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-end">
                            <button onclick="ExportToExcel('xlsx')"><i class="fas fa-file-excel"></i></button>
                        </div>
                        <table id="example" class="table table-bordered table-hover">
                            <thead>
                            <tr>
                                <th>Gurux nomi &nbsp;<span style="color: #0a71f7">  <?= $group_id->name?></span></th>
                                <th>To'lov vaqti</th>
                                <th>Kurs narxi</th>
                                <th>To'langan </th>
                                <th>Qarz </th>
                                <th>Chegirma </th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($model as $item):?>
                                <tr>
                                    <td>
                                        <?=$item->studentsPay->familiya . ' '. $item->studentsPay->ism ?>
                                    </td>

                                    <td>
                                        <?=$item->payment_date ?>
                                    </td>
                                    <td>
                                        <?=$item->course_amount ?>
                                    </td>
                                    <td>
                                          <span class="badge badge-success">
                                        <?=$item->payment_amount ?>
                                               </span>
                                    </td>
                                    <td>
                                        <span class="badge badge-danger">
                                        <?php
                                        if ($item->course_amount - $item->payment_amount == $item->payment_discount){
                                          echo '0' ;
                                        }else{
                                          echo $item->course_amount - $item->payment_amount - $item->payment_discount;
                                        }
                                        $item->course_amount - $item->payment_amount ?>
                                            </span>
                                    </td>
                                    <td>
                                           <span class="badge badge-warning">
                                        <?=$item->payment_discount ? $item->payment_discount : "Yo'q" ?>
                                           </span>
                                    </td>
                                    <td>
                                        <?= Html::a('<i class="fas fa-trash"></i>', ['delete', 'id' => $item->id], [
                                            'class' => 'btn btn-outline-info',
                                            'data' => [
                                                'confirm' => 'Haqiqatdan ham to\'lovni yo\'q qilmoqchimisz, ushbu harakatni orqaga qaytarib bo\'lmaydi. Davom etasizmi?',
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

<script type="text/javascript" src="https://unpkg.com/xlsx@0.15.1/dist/xlsx.full.min.js"></script>
<script>
    function ExportToExcel(type, fn, dl) {
        var elt = document.getElementById('example');
        var wb = XLSX.utils.table_to_book(elt, { sheet: "sheet1" });
        return dl ?
            XLSX.write(wb, { bookType: type, bookSST: true, type: 'base64' }):
            XLSX.writeFile(wb, fn || ('payment.' + (type || 'xlsx')));
    }
</script>
