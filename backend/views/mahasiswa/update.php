<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var backend\models\DataMhs $model */

$this->title = 'Mahasiswa';
$this->params['breadcrumbs'][] = ['label' => 'Data Mhs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_mahasiswa, 'url' => ['view', 'id_mahasiswa' => $model->id_mahasiswa]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="row">
    <div class="col-md-2">
        <?= $this->render('sidemenu') ?>
    </div>
    <div class="col-md-10">
        <div class="card card-body">

    <h4><?= Html::encode($this->title) ?></h4>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>
    </div>
</div>

