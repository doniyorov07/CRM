<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use common\widgets\Alert;
/* @var $this yii\web\View */
/* @var $model common\models\Worker */

$this->params['breadcrumbs'][] = ['label' => 'Ortga', 'url' => ['index']];
$this->title = "Xodim haqida axborot";
\yii\web\YiiAsset::register($this);
?>
<?= Alert::widget()?>
<div class="worker-view">

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
                  src="../worker/<?=$model->image?>"
                  alt="User profile picture">
              </div>

              <h3 class="profile-username text-center"><?=$model->ismi . ' ' . $model->familiya;?></h3>

              <p class="text-muted text-center"><?=$model->lavozim?></p>

              <ul class="list-group list-group-unbordered mb-3">
                  <li class="list-group-item">
                    <b>Lavozimi</b> <a class="float-right"><?=$model->lavozim;?></a>
                </li>
                <li class="list-group-item">
                    <b>Ish tajribasi</b> <a class="float-right"><?=$model->staj;?></a>
                </li>
                <li class="list-group-item">
                    <b>Shartnoma</b> <a class="float-right"><?=$model->shartnoma_muddati;?></a>
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
          <li class="nav-item"><a class="nav-link active" href="#activity" data-toggle="tab">Xodim malumotlari</a></li>
          <li class="nav-item"><a class="nav-link" href="#timeline" data-toggle="tab">Guruhlari</a></li>
          <li class="nav-item"><a class="nav-link" href="#settings" data-toggle="tab">Maoshi</a></li>
      </ul>
  </div><!-- /.card-header -->
  <div class="card-body">
    <div class="tab-content">
      <div class="active tab-pane" id="activity">
       <div class="card-body table-responsive p-0">
        <table class="table table-hover text-nowrap">
          <tbody>
            <tr>
              <td>Tug'ilgan yili</td>
              <td></td>                      
              <td><span class="tag tag-success"><?=$model->tugilgan_yil?></span></td>
          </tr>
          <tr>
              <td>Telefon raqami</td>
              <td></td>                      
              <td><span class="tag tag-success"><?=$model->raqam?></span></td>
          </tr>
          <tr>
              <td>Ishga kirgan sanasi</td>
              <td></td>                      
              <td><span class="tag tag-success"><?=$model->qabul_sanasi?></span></td>
          </tr>
          <tr>
              <td>Dars o'tish tili</td>
              <td></td>                      
              <td><span class="tag tag-success"><?=$model->oqitish_tili?></span></td>
          </tr>
          <tr>
              <td>Xodim holati</td>
              <td></td>                      
              <td><span class="tag tag-success">
                <?php
                if ($model->status == 1) {
                  echo '<i class="badge badge-success">Faol</i>';
              }
              else{
                echo '<i class="badge badge-danger">Faol emas</i>';
            }
        ?></span></td>
    </tr>
</tbody>
</table>
</div>
</div>
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
                                <?php foreach($model->workerGroups as $worker):?>
                                    <tr>
                                        <td>
                                            <?= $worker->group ? $worker->group->name: 'Guruh o\'chirilgan' ?>
                                            <br><br>
                                        </td>
                                        <td>
                                            <?= $worker->group ? $worker->group->lesson_days: 'Guruh o\'chirilgan' ?>
                                            <br><br>
                                        </td>
                                        <td>
                                            <?= $worker->group ? $worker->group->lesson_time: 'Guruh o\'chirilgan' ?>
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
                    <th scope="col">Jami</th>
                    <th scope="col">Oylik</th>
                    <th scope="col">Foiz </th>
                    <th scope="col">Bonus</th>
                    <th scope="col">Ajratilgan</th>
                    <th scope="col">Oyi</th>
                    <th scope="col">Action</th>
                </tr>
                </thead>
                <tbody>
            <?php foreach ($model->payments as $item):?>
                    <tr>
                        <td>
                            <span class="badge badge-success">
                            <?=$item->pay_total ? $item->pay_total : '0'?>
                            </span>
                            <br>
                        </td>
                        <td>
                            <span class="badge badge-danger">
                             <?=$item->pay_basic ? $item->pay_basic : '0'?>
                            </span>
                            <br>
                        </td>
                        <td>
                            <span class="badge badge-warning">
                             <?=$item->pay_percentage ? $item->pay_percentage : '0'?> %
                            </span>
                            <br>
                        </td>
                        <td>
                            <?=$item->pay_bonus ? $item->pay_bonus : '0'?>
                            <br>
                        </td>
                        <td>
                            <?=$item->pay_separate ? $item->pay_separate : '0'?>
                            <br>
                        </td>
                        <td>
                            <?=$item->month ? $item->month : '0'?>
                            <br>
                        </td>
                        <td>

                            <br>
                        </td>
                    </tr>
                <?php endforeach;?>
                </tbody>
            </table>
        </div>


</div>
</div>
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
            XLSX.writeFile(wb, fn || ('salary.' + (type || 'xlsx')));
    }
</script>
