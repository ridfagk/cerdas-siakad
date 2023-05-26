<?php

use yii\helpers\{Html, ArrayHelper};
use yii\widgets\ActiveForm;
use kartik\datecontrol\DateControl;
use kartik\select2\Select2;
use backend\models\{DataProdi, DataTa, TahunKurikulum};

/** @var yii\web\View $this */
/** @var backend\models\DataMhs $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="data-mhs-form">
    <div class="card card-body">
        <?php $form = ActiveForm::begin(); ?>

            <div class="row">
                <div class="col-md-6">
                    <?= $form->field($model, 'nim')->textInput(['maxlength' => true]) ?>
                </div>
                <div class="col-md-6">
                    <?= $form->field($model, 'nama_mahasiswa')->textInput(['maxlength' => true]) ?>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>
                </div>
                <div class="col-md-6">
                    <?= $form->field($model, 'no_telp')->textInput(['maxlength' => true]) ?>
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
                <?= $form->field($model,  'prodi_id')->widget(Select2::classname(), [
                                        'data' => ArrayHelper::map(DataProdi::find()->all(),'kd_prodi','nama_prodi'),
                                        'hideSearch' => true,
                                        'options' => ['placeholder' => '-Pilih Prodi-',
                                                    ],
                                         'pluginOptions' => ['allowClear' => true],
                                        ]); 
                ?>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <?= $form->field($model,  'angkatan')->widget(Select2::classname(), [
                                            'data' => ArrayHelper::map(TahunKurikulum::find()->all(),'tahun','tahun'),
                                            'hideSearch' => true,
                                            'options' => ['placeholder' => '-Pilih Tahun-',
                                                        ],
                                            'pluginOptions' => ['allowClear' => true],
                                            ]); 
                    ?>
                </div>
                <div class="col-md-6">
                    <?= $form->field($model, 'status_akademis')->textInput(['maxlength' => true]) ?>
                </div>
            </div>


            <div class="form-group">
                <?= Html::submitButton('Simpan Data', ['class' => 'btn btn-primary btn-block']) ?>
            </div>

        <?php ActiveForm::end(); ?>
    </div>
</div>
