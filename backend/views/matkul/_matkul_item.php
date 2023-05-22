<?php
use yii\helpers\Html;
?>
<tr>
    <td><?= $model->kd_matkul ?>.</td>
    <td><?= $model->nama_matkul?></td>
    <td><?= $model->semester?></td>
    <td><?= $model->sks?></td>
    <td>
        <span>
            <?= Html::a('<i class="fas fa-pen"></i>', ['update','id_matkul'=>$model->id_matkul], ['class' => 'btn btn-warning btn-xs']);?>
            <?= Html::a('<i class="fas fa-trash"></i>', ['delete','id_matkul'=>$model->id_matkul], ['class' => 'btn btn-danger btn-xs']);?>
        </span>
    </td>
</tr>
        