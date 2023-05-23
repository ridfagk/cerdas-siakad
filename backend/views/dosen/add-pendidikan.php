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
           
            <?= $form->field($model, 'jenjang_pendidikan')->textInput(['maxlength' => true]) ?>
            <?= $form->field($model, 'nama_institusi')->textInput(['maxlength' => true]) ?>
            <?= $form->field($model, 'prodi')->textInput(['maxlength' => true]) ?>
            <?= $form->field($model, 'waktu_pendidikan')->textInput(['maxlength' => true]) ?>
                        
               
               
        </div>
       
        <div class="form-group">
            <?= Html::submitButton('Simpan Kelas', ['class' => 'btn btn-primary btn-block']) ?>
        </div>
    
    </div>

    <?php ActiveForm::end(); ?>

</div>