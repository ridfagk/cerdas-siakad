<?php use yii\widgets\Menu;
use yii\base\Widget;
use kartik\sidenav\SideNav;
$idpegawai = $_GET['id_pegawai'];
?>

<?php echo SideNav::widget([
      'items' => [
        ['label' => 'Biodata Dosen', 'icon' => 'home', 'url' => ['mentor/view','id_pegawai'=>$idpegawai]],
        ['label' => 'Riwayat Pendidikan', 'icon' => 'user', 'url' => ['mentor/pendidikan','id_pegawai'=>$idpegawai]],
        ['label' => 'Honor Mentor', 'icon' => 'user', 'url' => ['mentor/honor','id_pegawai'=>$idpegawai]],
      ],
  ]);
  ?>