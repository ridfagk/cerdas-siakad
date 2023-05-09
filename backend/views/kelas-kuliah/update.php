<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var backend\models\KelasKuliah $model */

$this->title = 'Update Kelas Kuliah: ' . $model->id_kelas;
$this->params['breadcrumbs'][] = ['label' => 'Kelas Kuliahs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_kelas, 'url' => ['view', 'id_kelas' => $model->id_kelas]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="kelas-kuliah-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
