<?php

use backend\models\KelasKuliah;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\widgets\Pjax;
/** @var yii\web\View $this */
/** @var backend\models\KelasKuliahSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Kelas Kuliah';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="kelas-kuliah-index">

    <p>
        <?= Html::a('Tambah Kelas Kuliah', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_kelas',
            'nama_kelas',
            'thn_akademik',
            'semester',
            'sks',
            //'hari',
            //'jam',
            //'matkul_id',
            //'prodi_id',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, KelasKuliah $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id_kelas' => $model->id_kelas]);
                 }
            ],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
