<?php

use yii\helpers\{Html, Url};
use yii\widgets\DetailView;
use yii\bootstrap5\Modal;

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
                    <h4>Detail Kelas</h4>
                </div>
                <div class="col-md-6">
                    <p style="text-align:right">
                        <a class="btn btn-warning btn-sm custom_buttona m-1" value="<?= Url::to(['update','id_kelas' => $id_kelas]) ?>">
                            <b>Update</b>
                        </a>
                        <?= Html::a('Delete', ['delete', 'id_kelas' => $model->id_kelas], [
                            'class' => 'btn btn-danger btn-sm',
                            'data' => [
                                'confirm' => 'Are you sure you want to delete this item?',
                                'method' => 'post',
                            ],
                        ]) ?>
                    </p>
                </div>
            </div>
           
            <div id="profil-page" style="display:block">
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
    

</div>
<?php
$js=<<<js
    $(function(){
        $('.custom_buttona').click(function(){
            $('#modalViewa').modal('show').find('#modalContentViewa').load($(this).attr('value'));
        
        });});

js;
$this->registerJs($js);

    Modal::begin(['id'=>'modalViewa', 'title'=>'Update Kelas','size'=>'modal-lg']);
    echo "<div id='modalContentViewa'></div>";
    Modal::end();
    
   
?>