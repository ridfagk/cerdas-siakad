<?php

use backend\models\EvalDosen;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\widgets\Pjax;
/** @var yii\web\View $this */
/** @var backend\models\EvalDosenSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Eval Dosens';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="eval-dosen-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Eval Dosen', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_evaldsn',
            'dosen_id',
            'nidn',
            'nim',
            'tahun_akademik',
            //'semester',
            //'prodi',
            //'kelas_id',
            //'matkul_id',
            //'pertanyaan1',
            //'pertanyaan2',
            //'pertanyaan3',
            //'pertanyaan4',
            //'pertanyaan5',
            //'pertanyaan6',
            //'pertanyaan7',
            //'pertanyaan8',
            //'pertanyaan9',
            //'pertanyaan10',
            //'saran',
            //'total_point',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, EvalDosen $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id_evaldsn' => $model->id_evaldsn]);
                 }
            ],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
