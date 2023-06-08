<?php

use backend\models\EvalTKM;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\widgets\Pjax;
/** @var yii\web\View $this */
/** @var backend\models\EvalTKMSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Eval Tkms';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="eval-tkm-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Eval Tkm', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_evaldsn',
            'nim',
            'tahun_akademik',
            'semester',
            'prodi',
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
            //'pertanyaan11',
            //'pertanyaan12',
            //'pertanyaan13',
            //'pertanyaan14',
            //'pertanyaan15',
            //'pertanyaan16',
            //'pertanyaan17',
            //'pertanyaan18',
            //'pertanyaan19',
            //'pertanyaan20',
            //'pertanyaan21',
            //'pertanyaan22',
            //'pertanyaan23',
            //'pertanyaan24',
            //'pertanyaan25',
            //'saran',
            //'total_point',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, EvalTKM $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id_evaldsn' => $model->id_evaldsn]);
                 }
            ],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
