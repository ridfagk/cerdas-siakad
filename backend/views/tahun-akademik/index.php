<?php

use backend\models\DataTA;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\widgets\Pjax;
/** @var yii\web\View $this */
/** @var backend\models\DataTASearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Tahun Akademik';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="data-ta-index">
    <div class="card">

        <div class="card-header">
            <?= Html::a('Tambah Tahun Akademik', ['create'], ['class' => 'btn btn-success']) ?>
        </div>

        <div class="card-body">
            <?php Pjax::begin(); ?>
            <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

            <?= GridView::widget([
                'dataProvider' => $dataProvider,
                'filterModel' => $searchModel,
                'columns' => [
                    ['class' => 'yii\grid\SerialColumn'],

                    'kd_ta',
                    'thn_akademik',
                    'status',
                    [
                        'class' => ActionColumn::className(),
                        'urlCreator' => function ($action, DataTA $model, $key, $index, $column) {
                            return Url::toRoute([$action, 'id_thnakademik' => $model->id_thnakademik]);
                        }
                    ],
                ],
            ]); ?>

            <?php Pjax::end(); ?>
        </div>
    </div>

</div>
