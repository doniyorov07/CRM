<?php
use yii\widgets\ActiveForm;
use yii\helpers\Html;
use kartik\select2\Select2;
Use yii\helpers\ArrayHelper;
use common\models\Month;
use common\models\Search;
/** @var $model */
$this->title = 'Ish haqi';
?>
<section class="content">
    <div class="container-fluid">
        <!-- SELECT2 EXAMPLE -->
        <div class="card card-default">
            <div class="card-header">
                <h3 class="card-title"></h3>
            </div>
            <div class="card-body">
                <?php $form = ActiveForm::begin(); ?>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                                <?= $form->field($model, 'month')->widget(Select2::classname(), [
                                    'data' => ArrayHelper::map(Month::find()->all(), 'month_name', 'month_name'),
                                    'language' => 'de',
                                    'options' => ['placeholder' => 'Oyni tanlang ...'],
                                    'pluginOptions' => [
                                        'allowClear' => true
                                    ],
                                ]);
                                ?>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                        <?= Html::a('<i class="fas fa-search"></i> Izlash', ['view', 'id' => $model->id], [
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

<div class="col-8">
<table class="table table-striped">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">First</th>
        <th scope="col">Last</th>
        <th scope="col">Handle</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <th scope="row">1</th>
        <td>Mark</td>
        <td>Otto</td>
        <td>@mdo</td>
    </tr>
    <tr>
        <th scope="row">2</th>
        <td>Jacob</td>
        <td>Thornton</td>
        <td>@fat</td>
    </tr>
    <tr>
        <th scope="row">3</th>
        <td>Larry</td>
        <td>the Bird</td>
        <td>@twitter</td>
    </tr>
    </tbody>
</table>
</div>
