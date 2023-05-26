<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use kartik\tabs\TabsX;

/** @var yii\web\View $this */
/** @var backend\models\Pegawai $model */

$this->title = 'Mahasiswa';
$this->params['breadcrumbs'][] = ['label' => 'mahasiswa', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
//\yii\web\YiiAsset::register($this);
?>

<div class="row">
    
        <div class="col-md-2">
            <?= $this->render('sidemenu') ?>
        </div>
        <div class="col-md-10">
        <div class="card card-body">
            <h4>Biodata Mahasiswa</h4><hr>
            <div class="row">
                <div class="col-md-3">
                    <?= Html::img('@imageurl/frontend/web/img/user.png',['width' => '150'])?>
                </div>
                <div class="col-md-9">
                    
                    <p class="pt-1">
                        <?= Html::a('Update', ['update', 'nim' => $model->nim], ['class' => 'btn btn-primary']) ?>
                        <?= Html::a('Delete', ['delete', 'id_mahasiswa' => $model->id_mahasiswa], [
                            'class' => 'btn btn-danger',
                            'data' => [
                                'confirm' => 'Are you sure you want to delete this item?',
                                'method' => 'post',
                            ],
                        ]) ?>
                    </p>
                </div>
            </div>
            
                
            <div class="pt-4">
                <div class="row">
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-sm-4">
                            <h6 class="mb-0">Nama Dosen</h6>
                            </div>
                            <div class="col-sm-8 text-secondary">
                            <?= $model->nama_mahasiswa?>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-sm-4">
                            <h6 class="mb-0">NIM</h6>
                            </div>
                            <div class="col-sm-8 text-secondary">
                            <?= $model->nim?>
                            </div>
                        </div>
                    </div>
                </div><hr>

                <div class="row">
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-sm-4">
                            <h6 class="mb-0">Email</h6>
                            </div>
                            <div class="col-sm-8 text-secondary">
                            <?= $model->email?>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-sm-4">
                            <h6 class="mb-0">No Telpon</h6>
                            </div>
                            <div class="col-sm-8 text-secondary">
                            <?= $model->no_telp?>
                            </div>
                        </div>
                    </div>
                </div><hr>

                <div class="row">
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-sm-4">
                            <h6 class="mb-0">Tempat Lahir</h6>
                            </div>
                            <div class="col-sm-8 text-secondary">
                            <?= $model->tempat_lahir?>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-sm-4">
                            <h6 class="mb-0">Tanggal Lahir</h6>
                            </div>
                            <div class="col-sm-8 text-secondary">
                            <?= $model->tempat_lahir?>
                            </div>
                        </div>
                    </div>
                </div><hr>

                <div class="row">
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-sm-4">
                            <h6 class="mb-0">Jenis Kelamin</h6>
                            </div>
                            <div class="col-sm-8 text-secondary">
                            <?= $model->jenis_kelamin?>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-sm-4">
                            <h6 class="mb-0">Agama</h6>
                            </div>
                            <div class="col-sm-8 text-secondary">
                            <?= $model->agama?>
                            </div>
                        </div>
                    </div>
                </div><hr>

               
                </div>
            
            </div>
        </div>
</div>


