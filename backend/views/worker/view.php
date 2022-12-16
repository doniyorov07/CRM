<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Worker */


$this->params['breadcrumbs'][] = ['label' => 'Ortga', 'url' => ['index']];
$this->title = "Xodim haqida axborot";
\yii\web\YiiAsset::register($this);
?>
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
          <li class="nav-item"><a class="nav-link active" href="#activity" data-toggle="tab">Activity</a></li>
          <li class="nav-item"><a class="nav-link" href="#timeline" data-toggle="tab">Timeline</a></li>
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
              <td>Xodim guruhlari</td>
              <td></td>                      
              <td><span class="tag tag-success">
<!--                --><?php //foreach($model->groupleader as $worker):?>
<!--                --><?php //=$worker->group->name?>
<!--                --><?php //endforeach;?>
              </span></td>
          </tr>
           <tr>
              <td>Xodim oyligi</td>
              <td></td>                      
              <td><span class="tag tag-success">
               
                  
                </span></td>
          </tr>
          <tr>
              <td>Xodim holati</td>
              <td></td>                      
              <td><span class="tag tag-success">
                <?php
                if ($model->status ==1) {
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
      <!-- timeline time label -->
      <div class="time-label">
        <span class="bg-danger">
          10 Feb. 2014
      </span>
  </div>
  <!-- /.timeline-label -->
  <!-- timeline item -->
  <div>
    <i class="fas fa-envelope bg-primary"></i>

    <div class="timeline-item">
      <span class="time"><i class="far fa-clock"></i> 12:05</span>

      <h3 class="timeline-header"><a href="#">Support Team</a> sent you an email</h3>

      <div class="timeline-body">
        Etsy doostang zoodles disqus groupon greplin oooj voxy zoodles,
        weebly ning heekya handango imeem plugg dopplr jibjab, movity
        jajah plickers sifteo edmodo ifttt zimbra. Babblely odeo kaboodle
        quora plaxo ideeli hulu weebly balihoo...
    </div>
    <div class="timeline-footer">
        <a href="#" class="btn btn-primary btn-sm">Read more</a>
        <a href="#" class="btn btn-danger btn-sm">Delete</a>
    </div>
</div>
</div>
<!-- END timeline item -->
<!-- timeline item -->
<div>
    <i class="fas fa-user bg-info"></i>

    <div class="timeline-item">
      <span class="time"><i class="far fa-clock"></i> 5 mins ago</span>

      <h3 class="timeline-header border-0"><a href="#">Sarah Young</a> accepted your friend request
      </h3>
  </div>
</div>
<!-- END timeline item -->
<!-- timeline item -->
<div>
    <i class="fas fa-comments bg-warning"></i>

    <div class="timeline-item">
      <span class="time"><i class="far fa-clock"></i> 27 mins ago</span>

      <h3 class="timeline-header"><a href="#">Jay White</a> commented on your post</h3>

      <div class="timeline-body">
        Take me to your leader!
        Switzerland is small and neutral!
        We are more like Germany, ambitious and misunderstood!
    </div>
    <div class="timeline-footer">
        <a href="#" class="btn btn-warning btn-flat btn-sm">View comment</a>
    </div>
</div>
</div>
<!-- END timeline item -->
<!-- timeline time label -->
<div class="time-label">
    <span class="bg-success">
      3 Jan. 2014
  </span>
</div>
<!-- /.timeline-label -->
<!-- timeline item -->
<div>
    <i class="fas fa-camera bg-purple"></i>

    <div class="timeline-item">
      <span class="time"><i class="far fa-clock"></i> 2 days ago</span>

      <h3 class="timeline-header"><a href="#">Mina Lee</a> uploaded new photos</h3>

      <div class="timeline-body">
        <img src="https://placehold.it/150x100" alt="...">
        <img src="https://placehold.it/150x100" alt="...">
        <img src="https://placehold.it/150x100" alt="...">
        <img src="https://placehold.it/150x100" alt="...">
    </div>
</div>
</div>
<!-- END timeline item -->
<div>
    <i class="far fa-clock bg-gray"></i>
</div>
</div>
</div>


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