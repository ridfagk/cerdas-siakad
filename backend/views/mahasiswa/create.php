<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var backend\models\DataMhs $model */

$this->title = 'Create Data Mhs';
$this->params['breadcrumbs'][] = ['label' => 'Data Mhs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="data-mhs-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
