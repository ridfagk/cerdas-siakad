<?php
use yii\helpers\{Html,Url};

?>
<tr>
    <td><?= $model->bulan?></td>
    <td><?= $model->tahun?></td>

    <td>
        <span>
            <?= Html::a('<i class="fas fa-eye"></i>', ['honor-detail','id_honor' => $model->id_honor, 'id_pegawai' => $model->pegawai_id], ['class' => 'btn btn-info btn-xs', 'target'=>'_blank']);?>
            <?= Html::a('<i class="fas fa-pen"></i>', ['edit-honor','id_honor' => $model->id_honor, 'id_pegawai' => $model->pegawai_id], ['class' => 'btn btn-warning btn-xs']);?>
            <?= Html::a('<i class="fas fa-trash"></i>', ['delete','id_kelas'=>$model->id_honor], ['class' => 'btn btn-danger btn-xs']);?>
        </span>
    </td>
</tr>
    