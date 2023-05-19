<?php

use yii\helpers\{Html, ArrayHelper};
use yii\widgets\ActiveForm;
use kartik\widgets\TimePicker;
use kartik\date\DatePicker;
use kartik\select2\Select2;
use kartik\datecontrol\DateControl;
use backend\models\{DataTA, DataProdi, DataMatkul, Pegawai, KelasKuliah};
$kelas = KelasKuliah::find()->where(['id_kelas'=>$id_kelas])->one();
/** @var yii\web\View $this */
/** @var backend\models\KelasKuliah $model */
/** @var yii\widgets\ActiveForm $form */
$model->kelas_id = $kelas->id_kelas;
$model->thn_akademik = $kelas->thn_akademik;
$model->semester = $kelas->semester;
$model->matkul_id = $kelas->matkul_id;
?>

<div class="kelas-kuliah-form">

    <?php $form = ActiveForm::begin(); ?>
    <?= $form->field($model, 'kelas_id')->hiddenInput(['maxlength' => true])->label(false) ?>
        <?= $form->field($model, 'thn_akademik')->hiddenInput(['maxlength' => true])->label(false) ?>
        <?= $form->field($model, 'semester')->hiddenInput(['maxlength' => true])->label(false) ?>
        <?= $form->field($model, 'matkul_id')->hiddenInput(['maxlength' => true])->label(false) ?>
    <div class="card card-body">
        
        
        <div class="row">
            <div class="col-md-6">
                
            </div>
            <?= $form->field($model,  'pegawai_id')->widget(Select2::classname(), [
                                        'data' => ArrayHelper::map(Pegawai::find()->all(),'id_pegawai','nama_pegawai'),
                                        'options' => ['placeholder' => '-Pilih Dosen-',
                                                    ],
                                         'pluginOptions' => ['allowClear' => true],
                                        ]); 
                ?>
                <?= $form->field($model,  'status')->widget(Select2::classname(), [
                                            'data' => ['Penanggung Jawab'=>'Penanggung Jawab', 'Dosen Pengajar'=>'Dosen Pengajar', 'Mentor'=>'Mentor'],
                                            'hideSearch' => true,
                                            'options' => ['placeholder' => '-Pilih Hari-',
                                                        ],
                                            'pluginOptions' => ['allowClear' => true],
                                            ]); 
                        ?>
               
               
        </div>
       
        <div class="form-group">
            <?= Html::submitButton('Simpan Kelas', ['class' => 'btn btn-primary btn-block']) ?>
        </div>
    
    </div>

    <?php ActiveForm::end(); ?>

</div>
