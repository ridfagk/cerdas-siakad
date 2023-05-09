<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var backend\models\DataTA $model */

$this->title = 'Update Data Ta: ' . $model->id_thnakademik;
$this->params['breadcrumbs'][] = ['label' => 'Data Tas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_thnakademik, 'url' => ['view', 'id_thnakademik' => $model->id_thnakademik]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="data-ta-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
