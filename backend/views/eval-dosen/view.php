<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var backend\models\EvalDosen $model */

$this->title = $model->id_evaldsn;
$this->params['breadcrumbs'][] = ['label' => 'Eval Dosens', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="eval-dosen-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id_evaldsn' => $model->id_evaldsn], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id_evaldsn' => $model->id_evaldsn], [
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
            'id_evaldsn',
            'dosen_id',
            'nidn',
            'nim',
            'tahun_akademik',
            'semester',
            'prodi',
            'kelas_id',
            'matkul_id',
            'pertanyaan1',
            'pertanyaan2',
            'pertanyaan3',
            'pertanyaan4',
            'pertanyaan5',
            'pertanyaan6',
            'pertanyaan7',
            'pertanyaan8',
            'pertanyaan9',
            'pertanyaan10',
            'saran',
            'total_point',
        ],
    ]) ?>

</div>
