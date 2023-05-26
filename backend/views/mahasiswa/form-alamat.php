<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

$model->nim = $_GET['nim'];

?>
<div class="row">
    <div class="col-md-2">
        <?= $this->render('sidemenu') ?>
    </div>
    <div class="col-md-10">
        <div class="card card-body">

            <h4>Alamat Mahasiswa</h4><hr>

            <?php $form = ActiveForm::begin(); ?>
                <h5>Alamat Sesuai KTP</h5>
                <?= $form->field($model, 'nim')->hiddenInput(['maxlength' => true])->label(false) ?>
                <div class="card card-body mb-4">
                    <div class="row">
                        <div class="col-md-6">
                            <?= $form->field($model, 'provinsi_ktp')->textInput(['maxlength' => true]) ?>
                        </div>
                        <div class="col-md-6">
                            <?= $form->field($model, 'kota_ktp')->textInput(['maxlength' => true]) ?>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <?= $form->field($model, 'kecamatan_ktp')->textInput(['maxlength' => true]) ?>
                        </div>
                        <div class="col-md-6">
                            <?= $form->field($model, 'kelurahan_ktp')->textInput(['maxlength' => true]) ?>
                        </div>
                    </div>
                    
                    <?= $form->field($model, 'kode_pos_ktp')->textInput(['maxlength' => true]) ?>
                    
                    <?= $form->field($model, 'alamat_ktp')->textArea(['maxlength' => true]) ?>
                </div>


                <h5>Alamat Saat Ini</h5>
                <div class="card card-body mb-4">
                    <div class="row">
                        <div class="col-md-6">
                            <?= $form->field($model, 'provinsi_now')->textInput(['maxlength' => true]) ?>
                        </div>
                        <div class="col-md-6">
                            <?= $form->field($model, 'kota_now')->textInput(['maxlength' => true]) ?>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <?= $form->field($model, 'kecamatan_now')->textInput(['maxlength' => true]) ?>
                        </div>
                        <div class="col-md-6">
                            <?= $form->field($model, 'kelurahan_now')->textInput(['maxlength' => true]) ?>
                        </div>
                    </div>
                    
                    <?= $form->field($model, 'kode_pos_now')->textInput(['maxlength' => true]) ?>
                    
                    <?= $form->field($model, 'alamat_now')->textArea(['maxlength' => true]) ?>

                    <div class="row">
                        <div class="col-md-6">
                            <?= $form->field($model, 'notelp')->textInput(['maxlength' => true]) ?>
                        </div>
                        <div class="col-md-6">
                            <?= $form->field($model, 'tinggal_dengan')->textInput(['maxlength' => true]) ?>
                        </div>
                        <div class="col-md-6">
                            <?= $form->field($model, 'transportasi')->textInput(['maxlength' => true]) ?>
                        </div>
                        <div class="col-md-6">
                            <?= $form->field($model, 'jarak')->textInput(['maxlength' => true]) ?>
                        </div>
                    </div>

                </div>

                <div class="form-group">
                    <?= Html::submitButton('Simpan Data', ['class' => 'btn btn-primary btn-block']) ?>
                </div>
            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>
