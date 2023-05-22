<?php
use yii\helpers\Html;
?>
<tr>
    <td><?= $model->kd_ta ?></td>
    <td><?= $model->thn_akademik?></td>
    <td>
        <?php if($model->status == 'Aktif'){ ?>
            <span class="badge bg-success"><?= $model->status?></span>
        <?php } else { ?>
            <span class="badge bg-danger"><?= $model->status?></span>
        <?php } ?>
    </td>
    <td>
        <span>
            <?= Html::a('<i class="fas fa-pen"></i>', ['update','id_matkul'=>$model->id_thnakademik], ['class' => 'btn btn-warning btn-xs']);?>
            <?= Html::a('<i class="fas fa-trash"></i>', ['delete','id_matkul'=>$model->id_thnakademik], ['class' => 'btn btn-danger btn-xs']);?>
        </span>
    </td>
</tr>
        