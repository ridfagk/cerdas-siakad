<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var backend\models\EvalMatkul $model */

$this->title = 'Update Eval Matkul: ' . $model->id_evalmk;
$this->params['breadcrumbs'][] = ['label' => 'Eval Matkuls', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_evalmk, 'url' => ['view', 'id_evalmk' => $model->id_evalmk]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="eval-matkul-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
