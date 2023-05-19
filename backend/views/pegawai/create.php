<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var backend\models\Pegawai $model */

$this->title = 'Tambah Pegawai';
$this->params['breadcrumbs'][] = ['label' => 'Pegawais', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pegawai-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
