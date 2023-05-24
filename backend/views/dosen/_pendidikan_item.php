<?php
use yii\helpers\{Html,Url};

?>
<tr>
    <td><?= $model->jenjang_pendidikan?></td>
    <td><?= $model->nama_institusi?></td>
    <td><?= $model->prodi?></td>
    <td><?= $model->tahun_mulai?></td>
    <td><?= $model->tahun_selesai?></td>
    <td>
        <span>
            <a class="btn btn-warning btn-xs custom_buttonb" value="<?= Url::to(['edit-pendidikan','id_rwytpegawai' => $model->id_rwytpegawai, 'id_pegawai' => $model->pegawai_id]) ?>">
                <i class="fas fa-pen"></i>
            </a>
            <?= Html::a('<i class="fas fa-trash"></i>', ['delete','id_kelas'=>$model->id_rwytpegawai], ['class' => 'btn btn-danger btn-xs']);?>
        </span>
    </td>
</tr>
    