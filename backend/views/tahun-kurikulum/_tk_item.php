<?php
use yii\helpers\Html;
?>
<tr>
    <td><?= $model->tahun ?></td>
    <td><?= $model->tgl_mulai?></td>
    <td><?= $model->tgl_selesai?></td>
    <td>
        <span>
            <?= Html::a('<i class="fas fa-pen"></i>', ['update','id_matkul'=>$model->id_thnkurikulum], ['class' => 'btn btn-warning btn-xs']);?>
            <?= Html::a('<i class="fas fa-trash"></i>', ['delete','id_matkul'=>$model->id_thnkurikulum], ['class' => 'btn btn-danger btn-xs']);?>
        </span>
    </td>
</tr>
        