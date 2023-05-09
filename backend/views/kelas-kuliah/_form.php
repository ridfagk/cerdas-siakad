<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var backend\models\KelasKuliah $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="kelas-kuliah-form">

    <?php $form = ActiveForm::begin(); ?>
    <div class="card card-body">
        <div class="row">
            <div class="col-md-6">
                <?= $form->field($model, 'thn_akademik')->textInput(['maxlength' => true]) ?>
                <?= $form->field($model, 'prodi_id')->textInput(['maxlength' => true]) ?>
                <?= $form->field($model, 'matkul_id')->textInput(['maxlength' => true]) ?>
                <?= $form->field($model, 'nama_kelas')->textInput(['maxlength' => true]) ?>
            </div>
            <div class="col-md-6">
                <?= $form->field($model, 'semester')->textInput(['maxlength' => true]) ?>
                <?= $form->field($model, 'sks')->textInput() ?>
                <?= $form->field($model, 'hari')->textInput(['maxlength' => true]) ?>
                <?= $form->field($model, 'jam')->textInput() ?>
            </div>
        </div>
        
        <div class="form-group">
            <?= Html::submitButton('Save', ['class' => 'btn btn-primary btn-block']) ?>
        </div>
    
    </div>

    <?php ActiveForm::end(); ?>

</div>
