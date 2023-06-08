<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var backend\models\EvalTKM $model */

$this->title = 'Update Eval Tkm: ' . $model->id_evaldsn;
$this->params['breadcrumbs'][] = ['label' => 'Eval Tkms', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_evaldsn, 'url' => ['view', 'id_evaldsn' => $model->id_evaldsn]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="eval-tkm-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
