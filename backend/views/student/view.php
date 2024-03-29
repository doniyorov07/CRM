<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */

/* @var $model common\models\Student */

use common\models\Group;

$this->params['breadcrumbs'][] = ['label' => 'Ortga', 'url' => ['index']];
$this->title = "Talaba haqida axborot";
\yii\web\YiiAsset::register($this);
/** @var common\models\Student[] $models */
?>
<?= \common\widgets\Alert::widget() ?>
<div class="student-view">
    <p>
        <?= Html::a('Tahrirlash', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('O\'chirish', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Haqiqatdan ham ma\'lumotni o\'chirmoqchimisiz!',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3">

                    <!-- Profile Image -->
                    <div class="card card-primary card-outline">
                        <div class="card-body box-profile">
                            <div class="text-center">
                                <img class="profile-user-img img-fluid img-circle"
                                     src="../user.png"
                                     alt="User profile picture">
                            </div>

                            <h3 class="profile-username text-center"><?= $model->ism . ' ' . $model->familiya ?></h3>

                            <ul class="list-group list-group-unbordered mb-3">
                                <li class="list-group-item">
                                    <b>Guruhi</b> <a class="float-right">
                                        <?php foreach ($model->studentGroups as $student): ?>
                                            <?= $student->group ? $student->group->name : '' ?>
                                            &nbsp;
                                        <?php endforeach; ?>
                                    </a>
                                </li>
                                <li class="list-group-item">
                                    <b>Yoshi</b> <a class="float-right"><?= $model->yosh ?></a>
                                </li>
                                <li class="list-group-item">
                                    <b>Jinsi</b> <a class="float-right"><?= $model->jinsi; ?></a>
                                </li>
                            </ul>
                        </div>
                        <!-- /.card-body -->
                    </div>

                </div>
                <!-- /.col -->
                <div class="col-md-9">
                    <div class="card">
                        <div class="card-header p-2">
                            <ul class="nav nav-pills">
                                <li class="nav-item"><a class="nav-link active" href="#activity" data-toggle="tab">Profil</a>
                                </li>
                                <li class="nav-item"><a class="nav-link" href="#timeline" data-toggle="tab">Dars
                                        jadval</a></li>
                                <li class="nav-item"><a class="nav-link" href="#settings"
                                                        data-toggle="tab">To'lovlar</a></li>
                            </ul>
                        </div><!-- /.card-header -->
                        <div class="card-body">
                            <div class="tab-content">
                                <div class="active tab-pane" id="activity">
                                    <div class="card-body table-responsive p-0">
                                        <table class="table table-hover text-nowrap">
                                            <tbody>
                                            <tr>
                                                <td>Telefon raqami</td>
                                                <td></td>
                                                <td><span class="tag tag-success"><?= $model->raqami ?></span></td>
                                            </tr>
                                            <tr>
                                                <td>Markazga kelgan sanasi</td>
                                                <td></td>
                                                <td><span class="tag tag-success"><?= $model->qabul_sanasi ?></span>
                                                </td>
                                            </tr>


                                            <tr>
                                                <td>O'qitilish tili</td>
                                                <td></td>
                                                <td><span class="tag tag-success"><?= $model->oqitish_tili ?></span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Yo'nalishi</td>
                                                <td></td>
                                                <td><span class="tag tag-success"><?= $model->yonalishi ?></span></td>
                                            </tr>
                                            <tr>
                                                <td>Talaba holati</td>
                                                <td></td>
                                                <td><span class="tag tag-success">
                          <?php
                          if ($model->status == 1) {
                              echo '<i class="badge badge-success">Faol</i>';
                          } else {
                              echo '<i class="badge badge-danger">Faol emas</i>';
                          }
                          ?></span>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <!-- /.tab-pane -->
                                <div class="tab-pane" id="timeline">
                                    <!-- The timeline -->
                                    <div class="timeline timeline-inverse">
                                        <div class="container-fluid">
                                            <div class="row">
                                                <div class="col-12">

                                                    <table id="example2" class="table table-bordered table-hover">
                                                        <thead>
                                                        <tr>
                                                            <th>Guruhi</th>
                                                            <th>Dars kuni</th>
                                                            <th>Dars vaqti</th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        <?php foreach ($model->studentGroups as $student): ?>
                                                            <tr>
                                                                <td>
                                                                    <?= $student->group ? $student->group->name : 'Guruh o\'chirilgan' ?>
                                                                    <br><br>
                                                                </td>
                                                                <td>
                                                                    <?= $student->group ? $student->group->lesson_days : 'Guruh o\'chirilgan' ?>
                                                                    <br><br>
                                                                </td>
                                                                <td>
                                                                    <?= $student->group ? $student->group->lesson_time : 'Guruh o\'chirilgan' ?>
                                                                    <br><br>
                                                                </td>
                                                            </tr>
                                                        <?php endforeach; ?>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="settings">
                                    <div class="d-flex justify-content-end">
                                        <button onclick="ExportToExcel('xlsx')"><i class="fas fa-file-excel"></i></button>
                                    </div>
                                    <table id="example" class="table table-striped">
                                        <thead>
                                        <tr>
                                            <th scope="col">Miqdori</th>
                                            <th scope="col">Qarzi</th>
                                            <th scope="col">Chegirma</th>
                                            <th scope="col">Guruhi</th>
                                            <th scope="col">Vaqti</th>
                                            <th scope="col">Oyi</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php foreach ($model->paymentGroups as $payment): ?>
                                            <tr>
                                                <td>
                                                 <span class="badge badge-success">
                                               <?= $payment->payment_amount ? $payment->payment_amount : "To'lov o'chirilgan"; ?>
                                                </span>
                                                    <br>
                                                </td>
                                                <td>
                                                 <span class="badge badge-danger">
                                               <?= $payment->course_amount - $payment->payment_amount; ?>
                                                </span>
                                                    <br>
                                                </td>
                                                <td>
                                                 <span class="badge badge-warning">
                                               <?= $payment->payment_discount ? $payment->payment_discount : "Yo'q";; ?>
                                                </span>
                                                    <br>
                                                </td>
                                                <td>
                                                    <?= $payment->guruh ? $payment->guruh->name : "Guruh o'chirilgan"; ?>
                                                    <br>
                                                </td>
                                                <td>
                                                    <?= $payment->payment_date; ?>
                                                    <br>
                                                </td>
                                                <td>
                                                    <?= $payment->month; ?>
                                                    <br>
                                                </td>
                                            </tr>
                                        <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<script type="text/javascript" src="https://unpkg.com/xlsx@0.15.1/dist/xlsx.full.min.js"></script>
<script>
    function ExportToExcel(type, fn, dl) {
        var elt = document.getElementById('example');
        var wb = XLSX.utils.table_to_book(elt, { sheet: "sheet1" });
        return dl ?
            XLSX.write(wb, { bookType: type, bookSST: true, type: 'base64' }):
            XLSX.writeFile(wb, fn || ('payment.' + (type || 'xlsx')));
    }
</script>
