<?php

use backend\models\DataPT;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\widgets\Pjax;
/** @var yii\web\View $this */
/** @var backend\models\DataPTSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Data Perguruan Tinggi';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="data-pt-index">

    <p>
        <?= Html::a('Create Data Pt', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'kd_pt',
            'nama_pt',
            'tahun_berdiri',
            'pendiri',
            'alamat_pt:ntext',
            //'provinsi',
            //'kabupaten',
            //'kecamatan',
            //'desa',
            //'kode_pos',
            //'email:email',
            //'website',
            //'no_telp',
            //'akta_pendirian',
            //'akreditasi',
            //'status',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, DataPT $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'kd_pt' => $model->kd_pt]);
                 }
            ],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
