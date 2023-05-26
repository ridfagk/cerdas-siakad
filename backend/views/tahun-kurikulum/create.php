<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var backend\models\TahunKurikulum $model */

$this->title = 'Create Tahun Kurikulum';
$this->params['breadcrumbs'][] = ['label' => 'Tahun Kurikulums', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tahun-kurikulum-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
