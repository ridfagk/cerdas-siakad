<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\datecontrol\DateControl;
use kartik\select2\Select2;

$model->nim = $_GET['nim'];

?>
<div class="row">
    <div class="col-md-2">
        <?= $this->render('sidemenu') ?>
    </div>
    <div class="col-md-10">
        <div class="card card-body">

            <h4>Ortu Mahasiswa</h4><hr>

            <?php $form = ActiveForm::begin(); ?>
                <h5>Data Ayah</h5>
                <?= $form->field($model, 'nim')->hiddenInput(['maxlength' => true])->label(false) ?>
                <div class="card card-body mb-4">
                    <div class="row">
                        <div class="col-md-6">
                            <?= $form->field($model, 'nama_ayah')->textInput(['maxlength' => true]) ?>
                        </div>
                        <div class="col-md-6">
                            <?= $form->field($model, 'nik_ayah')->textInput(['maxlength' => true]) ?>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <?= $form->field($model, 'tempat_lhr_ayah')->textInput(['maxlength' => true]) ?>
                        </div>
                        <div class="col-md-6">
                            <?= 
                                $form->field($model, 'tggl_lhr_ayah')->widget(DateControl::classname(), [
                                    'type'=>DateControl::FORMAT_DATE,
                                    'ajaxConversion'=>false,
                                    'widgetOptions' => [
                                        'pluginOptions' => [
                                            'autoclose' => true,
                                            'startView'=>'years',
                                        ]
                                    ]
                                ]);
                            
                            ?>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <?= $form->field($model, 'agama_ayah')->widget(Select2::classname(), [
                                        'data' => ['Islam'=>'Islam', 'Protestan'=>'Protestan', 'Katolik'=>'Katolik', 'Hindu'=>'Hindu', 'Buddha'=>'Buddha', 'Khonghucu'=>'Khonghucu'],
                                        'hideSearch' => true,
                                        'options' => ['placeholder' => '-Pilih Agama-',
                                                    ],
                                        'pluginOptions' => ['allowClear' => true],
                                        ]);  ?>
                        </div>
                        <div class="col-md-6">
                            <?= $form->field($model, 'notelp_ayah')->textInput(['maxlength' => true]) ?>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <?= $form->field($model, 'pekerjaan_ayah')->textInput(['maxlength' => true]) ?>
                        </div>
                        <div class="col-md-6">
                            <?= $form->field($model, 'penghasilan_ayah')->textInput(['maxlength' => true]) ?>
                        </div>
                    </div>
                    <?= $form->field($model, 'pendidikan_ayah')->textInput(['maxlength' => true]) ?>
                    
                </div>


                <h5>Data Ibu</h5>
                <div class="card card-body mb-4">
                <div class="row">
                        <div class="col-md-6">
                            <?= $form->field($model, 'nama_ibu')->textInput(['maxlength' => true]) ?>
                        </div>
                        <div class="col-md-6">
                            <?= $form->field($model, 'nik_ibu')->textInput(['maxlength' => true]) ?>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <?= $form->field($model, 'tempat_lhr_ibu')->textInput(['maxlength' => true]) ?>
                        </div>
                        <div class="col-md-6">
                            <?= 
                                $form->field($model, 'tggl_lhr_ibu')->widget(DateControl::classname(), [
                                    'type'=>DateControl::FORMAT_DATE,
                                    'ajaxConversion'=>false,
                                    'widgetOptions' => [
                                        'pluginOptions' => [
                                            'autoclose' => true,
                                            'startView'=>'years',
                                        ]
                                    ]
                                ]);
                            
                            ?>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <?= $form->field($model, 'agama_ibu')->widget(Select2::classname(), [
                                        'data' => ['Islam'=>'Islam', 'Protestan'=>'Protestan', 'Katolik'=>'Katolik', 'Hindu'=>'Hindu', 'Buddha'=>'Buddha', 'Khonghucu'=>'Khonghucu'],
                                        'hideSearch' => true,
                                        'options' => ['placeholder' => '-Pilih Agama-',
                                                    ],
                                        'pluginOptions' => ['allowClear' => true],
                                        ]);  ?>
                        </div>
                        <div class="col-md-6">
                            <?= $form->field($model, 'notelp_ibu')->textInput(['maxlength' => true]) ?>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <?= $form->field($model, 'pekerjaan_ibu')->textInput(['maxlength' => true]) ?>
                        </div>
                        <div class="col-md-6">
                            <?= $form->field($model, 'penghasilan_ibu')->textInput(['maxlength' => true]) ?>
                        </div>
                    </div>
                    <?= $form->field($model, 'pendidikan_ibu')->textInput(['maxlength' => true]) ?>
                </div>

                <div class="form-group">
                    <?= Html::submitButton('Simpan Data', ['class' => 'btn btn-primary btn-block']) ?>
                </div>
            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>
