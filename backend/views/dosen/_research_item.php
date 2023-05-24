<?php
use yii\helpers\{Html, Url};

?>
<tr>
    <td><?= $model->judul_research?></td>
    <td><?= $model->penjelasan?></td>
    <td><?= $model->tahun_srch?></td>
    <td><?= $model->jenis_srch?></td>

    <td>
        <span>
            <a class="btn btn-warning btn-xs custom_buttona" value="<?= Url::to(['edit-research','id_rsch' => $model->id_rsch, 'id_pegawai' => $model->pegawai_id]) ?>">
                <i class="fas fa-pen"></i>
            </a>
            <?= Html::a('<i class="fas fa-trash"></i>', ['delete','id_kelas'=>$model->pegawai_id], ['class' => 'btn btn-danger btn-xs']);?>
        </span>
    </td>
</tr>
    