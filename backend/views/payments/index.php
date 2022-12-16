<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use kartik\select2\Select2;
use yii\helpers\ArrayHelper;
use common\models\Group;
use common\models\Payments;

/* @var $this yii\web\View */
/* @var $searchModel common\models\StudentSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Talabalar';

?>
<div class="student-index">

<!--
    <p>
        <?= Html::a('Talaba Qo\'shish', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
 -->
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
<!---->
<!--    --><?php //= GridView::widget([
//        'dataProvider' => $dataProvider,
//        'filterModel' => $searchModel,
//        'columns' => [
//            ['class' => 'yii\grid\SerialColumn'],
//
//            'id',
//            'name',
//            'group',
//            'date_of_lesson',
//            'discount',
//            'debt',
//            'month',
//
//            [
//                'class' => ActionColumn::className(),
//
//            ],
//        ],
//    ]); ?>

    <section class="content">
        <div class="container-fluid">
            <div class="row">

                <div class="col-md-6">
                    <!-- general form elements -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Talaba guruhini tanlang</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <?php $form = ActiveForm::begin(); ?>
                        <div class="card-body">
                            <div class="form-group">
                                <?= $form->field($model, 'group')->widget(Select2::classname(), [
                                    'data' => ArrayHelper::map(Group::find()->all(),'id','name'),
                                    'language' => 'de',
                                    'options' => ['placeholder' => 'Guruhni tanlang ...'],
                                    'pluginOptions' => [
                                        'allowClear' => true
                                    ],
                                ]);
                                ?>
                            </div>
                        </div>
                        <div class="card-footer">
                            <?= Html::submitButton('Izlash', ['class' => 'btn btn-success']) ?>
                        </div>
                        <?php ActiveForm::end(); ?>
                    </div>

                </div>


            </div>
        </div>
    </section>




</div>
