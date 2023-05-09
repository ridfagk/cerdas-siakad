<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var backend\models\DataTA $model */

$this->title = 'Tambah Tahun Akademik';
$this->params['breadcrumbs'][] = ['label' => 'Data Tas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="data-ta-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
