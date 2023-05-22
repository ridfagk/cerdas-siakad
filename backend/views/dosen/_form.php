<?php

use yii\helpers\Html;
use kartik\datecontrol\DateControl;
use yii\widgets\ActiveForm;
use kartik\select2\Select2;

/** @var yii\web\View $this */
/** @var backend\models\Pegawai $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="pegawai-form">

    <?php $form = ActiveForm::begin(); ?>

    <div class="card card-body">

        <div class="row">
            <div class="col-md-6">
                <?= $form->field($model, 'nip')->textInput(['maxlength' => true]) ?>
            </div>
            <div class="col-md-6">
                <?= $form->field($model, 'nidn')->textInput() ?>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <?= $form->field($model, 'nama_pegawai')->textInput(['maxlength' => true]) ?>
            </div>
            <div class="col-md-6">
                <?= $form->field($model,  'jenis_kelamin')->widget(Select2::classname(), [
                                    'data' => ['Laki-laki'=>'Laki-laki', 'Perempuan'=>'Perempuan'],
                                    'hideSearch' => true,
                                    'options' => ['placeholder' => '-Pilih Jenis Kelamin-',
                                                ],
                                    'pluginOptions' => ['allowClear' => true],
                                    ]); 
                ?>
            </div>
        </div>
        
        <div class="row">
            <div class="col-md-6">
                <?= $form->field($model, 'tempat_lahir')->textInput(['maxlength' => true]) ?>
            </div>
            <div class="col-md-6">
                <?= 
                        $form->field($model, 'tgl_lahir')->widget(DateControl::classname(), [
                        'type'=>DateControl::FORMAT_DATE,
                        'ajaxConversion'=>false,
                        'widgetOptions' => [
                            'pluginOptions' => [
                                'autoclose' => true,
                                'startView'=>'years',
                            ]
                        ]
                    ]);
                
                ?>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <?= $form->field($model, 'no_telp')->textInput(['type' => 'number']) ?>
            </div>
            <div class="col-md-6">
                <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <?= $form->field($model,  'agama')->widget(Select2::classname(), [
                                    'data' => ['Islam'=>'Islam', 'Protestan'=>'Protestan', 'Katolik'=>'Katolik', 'Hindu'=>'Hindu', 'Buddha'=>'Buddha', 'Khonghucu'=>'Khonghucu'],
                                    'hideSearch' => true,
                                    'options' => ['placeholder' => '-Pilih Agama-',
                                                ],
                                    'pluginOptions' => ['allowClear' => true],
                                    ]); 
                ?>
            </div>
            <div class="col-md-6">
                <?= $form->field($model, 'pendidikan_akhir')->textInput(['maxlength' => true]) ?>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <?= 
                    $form->field($model, 'tgl_masuk')->widget(DateControl::classname(), [
                    'type'=>DateControl::FORMAT_DATE,
                    'ajaxConversion'=>false,
                    'widgetOptions' => [
                        'pluginOptions' => [
                            'autoclose' => true,
                            'startView'=>'years',
                        ]
                    ]
                ]);
                
                ?>
            </div>
            <div class="col-md-6">
                <?= $form->field($model,  'jabatan')->widget(Select2::classname(), [
                                    'data' => ['Operator'=>'Operator', 'Dosen'=>'Dosen', 'Mentor'=>'Mentor'],
                                    'hideSearch' => true,
                                    'options' => ['placeholder' => '-Pilih Jabatan-',
                                                ],
                                    'pluginOptions' => ['allowClear' => true],
                                    ]); 
                ?>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <?= $form->field($model,  'status_ikatankerja')->widget(Select2::classname(), [
                                    'data' => ['Dosen Tetap'=>'Dosen Tetap', 'Dosen Tidak Tetap'=>'Dosen Tidak Tetap', 'Dosen Honorer'=>'Dosen Honorer'],
                                    'hideSearch' => true,
                                    'options' => ['placeholder' => '-Pilih Jabatan-',
                                                ],
                                    'pluginOptions' => ['allowClear' => true],
                                    ]); 
                ?>
            </div>
            <div class="col-md-6">
                <?= $form->field($model,  'status_aktif')->widget(Select2::classname(), [
                                    'data' => ['Aktif'=>'Aktif', 'Cuti'=>'Cuti', 'Ijin Belajar'=>'Ijin Belajar', 'Tugas di Instansi Lain'=>'Tugas di Instansi Lain', 'Tugas Belajar'=>'Tugas Belajar'],
                                    'hideSearch' => true,
                                    'options' => ['placeholder' => '-Pilih Jabatan-',
                                                ],
                                    'pluginOptions' => ['allowClear' => true],
                                    ]); 
                ?>
            </div>
        </div>

        <?= $form->field($model, 'alamat_pegawai')->textarea(['rows' => 6]) ?>

        <div class="form-group">
            <?= Html::submitButton('Simpan Data', ['class' => 'btn btn-primary btn-block']) ?>
        </div>
    </div>

    <?php ActiveForm::end(); ?>

</div>
