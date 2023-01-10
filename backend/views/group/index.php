<?php

use common\models\Group;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use common\widgets\Alert;

/** @var Group $model [] */

$this->title = "Guruhlar";
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
                            <?= $form->field($model, 'lesson_time')->textInput(['placeholder' => "12:00-13:00 ko'rinishida kiriting"]) ?>
                        </div>
                        <div class="form-group">
                            <?= $form->field($model, 'course_amount')->textInput(['maxlength' => true]) ?>
                        </div>
                        <div class="form-group">
                            <?= $form->field($model, 'lesson_days')->checkboxList(
                                [
                                    'Du' => 'Du',
                                    'Se' => 'Se',
                                    'Cho' => 'Cho',
                                    'Pa' => 'Pa',
                                    'Ju' => 'Ju',
                                    'Sha' => 'Sha',
                                    'Ya' => 'Ya',
                                ]

                            ) ?>
                        </div>
                    </div>
                    <div class="card-footer">
                        <?= Html::submitButton('Saqlash', ['class' => 'btn btn-primary']) ?>
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
                                <th>Dars kuni</th>
                                <th></th>
                                <th>Dars vaqti</th>
                                <th></th>
                                <th>Kurs narxi</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($group as $key) : ?>
                                <tr>
                                    <td><?= $key['name'] ?></td>
                                    <td></td>
                                    <td><?= $key['lesson_days'] ?></td>
                                    <td></td>
                                    <td><?= $key['lesson_time'] ?></td>
                                    <td></td>
                                    <td><?= $key['course_amount'] ?></td>
                                    <td>
                                        <?= Html::a('<i class="fa fa-trash" aria-hidden="true"></i>', ['delete', 'id' => $key->id], [
                                            'class' => 'btn btn-danger',
                                            'data' => [
                                                'confirm' => '!!! DIQQAT  guruhni o\'chirishdan oldin guruh rahbarini o\'chiring!',
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
</section>
