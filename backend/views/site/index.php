<?php

use dosamigos\chartjs\ChartJs;
$this->title = 'Admin Panel';
$this->params['breadcrumbs'] = [['label' => $this->title]];
/**
 *@var $model \yii\web\Controller
 *@var $student \yii\web\Controller
 *@var $worker \yii\web\Controller
 *@var $group \yii\web\Controller
 */
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

                <p>Bitiruvchilar</p>
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

<?php
$array = [];
foreach ($model as $item) {
    $array [] = $item->yosh;
}
$pay = [];
foreach ($payment as $item) {
    $pay [] = $item->payment_amount;
}
?>

<?= ChartJs::widget([
    'type' => 'bar',
    'options' => [
        'height' => 150,
        'width' => 600
    ],
    'data' => [
        'labels' => ["Yanvar", "Fevral", "Mart", "Aprel", "May", "Iyun", "Iyul", "Avgust", 'Sentabr', 'Oktabr', 'Noyabr', 'Dekabr'],
        'datasets' => [
            [
                'label' => "Talabalar soni",
                'hoverBackgroundColor' => 'rgb(0, 192, 255)',
                'backgroundColor' => "rgba(0, 133, 255, 1)",
                'borderColor' => "rgba(140, 15, 133, 1)",
                'pointBackgroundColor' => "rgba(140, 15, 133, 1)",
                'pointBorderColor' => "#fff",
                'pointHoverBackgroundColor' => "#fff",
                'pointHoverBorderColor' => "rgba(140, 15, 133, 1)",
                'data' => $array,
                'flex' => '2',
                'categoryPercentage' => 0.2,
                'barPercentage' => 0.4
            ],
        ]
    ]
]);
?>

<br>
<?= ChartJs::widget([

    'type' => 'line',
    'options' => [
            'height' => 150,
            'width' => 600,
        'resonsive' => true,
        'interaction' => [
                'mode' => 'index',
                'intersect' => false,
        ],
    ],

    'plugins' => [
            'title' => [
                    'display' => true,
                    'text' => 'Daromad va Chiqimlar',
]
],


    'data' => [
        'labels' => ["Yanvar", "Fevral", "Mart", "Aprel", "May", "Iyun", "Iyul", "Avgust", 'Sentabr', 'Oktabr', 'Noyabr', 'Dekabr'],
        'datasets' => [
            [
                'label' => "Talabalar soni",
                 'borderColor' => 'blue',
                 'backgroundColor' => '',
                 'data' => $array,
            ],
            [
                'label' => "Talabalar yoshi",
                'borderColor' => 'red',
                'backgroundColor' => '',
                'data' =>  $pay,
            ],
        ],
    ]
]);
?>

