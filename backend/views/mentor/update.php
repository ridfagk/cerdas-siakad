<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var backend\models\Pegawai $model */

$this->title = 'Update Dosen: ' . $model->id_pegawai;
$this->params['breadcrumbs'][] = ['label' => 'Dosen', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_pegawai, 'url' => ['view', 'id_pegawai' => $model->id_pegawai]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="pegawai-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
