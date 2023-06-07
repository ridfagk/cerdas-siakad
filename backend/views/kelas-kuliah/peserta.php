<?php

use yii\helpers\{Html, Url};
use yii\widgets\DetailView;
use yii\bootstrap5\Modal;
use yii\widgets\{Pjax, ListView};

/** @var yii\web\View $this */
/** @var backend\models\KelasKuliah $model */

$this->title = 'Data Kelas';
$this->params['breadcrumbs'][] = ['label' => 'Kelas Kuliahs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="kelas-kuliah-view">
    <div class="row">
        <div class="col-md-2">
            <?= $this->render('sidemenu') ?>
        </div>
        <div class="col-md-10 card card-body">
            <div class="row">
                <div class="col-md-6">
                    <h4>Peserta Kelas</h4>
                </div>
                <div class="col-md-6">
                    <p style="text-align:right">
                        <a class="btn btn-warning btn-sm custom_buttona m-1" value="<?= Url::to(['update','id_kelas' => $id_kelas]) ?>">
                            <b>Update</b>
                        </a>
                        <?php
                        //  Html::a('Delete', ['delete', 'id_kelas' => $model->kelas_id], [
                        //     'class' => 'btn btn-danger btn-sm',
                        //     'data' => [
                        //         'confirm' => 'Are you sure you want to delete this item?',
                        //         'method' => 'post',
                        //     ],
                        // ]) ?>
                    </p>
                </div>
            </div>
           
            <div id="profil-page" style="display:block">
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th>NIM</th>
                        <th>Nama Mahasiswa</th>
                        <th width="15%">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                        <?= ListView::widget([
                                        'options' => ['class' => 'list-view'],
                                        'dataProvider' => $peserta,
                                        
                                        'itemView' => '_peserta_item',
                                        'pager' => [
                                            'options'=>['class'=>'pagination justify-content-center pagination-sm','style'=>'display:none'],   // set clas name used in ui list of pagination
                                        ],      
                            ]) ?>
                    </tbody>
                </table>
           
            </div>
           
            
        </div>
    </div>
    

</div>