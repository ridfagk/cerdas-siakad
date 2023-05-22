<?php

use backend\models\Pegawai;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\widgets\Pjax;
/** @var yii\web\View $this */
/** @var backend\models\MentorSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Pegawais';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pegawai-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Pegawai', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_pegawai',
            'nip',
            'nidn',
            'nama_pegawai',
            'alamat_pegawai:ntext',
            //'no_telp',
            //'tempat_lahir',
            //'tgl_lahir',
            //'agama',
            //'jenis_kelamin',
            //'email:email',
            //'tgl_masuk',
            //'jabatan',
            //'pendidikan_akhir',
            //'status_ikatankerja',
            //'status_aktif',
            //'foto:ntext',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Pegawai $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id_pegawai' => $model->id_pegawai]);
                 }
            ],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
