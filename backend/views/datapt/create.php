<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var backend\models\DataPT $model */

$this->title = 'Data Perguruan Tinggi';
$this->params['breadcrumbs'][] = ['label' => 'Data Pts', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="data-pt-create">
    <div class="card card-body">
       
                <?= $this->render('_form', [
                    'model' => $model,
                ]) ?>

    </div>

</div>
