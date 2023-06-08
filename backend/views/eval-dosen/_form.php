<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var backend\models\EvalDosen $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="eval-dosen-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'dosen_id')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nidn')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nim')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tahun_akademik')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'semester')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'prodi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kelas_id')->textInput() ?>

    <?= $form->field($model, 'matkul_id')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pertanyaan1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pertanyaan2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pertanyaan3')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pertanyaan4')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pertanyaan5')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pertanyaan6')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pertanyaan7')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pertanyaan8')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pertanyaan9')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pertanyaan10')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'saran')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'total_point')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
