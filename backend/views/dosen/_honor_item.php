<?php
use yii\helpers\{Html,Url};

?>
<tr>
    <td><?= $model->bulan?></td>
    <td><?= $model->tahun?></td>
    <td><?= $model->total_honor?></td>

    <td>
        <span>
            <a class="btn btn-info btn-xs custom_buttonb" value="<?= Url::to(['edit-pendidikan','id_honor' => $model->id_honor, 'id_pegawai' => $model->pegawai_id]) ?>">
                <i class="fas fa-eye"></i>
            </a>
            <a class="btn btn-warning btn-xs custom_buttonb" value="<?= Url::to(['edit-pendidikan','id_honor' => $model->id_honor, 'id_pegawai' => $model->pegawai_id]) ?>">
                <i class="fas fa-pen"></i>
            </a>
            <?= Html::a('<i class="fas fa-trash"></i>', ['delete','id_kelas'=>$model->id_honor], ['class' => 'btn btn-danger btn-xs']);?>
        </span>
    </td>
</tr>
    