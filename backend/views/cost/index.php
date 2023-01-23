<?php
use yii\helpers\Html;
use kartik\date\DatePicker;
use yii\widgets\ActiveForm;
/**
 *@var \common\models\Cost $model
 *@var \common\models\Cost $query
 */
$this->title = "Chiqimlar";
?>
<?php
echo \dominus77\sweetalert2\Alert::widget(['useSessionFlash' => true]);
?>
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Chiqim qo'shish</h3>
                    </div>
                    <?php $form = ActiveForm::begin(); ?>
                        <div class="card-body">
                            <div class="form-group">
                             <?= $form->field($model, 'cost_name')->textInput()?>
                            </div>
                            <div class="form-group">
                                <?= $form->field($model, 'date')->widget(DatePicker::classname(), [
                                    'name' => 'check_issue_date',
                                    'value' => date('yyyy-mm-dd'),
                                    'options' => ['placeholder' => 'Chiqim sanasi'],
                                    'pluginOptions' => [
                                        'format' => 'yyyy-mm-dd',
                                        'todayHighlight' => true
                                    ]
                                ]);
                                ?>
                            </div>
                            <div class="form-group">
                                <?= $form->field($model, 'cost_price')->textInput()?>
                            </div>
                            <div class="form-group">
                                <?= $form->field($model, 'cost_reason')->textInput()?>
                            </div>
                        </div>
                        <div class="card-footer">
                          <?= Html::submitbutton('Saqlash', ['class' => 'btn btn-primary'])?>
                        </div>
                    <?php ActiveForm::end(); ?>
                </div>
            </div>
            <div class="col-md-8">

                <div class="col-12">
                    <div class="card">
                        <div style="background-color: #007bff; color: white" class="card-header">
                            <h3 class="card-title">Chiqimlar ro'yxati</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example2" class="table table-bordered table-hover">
                                <thead>
                                <tr>
                                    <th>Chiqim nomi</th>
                                    <th>Sana</th>
                                    <th>Narxi</th>
                                    <th>Tasnif</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>  <?php foreach ($query as $item):?>
                                <tr>

                                    <td><?=$item['cost_name']?></td>
                                    <td><?=$item['date']?></td>
                                    <td><?=$item['cost_price']?></td>
                                    <td><?=$item['cost_reason']?></td>
                                    <td>
                                        <?= Html::a('<i class="fa fa-trash" aria-hidden="true"></i>', ['delete', 'id' => $item->id], [
                                            'class' => 'btn btn-danger',
                                            'data' => [
                                                'confirm' => 'Haqiqatdan chiqimni o\'chiqmoqchimisiz?',
                                                'method' => 'post',
                                            ],
                                        ]) ?>
                                    </td>

                                </tr> <?php endforeach;?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>