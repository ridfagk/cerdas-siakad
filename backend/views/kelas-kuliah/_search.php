<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var backend\models\KelasKuliahSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="kelas-kuliah-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'id_kelas') ?>

    <?= $form->field($model, 'nama_kelas') ?>

    <?= $form->field($model, 'thn_akademik') ?>

    <?= $form->field($model, 'semester') ?>

    <?= $form->field($model, 'sks') ?>

    <?php // echo $form->field($model, 'hari') ?>

    <?php // echo $form->field($model, 'jam') ?>

    <?php // echo $form->field($model, 'matkul_id') ?>

    <?php // echo $form->field($model, 'prodi_id') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
