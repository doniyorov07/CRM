<?php

use yii\helpers\Html;


/** @var common\models\GroupLeader[] $models */
?>

<div class="col-md-6">
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Guruh rahbarlari ro'yxati </h3>
        </div>
        <div class="card-body p-0">
            <table class="table">
                <thead>
                <tr>
                    <th>Guruh</th>
                    <th></th>
                    <th></th>
                    <th>Guruh rahbari</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($models as $model): ?>
                    <tr>
                        <td>
                            <?= $model->group ? $model->group->name : 'Guruh o\'chirilgan' ?>
                        </td>
                        <td>
                        </td>
                        <td></td>
                        <td>
                            <?= $model->worker ? $model->worker->ismi : 'Xodim yo\'q' ?>
                            <?= $model->worker ? $model->worker->familiya : 'Xodim yo\'q' ?>
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>
                            <?= Html::a('<i class="fa fa-trash" aria-hidden="true"></i>', ['delete', 'id' => $model->id], [
                                'class' => 'btn btn-danger',
                                'data' => [
                                    'confirm' => 'Haqiqatdan ham ma\'lumotni o\'chirmoqchimisiz!',
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