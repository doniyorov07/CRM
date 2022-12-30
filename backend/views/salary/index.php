<?php
use yii\helpers\Html;
/** @var common\models\Position[] $model */
$this->title = "Xodimlar ro'yxati";
?>
<div class="table-responsive">
<table class="table table-bordered">
    <thead class="thead-light">
    <tr>
        <th scope="col">Xodim FISH</th>
        <th scope="col">Lavozim</th>
        <th scope="col">Telefon</th>
        <th scope="col">To'lov holati</th>
        <th scope="col">Action</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($model as $models):?>
    <tr>
        <td><?=$models->ismi . ' ' . $models->familiya ?></td>
        <td><?= $models->lavozim?></td>
        <td><?= $models->raqam?></td>
        <td></td>
        <td><?= Html::a('Ish-haqi hisoblash', ['view', 'id' => $models->id], [
                'class' => 'btn btn-primary',
            ]) ?></td>
    </tr>
    <?php endforeach;?>
    </tbody>
</table>
</div>