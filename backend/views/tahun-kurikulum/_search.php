<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var backend\models\TahunKurikulumSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="tahun-kurikulum-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'id_thnkurikulum') ?>

    <?= $form->field($model, 'tahun') ?>

    <?= $form->field($model, 'tgl_mulai') ?>

    <?= $form->field($model, 'tgl_selesai') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
