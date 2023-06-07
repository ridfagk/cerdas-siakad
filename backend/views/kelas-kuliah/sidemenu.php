<?php use yii\widgets\Menu;
use yii\base\Widget;
use kartik\sidenav\SideNav;
$idkelas = $_GET['id_kelas'];
?>

<?php echo SideNav::widget([
      'items' => [
        ['label' => 'Detail Kelas', 'icon' => 'home', 'url' => ['kelas-kuliah/detail-kelas','id_kelas'=>$idkelas]],
        ['label' => 'Tim Pengajar', 'icon' => 'user', 'url' => ['/kelas-kuliah/tim-pengajar','id_kelas'=>$idkelas]],
        ['label' => 'Peserta Kelas', 'icon' => 'user', 'url' => ['/kelas-kuliah/peserta','id_kelas'=>$idkelas]],
        ['label' => 'Presensi Kelas', 'icon' => 'user', 'url' => ['/kelas-kuliah/presensi','id_kelas'=>$idkelas]],
        ['label' => 'Jadwal Ujian', 'icon' => 'user', 'url' => ['/kelas-kuliah/tim-pengajar','id_kelas'=>$idkelas]],
        ['label' => 'Nilai Perkuliahan', 'icon' => 'user', 'url' => ['/kelas-kuliah/nilai','id_kelas'=>$idkelas]],
      ],
  ]);
  ?>