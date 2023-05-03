<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var backend\models\DataPT $model */

$this->title = 'Update Data Pt: ' . $model->kd_pt;
$this->params['breadcrumbs'][] = ['label' => 'Data Pts', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->kd_pt, 'url' => ['view', 'kd_pt' => $model->kd_pt]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="data-pt-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
