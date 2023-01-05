<?php
use yii\helpers\Html;
/** @var \common\models\Education $education title */
/** @var \common\models\Education $model title */
$this->title = "Tizimni sozlash";
?>
<section style="padding: 20px" class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Umumiy sozlamalar</h3>
                            <div class="card-tools">
                                <ul class="pagination pagination-sm float-right">
                                    <li class="page-item">
                                        <?php foreach ($model as $edu):?>
                                        <?= Html::a('<i class="fas fa-edit"></i>', ['update', 'id' => $edu->id], [
                                            'class' => 'btn btn-primary',
                                        ]) ?>
                                        <?php endforeach; ?>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-body p-0">
                            <table class="table">
                                <tbody>
                                <?php foreach ($model as $edu):?>
                                <tr>
                                    <td>O'quv markazi nomi</td>
                                    <td><?=$edu['edu_name']?></td>
                                </tr>
                                <tr>
                                    <td>Manzil</td>
                                    <td><?=$edu['edu_location']?></td>
                                </tr>
                                <tr>
                                    <td>Telefon raqam</td>
                                    <td><?=$edu['edu_number']?></td>
                                </tr>
                                <tr>
                                    <td>Email</td>
                                    <td><?=$edu['edu_email']?></td>
                                </tr>
                                <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
            </div>
            <div style="padding-left: 40px">
                <img style="width: 200px" src="../user.png" alt="..." class="img-thumbnail">
                <div>
                    <button type="button" class="btn btn-block btn-primary btn-lg">Logotipni tahrirlash</button>
                </div>
            </div>
        </div>
    </div>
</section>


