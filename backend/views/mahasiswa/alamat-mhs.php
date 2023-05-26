<?php

use yii\helpers\Html;

?>
<div class="row">
    <div class="col-md-2">
        <?= $this->render('sidemenu') ?>
    </div>
    <div class="col-md-10">
        <div class="card card-body">

            <h4>Alamat Mahasiswa</h4><hr>

            <?php if (empty($model)) { ?>
                <center>
                    <h5>Data alamat mahasiswa masih kosong, silakan isi terlebih dahulu</h5>
                    <?= Html::a('Isi Data Alamat', ['form-alamat', 'nim' => $_GET['nim']], ['class' => 'btn btn-primary']) ?>
                </center>
            <?php }else{ ?>
                <div style="text-align:right">
                <?= Html::a('Edit Data Alamat', ['form-alamat', 'nim' => $_GET['nim']], ['class' => 'btn btn-warning btn-sm']) ?>
                </div>
                <h5><b>Alamat KTP</b></h5>
                        <div class="row py-1">
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-sm-4">
                                    <h6 class="mb-0">Provinsi</h6>
                                    </div>
                                    <div class="col-sm-8 text-secondary">
                                    <?= $model->provinsi_ktp?>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-sm-4">
                                    <h6 class="mb-0">Kota/Kabupaten</h6>
                                    </div>
                                    <div class="col-sm-8 text-secondary">
                                    <?= $model->kota_ktp?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row py-1">
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-sm-4">
                                    <h6 class="mb-0">Kecamatan</h6>
                                    </div>
                                    <div class="col-sm-8 text-secondary">
                                    <?= $model->kecamatan_ktp?>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-sm-4">
                                    <h6 class="mb-0">Kelurahan</h6>
                                    </div>
                                    <div class="col-sm-8 text-secondary">
                                    <?= $model->kelurahan_ktp?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row py-1">
                            <div class="col-sm-2">
                                <h6 class="mb-0">Kode Pos</h6>
                            </div>
                            <div class="col-sm-8 text-secondary">
                                <?= $model->kode_pos_ktp?>
                            </div>
                        </div>
                        <div class="row py-1">
                            <div class="col-sm-2">
                                <h6 class="mb-0">Alamat</h6>
                            </div>
                            <div class="col-sm-8 text-secondary">
                                <?= $model->alamat_ktp?>
                            </div>
                        </div>
                    
                <h5><b>Alamat Saat Ini</b></h5>
                        <div class="row py-1">
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-sm-4">
                                    <h6 class="mb-0">Provinsi</h6>
                                    </div>
                                    <div class="col-sm-8 text-secondary">
                                    <?= $model->provinsi_now?>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-sm-4">
                                    <h6 class="mb-0">Kota/Kabupaten</h6>
                                    </div>
                                    <div class="col-sm-8 text-secondary">
                                    <?= $model->kota_now?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row py-1">
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-sm-4">
                                    <h6 class="mb-0">Kecamatan</h6>
                                    </div>
                                    <div class="col-sm-8 text-secondary">
                                    <?= $model->kecamatan_now?>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-sm-4">
                                    <h6 class="mb-0">Kelurahan</h6>
                                    </div>
                                    <div class="col-sm-8 text-secondary">
                                    <?= $model->kelurahan_now?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row py-1">
                            <div class="col-sm-2">
                                <h6 class="mb-0">Kode Pos</h6>
                            </div>
                            <div class="col-sm-8 text-secondary">
                                <?= $model->kode_pos_now?>
                            </div>
                        </div>
                        <div class="row py-1">
                            <div class="col-sm-2">
                                <h6 class="mb-0">Alamat</h6>
                            </div>
                            <div class="col-sm-8 text-secondary">
                                <?= $model->alamat_now?>
                            </div>
                        </div>
                        <div class="row py-1">
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-sm-4">
                                    <h6 class="mb-0">Nomor Telpon</h6>
                                    </div>
                                    <div class="col-sm-8 text-secondary">
                                    <?= $model->notelp?>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-sm-4">
                                    <h6 class="mb-0">Tinggal Dengan</h6>
                                    </div>
                                    <div class="col-sm-8 text-secondary">
                                    <?= $model->tinggal_dengan?>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row py-1">
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-sm-4">
                                    <h6 class="mb-0">Transportasi</h6>
                                    </div>
                                    <div class="col-sm-8 text-secondary">
                                    <?= $model->transportasi?>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-sm-4">
                                    <h6 class="mb-0">Jarak</h6>
                                    </div>
                                    <div class="col-sm-8 text-secondary">
                                    <?= $model->jarak?>
                                    </div>
                                </div>
                            </div>
                        </div>
            <?php } ?>

        </div>    
    </div>
</div>
