<?php

use yii\helpers\Html;

?>
<div class="row">
    <div class="col-md-2">
        <?= $this->render('sidemenu') ?>
    </div>
    <div class="col-md-10">
        <div class="card card-body">

            <h4>Riwayat Kesehatan Mahasiswa</h4><hr>

            <?php if (empty($model)) { ?>
                <center>
                    <h5>Data riwayat kesehatan masih kosong, silakan isi terlebih dahulu</h5>
                    <?= Html::a('Isi Data Riwayat Kesehatan', ['form-riwayatsehat', 'nim' => $_GET['nim']], ['class' => 'btn btn-primary']) ?>
                </center>
            <?php }else{ ?>
                <div class="mb-3" style="text-align:right">
                <?= Html::a('Edit Data Riwayat Kesehatan', ['form-riwayatsehat', 'nim' => $_GET['nim']], ['class' => 'btn btn-warning btn-sm']) ?>
                </div>
                        <div class="row py-1">
                            <div class="col-md-4">
                                <div class="row">
                                    <div class="col-sm-6">
                                    <h6 class="mb-0">Berat Badan</h6>
                                    </div>
                                    <div class="col-sm-6 text-secondary">
                                    <?= $model->berat?>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="row">
                                    <div class="col-sm-6">
                                    <h6 class="mb-0">Tinggi Badan</h6>
                                    </div>
                                    <div class="col-sm-6 text-secondary">
                                    <?= $model->tinggi?>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="row">
                                    <div class="col-sm-6">
                                    <h6 class="mb-0">Golongan Darah</h6>
                                    </div>
                                    <div class="col-sm-6 text-secondary">
                                    <?= $model->goldar?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row py-1">
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-sm-5">
                                    <h6 class="mb-0">Keadaan Mata</h6>
                                    </div>
                                    <div class="col-sm-7 text-secondary">
                                    <?= $model->keadaan_mata?>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-sm-5">
                                    <h6 class="mb-0">Alat Bantu Penglihatan</h6>
                                    </div>
                                    <div class="col-sm-7 text-secondary">
                                    <?= $model->alat_mata?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row py-1">
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-sm-5">
                                    <h6 class="mb-0">Keadaan Telinga</h6>
                                    </div>
                                    <div class="col-sm-7 text-secondary">
                                    <?= $model->keadaan_telinga?>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-sm-5">
                                    <h6 class="mb-0">Alat Bantu Pendengaran</h6>
                                    </div>
                                    <div class="col-sm-7 text-secondary">
                                    <?= $model->alat_telinga?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-5">
                            <h6 class="mb-0">Penyakit Berat yang Pernah Diderita</h6>
                            </div>
                            <div class="col-sm-7 text-secondary">
                            <?= $model->sakit_berat?>
                            </div>
                        </div>
                    
                
            <?php } ?>

        </div>    
    </div>
</div>
