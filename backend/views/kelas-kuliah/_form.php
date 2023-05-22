<?php

use yii\helpers\{Html, ArrayHelper};
use yii\widgets\ActiveForm;
use kartik\widgets\TimePicker;
use kartik\date\DatePicker;
use kartik\select2\Select2;
use kartik\datecontrol\DateControl;
use backend\models\{DataTA, DataProdi, DataMatkul};

/** @var yii\web\View $this */
/** @var backend\models\KelasKuliah $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="kelas-kuliah-form">

    <?php $form = ActiveForm::begin(); ?>
    <div class="card card-body">
        <div class="row">
            <div class="col-md-6">
                <?= $form->field($model,  'thn_akademik')->widget(Select2::classname(), [
                                        'data' => ArrayHelper::map(DataTA::find()->where(['status'=>'Aktif'])->all(),'kd_ta','thn_akademik'),
                                        'options' => ['placeholder' => '-Pilih Tahun Akademik-',
                                                    ],
                                         'pluginOptions' => ['allowClear' => true],
                                        ]); 
                ?>
               
            </div>
            <div class="col-md-6">
                <?= $form->field($model, 'nama_kelas')->textInput(['maxlength' => true]) ?>
                
                
                
            </div>
            <?= $form->field($model,  'prodi_id')->widget(Select2::classname(), [
                                        'data' => ArrayHelper::map(DataProdi::find()->all(),'kd_prodi','nama_prodi'),
                                        'hideSearch' => true,
                                        'options' => ['placeholder' => '-Pilih Prodi-',
                                                    ],
                                         'pluginOptions' => ['allowClear' => true],
                                        ]); 
                ?>
               <?= $form->field($model,  'matkul_id')->widget(Select2::classname(), [
                                        'data' => ArrayHelper::map(DataMatkul::find()->all(),'kd_matkul','nama_matkul'),
                                        'options' => ['placeholder' => '-Pilih Mata Kuliah-',
                                                    ],
                                         'pluginOptions' => ['allowClear' => true],
                                        ]); 
                ?>
               <div class="row">
                    <div class="col-md-3">
                        <?= $form->field($model, 'semester')->textInput(['type' => 'number'],['maxlength' => true]) ?>
                    </div>
                    <div class="col-md-3">
                        <?= $form->field($model, 'sks')->textInput(['type' => 'number']) ?>
                    </div>
                    <div class="col-md-3">
                        <?= $form->field($model,  'hari')->widget(Select2::classname(), [
                                            'data' => ['Senin'=>'Senin', 'Selasa'=>'Selasa', 'Rabu'=>'Rabu', 'Kamis'=>'Kamis', 'Jumat'=>'Jumat', 'Sabtu'=>'Sabtu', 'Minggu'=>'Minggu'],
                                            'hideSearch' => true,
                                            'options' => ['placeholder' => '-Pilih Hari-',
                                                        ],
                                            'pluginOptions' => ['allowClear' => true],
                                            ]); 
                        ?>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-md-6">
                        <?= 
                         $form->field($model, 'tgl_mulai')->widget(DateControl::classname(), [
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
                        <?= $form->field($model, 'tgl_akhir')->widget(DatePicker::classname(), [
                                'options' => ['placeholder' => 'Tanggal Akhir ...'],
                                'pluginOptions' => [
                                    'autoclose' => true,
                                    'startView'=>'years',
                                ]
                            ]);?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <?= $form->field($model, 'jam_mulai')->widget(TimePicker::classname(), ['pluginOptions' => ['showMeridian' => false],]);?>
                    </div>
                    <div class="col-md-6">
                        <?= $form->field($model, 'jam_akhir')->widget(TimePicker::classname(), ['pluginOptions' => ['showMeridian' => false],]);?>
                    </div>
                </div>
        </div>
        
        <div class="form-group">
            <?= Html::submitButton('Simpan Kelas', ['class' => 'btn btn-primary btn-block']) ?>
        </div>
    
    </div>

    <?php ActiveForm::end(); ?>

</div>
