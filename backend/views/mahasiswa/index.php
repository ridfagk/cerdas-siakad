<?php

use backend\models\DataMhs;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\widgets\Pjax;
/** @var yii\web\View $this */
/** @var backend\models\DataMhsSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Mahasiswa';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="data-mhs-index">    

    <p>
        <?= Html::a('Tambah Mahasiswa', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_mahasiswa',
            'nim',
            'nama_mahasiswa',
            'no_telp',
            'tempat_lahir',
            //'tgl_lahir',
            //'agama',
            //'jenis_kelamin',
            //'email:email',
            //'tgl_masuk',
            //'prodi_id',
            //'angkatan',
            //'status_akademis',
            //'foto:ntext',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, DataMhs $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id_mahasiswa' => $model->id_mahasiswa]);
                 }
            ],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
