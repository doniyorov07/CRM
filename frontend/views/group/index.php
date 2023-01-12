<?php

use common\models\Group;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\bootstrap4\Modal;
/** @var yii\web\View $this */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Groups';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="group-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Group', ['create'], ['class' => 'btn btn-success', 'id' => 'create']) ?>
    </p>


    <?php \yii\widgets\Pjax::begin(['id' => 'pjax'])?>



    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'name',
            'created_at',
            'updated_at',
            'created_by',
            //'status',
            //'updated_by',
            //'course_amount',
            //'lesson_days',
            //'lesson_time',
            [
                'class' => ActionColumn::className(),
            ],
        ],
    ]); ?>
    <?php \yii\widgets\Pjax::end()?>
</div>
<?php
Modal::begin([
    'id' => 'myModal',
    'size' => 'modal-lg',
//        'toggleButton' => ['label' => 'click me'],
]);
echo ' <div id="modal_content" class="row">salom</div>';
Modal::end();
?>
<?php
$js = <<<JS
$("#create").click(function(e){
    e.preventDefault();
    var url = $(this).attr('href');
    $('#myModal').modal('show');
    send();
});
function send(_url, formData = null){
    $.ajax({
    url: _url,
    type: "POST", 
    data: formData,
    dataType: "json",
    success: function (data){
        $('#myModal').modal('show').find('#modal_content').html(data);
    }
    });
}

JS;
$this->registerJs($js);
?>

