<?php
use yii\helpers\Html;
?>
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index" class="brand-link">
    
    <?= Html::img('@imageurl/frontend/web/img/cerdas-long-white.png', ['width' => '180'],['class' => 'brand-image'])?>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <?= Html::img('@imageurl/frontend/web/img/user.png',['class' => 'img-circle elevation-2'])?>
                
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
        <nav class="mt-2 ">
            <?php
            echo \hail812\adminlte\widgets\Menu::widget([
                'items' => [
                    ['label' => 'Dashboard', 'url' => ['site/index'], 'icon' => 'tachometer-alt'],
                    [
                        'label' => 'Data PT',
                        'icon' => 'university',
                        'items' => [
                            ['label' => 'Biodata PT', 'url'=>['datapt/index'], 'icon' => 'bullseye'],
                            ['label' => 'Prodi', 'url'=>['data-prodi/index'],'icon' => 'bullseye'],
                            ['label' => 'Mata Kuliah', 'url' => ['matkul/index'],'icon' => 'bullseye'],

                        ]
                    ],
                    
                    [
                            'label' => 'Perkuliahan',
                            'icon' => 'graduation-cap',
                            'items' => [
                                ['label' => 'Tahun Kurikulum', 'url'=>['tahun-kurikulum/index'], 'icon' => 'bullseye'],
                                ['label' => 'Tahun Akademik', 'url'=>['tahun-akademik/index'], 'icon' => 'bullseye'],
                                ['label' => 'Kelas Kuliah', 'url'=>['kelas-kuliah/index'],'icon' => 'bullseye'],
                                ['label' => 'Jadwal Kuliah', 'icon' => 'bullseye'],
                                ['label' => 'Jadwal Ujian', 'icon' => 'bullseye'],
                            ]
                    ],
                    [
                        'label' => 'Pegawai',
                        'icon' => 'user-tie',
                        'items' => [
                            ['label' => 'Dosen', 'url' => ['dosen/index'], 'icon' => 'bullseye'],
                            ['label' => 'Mentor', 'url' => ['mentor/index'], 'icon' => 'bullseye'],
                            ['label' => 'Operator', 'url' => ['operator/index'], 'icon' => 'bullseye'],
                        ]
                    ],
                    ['label' => 'Mahasiswa', 'url' => ['mahasiswa/index'], 'icon' => 'file-export'],
                    [
                        'label' => 'Evaluasi',
                        'icon' => 'file-alt',
                        'items' => [
                            ['label' => 'Evaluasi Mata Kuliah', 'url' => ['eval-matkul/index'], 'icon' => 'bullseye'],
                            ['label' => 'Evaluasi Dosen', 'url' => ['eval-dosen/index'], 'icon' => 'bullseye'],
                            ['label' => 'Evaluasi TKM', 'url' => ['eval-tkm/index'], 'icon' => 'bullseye'],
                        ]
                    ],
                    ['label' => 'Template Surat', 'url' => ['template-surat/index'] ,'icon' => 'envelope'],
                    ['label' => 'Pengumuman', 'url' => ['pengumuman/index'],'icon' => 'info-circle'],
                    // [
                    //     'label' => 'Starter Pages',
                    //     'icon' => 'tachometer-alt',
                    //     'badge' => '<span class="right badge badge-info">2</span>',
                    //     'items' => [
                    //         ['label' => 'Active Page', 'url' => ['site/index'], 'iconStyle' => 'far'],
                    //         ['label' => 'Inactive Page', 'iconStyle' => 'far'],
                    //     ]
                    // ],
                    // ['label' => 'Simple Link', 'icon' => 'th', 'badge' => '<span class="right badge badge-danger">New</span>'],
                    // ['label' => 'Yii2 PROVIDED', 'header' => true],
                    // ['label' => 'Login', 'url' => ['site/login'], 'icon' => 'sign-in-alt', 'visible' => Yii::$app->user->isGuest],
                    // ['label' => 'Gii',  'icon' => 'file-code', 'url' => ['/gii'], 'target' => '_blank'],
                    // ['label' => 'Debug', 'icon' => 'bug', 'url' => ['/debug'], 'target' => '_blank'],
                    // ['label' => 'MULTI LEVEL EXAMPLE', 'header' => true],
                    // ['label' => 'Level1'],
                    // [
                    //     'label' => 'Level1',
                    //     'items' => [
                    //         ['label' => 'Level2', 'iconStyle' => 'far'],
                    //         [
                    //             'label' => 'Level2',
                    //             'iconStyle' => 'far',
                    //             'items' => [
                    //                 ['label' => 'Level3', 'iconStyle' => 'far', 'icon' => 'dot-circle'],
                    //                 ['label' => 'Level3', 'iconStyle' => 'far', 'icon' => 'dot-circle'],
                    //                 ['label' => 'Level3', 'iconStyle' => 'far', 'icon' => 'dot-circle']
                    //             ]
                    //         ],
                    //         ['label' => 'Level2', 'iconStyle' => 'far']
                    //     ]
                    // ],
                    // ['label' => 'Level1'],
                    // ['label' => 'LABELS', 'header' => true],
                    // ['label' => 'Important', 'iconStyle' => 'far', 'iconClassAdded' => 'text-danger'],
                    // ['label' => 'Warning', 'iconClass' => 'nav-icon far fa-circle text-warning'],
                    // ['label' => 'Informational', 'iconStyle' => 'far', 'iconClassAdded' => 'text-info'],
                ],
            ]);
            ?>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>