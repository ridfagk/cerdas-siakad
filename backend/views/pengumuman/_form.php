<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\file\FileInput;

/** @var yii\web\View $this */
/** @var backend\models\Pengumuman $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="pengumuman-form">
    <div class="card card-body">
        <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'judul')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'isi')->textArea(['maxlength' => true]) ?>

        <?= $form->field($model, 'jenis_user')->textInput(['maxlength' => true]) ?>

        <?=  $form->field($model, 'banner')->widget(FileInput::classname(), [
            ])->label('Gambar pengumuman');
        ?>

        <div class="form-group">
            <?= Html::submitButton('Unggah Pengumuman', ['class' => 'btn btn-primary btn-block']) ?>
        </div>

        <?php ActiveForm::end(); ?>
    </div>

</div>
