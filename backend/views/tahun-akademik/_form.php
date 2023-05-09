<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var backend\models\DataTA $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="data-ta-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_thnakademik')->textInput() ?>

    <?= $form->field($model, 'thn_akademik')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'status')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
