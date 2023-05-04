<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var backend\models\DataTemplateSurat $model */

$this->title = 'Create Data Template Surat';
$this->params['breadcrumbs'][] = ['label' => 'Data Template Surats', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="data-template-surat-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
