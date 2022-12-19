<?php
use yii\helpers\Html;


/** @var common\models\GroupLeader $model */
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
                    <tr>
                      <td>
                         <?php foreach($model->workerLeaders as $worker):?>
                              <?=  $worker->name; ?>
                          <?php endforeach; ?>
                     </td>
                      <td>
                      </td>
                      <td></td>
                      <td>

                      </td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td>
                          <?= Html::a('O\'chirish', ['delete', 'id' => $model->id], [
    'class' => 'btn btn-danger',
    'data' => [
        'confirm' => 'Haqiqatdan ham ma\'lumotni o\'chirmoqchimisiz!',
        'method' => 'post',
    ],
]) ?>
</td>
</tr>

</tbody>

</table>
</div>
</div>
</div>