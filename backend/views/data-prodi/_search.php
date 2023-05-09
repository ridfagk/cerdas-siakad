<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var backend\models\DataProdiSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="data-prodi-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'id_prodi') ?>

    <?= $form->field($model, 'kd_prodi') ?>

    <?= $form->field($model, 'nama_prodi') ?>

    <?= $form->field($model, 'nomor_sk') ?>

    <?= $form->field($model, 'telp_prodi') ?>

    <?php // echo $form->field($model, 'email_prodi') ?>

    <?php // echo $form->field($model, 'nama_pt') ?>

    <?php // echo $form->field($model, 'thn_berdiri') ?>

    <?php // echo $form->field($model, 'alamat_prodi') ?>

    <?php // echo $form->field($model, 'akreditasi') ?>

    <?php // echo $form->field($model, 'deskripsi') ?>

    <?php // echo $form->field($model, 'visi') ?>

    <?php // echo $form->field($model, 'misi') ?>

    <?php // echo $form->field($model, 'kompetensi') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
