<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var backend\models\MataKuliah $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="mata-kuliah-form">

    <?php $form = ActiveForm::begin(); ?>
    <div class="card card-body">
        <?= $form->field($model, 'kd_matkul')->textInput(['maxlength' => true])->label('Kode MK') ?>

        <?= $form->field($model, 'nama_matkul')->textInput(['maxlength' => true]) ?>

        <div class="row">
            <div class="col-md-2">
                <?= $form->field($model, 'sks')->textInput() ?>
            </div>
            <div class="col-md-4">
                <?= $form->field($model, 'semester')->textInput(['maxlength' => true]) ?>
            </div>
        </div>

        <h5>Presentase penilaian: </h5>

        <div class="row">
            <div class="col-md-3">
                <?= $form->field($model, 'porsi_uts')->textInput()->label('UTS') ?>
            </div>
            <div class="col-md-3">
                <?= $form->field($model, 'porsi_uas')->textInput()->label('UAS') ?>
            </div>
            <div class="col-md-3">
                <?= $form->field($model, 'porsi_tugas')->textInput()->label('Tugas') ?>
            </div>
            <div class="col-md-3">
                <?= $form->field($model, 'porsi_keaktifan')->textInput()->label('Keaktifan') ?>
            </div>
        </div>

        <div class="form-group">
            <?= Html::submitButton('Simpan', ['class' => 'btn btn-primary btn-block']) ?>
        </div>
    </div>
    <?php ActiveForm::end(); ?>

</div>
