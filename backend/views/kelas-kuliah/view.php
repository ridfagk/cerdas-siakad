<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var backend\models\KelasKuliah $model */

$this->title = $model->id_kelas;
$this->params['breadcrumbs'][] = ['label' => 'Kelas Kuliahs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="kelas-kuliah-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id_kelas' => $model->id_kelas], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id_kelas' => $model->id_kelas], [
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
            'id_kelas',
            'nama_kelas',
            'thn_akademik',
            'semester',
            'sks',
            'hari',
            'jam',
            'matkul_id',
            'prodi_id',
        ],
    ]) ?>

</div>
