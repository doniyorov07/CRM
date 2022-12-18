<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use common\models\Student;

/* @var $this yii\web\View */
/* @var $searchModel common\models\StudentSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Talabalar';

?>
<?= \common\widgets\Alert::widget()?>
<div class="student-index">

<!-- 
    <p>
        <?= Html::a('Talaba Qo\'shish', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
 -->
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            'ism',
            'familiya',
            //'qabul_sanasi',
            'raqami',
            //'dars_boshlanishi',
            //'dars_kuni',
            //'jinsi',
            //'yosh',
            //'guruxi',
            //'oqitish_tili',
            //'yonalishi',
         [
            'attribute'=>'status',
            'format' => 'raw',
            'value' => function($model){
             if ($model->status === 1)
            {
                return '<i class="badge badge-success">Faol</i>';
            }else
            {
                return '<i class="badge badge-danger">Faol emas</i>';
            };
                },
              
            ],
            [
                'class' => ActionColumn::className(),
               
            ],
        ],
    ]); ?>


</div>
