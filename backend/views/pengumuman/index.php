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
    <div class="card">
        <div class="card-header">
            <?= Html::a('Buat Pengumuman', ['create'], ['class' => 'btn btn-success']) ?>
        </div>

        <div class="card-body">
            <?php Pjax::begin(); ?>
            <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

            <?= GridView::widget([
                'dataProvider' => $dataProvider,
                'filterModel' => $searchModel,
                'columns' => [
                    ['class' => 'yii\grid\SerialColumn'],
                    'judul',
                    'isi',
                    'jenis_user',
                    'banner',
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
    </div>
</div>
