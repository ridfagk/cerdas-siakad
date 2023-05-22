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
                    <h4>Tim Pengajar</h4>
                </div>
                <div class="col-md-6">
                    <p style="text-align:right">
                        <a class="btn btn-primary btn-sm custom_buttona text-white m-1" value="<?= Url::to(['add-pengajar','id_kelas' => $id_kelas]) ?>">
                            <b><i class="fas fa-plus"></i> Tambah Pengajar</b>
                        </a>
                    
                    </p>
                </div>
            </div>
            

            <div class="row">
                <div class="col-md-6">
                    <span><b>Tahun Akademik: </b><?= $kelas->thn_akademik ?></span>
                
                </div>
                <div class="col-md-6">
                    <span><b>Nama Kelas: </b> <?= $kelas->nama_kelas ?></span>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <span><b>Prodi: </b> <?= $kelas->prodi->nama_prodi ?></span>
                </div>
                <div class="col-md-6">
                    <span><b>Matkul: </b> <?= $kelas->matkul->nama_matkul ?></span>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <span><b>Semester: </b><?= $kelas->semester ?></span>
                
                </div>
                <div class="col-md-6">
                    <span><b>SKS: </b> <?= $kelas->sks ?></span>        
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <span><b>Hari: </b><?= $kelas->hari ?></span>
                
                </div>
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-6">
                            <span><b>Tgl Mulai: </b><?= $kelas->tgl_mulai ?></span>
                        </div>
                        <div class="col-md-6">
                            <span><b>Tgl Akhir: </b> <?= $kelas->tgl_akhir ?></span>        
                        </div>
                    </div>
                </div>
            </div>
                

            <div class="row">
                <div class="col-md-6">
                    <span><b>Jam Mulai: </b><?= $kelas->jam_mulai ?></span>
                </div>
                <div class="col-md-6">
                    <span><b>Jam Akhir: </b><?= $kelas->jam_akhir ?></span>
                </div>
            </div>

           <hr>
            <h4>Pengajar</h4>
            <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>Nama Dosen/Mentor</th>
                    <th>Tipe Pengajar</th>
                    <th>Status</th>
                    
                  </tr>
                  </thead>
                  <tbody>
                    <?php foreach ($model as $pengajar) { ?>
                        <tr>
                    <td><?= $pengajar->pegawai->nama_pegawai?></td>
                    <td><?= $pengajar->pegawai->jabatan?></td>
                    <td><?= $pengajar->status?></td>
                    
                  </tr>
                    <?php } ?>
                  
                 
                  </tbody>
                  
                </table>
            
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

    Modal::begin(['id'=>'modalViewa', 'title'=>'Tambah Dosen Pengajar','size'=>'modal-md']);
    echo "<div id='modalContentViewa'></div>";
    Modal::end();
    
   
?>
