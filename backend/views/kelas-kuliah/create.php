<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var backend\models\KelasKuliah $model */

$this->title = 'Create Kelas Kuliah';
$this->params['breadcrumbs'][] = ['label' => 'Kelas Kuliahs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="kelas-kuliah-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
