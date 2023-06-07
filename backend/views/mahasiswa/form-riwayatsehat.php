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

            <h4>Riwayat Kesehatan</h4>

            <?php $form = ActiveForm::begin(); ?>
                <?= $form->field($model, 'nim')->hiddenInput(['maxlength' => true])->label(false) ?>
                <div class="card card-body mb-4">
                    <div class="row">
                        <div class="col-md-4">
                            <?= $form->field($model, 'berat')->textInput(['maxlength' => true]) ?>
                        </div>
                        <div class="col-md-4">
                            <?= $form->field($model, 'tinggi')->textInput(['maxlength' => true]) ?>
                        </div>
                        <div class="col-md-4">
                            <?= $form->field($model, 'goldar')->textInput(['maxlength' => true]) ?>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <?= $form->field($model, 'keadaan_mata')->textInput(['maxlength' => true]) ?>
                        </div>
                        <div class="col-md-6">
                            <?= $form->field($model, 'alat_mata')->textInput(['maxlength' => true]) ?>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-md-6">
                            <?= $form->field($model, 'keadaan_telinga')->textInput(['maxlength' => true]) ?>        
                        </div>
                        <div class="col-md-6">
                            <?= $form->field($model, 'alat_telinga')->textInput(['maxlength' => true]) ?>
                        </div>
                    </div>
                    <?= $form->field($model, 'sakit_berat')->textInput(['maxlength' => true]) ?>
                </div>


                <div class="form-group">
                    <?= Html::submitButton('Simpan Data', ['class' => 'btn btn-primary btn-block']) ?>
                </div>
            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>
