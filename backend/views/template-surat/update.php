<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var backend\models\DataTemplateSurat $model */

$this->title = 'Update Data Template Surat: ' . $model->id_surat;
$this->params['breadcrumbs'][] = ['label' => 'Data Template Surats', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_surat, 'url' => ['view', 'id_surat' => $model->id_surat]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="data-template-surat-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
