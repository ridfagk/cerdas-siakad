<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var backend\models\DataTemplateSurat $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="data-template-surat-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nama_surat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'file')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
