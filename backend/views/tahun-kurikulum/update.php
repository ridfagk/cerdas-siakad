<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var backend\models\TahunKurikulum $model */

$this->title = 'Update Tahun Kurikulum: ' . $model->id_thnkurikulum;
$this->params['breadcrumbs'][] = ['label' => 'Tahun Kurikulums', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_thnkurikulum, 'url' => ['view', 'id_thnkurikulum' => $model->id_thnkurikulum]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tahun-kurikulum-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
