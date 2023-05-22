<?php
use yii\helpers\Html;
?>
<tr>
    <td><?= $model->kd_prodi ?></td>
    <td><?= $model->nama_prodi?></td>
    <td><?= $model->nomor_sk?></td>
    <td><?= $model->telp_prodi?></td>
    <td>
        <span>
            <?= Html::a('<i class="fas fa-pen"></i>', ['update','id_prodi'=>$model->id_prodi], ['class' => 'btn btn-warning btn-xs']);?>
            <?= Html::a('<i class="fas fa-trash"></i>', ['delete','id_prodi'=>$model->id_prodi], ['class' => 'btn btn-danger btn-xs']);?>
        </span>
    </td>
</tr>
        