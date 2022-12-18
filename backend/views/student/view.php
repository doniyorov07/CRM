<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
/* @var $this yii\web\View */
/* @var $model common\models\Student */
use common\models\Group;
$this->params['breadcrumbs'][] = ['label' => 'Ortga', 'url' => ['index']];
$this->title = "Talaba haqida axborot";
\yii\web\YiiAsset::register($this);

?>
<?= \common\widgets\Alert::widget()?>
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

              <h3 class="profile-username text-center"><?= $model->ism . ' ' . $model->familiya?></h3>

              <ul class="list-group list-group-unbordered mb-3">
                <li class="list-group-item">
                  <b>Guruhi</b> <a class="float-right">
                        <?php foreach($model->studentGroups as $student):?>
                            <?= $student->group->name; ?>
                            &nbsp;
                        <?php endforeach;?>
                    </a>
                </li>
                <li class="list-group-item">
                  <b>Yoshi</b> <a class="float-right"><?=$model->yosh?></a>
                </li>
                <li class="list-group-item">
                  <b>Jinsi</b> <a class="float-right"><?=$model->jinsi;?></a>
                </li>
              </ul>
            </div>
            <!-- /.card-body -->
          </div>
          
          <!-- /.card -->

          
        </div>
        <!-- /.col -->
        <div class="col-md-9">
          <div class="card">
            <div class="card-header p-2">
              <ul class="nav nav-pills">
                <li class="nav-item"><a class="nav-link active" href="#activity" data-toggle="tab">Profil</a></li>
                <li class="nav-item"><a class="nav-link" href="#timeline" data-toggle="tab">Dars jadval</a></li>
                <li class="nav-item"><a class="nav-link" href="#settings" data-toggle="tab">Settings</a></li>
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
                        <td><span class="tag tag-success"><?=$model->raqami?></span></td>
                      </tr>
                      <tr>
                        <td>Markazga kelgan sanasi</td>
                        <td></td>                      
                        <td><span class="tag tag-success"><?=$model->qabul_sanasi?></span></td>
                      </tr>


                      <tr>
                        <td>O'qitilish tili</td>
                        <td></td>                      
                        <td><span class="tag tag-success"><?=$model->oqitish_tili?></span></td>
                      </tr>
                      <tr>
                        <td>Yo'nalishi</td>
                        <td></td>                      
                        <td><span class="tag tag-success"><?=$model->yonalishi?></span></td>
                      </tr>
                      <tr>
                        <td>Talaba holati</td>
                        <td></td>                      
                        <td><span class="tag tag-success">
                          <?php
                          if ($model->status ==1) {
                            echo '<i class="badge badge-success">Faol</i>';
                          }
                          else{
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
            <div class="card">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>Guruhi</th>
                    <th>Dars kuni</th>
                    <th>Dars vaqti</th>
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                    <td>
                        <?php foreach($model->studentGroups as $student):?>
                            <?=$student->group->name; ?>
                        <br><br>
                        <?php endforeach;?>
                    </td>
                    <td>
                       <?php foreach($model->studentGroups as $student):?>
                      <?=$student->lesson_days; ?>
                       <br><br>
                       <?php endforeach;?>
                    </td>
                    <td>
                       <?php foreach($model->studentGroups as $student):?>
                      <?=$student->leson_time; ?>
                       <br><br>
                       <?php endforeach;?>
                    </td>
                  </tr>
                              
                  </tbody>              
                </table>
            

            </div>
          </div>
        </div>
      </div>
                
              </div>

            </div>
            <!-- /.tab-pane -->

            <div class="tab-pane" id="settings">
              <form class="form-horizontal">
                <div class="form-group row">
                  <label for="inputName" class="col-sm-2 col-form-label">Name</label>
                  <div class="col-sm-10">
                    <input type="email" class="form-control" id="inputName" placeholder="Name">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                  <div class="col-sm-10">
                    <input type="email" class="form-control" id="inputEmail" placeholder="Email">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="inputName2" class="col-sm-2 col-form-label">Name</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputName2" placeholder="Name">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="inputExperience" class="col-sm-2 col-form-label">Experience</label>
                  <div class="col-sm-10">
                    <textarea class="form-control" id="inputExperience" placeholder="Experience"></textarea>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="inputSkills" class="col-sm-2 col-form-label">Skills</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputSkills" placeholder="Skills">
                  </div>
                </div>
                <div class="form-group row">
                  <div class="offset-sm-2 col-sm-10">
                    <div class="checkbox">
                      <label>
                        <input type="checkbox"> I agree to the <a href="#">terms and conditions</a>
                      </label>
                    </div>
                  </div>
                </div>
                <div class="form-group row">
                  <div class="offset-sm-2 col-sm-10">
                    <button type="submit" class="btn btn-danger">Submit</button>
                  </div>
                </div>
              </form>
            </div>
            <!-- /.tab-pane -->
          </div>
          <!-- /.tab-content -->
        </div><!-- /.card-body -->
      </div>
      <!-- /.card -->
    </div>
    <!-- /.col -->
  </div>
  <!-- /.row -->
</div><!-- /.container-fluid -->
</section>

</div>
