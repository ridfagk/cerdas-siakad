<?php

use backend\models\MataKuliah;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\widgets\Pjax;
/** @var yii\web\View $this */
/** @var backend\models\MataKuliahSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Data Mata Kuliah';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mata-kuliah-index">

    <p>
        <?= Html::a('Tambahkan Mata Kuliah', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
    
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'semester',
            'kd_matkul',
            'nama_matkul',
            'sks',
            
            //'porsi_uts',
            //'porsi_uas',
            //'porsi_tugas',
            //'porsi_keaktifan',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, MataKuliah $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id_matkul' => $model->id_matkul]);
                 }
            ],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
