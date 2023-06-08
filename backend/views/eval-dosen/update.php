<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var backend\models\EvalDosen $model */

$this->title = 'Update Eval Dosen: ' . $model->id_evaldsn;
$this->params['breadcrumbs'][] = ['label' => 'Eval Dosens', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_evaldsn, 'url' => ['view', 'id_evaldsn' => $model->id_evaldsn]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="eval-dosen-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
