<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var backend\models\EvalTKM $model */

$this->title = 'Create Eval Tkm';
$this->params['breadcrumbs'][] = ['label' => 'Eval Tkms', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="eval-tkm-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
