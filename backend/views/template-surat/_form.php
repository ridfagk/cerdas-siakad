<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\file\FileInput;

/** @var yii\web\View $this */
/** @var backend\models\DataTemplateSurat $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="data-template-surat-form">
    <div class="card card-body">
        <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'nama_surat')->textInput(['maxlength' => true]) ?>

        <?=  $form->field($model, 'file')->widget(FileInput::classname(), [
            ])->label('File Template Surat');
        ?>

        <div class="form-group">
            <?= Html::submitButton('Simpan', ['class' => 'btn btn-primary btn-block']) ?>
        </div>

        <?php ActiveForm::end(); ?>
    </div>
</div>
