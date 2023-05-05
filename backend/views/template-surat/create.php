<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var backend\models\DataTemplateSurat $model */

$this->title = 'Tambah Template Surat';
$this->params['breadcrumbs'][] = ['label' => 'Data Template Surats', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="data-template-surat-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
