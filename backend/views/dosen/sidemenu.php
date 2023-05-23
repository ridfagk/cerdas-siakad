<?php use yii\widgets\Menu;
use yii\base\Widget;
use kartik\sidenav\SideNav;
$idpegawai = $_GET['id_pegawai'];
?>

<?php echo SideNav::widget([
      'items' => [
        ['label' => 'Biodata Dosen', 'icon' => 'home', 'url' => ['dosen/view','id_pegawai'=>$idpegawai]],
        ['label' => 'Riwayat Pengabdian', 'icon' => 'user', 'url' => ['/kelas-kuliah/tim-pengajar','id_kelas'=>$idpegawai]],
        ['label' => 'Research Interest', 'icon' => 'user', 'url' => ['/kelas-kuliah/tim-pengajar','id_kelas'=>$idpegawai]],
        ['label' => 'Pengabdian Masyarakat', 'icon' => 'user', 'url' => ['/kelas-kuliah/presensi','id_kelas'=>$idpegawai]],
      ],
  ]);
  ?>