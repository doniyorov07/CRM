<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\WorkerSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Xodimlar';
$this->params['breadcrumbs'][] = $this->title;
?>
<?= \common\widgets\Alert::widget()?>
<div class="worker-index">
  <!--   <p>
        <?= Html::a('Xodim Qo\'shish', ['create'], ['class' => 'btn btn-success']) ?>
    </p> -->

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            'ismi',
            'familiya',
            //'shartnoma_muddati',
            'lavozim',
            //'qabul_sanasi',
            //'tugilgan_yil',
            //'raqam',
            //'staj',
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
            //'oqitish_tili',
            //'image',
            [
                'class' => ActionColumn::className(),
                
            ],
        ],
    ]); ?>


</div>
