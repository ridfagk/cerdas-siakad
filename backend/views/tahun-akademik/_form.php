<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var backend\models\DataTA $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="data-ta-form">
    <div class="row justify-content-md-LEFT">
    <div class="col-md-7">
        <div class="card card-body">

            <?php $form = ActiveForm::begin(); ?>
            
                
                <div class="row">

                    <div class="col-md-3">
                        <?= $form->field($model, 'kd_ta')->textInput(['maxlength' => true])->label('Kode Akademik') ?>
                    </div>

                    <div class="col-md-6">
                        <?= $form->field($model, 'thn_akademik')->textInput(['maxlength' => true])->label('Tahun Akademik') ?>
                    </div>

                    <div class="col-md-3">
                        <?= $form->field($model, 'status')->dropDownList([ 'Aktif' => 'Aktif', 'Non Aktif' => 'Non Aktif', ], ['prompt' => '-Pilih-']) ?>
                        
                    </div>

                </div>

                <div class="form-group">
                    <?= Html::submitButton('Simpan Tahun Akademik', ['class' => 'btn btn-primary btn-block']) ?>
                </div>
            
            
            <?php ActiveForm::end(); ?>
            </div>
        </div>
    </div>
</div>
