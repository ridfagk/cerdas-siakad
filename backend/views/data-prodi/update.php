<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var backend\models\DataProdi $model */

$this->title = 'Update Data Prodi: ' . $model->id_prodi;
$this->params['breadcrumbs'][] = ['label' => 'Data Prodis', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_prodi, 'url' => ['view', 'id_prodi' => $model->id_prodi]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="data-prodi-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
