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

            'thn_akademik',
            'nama_kelas',
            ['attribute'=>'matkul_id',
                'value'=>'matkul.nama_matkul',
            ],
            ['attribute'=>'prodi_id',
                'value'=>'prodi.nama_prodi',
            ],
            ['attribute'=>'pengajar',
                'value'=>'dosen.pegawai_id',
            ],
            'semester',
            'sks',
            'hari',
            //'jam',
            //'matkul_id',
            [
                'class' => 'yii\grid\ActionColumn',
                'header' => 'Actions',
                'headerOptions' => ['style' => 'color:#337ab7'],
                'template' => '{view}{delete}',
                'buttons' => [
                  'view' => function ($url, $model) {
                      return Html::a('<i class="fas fa-eye"></i>', $url, [
                                  'title' => Yii::t('app', 'lead-view'),
                      ]);
                  },

                  'delete' => function ($url, $model) {
                      return Html::a('<i class="fas fa-trash"></i>', $url, [
                                  'title' => Yii::t('app', 'lead-delete'),
                      ]);
                  }
      
                ],
                'urlCreator' => function ($action, $model, $key, $index) {
                  if ($action === 'view') {
                      $url ='detail-kelas?id_kelas='.$model->id_kelas;
                      return $url;
                  }
      
                  if ($action === 'delete') {
                      $url ='detail-kelas?id_kelas='.$model->id_kelas;
                      return $url;
                  }
      
                }
                ],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
