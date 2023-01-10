<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use common\widgets\Alert;
/** @var \common\models\Position $model [] */
/** @var \common\models\Position $position [] */
$this->title = "Lavozim";
?>
<?php
echo \dominus77\sweetalert2\Alert::widget(['useSessionFlash' => true]);
?>
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <!-- general form elements -->
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Lavozim qo'shish</h3>
                    </div>
                    <?php $form = ActiveForm::begin(); ?>
                    <div class="card-body">
                        <div class="form-group">
                            <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>
                        </div>
                    </div>
                    <div class="card-footer">
                        <?= Html::submitButton('Saqlash', ['class' => 'btn btn-primary']) ?>
                    </div>
                    <?php ActiveForm::end(); ?>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Guruhlar</h3>
                    </div>
                    <div class="card-body p-0">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>Lavozim</th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($position as $pos) : ?>
                                <tr>
                                    <td><?= $pos['name'] ?></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td>
                                        <?= Html::a('<i class="fa fa-trash" aria-hidden="true"></i>', ['delete', 'id' => $pos->id], [
                                            'class' => 'btn btn-danger',
                                            'data' => [
                                                'confirm' => 'Haqiqatdan lavozimni o\'chirmoqchimisiz!',
                                                'method' => 'post',
                                            ],
                                        ]) ?>
                                </tr>
                            <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
</section>

