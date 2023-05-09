<?php

use backend\models\DataProdi;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\widgets\Pjax;
/** @var yii\web\View $this */
/** @var backend\models\DataProdiSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Data Prodi';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="data-prodi-index">

    <p>
        <?= Html::a('Create Data Prodi', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_prodi',
            'kd_prodi',
            'nama_prodi',
            'nomor_sk',
            'telp_prodi',
            //'email_prodi:email',
            //'nama_pt',
            //'thn_berdiri',
            //'alamat_prodi',
            //'akreditasi',
            //'deskripsi',
            //'visi',
            //'misi',
            //'kompetensi',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, DataProdi $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id_prodi' => $model->id_prodi]);
                 }
            ],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
