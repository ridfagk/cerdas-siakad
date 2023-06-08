<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var backend\models\EvalTKM $model */

$this->title = $model->id_evaldsn;
$this->params['breadcrumbs'][] = ['label' => 'Eval Tkms', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="eval-tkm-view">

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
            'nim',
            'tahun_akademik',
            'semester',
            'prodi',
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
            'pertanyaan11',
            'pertanyaan12',
            'pertanyaan13',
            'pertanyaan14',
            'pertanyaan15',
            'pertanyaan16',
            'pertanyaan17',
            'pertanyaan18',
            'pertanyaan19',
            'pertanyaan20',
            'pertanyaan21',
            'pertanyaan22',
            'pertanyaan23',
            'pertanyaan24',
            'pertanyaan25',
            'saran',
            'total_point',
        ],
    ]) ?>

</div>
