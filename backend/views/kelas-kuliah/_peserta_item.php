<?php
use yii\helpers\Html;
use backend\models\{Pegawai, TimKelasKuliah};
$tim = TimKelasKuliah::find()->where(['kelas_id'=> $model->kelas_id])->andWhere(['status'=>'Penanggung Jawab'])->one();
$dosen = Pegawai::find()->where(['id_pegawai'=>$tim->pegawai_id])->one();
?>
<tr>
    <td><?= $model->nim ?></td>
    <td><?= $model->mhs->nama_mahasiswa?></td>
    <td>
        <span>
            <?= Html::a('<i class="fas fa-eye"></i>', ['detail-kelas','id_kelas'=>$model->nim], ['class' => 'btn btn-info btn-xs']);?>
            <?= Html::a('<i class="fas fa-trash"></i>', ['delete','id_kelas'=>$model->nim], ['class' => 'btn btn-danger btn-xs']);?>
        </span>
    </td>
</tr>
        