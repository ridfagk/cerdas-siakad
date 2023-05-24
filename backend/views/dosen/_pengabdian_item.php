<?php
use yii\helpers\{Html, Url};

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
            <a class="btn btn-warning btn-xs custom_buttonc" value="<?= Url::to(['edit-pengabdian','id_pengabdian' => $model->id_pengabdian, 'id_pegawai' => $model->pegawai_id]) ?>">
                <i class="fas fa-pen"></i>
            </a>
            <?= Html::a('<i class="fas fa-trash"></i>', ['delete','id_kelas'=>$model->pegawai_id], ['class' => 'btn btn-danger btn-xs']);?>
        </span>
    </td>
</tr>
    