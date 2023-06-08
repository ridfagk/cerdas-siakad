<?php

use backend\models\EvalMatkul;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\widgets\{Pjax, ListView};

/** @var yii\web\View $this */
/** @var backend\models\EvalMatkulSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Evaluasi Mata Kuliah';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="eval-matkul-index">
    <div class="card card-body">

        <?php Pjax::begin(); ?>
        <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
        <table class="table table-bordered">
            <thead>
            <tr>
                <th>nim</th>
                <th>kelas_id</th>
                <th>matkul_id</th>
                <th>Prodi</th>
                <th>Semester</th>
                <th>Tahun Akademik</th>
                <th>Total Point</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
                <?= ListView::widget([
                                                    'options' => ['class' => 'list-view'],
                                                    'dataProvider' => $dataProvider,
                                                    
                                                    'itemView' => '_eval_matkul_item',
                                                    'pager' => [
                                                        'options'=>['class'=>'pagination justify-content-center pagination-sm','style'=>'display:none'],   // set clas name used in ui list of pagination
                                                    ],      
                                        ]) ?>

                
            </tbody>
        </table>

        <?php Pjax::end(); ?>
    </div>

</div>
