<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\date\DatePicker;

/** @var yii\web\View $this */
/** @var backend\models\DataProdi $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="data-prodi-form">

    
    <?php $form = ActiveForm::begin(); ?>

    <div class="card card-body">

        <div class="row">
            <div class="col-md-3">
                <?= $form->field($model, 'kd_prodi')->textInput(['maxlength' => true]) ?>  
            </div>
        </div>

        <?= $form->field($model, 'nama_prodi')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'deskripsi')->textArea(['maxlength' => true]) ?>

        <div class="row">
            <div class="col-md-6">
                <?= $form->field($model, 'visi')->textArea(['maxlength' => true]) ?>
            </div>
            <div class="col-md-6">
                <?= $form->field($model, 'misi')->textArea(['maxlength' => true]) ?>
            </div>
        </div>

        <?= $form->field($model, 'kompetensi')->textArea(['maxlength' => true]) ?>

        <div class="row">
            <div class="col-md-4">
            <?= $form->field($model, 'thn_berdiri')->widget(DatePicker::classname(), [
                            'options' => ['placeholder' => Yii::t('app', 'Pilih Tahun')],
                            'attribute2'=>'to_date',
                            //'readonly' => true,
                            //'type' => DatePicker::TYPE_DATE,
                            'pluginOptions' => [
                                'autoclose' => true,
                                'startView'=>'years',
                                'minViewMode'=>'years',
                                'format' => 'yyyy'
                            ]
                        ]) ?>
            </div>
            <div class="col-md-4">
                <?= $form->field($model, 'nomor_sk')->textInput(['maxlength' => true]) ?>
            </div>
            <div class="col-md-4">
                <?= $form->field($model, 'akreditasi')->textInput(['maxlength' => true]) ?>
            </div>
        </div>

        

        <div class="row">
            <div class="col-md-4">    
                <?= $form->field($model, 'email_prodi')->textInput(['maxlength' => true]) ?>
            </div>
            <div class="col-md-4">
                <?= $form->field($model, 'telp_prodi')->textInput(['maxlength' => true]) ?>
            </div>
        </div>

        <?= $form->field($model, 'alamat_prodi')->textArea(['maxlength' => true]) ?>

        

        <div class="form-group">
            <?= Html::submitButton('Simpan', ['class' => 'btn btn-primary btn-block']) ?>
        </div>
    </div>
    <?php ActiveForm::end(); ?>

</div>
