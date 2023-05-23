<?php
use yii\helpers\Html;

?>
<tr>
    <td><?= $model->judul_research?></td>
    <td><?= $model->penjelasan?></td>
    <td><?= $model->tahun_srch?></td>
    <td><?= $model->jenis_srch?></td>

    <td>
        <span>
            <?= Html::a('<i class="fas fa-eye"></i>', ['detail-kelas','id_kelas'=>$model->pegawai_id], ['class' => 'btn btn-info btn-xs']);?>
            <?= Html::a('<i class="fas fa-pen"></i>', ['update','id_kelas'=>$model->pegawai_id], ['class' => 'btn btn-warning btn-xs']);?>
            <?= Html::a('<i class="fas fa-trash"></i>', ['delete','id_kelas'=>$model->pegawai_id], ['class' => 'btn btn-danger btn-xs']);?>
        </span>
    </td>
</tr>
    