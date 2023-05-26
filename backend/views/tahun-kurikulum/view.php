<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var backend\models\TahunKurikulum $model */

$this->title = $model->id_thnkurikulum;
$this->params['breadcrumbs'][] = ['label' => 'Tahun Kurikulums', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="tahun-kurikulum-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id_thnkurikulum' => $model->id_thnkurikulum], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id_thnkurikulum' => $model->id_thnkurikulum], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_thnkurikulum',
            'tahun',
            'tgl_mulai',
            'tgl_selesai',
        ],
    ]) ?>

</div>
