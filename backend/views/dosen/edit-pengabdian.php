<?php

use yii\helpers\{Html, ArrayHelper};
use yii\widgets\ActiveForm;
use kartik\widgets\TimePicker;
use kartik\date\DatePicker;
use kartik\select2\Select2;
use kartik\datecontrol\DateControl;
use backend\models\{DataTA, DataProdi, DataMatkul, Pegawai, KelasKuliah};
$idpegawai = $_GET['id_pegawai'];
/** @var yii\web\View $this */
/** @var backend\models\KelasKuliah $model */
/** @var yii\widgets\ActiveForm $form */
$model->pegawai_id = $idpegawai;
?>

<div class="kelas-kuliah-form">

    <?php $form = ActiveForm::begin(); ?>
    <?= $form->field($model, 'pegawai_id')->hiddenInput(['maxlength' => true])->label(false) ?>
       
    <div class="card card-body">
        
        
        <div class="row">
            <div class="col-md-6">
                
            </div>
           
            <?= $form->field($model, 'judul_pengabdian')->textInput(['maxlength' => true]) ?>
            <?= 
                    $form->field($model, 'tgl_pengabdian')->widget(DateControl::classname(), [
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
            <?= $form->field($model, 'lokasi')->textInput(['maxlength' => true]) ?>
            <?= $form->field($model, 'mitra')->textInput(['maxlength' => true]) ?>
            <?= $form->field($model, 'mahasiswa_terlibat')->textInput(['maxlength' => true]) ?>
            <?= $form->field($model, 'penjelasan')->textInput(['maxlength' => true]) ?>
                        
               
               
        </div>
       
        <div class="form-group">
            <?= Html::submitButton('Simpan Kelas', ['class' => 'btn btn-primary btn-block']) ?>
        </div>
    
    </div>

    <?php ActiveForm::end(); ?>

</div>
