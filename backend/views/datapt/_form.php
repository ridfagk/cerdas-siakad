<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var backend\models\DataPT $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="data-pt-form">

    <?php $form = ActiveForm::begin(); ?>

    <div class="card card-body">
        <?= $form->field($model, 'kd_pt')->textInput(['maxlength' => true])->label('ID Perguruan Tinggi') ?>

        <?= $form->field($model, 'nama_pt')->textInput(['maxlength' => true])->label('Nama Perguruan Tinggi') ?>

        <?= $form->field($model, 'tahun_berdiri')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'pendiri')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'alamat_pt')->textarea(['rows' => 6])->label('Alamat Perguruan Tinggi') ?>

        <div class="row">
            <div class="col-md-6">
                <?= $form->field($model, 'provinsi')->textInput(['maxlength' => true]) ?>
            </div>
            <div class="col-md-6">
                <?= $form->field($model, 'kabupaten')->textInput(['maxlength' => true])->label('Kabupaten/Kota') ?>
            </div>
            <div class="col-md-6">
                <?= $form->field($model, 'kecamatan')->textInput(['maxlength' => true]) ?>
            </div>
            <div class="col-md-6">
                <?= $form->field($model, 'desa')->textInput(['maxlength' => true])->label('Kelurahan') ?>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4">
                <?= $form->field($model, 'kode_pos')->textInput(['maxlength' => true]) ?>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4">
                <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>
            </div>
            <div class="col-md-4">
                <?= $form->field($model, 'website')->textInput(['maxlength' => true]) ?>
            </div>
            <div class="col-md-4">
                <?= $form->field($model, 'no_telp')->textInput() ?>
            </div>
        </div>


        <?= $form->field($model, 'akta_pendirian')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'akreditasi')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'status')->textInput(['maxlength' => true]) ?>

        <div class="form-group">
            <?= Html::submitButton('Save', ['class' => 'btn btn-primary btn-block']) ?>
        </div>
    </div>
    <?php ActiveForm::end(); ?>

</div>
