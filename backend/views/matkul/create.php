<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var backend\models\MataKuliah $model */

$this->title = 'Tambah Mata Kuliah';
$this->params['breadcrumbs'][] = ['label' => 'Mata Kuliahs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mata-kuliah-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
