<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var backend\models\DataMhs $model */

$this->title = 'Update Data Mhs: ' . $model->id_mahasiswa;
$this->params['breadcrumbs'][] = ['label' => 'Data Mhs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_mahasiswa, 'url' => ['view', 'id_mahasiswa' => $model->id_mahasiswa]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="data-mhs-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
