<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var backend\models\EvalMatkulSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="eval-matkul-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'id_evalmk') ?>

    <?= $form->field($model, 'kelas_id') ?>

    <?= $form->field($model, 'matkul_id') ?>

    <?= $form->field($model, 'nim') ?>

    <?= $form->field($model, 'tahun_akademik') ?>

    <?php // echo $form->field($model, 'semester') ?>

    <?php // echo $form->field($model, 'prodi') ?>

    <?php // echo $form->field($model, 'pertanyaan1') ?>

    <?php // echo $form->field($model, 'pertanyaan2') ?>

    <?php // echo $form->field($model, 'pertanyaan3') ?>

    <?php // echo $form->field($model, 'pertanyaan4') ?>

    <?php // echo $form->field($model, 'pertanyaan5') ?>

    <?php // echo $form->field($model, 'total_point') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
