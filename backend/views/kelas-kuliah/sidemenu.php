<?php use kartik\sidenav\SideNav;
$idkelas = $_GET['id_kelas'];
echo SideNav::widget([
	'type' => SideNav::TYPE_DEFAULT,
	'heading' => 'Menu Kelas',
	'items' => [
        // Important: you need to specify url as 'controller/action',
        // not just as 'controller' even if default action is used.
        //
        // NOTE: The variable `$item` is specific to this demo page that determines
        // which menu item will be activated. You need to accordingly define and pass
        // such variables to your view object to handle such logic in your application
        // (to determine the active status).
        //
        ['label' => 'Detail Kelas', 'icon' => 'home', 'url' => ['/kelas-kuliah/detail-kelas','id_kelas'=>$idkelas]],
        ['label' => 'Tim Pengajar', 'icon' => 'user', 'url' => ['/kelas-kuliah/tim-pengajar','id_kelas'=>$idkelas]],
        ['label' => 'Peserta Kelas', 'icon' => 'user', 'url' => ['/kelas-kuliah/tim-pengajar','id_kelas'=>$idkelas]],
        ['label' => 'Presensi Kelas', 'icon' => 'user', 'url' => ['/kelas-kuliah/presensi','id_kelas'=>$idkelas]],
        ['label' => 'Jadwal Ujian', 'icon' => 'user', 'url' => ['/kelas-kuliah/tim-pengajar','id_kelas'=>$idkelas]],
        ['label' => 'Nilai Perkuliahan', 'icon' => 'user', 'url' => ['/kelas-kuliah/tim-pengajar','id_kelas'=>$idkelas]],

    ],
]);?>