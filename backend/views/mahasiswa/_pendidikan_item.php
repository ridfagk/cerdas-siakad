<?php
use yii\helpers\{Html,Url};

?>
<tr>
    <td><?= $model->jenjang?></td>
    <td><?= $model->nama_sekolah?></td>
    <td><?= $model->jurusan?></td>
    
    <td>
        <span>
            <a class="btn btn-warning btn-xs custom_buttonb" value="<?= Url::to(['form-pendidikan','id_rwypend' => $model->id_rwypend, 'nim' => $model->nim]) ?>">
                <i class="fas fa-pen"></i>
            </a>
            <?= Html::a('<i class="fas fa-trash"></i>', ['delete','id_rwypend'=>$model->id_rwypend], ['class' => 'btn btn-danger btn-xs']);?>
        </span>
    </td>
</tr>
    