<?php
use yii\helpers\Html;

?>
<tr>
    <td><?= $model->judul_pengabdian?></td>
    <td><?= $model->tgl_pengabdian?></td>
    <td><?= $model->lokasi?></td>
    <td><?= $model->mitra?></td>
    <td><?= $model->mahasiswa_terlibat?></td>
    <td><?= $model->penjelasan?></td>

    <td>
        <span>
            <?= Html::a('<i class="fas fa-eye"></i>', ['detail-kelas','id_kelas'=>$model->pegawai_id], ['class' => 'btn btn-info btn-xs']);?>
            <?= Html::a('<i class="fas fa-pen"></i>', ['update','id_kelas'=>$model->pegawai_id], ['class' => 'btn btn-warning btn-xs']);?>
            <?= Html::a('<i class="fas fa-trash"></i>', ['delete','id_kelas'=>$model->pegawai_id], ['class' => 'btn btn-danger btn-xs']);?>
        </span>
    </td>
</tr>
    