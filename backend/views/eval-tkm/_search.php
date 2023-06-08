<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var backend\models\EvalTKMSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="eval-tkm-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'id_evaldsn') ?>

    <?= $form->field($model, 'nim') ?>

    <?= $form->field($model, 'tahun_akademik') ?>

    <?= $form->field($model, 'semester') ?>

    <?= $form->field($model, 'prodi') ?>

    <?php // echo $form->field($model, 'pertanyaan1') ?>

    <?php // echo $form->field($model, 'pertanyaan2') ?>

    <?php // echo $form->field($model, 'pertanyaan3') ?>

    <?php // echo $form->field($model, 'pertanyaan4') ?>

    <?php // echo $form->field($model, 'pertanyaan5') ?>

    <?php // echo $form->field($model, 'pertanyaan6') ?>

    <?php // echo $form->field($model, 'pertanyaan7') ?>

    <?php // echo $form->field($model, 'pertanyaan8') ?>

    <?php // echo $form->field($model, 'pertanyaan9') ?>

    <?php // echo $form->field($model, 'pertanyaan10') ?>

    <?php // echo $form->field($model, 'pertanyaan11') ?>

    <?php // echo $form->field($model, 'pertanyaan12') ?>

    <?php // echo $form->field($model, 'pertanyaan13') ?>

    <?php // echo $form->field($model, 'pertanyaan14') ?>

    <?php // echo $form->field($model, 'pertanyaan15') ?>

    <?php // echo $form->field($model, 'pertanyaan16') ?>

    <?php // echo $form->field($model, 'pertanyaan17') ?>

    <?php // echo $form->field($model, 'pertanyaan18') ?>

    <?php // echo $form->field($model, 'pertanyaan19') ?>

    <?php // echo $form->field($model, 'pertanyaan20') ?>

    <?php // echo $form->field($model, 'pertanyaan21') ?>

    <?php // echo $form->field($model, 'pertanyaan22') ?>

    <?php // echo $form->field($model, 'pertanyaan23') ?>

    <?php // echo $form->field($model, 'pertanyaan24') ?>

    <?php // echo $form->field($model, 'pertanyaan25') ?>

    <?php // echo $form->field($model, 'saran') ?>

    <?php // echo $form->field($model, 'total_point') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
