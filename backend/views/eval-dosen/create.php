<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var backend\models\EvalDosen $model */

$this->title = 'Create Eval Dosen';
$this->params['breadcrumbs'][] = ['label' => 'Eval Dosens', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="eval-dosen-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
