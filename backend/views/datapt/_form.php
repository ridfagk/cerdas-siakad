<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var backend\models\DataPT $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="data-pt-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'kd_pt')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nama_pt')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tahun_berdiri')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pendiri')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'alamat_pt')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'provinsi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kabupaten')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kecamatan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'desa')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kode_pos')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'website')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'no_telp')->textInput() ?>

    <?= $form->field($model, 'akta_pendirian')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'akreditasi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'status')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
