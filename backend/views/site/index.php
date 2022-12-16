<?php
$this->title = 'Admin Panel';
$this->params['breadcrumbs'] = [['label' => $this->title]];
use common\models\Student;
use common\models\Worker;
use common\models\Group;
$student = Student::find()->count('id');
$worker = Worker::find()->count('id');
$group = Group::find()->count('id');
?>
 <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3><?php echo $student; ?></h3>

                <p>Talabalar</p>
              </div>
              <div class="icon">
                <i class="fas fa-user-graduate"></i>
              </div>
              <a href="#" class="small-box-footer">Ba'tafsil <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3><?php echo $worker; ?></h3>

                <p>O'qituvchilar</p>
              </div>
              <div class="icon">
             <i class="fas fa-chalkboard-teacher"></i>
              </div>
              <a href="#" class="small-box-footer">Ba'tafsil <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3><?php echo $group;?></h3>

                <p>Guruhlar</p>
              </div>
              <div class="icon">
                <i class="fa fa-users"></i>
              </div>
              <a href="#" class="small-box-footer">Ba'tafsil <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>

           <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-red">
              <div class="inner">
                <h3><?php echo $group;?></h3>

                <p>Guruhlar</p>
              </div>
              <div class="icon">
                <i class="fa fa-users"></i>
              </div>
              <a href="#" class="small-box-footer">Ba'tafsil <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

