<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var backend\models\EvalMatkul $model */

$this->title = $model->id_evalmk;
$this->params['breadcrumbs'][] = ['label' => 'Eval Matkuls', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="eval-matkul-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id_evalmk' => $model->id_evalmk], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id_evalmk' => $model->id_evalmk], [
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
            'id_evalmk',
            'kelas_id',
            'matkul_id',
            'nim',
            'tahun_akademik',
            'semester',
            'prodi',
            'pertanyaan1',
            'pertanyaan2',
            'pertanyaan3',
            'pertanyaan4',
            'pertanyaan5',
            'total_point',
        ],
    ]) ?>

</div>
