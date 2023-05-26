<?php use yii\widgets\Menu;
use yii\base\Widget;
use kartik\sidenav\SideNav;
$nim = $_GET['nim'];
?>

<?php echo SideNav::widget([
      'items' => [
        ['label' => 'Biodata Mahasiswa', 'icon' => 'home', 'url' => ['mahasiswa/view','nim'=>$nim]],
        ['label' => 'Alamat Mahasiswa', 'icon' => 'user', 'url' => ['mahasiswa/alamat-mhs','nim'=>$nim]],
        ['label' => 'Orang Tua', 'icon' => 'user', 'url' => ['mahasiswa/ortu-mhs','nim'=>$nim]],
        ['label' => 'Pendidikan', 'icon' => 'user', 'url' => ['mahasiswa/pendidikan','nim'=>$nim]],
        ['label' => 'Kesehatan', 'icon' => 'user', 'url' => ['mahasiswa/kesehatan','nim'=>$nim]],
      ],
  ]);
  ?>