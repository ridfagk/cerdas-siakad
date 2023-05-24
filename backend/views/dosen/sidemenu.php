<?php use yii\widgets\Menu;
use yii\base\Widget;
use kartik\sidenav\SideNav;
$idpegawai = $_GET['id_pegawai'];
?>

<?php echo SideNav::widget([
      'items' => [
        ['label' => 'Biodata Dosen', 'icon' => 'home', 'url' => ['dosen/view','id_pegawai'=>$idpegawai]],
        ['label' => 'Riwayat Pendidikan', 'icon' => 'user', 'url' => ['dosen/pendidikan','id_pegawai'=>$idpegawai]],
        ['label' => 'Research Interest', 'icon' => 'user', 'url' => ['dosen/research','id_pegawai'=>$idpegawai]],
        ['label' => 'Pengabdian Masyarakat', 'icon' => 'user', 'url' => ['dosen/pengabdian','id_pegawai'=>$idpegawai]],
        ['label' => 'Honor Dosen', 'icon' => 'user', 'url' => ['dosen/honor','id_pegawai'=>$idpegawai]],
      ],
  ]);
  ?>