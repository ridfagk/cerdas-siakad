<?php

use backend\models\Pengumuman;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\widgets\Pjax;
/** @var yii\web\View $this */
/** @var backend\models\PengumumanSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Pengumuman';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pengumuman-index">

    <p>
        <?= Html::a('Buat Pengumuman', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_pengumuman',
            'judul',
            'isi',
            'jenis_user',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Pengumuman $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id_pengumuman' => $model->id_pengumuman]);
                 }
            ],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
