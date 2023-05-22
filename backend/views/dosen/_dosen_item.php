<?php
use yii\helpers\Html;
?>
<tr>
    <td><?= $model->nip ?></td>
    <td><?= $model->nidn?></td>
    <td><?= $model->nama_pegawai?></td>
    <td><?= $model->email?></td>
    <td><?= $model->no_telp?></td>
    <td><?= $model->tgl_masuk?></td>
    <td><?= $model->jabatan?></td>
    <td><?= $model->status_ikatankerja?></td>
    <td><?= $model->status_aktif?></td>
    <td>
        <span>
            <?= Html::a('<i class="fas fa-eye"></i>', ['view','id_pegawai'=>$model->id_pegawai], ['class' => 'btn btn-info btn-xs']);?>
            <?= Html::a('<i class="fas fa-pen"></i>', ['update','id_pegawai'=>$model->id_pegawai], ['class' => 'btn btn-warning btn-xs']);?>
            <?= Html::a('<i class="fas fa-trash"></i>', ['delete','id_pegawai'=>$model->id_pegawai], ['class' => 'btn btn-danger btn-xs']);?>
        </span>
    </td>
</tr>
        