<?php

use backend\models\DataTA;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\widgets\{Pjax, ListView};
use yii\grid\GridView;
use yii\bootstrap5\LinkPager;
/** @var yii\web\View $this */
/** @var backend\models\DataTASearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Tahun Akademik';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="data-ta-index">
    
    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
        <div class="card">
            <div class="card-header" style="text-align:right">
                <?= Html::a('<i class="fas fa-plus-circle"></i> Tambah Tahun Kurikulum', ['create'], ['class' => 'btn btn-primary btn-sm']) ?>
            </div>
            <!-- /.card-header -->
            <div class="card-body table-responsive">
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th>Tahun Kurikulum</th>
                        <th>Tanggal Mulai</th>
                        <th>Tanggal Selesai</th>
                        <th >Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?= ListView::widget([
                                        'options' => ['class' => 'list-view'],
                                        'dataProvider' => $dataProvider,
                                        
                                        'itemView' => '_tk_item',
                                        'pager' => [
                                            'options'=>['class'=>'pagination justify-content-center pagination-sm','style'=>'display:none'],   // set clas name used in ui list of pagination
                                        ],      
                            ]) ?>
                        
                    </tbody>
                </table>
                </div>
                <!-- /.card-body -->
                <div class="card-footer clearfix">
                <?= 
                    LinkPager::widget([
                        'pagination' => $pagination,
                        'listOptions'=>['class'=>'justify-content-center pagination pagination-sm'],
                        'prevPageLabel' => '<i class="fas fa-angle-left"></i>',   // Set the label for the "previous" page button 
                        'nextPageLabel' => '<i class="fas fa-angle-right"></i>',   // Set the label for the "next" page button
                        'firstPageLabel'=>'<i class="fas fa-angle-double-left"></i>',   // Set the label for the "first" page button
                        'lastPageLabel'=>'<i class="fas fa-angle-double-right"></i>',    // Set the label for the "last" page button
                        'maxButtonCount'=>5,
                        'options' => [
                            'class' => 'ip-mosaic__pagin-list',
                        ],
                    ]); 
                ?>
                </div>
        </div>

    <?php Pjax::end(); ?>
        

</div>
