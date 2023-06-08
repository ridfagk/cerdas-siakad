<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var backend\models\EvalMatkul $model */

$this->title = 'Create Eval Matkul';
$this->params['breadcrumbs'][] = ['label' => 'Eval Matkuls', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="eval-matkul-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
