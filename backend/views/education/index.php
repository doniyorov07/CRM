<?php

use yii\widgets\Pjax;
use yii\helpers\Html;
/** @var yii\web\View $this */
/** @var yii\web\View $model */
/** @var yii\data\ActiveDataProvider $dataProvider */
$this->title = "O'quv markaz sozlamalari";
?>
<?php
echo \dominus77\sweetalert2\Alert::widget(['useSessionFlash' => true]);
?>
<div class="education-index">
    <div style="padding-bottom:15px; margin-left: 8px ">
        <?= Html::a('<i class="fas fa-edit"></i>  Tahrirlash', ['update', 'id' => 1], ['class' => 'btn btn-primary']) ?>
    </div>

    <?php Pjax::begin(); ?>

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-body">
                            <table class="table">
                                <tbody>
                                <?php foreach ($model as $item):?>
                                <tr>
                                  <td>Markaz nomi</td>
                                  <td><?=$item['edu_name']?></td>
                                </tr>
                                <tr>
                                    <td>Markazi manzili</td>
                                    <td><?=$item['edu_location']?></td>
                                </tr>
                                    <tr>
                                        <td>Markazi raqami</td>
                                        <td><?=$item['edu_number']?></td>
                                    </tr>
                                    <tr>
                                        <td>Markazi emaili</td>
                                        <td><?=$item['edu_email']?></td>
                                    </tr>
                                <?php endforeach;?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <?php foreach ($model as $item):?>
                        <div class="card-body text-center">
                            <img style="width: 195px" src="../logo/<?=$item->image?>" alt="..." class="img-thumbnail">
                        </div>
                        <?php endforeach;?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php Pjax::end(); ?>
</div>
