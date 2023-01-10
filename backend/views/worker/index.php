<?php

use yii\helpers\Html;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use kartik\export\ExportMenu;
/* @var $this yii\web\View */
/* @var $searchModel common\models\WorkerSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Xodimlar';
$this->params['breadcrumbs'][] = $this->title;
$table = [
    ['class' => 'yii\grid\SerialColumn'],
    'ismi',
    'familiya',
    'lavozim',
    'raqam',
];
?>
<?php
echo \dominus77\sweetalert2\Alert::widget(['useSessionFlash' => true]);
?>
<div>
    <?php
    echo ExportMenu::widget([
        'dataProvider' => $dataProvider,
        'columns' => $table,
        'exportConfig' => [
            ExportMenu::FORMAT_HTML => false,
            ExportMenu::FORMAT_CSV => false,
            ExportMenu::FORMAT_EXCEL => false,
        ],
        'showConfirmAlert' => false,
        'clearBuffers' => true,
    ]);
    ?>
</div>
<div class="worker-index">
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
            'raqam',
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
