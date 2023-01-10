<?php

use yii\grid\ActionColumn;
use kartik\export\ExportMenu;

/* @var $this yii\web\View */
/* @var $searchModel common\models\StudentSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Talabalar';
$table = [
    ['class' => 'yii\grid\SerialColumn'],
    'ism',
    'familiya',
    'raqami',
];

?>
<?php
echo \dominus77\sweetalert2\Alert::widget(['useSessionFlash' => true]);
?>
<div class="student-index">
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


    <?= \kartik\grid\GridView::widget([
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
