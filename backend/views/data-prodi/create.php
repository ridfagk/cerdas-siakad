<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var backend\models\DataProdi $model */

$this->title = 'Tambah Prodi';
$this->params['breadcrumbs'][] = ['label' => 'Data Prodis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="data-prodi-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
