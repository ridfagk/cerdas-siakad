<?php

use yii\helpers\{Html, ArrayHelper};
use yii\widgets\ActiveForm;
use wbraganca\dynamicform\DynamicFormWidget;
use kartik\widgets\TimePicker;
use kartik\date\DatePicker;
use kartik\select2\Select2;
use kartik\datecontrol\DateControl;
use backend\models\{DataTA, DataProdi, DataMatkul, Pegawai, KelasKuliah};
$idpegawai = $_GET['id_pegawai'];
/** @var yii\web\View $this */
/** @var backend\models\KelasKuliah $model */
/** @var yii\widgets\ActiveForm $form */
$modelHonor->pegawai_id = $idpegawai;
?>
<div class="row">
    <div class="col-md-2">
        <?= $this->render('sidemenu') ?>
    </div>
    <div class="col-md-10">
        <div class="card card-body">
        <h4>Honor Dosen</h4>
            <?php $form = ActiveForm::begin(['id' => 'dynamic-form']); ?>
            <?= $form->field($modelHonor, 'pegawai_id')->hiddenInput(['maxlength' => true])->label(false) ?>
            <div class="row">
                <div class="col-sm-6">
                    <?= $form->field($modelHonor, 'bulan')->widget(Select2::classname(), [
                                            'data' => ['Januari'=>'Januari', 'Februari'=>'Februari', 'Maret'=>'Maret', 'April'=>'April',
                                                        'Mei'=>'Mei', 'Juni'=>'Juni', 'Juli'=>'Juli', 'Agustus'=>'Agustus', 
                                                        'September'=>'September', 'Oktober'=>'Oktober', 'November'=>'November', 'Desember'=>'Desember'],
                                            'hideSearch' => true,
                                            'options' => ['placeholder' => '-Pilih Bulan-',
                                                        ],
                                            'pluginOptions' => ['allowClear' => true],
                                            ]); 
                        ?>
                </div>
                <div class="col-sm-6">
                    <?= $form->field($modelHonor, 'tahun')->widget(DatePicker::classname(), [
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
            </div>

            <div class="padding-v-md">
                <div class="line line-dashed"></div>
            </div>
            <?php DynamicFormWidget::begin([
                'widgetContainer' => 'dynamicform_wrapper', // required: only alphanumeric characters plus "_" [A-Za-z0-9_]
                'widgetBody' => '.container-items', // required: css class selector
                'widgetItem' => '.item', // required: css class
                'limit' => 4, // the maximum times, an element can be cloned (default 999)
                'min' => 0, // 0 or 1 (default 1)
                'insertButton' => '.add-item', // css class
                'deleteButton' => '.remove-item', // css class
                'model' => $modelsItems[0],
                'formId' => 'dynamic-form',
                'formFields' => [
                    'full_name',
                    'address_line1',
                    'address_line2',
                    'city',
                    'state',
                    'postal_code',
                ],
            ]); ?>
            <div class="card">
                <div class="card-header" style="text-align:right">
                    <button type="button" class="pull-right add-item btn btn-success btn-xs"><i class="fa fa-plus"></i> Tambah Honor Item</button>
                    <div class="clearfix"></div>
                </div>
                <div class="card-body container-items"><!-- widgetContainer -->
                    <?php foreach ($modelsItems as $index => $modelItems ): ?>
                        <div class="item card"><!-- widgetBody -->
                            <div class="card-header" style="text-align:right">
                                <button type="button" class="pull-right remove-item btn btn-danger btn-xs"><i class="fa fa-minus"></i></button>
                                <div class="clearfix"></div>
                            </div>
                            <div class="card-body">
                                <?php
                                    // necessary for update action.
                                    if (!$modelItems->isNewRecord) {
                                        echo Html::activeHiddenInput($modelItems, "[{$index}]id");
                                    }
                                ?>
                                <div class="row">
                                    <div class="col-md-6">
                                        <?= $form->field($modelItems, "[{$index}]matkul_id")->widget(Select2::classname(), [
                                                        'data' => ArrayHelper::map(DataMatkul::find()->all(),'id_matkul','nama_matkul'),
                                                        'options' => ['placeholder' => '-Pilih Mata Kuliah-',
                                                                    ],
                                                        'pluginOptions' => ['allowClear' => true],
                                                        ]); 
                                        ?>
                                    </div>
                                    <div class="col-md-6">
                                        <?= $form->field($modelItems, "[{$index}]honor")->textInput(['maxlength' => true]) ?>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <?= $form->field($modelItems, "[{$index}]semester")->textInput(['maxlength' => true,'type'=>'number']) ?>
                                    </div>
                                    <div class="col-md-6">
                                        <?= $form->field($modelItems, "[{$index}]kegiatan")->textInput(['maxlength' => true]) ?>
                                    </div>
                                </div>
            
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
            <?php DynamicFormWidget::end(); ?>

            <div class="form-group">
                <?= Html::submitButton($modelItems->isNewRecord ? 'Simpan Honor' : 'Update', ['class' => 'btn btn-primary btn-block']) ?>
            </div>

            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>
<?php
$this->registerJs('
function initSelect2DropStyle(a,b,c){
    initS2Loading(a,b,c);
}
function initSelect2Loading(a,b){
    initS2Loading(a,b);
}
',
yii\web\View::POS_HEAD
);
?>