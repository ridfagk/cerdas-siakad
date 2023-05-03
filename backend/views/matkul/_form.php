<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var backend\models\MataKuliah $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="mata-kuliah-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_matkul')->textInput() ?>

    <?= $form->field($model, 'kd_matkul')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nama_matkul')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'sks')->textInput() ?>

    <?= $form->field($model, 'semester')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'porsi_uts')->textInput() ?>

    <?= $form->field($model, 'porsi_uas')->textInput() ?>

    <?= $form->field($model, 'porsi_tugas')->textInput() ?>

    <?= $form->field($model, 'porsi_keaktifan')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
