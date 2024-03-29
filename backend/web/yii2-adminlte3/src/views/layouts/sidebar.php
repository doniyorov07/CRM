<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <img src="<?=$assetDir?>/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="<?=$assetDir?>/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">Alexander Pierce</a>
            </div>
        </div>

        <!-- SidebarSearch Form -->
        <!-- href be escaped -->
        <!-- <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div> -->

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <?php
            echo \hail812\adminlte\widgets\Menu::widget([
                'items' => [
                    [
                        'label' => 'Talabalar',
                        'items' => [
                            ['label' => 'Talabalar',  'icon' => 'file-code', 'url' => ['/student']],
                            ['label' => 'Talaba qo\'shish',  'icon' => 'file-code', 'url' => ['/student/create']],
                            ['label' => 'Talabani guruhga qo\'shish',  'icon' => 'file-code', 'url' => ['/student-group']],
                           
                        ]
                    ],

                     [
                        'label' => 'Guruhlar',
                        'items' => [
                             ['label' => 'Guruhlar',  'icon' => 'file-code', 'url' => ['/group']],
                             ['label' => 'Guruh rahbarini belgilsh',  'icon' => 'file-code', 'url' => ['/group-leader']],
                           
                        ]
                    ],

                    [
                        'label' => 'To\'lovlar',
                        'items' => [
                             ['label' => '',  'icon' => 'file-code', 'url' => ['/']],
                           
                        ]
                    ],

                    [
                        'label' => 'Daromad',
                        'items' => [
                             ['label' => '',  'icon' => 'file-code', 'url' => ['/']],
                           
                        ]
                    ],

                    [
                        'label' => 'Chiqimlar',
                        'items' => [
                             ['label' => '',  'icon' => 'file-code', 'url' => ['/']],
                           
                        ]
                    ],

                    [
                        'label' => 'Imtihonlar',
                        'items' => [
                             ['label' => '',  'icon' => 'file-code', 'url' => ['/']],
                           
                        ]
                    ],

                    [
                        'label' => 'Kadrlar b\'limi',
                        'items' => [
                            ['label' => 'Xodimlar',  'icon' => 'file-code', 'url' => ['/worker/index']],
                            ['label' => 'Xodim qo\'shish',  'icon' => 'file-code', 'url' => ['/worker/create']],
                           
                        ]
                    ],

                    [
                        'label' => 'Hisobotlar',
                        'items' => [
                             ['label' => '',  'icon' => 'file-code', 'url' => ['/']],
                           
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