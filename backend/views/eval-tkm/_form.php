<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var backend\models\EvalTKM $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="eval-tkm-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nim')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tahun_akademik')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'semester')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'prodi')->textInput(['maxlength' => true]) ?>

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

    <?= $form->field($model, 'pertanyaan11')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pertanyaan12')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pertanyaan13')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pertanyaan14')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pertanyaan15')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pertanyaan16')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pertanyaan17')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pertanyaan18')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pertanyaan19')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pertanyaan20')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pertanyaan21')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pertanyaan22')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pertanyaan23')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pertanyaan24')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pertanyaan25')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'saran')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'total_point')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
