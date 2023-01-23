<?php
use yii\helpers\Url;
?>
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?=Url::to('/admincrm/')?>" class="brand-link">
        <img src="<?=$assetDir?>/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">CRM.UZ</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="<?=$assetDir?>/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">
                    <?php
                      if(Yii::$app->user->can('superadmin')){
                          echo "Super Admin";
                      }else{
                          echo "Admin";
                      }
                    ?>
                </a>
            </div>
        </div>
        <nav class="mt-2">
            <?php
            echo \hail812\adminlte\widgets\Menu::widget([
                'items' => [
                    [
                        'label' => 'Talabalar',
                        'icon' => 'fas fa-user-graduate',
                        'items' => [
                            ['label' => 'Talabalar',  'icon' => '', 'url' => ['/student']],
                            ['label' => 'Talaba qo\'shish',  'icon' => '', 'url' => ['/student/create']],
                            ['label' => 'Talabani guruhga qo\'shish',  'icon' => '', 'url' => ['/student-group']],
                           
                        ]
                    ],
                     [
                        'label' => 'Guruhlar',
                        'icon' => 'fas fa-users',
                        'items' => [
                             ['label' => 'Guruhlar',  'icon' => 'ellipse-outline', 'url' => ['/group']],
                             ['label' => 'Guruh rahbarini belgilsh',  'icon' => '', 'url' => ['/group-leader']],
                           
                        ]
                    ],
                    [
                        'label' => 'To\'lovlar',
                        'icon' => 'fa-solid fa-filter',
                        'items' => [
                             ['label' => 'To\'lov',  'icon' => ' ', 'url' => ['/payments']],
                             ['label' => 'To\'lovlar tarixi',  'icon' => ' ', 'url' => ['/payhistory']],
                           
                        ]
                    ],
                    [
                        'label' => 'Chiqimlar',
                        'icon' => 'fas fa-money-check-alt',
                        'items' => [
                            ['label' => 'Chiqim qo\'shish',  'icon' => ' ', 'url' => ['/cost']],
                        ]
                    ],
                    [
                        'label' => 'Kadrlar b\'limi',
                        'icon' => 'fas fa-chalkboard-teacher',
                        'items' => [
                            ['label' => 'Xodimlar',  'icon' => '', 'url' => ['/worker/index']],
                            ['label' => 'Xodim qo\'shish',  'icon' => ' ', 'url' => ['/worker/create']],
                            ['label' => 'Ish haqi',  'icon' => '', 'url' => ['/salary/index']],
                            ['label' => 'Lavozim',  'icon' => '', 'url' => ['/position/index']],
                           
                        ]
                    ],
                    [
                        'label' => 'Tizimni sozlash',
                        'items' => [
                            ['label' => 'Umumiy sozlamalar',  'icon' => ' ', 'url' => ['/education/index']],
                            ['label' => 'Login Parolni o\'zgartirish',  'icon' => ' ', 'url' => ['/profile-manager/']],

                        ]
                    ],
                ],
            ]);
            ?>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>