<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var backend\models\DataPT $model */

$this->title = 'Create Data Pt';
$this->params['breadcrumbs'][] = ['label' => 'Data Pts', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="data-pt-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
