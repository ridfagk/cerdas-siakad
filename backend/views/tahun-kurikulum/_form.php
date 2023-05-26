<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\datecontrol\DateControl;
use kartik\date\DatePicker;

/** @var yii\web\View $this */
/** @var backend\models\DataTA $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="data-ta-form">
    <div class="row justify-content-md-LEFT">
    <div class="col-md-7">
        <div class="card card-body">

            <?php $form = ActiveForm::begin(); ?>
            
                
                <div class="row">

                    <div class="col-md-4">
                        <?= $form->field($model, 'tahun')->widget(DatePicker::classname(), [
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
                        ])->label('Tahun Kurikulum') ?>
                    </div>

                    <div class="col-md-4">
                        <?= 
                                $form->field($model, 'tgl_mulai')->widget(DateControl::classname(), [
                                'type'=>DateControl::FORMAT_DATE,
                                'ajaxConversion'=>false,
                                'widgetOptions' => [
                                    'pluginOptions' => [
                                        'autoclose' => true,
                                        'startView'=>'years',
                                    ]
                                ]
                            ])->label('Tanggal Mulai');
                        
                        ?>
                    </div>

                    <div class="col-md-4">
                        <?= 
                                $form->field($model, 'tgl_selesai')->widget(DateControl::classname(), [
                                'type'=>DateControl::FORMAT_DATE,
                                'ajaxConversion'=>false,
                                'widgetOptions' => [
                                    'pluginOptions' => [
                                        'autoclose' => true,
                                        'startView'=>'years',
                                    ]
                                ]
                            ])->label('Tanggal Selesai');
                        
                        ?>
                        
                    </div>

                </div>

                <div class="form-group">
                    <?= Html::submitButton('Simpan Tahun Akademik', ['class' => 'btn btn-primary btn-block']) ?>
                </div>
            
            
            <?php ActiveForm::end(); ?>
            </div>
        </div>
    </div>
</div>
