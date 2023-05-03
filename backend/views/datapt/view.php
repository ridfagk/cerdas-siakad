<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var backend\models\DataPT $model */

$this->title = $model->kd_pt;
$this->params['breadcrumbs'][] = ['label' => 'Data Pts', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="data-pt-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'kd_pt' => $model->kd_pt], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'kd_pt' => $model->kd_pt], [
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
            'kd_pt',
            'nama_pt',
            'tahun_berdiri',
            'pendiri',
            'alamat_pt:ntext',
            'provinsi',
            'kabupaten',
            'kecamatan',
            'desa',
            'kode_pos',
            'email:email',
            'website',
            'no_telp',
            'akta_pendirian',
            'akreditasi',
            'status',
        ],
    ]) ?>

</div>
