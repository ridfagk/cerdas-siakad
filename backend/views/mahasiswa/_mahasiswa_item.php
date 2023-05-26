<?php
use yii\helpers\Html;
use backend\models\{Pegawai, TimKelasKuliah};
// $tim = TimKelasKuliah::find()->where(['kelas_id'=> $model->id_kelas])->andWhere(['status'=>'Penanggung Jawab'])->one();
// $dosen = Pegawai::find()->where(['id_pegawai'=>$tim->pegawai_id])->one();
?>
<tr>
    <td><?= $model->nim ?></td>
    <td><?= $model->nama_mahasiswa?></td>
    <td><?= $model->angkatan?></td>
    <td><?= $model->prodis->nama_prodi?></td>
    <td><?= $model->no_telp?></td>
    <td><?= $model->status_akademis?></td>
    <td>
        <span>
            <?= Html::a('<i class="fas fa-eye"></i>', ['view','nim'=>$model->nim], ['class' => 'btn btn-info btn-xs']);?>
            <?= Html::a('<i class="fas fa-pen"></i>', ['update','nim'=>$model->nim], ['class' => 'btn btn-warning btn-xs']);?>
            <?= Html::a('<i class="fas fa-trash"></i>', ['delete','id_mahasiswa'=>$model->id_mahasiswa], ['class' => 'btn btn-danger btn-xs']);?>
        </span>
    </td>
</tr>
        