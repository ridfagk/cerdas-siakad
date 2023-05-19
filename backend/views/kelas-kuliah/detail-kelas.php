<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

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
            <p>
                <?= Html::a('Update', ['update', 'id_kelas' => $model->id_kelas], ['class' => 'btn btn-primary btn-sm']) ?>
                <?= Html::a('Delete', ['delete', 'id_kelas' => $model->id_kelas], [
                    'class' => 'btn btn-danger btn-sm',
                    'data' => [
                        'confirm' => 'Are you sure you want to delete this item?',
                        'method' => 'post',
                    ],
                ]) ?>
            </p>

            <div class="row">
                <div class="col-md-6">
                    <span><b>Tahun Akademik: </b><?= $model->thn_akademik ?></span>
                
                </div>
                <div class="col-md-6">
                    <span><b>Nama Kelas: </b> <?= $model->nama_kelas ?></span>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <span><b>Prodi: </b> <?= $model->prodi->nama_prodi ?></span>
                </div>
                <div class="col-md-6">
                    <span><b>Matkul: </b> <?= $model->matkul->nama_matkul ?></span>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <span><b>Semester: </b><?= $model->semester ?></span>
                
                </div>
                <div class="col-md-6">
                    <span><b>SKS: </b> <?= $model->sks ?></span>        
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <span><b>Hari: </b><?= $model->hari ?></span>
                
                </div>
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-6">
                            <span><b>Tgl Mulai: </b><?= $model->tgl_mulai ?></span>
                        </div>
                        <div class="col-md-6">
                            <span><b>Tgl Akhir: </b> <?= $model->tgl_akhir ?></span>        
                        </div>
                    </div>
                </div>
            </div>
                

            <div class="row">
                <div class="col-md-6">
                    <span><b>Jam Mulai: </b><?= $model->jam_mulai ?></span>
                </div>
                <div class="col-md-6">
                    <span><b>Jam Akhir: </b><?= $model->jam_akhir ?></span>
                </div>
            </div>

           
            
        </div>
    </div>
    

</div>
