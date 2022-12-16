<?php

use yii\helpers\Html;
use common\models\GroupLeader;
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
                  <?php foreach ($mod as $key) :?>
                    <tr>
                      <td> 
                     
                     </td>
                      <td>
                      <?=$key['id']?>
                      </td>
                      <td></td>
                      <td>
                       
                      </td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td>
                          <?= Html::a('O\'chirish', ['delete', 'id' => $key->id], [
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