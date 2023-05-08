<?php

use yii\helpers\Url;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\file\FileInput;

/** @var yii\web\View $this */
/** @var backend\models\DataPT $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="data-pt-form">

    <?php $form = ActiveForm::begin(); ?>

    <div class="card card-body">
        
        <?=  $form->field($model, 'logo_pt')->widget(FileInput::classname(), [
            'options' => ['accept' => 'image/*'],
        ]);?>
 <div class="form-group">
            <?= Html::submitButton('Simpan', ['class' => 'btn btn-primary btn-block']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div>
