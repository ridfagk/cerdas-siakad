<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var backend\models\DataProdi $model */

$this->title = $model->id_prodi;
$this->params['breadcrumbs'][] = ['label' => 'Data Prodis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="data-prodi-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id_prodi' => $model->id_prodi], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id_prodi' => $model->id_prodi], [
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
            'id_prodi',
            'kd_prodi',
            'nama_prodi',
            'nomor_sk',
            'telp_prodi',
            'email_prodi:email',
            'nama_pt',
            'thn_berdiri',
            'alamat_prodi',
            'akreditasi',
            'deskripsi',
            'visi',
            'misi',
            'kompetensi',
        ],
    ]) ?>

</div>
