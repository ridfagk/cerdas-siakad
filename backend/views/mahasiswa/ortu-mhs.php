<?php

use yii\helpers\Html;

?>
<div class="row">
    <div class="col-md-2">
        <?= $this->render('sidemenu') ?>
    </div>
    <div class="col-md-10">
        <div class="card card-body">

            <h4>Ortu Mahasiswa</h4><hr>

            <?php if (empty($model)) { ?>
                <center>
                    <h5>Data Orang Tua mahasiswa masih kosong, silakan isi terlebih dahulu</h5>
                    <?= Html::a('Isi Data Orang Tua', ['form-ortu', 'nim' => $_GET['nim']], ['class' => 'btn btn-primary']) ?>
                </center>
            <?php }else{ ?>
                <div style="text-align:right">
                <?= Html::a('Edit Data Orang Tua', ['form-ortu', 'nim' => $_GET['nim']], ['class' => 'btn btn-warning btn-sm']) ?>
                </div>
                <h5><b>Data Ayah</b></h5>
                        <div class="row py-1">
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-sm-4">
                                    <h6 class="mb-0">Nama Ayah</h6>
                                    </div>
                                    <div class="col-sm-8 text-secondary">
                                    <?= $model->nama_ayah?>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-sm-4">
                                    <h6 class="mb-0">NIK</h6>
                                    </div>
                                    <div class="col-sm-8 text-secondary">
                                    <?= $model->nik_ayah?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row py-1">
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-sm-4">
                                    <h6 class="mb-0">Tempat & Tanggal Lahir</h6>
                                    </div>
                                    <div class="col-sm-8 text-secondary">
                                    <?= $model->tempat_lhr_ayah?>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-sm-4">
                                    <h6 class="mb-0">Agama</h6>
                                    </div>
                                    <div class="col-sm-8 text-secondary">
                                    <?= $model->tggl_lhr_ayah?>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row py-1">
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-sm-4">
                                    <h6 class="mb-0">Nomor Telpon</h6>
                                    </div>
                                    <div class="col-sm-8 text-secondary">
                                    <?= $model->notelp_ayah?>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-sm-4">
                                    <h6 class="mb-0">Pendidikan</h6>
                                    </div>
                                    <div class="col-sm-8 text-secondary">
                                    <?= $model->pendidikan_ayah?>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row py-1">
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-sm-4">
                                    <h6 class="mb-0">Pekerjaan</h6>
                                    </div>
                                    <div class="col-sm-8 text-secondary">
                                    <?= $model->pekerjaan_ayah?>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-sm-4">
                                    <h6 class="mb-0">Penghasilan</h6>
                                    </div>
                                    <div class="col-sm-8 text-secondary">
                                    <?= $model->penghasilan_ayah?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    
                <h5><b>Data Ibu</b></h5>
                        <div class="row py-1">
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-sm-4">
                                    <h6 class="mb-0">Nama Ayah</h6>
                                    </div>
                                    <div class="col-sm-8 text-secondary">
                                    <?= $model->nama_ibu?>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-sm-4">
                                    <h6 class="mb-0">NIK</h6>
                                    </div>
                                    <div class="col-sm-8 text-secondary">
                                    <?= $model->nik_ibu?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row py-1">
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-sm-4">
                                    <h6 class="mb-0">Tempat & Tanggal Lahir</h6>
                                    </div>
                                    <div class="col-sm-8 text-secondary">
                                    <?= $model->tempat_lhr_ibu?>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-sm-4">
                                    <h6 class="mb-0">Agama</h6>
                                    </div>
                                    <div class="col-sm-8 text-secondary">
                                    <?= $model->tggl_lhr_ibu?>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row py-1">
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-sm-4">
                                    <h6 class="mb-0">Nomor Telpon</h6>
                                    </div>
                                    <div class="col-sm-8 text-secondary">
                                    <?= $model->notelp_ibu?>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-sm-4">
                                    <h6 class="mb-0">Pendidikan</h6>
                                    </div>
                                    <div class="col-sm-8 text-secondary">
                                    <?= $model->pendidikan_ibu?>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row py-1">
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-sm-4">
                                    <h6 class="mb-0">Pekerjaan</h6>
                                    </div>
                                    <div class="col-sm-8 text-secondary">
                                    <?= $model->pekerjaan_ibu?>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-sm-4">
                                    <h6 class="mb-0">Penghasilan</h6>
                                    </div>
                                    <div class="col-sm-8 text-secondary">
                                    <?= $model->penghasilan_ibu?>
                                    </div>
                                </div>
                            </div>
                        </div>
            <?php } ?>

        </div>    
    </div>
</div>
