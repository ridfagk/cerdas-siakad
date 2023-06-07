<?php

use yii\helpers\{Html, ArrayHelper};
use yii\widgets\ActiveForm;
use kartik\widgets\TimePicker;
use kartik\date\DatePicker;
use kartik\select2\Select2;
use kartik\datecontrol\DateControl;
use backend\models\{DataTA, DataProdi, DataMatkul, Pegawai, KelasKuliah};
$nim = $_GET['nim'];
/** @var yii\web\View $this */
/** @var backend\models\KelasKuliah $model */
/** @var yii\widgets\ActiveForm $form */
$model->nim = $nim;
?>

<div class="kelas-kuliah-form">

    <?php $form = ActiveForm::begin(); ?>
    <?= $form->field($model, 'nim')->hiddenInput(['maxlength' => true])->label(false) ?>
       
    <div class="card card-body">
        
        
        <div class="row">
            <div class="col-md-6">
                
            </div>
            <?= $form->field($model, 'jenjang')->widget(Select2::classname(), [
                                    'data' => ['SMA'=>'SMA', 'D1'=>'D1', 'D2'=>'D2', 'D3'=>'D3',
                                                'D4'=>'D4', 'S1'=>'S1', 'S2'=>'S2', 'S3'=>'S3', 
                                                ],
                                    'hideSearch' => true,
                                    'options' => ['placeholder' => '-Pilih Jenjang-',
                                                ],
                                    'pluginOptions' => ['allowClear' => true],
                                    ]); 
                ?>
            <?= $form->field($model, 'nama_sekolah')->textInput(['maxlength' => true]) ?>
            <?= $form->field($model, 'jurusan')->textInput(['maxlength' => true]) ?>
            
               
        </div>
       
        <div class="form-group">
            <?= Html::submitButton('Simpan Kelas', ['class' => 'btn btn-primary btn-block']) ?>
        </div>
    
    </div>

    <?php ActiveForm::end(); ?>

</div>
