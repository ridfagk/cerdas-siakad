<?php

use backend\models\DataTemplateSurat;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\widgets\Pjax;
/** @var yii\web\View $this */
/** @var backend\models\DataTemplateSuratSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Template Surat';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="data-template-surat-index">
    <div class="card">
        <div class="card-header">
            <?= Html::a('Tambahkan Template Surat', ['create'], ['class' => 'btn btn-success']) ?>
        </div>

        <div class="card-body">
            <?php Pjax::begin(); ?>
            <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

            <?= GridView::widget([
                'dataProvider' => $dataProvider,
                'filterModel' => $searchModel,
                'columns' => [
                    ['class' => 'yii\grid\SerialColumn'],

                    'id_surat',
                    'nama_surat',
                    'file',
                    [
                        'class' => ActionColumn::className(),
                        'urlCreator' => function ($action, DataTemplateSurat $model, $key, $index, $column) {
                            return Url::toRoute([$action, 'id_surat' => $model->id_surat]);
                        }
                    ],
                ],
            ]); ?>

            <?php Pjax::end(); ?>
        </div>
    </div>

</div>
