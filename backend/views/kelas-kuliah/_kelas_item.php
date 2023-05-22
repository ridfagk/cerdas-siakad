<?php
use yii\helpers\Html;
use backend\models\{Pegawai, TimKelasKuliah};
$tim = TimKelasKuliah::find()->where(['kelas_id'=> $model->id_kelas])->andWhere(['status'=>'Penanggung Jawab'])->one();
$dosen = Pegawai::find()->where(['id_pegawai'=>$tim->pegawai_id])->one();
?>
<tr>
    <td><?= $model->thn_akademik ?></td>
    <td><?= $model->nama_kelas?></td>
    <td><?= $model->matkul->nama_matkul?></td>
    <td><?= $model->prodi->nama_prodi?></td>
    <td><?= $dosen->nama_pegawai?></td>
    <td><?= $model->semester?></td>
    <td><?= $model->sks?></td>
    <td><?= $model->hari?></td>
    <td>
        <span>
            <?= Html::a('<i class="fas fa-eye"></i>', ['detail-kelas','id_kelas'=>$model->id_kelas], ['class' => 'btn btn-info btn-xs']);?>
            <?= Html::a('<i class="fas fa-pen"></i>', ['update','id_kelas'=>$model->id_kelas], ['class' => 'btn btn-warning btn-xs']);?>
            <?= Html::a('<i class="fas fa-trash"></i>', ['delete','id_kelas'=>$model->id_kelas], ['class' => 'btn btn-danger btn-xs']);?>
        </span>
    </td>
</tr>
        