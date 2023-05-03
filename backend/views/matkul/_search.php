<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var backend\models\MataKuliahSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="mata-kuliah-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'id_matkul') ?>

    <?= $form->field($model, 'kd_matkul') ?>

    <?= $form->field($model, 'nama_matkul') ?>

    <?= $form->field($model, 'sks') ?>

    <?= $form->field($model, 'semester') ?>

    <?php // echo $form->field($model, 'porsi_uts') ?>

    <?php // echo $form->field($model, 'porsi_uas') ?>

    <?php // echo $form->field($model, 'porsi_tugas') ?>

    <?php // echo $form->field($model, 'porsi_keaktifan') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
