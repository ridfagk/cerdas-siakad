<?php
use yii\helpers\{Html, Url};
?>
<td class="col-lg-1">
    <?= isset($model->mahasiswa_id)?$model->mhs->nama_mahasiswa:''?>
</td>
<td class="col-lg-2">
    <?= Html::activeTextInput($model, "[p1]", ['data-field' => 'price', 'size' => 16, 'id' => false, 'class' => 'form-control ',]) ?>
</td>