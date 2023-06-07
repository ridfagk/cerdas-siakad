<?php
use yii\helpers\{Html, Url};
use yii\widgets\ActiveForm;
use mdm\widgets\TabularInput;
use backend\models\{MhsPresensi, KelasKRS};
use yii\helpers\ArrayHelper;
use kartik\select2\Select2;

$questidx = array_merge(array(''=>' '), ArrayHelper::map(KelasKRS::find()->where(['kelas_id'=>$_GET['id_kelas']])->all(),'id_mkkrs' ,'id_mkkrs'));
?>
   <div class="row">
        <div class="col-md-2">
            <?= $this->render('sidemenu') ?>
        </div>
        <div class="col-md-10 card card-body">
        <h4>Absensi Kelas</h4>
        <div class="card mb-2">
            <div class="card-body shadow-sm">
                
                <?php $form = ActiveForm::begin(['id'=>'exam']); ?>
                    
                    <div class="tab-content" id="myTabContent">
                        <div class="table-responsive">
                        <table class="table table-bordered">
                            <tr>
                                <th width="5%">NIM</th>    
                                <th width="25%">Nama Mahasiswa</th>
                                <th>P1</th>
                                <th>P2</th>
                                <th>P3</th>
                                <th>P4</th>
                                <th>P5</th>
                                <th>P6</th>
                                <th>P7</th>
                                <th>UTS</th>
                                <th>P8</th>
                                <th>P9</th>
                                <th>P10</th>
                                <th>P11</th>
                                <th>P12</th>
                                <th>P13</th>
                                <th>P14</th>
                                <th>UAS</th>
                            </tr>
                            <tr>
                                <?php foreach ($presensis as $index => $presensi) { 
                                    $list = KelasKRS::find()->where(['id_mkkrs'=>$questidx[$index]])->one();
                                        $presensi->mahasiswa_id = $list->nim;
                                        $presensi->matkul_id = $list->matkul_id;
                                        $presensi->tahun_ajar = $list->nim;
                                        $presensi->semester = $list->semester;
                                        $presensi->kelas_id = $list->kelas_id;
                                        $presensi->tahun_ajar = $list->krs->thn_akademik;
                                    ?>
                                        <?= $form->field($presensi, "[$index]mahasiswa_id")->hiddenInput(['maxlength' => true])->label(false) ?> 
                                        <?= $form->field($presensi, "[$index]matkul_id")->hiddenInput(['maxlength' => true])->label(false) ?> 
                                        <?= $form->field($presensi, "[$index]tahun_ajar")->hiddenInput(['maxlength' => true])->label(false) ?> 
                                        <?= $form->field($presensi, "[$index]semester")->hiddenInput(['maxlength' => true])->label(false) ?> 
                                        <?= $form->field($presensi, "[$index]kelas_id")->hiddenInput(['maxlength' => true])->label(false) ?> 
                                        <td><?=  $list->nim;?> </td>
                                        <td><?=  $list->mhs->nama_mahasiswa;?> </td>
                                        <td> 
                                            <?= $form->field($presensi, "[$index]p1")->widget(Select2::classname(), [
                                                                    'data' => ['Alfa'=>'Alfa', 'Hadir'=>'Hadir', 'Izin'=>'Izin', 'Sakit'=>'Sakit'],
                                                                    'hideSearch' => true,
                                                                    'options' => ['placeholder' => '....',
                                                                                ],
                                                                    'pluginOptions' => ['allowClear' => true],
                                                                    ]); 
                                            ?>
                                        </td>
                                        <td>
                                            <?= $form->field($presensi,  "[$index]p2")->widget(Select2::classname(), [
                                                                    'data' => ['Alfa'=>'Alfa', 'Hadir'=>'Hadir', 'Izin'=>'Izin', 'Sakit'=>'Sakit'],
                                                                    'hideSearch' => true,
                                                                    'options' => ['placeholder' => '....',
                                                                                ],
                                                                    'pluginOptions' => ['allowClear' => true],
                                                                    ]); 
                                            ?>
                                        </td>
                                        <td> 
                                            <?= $form->field($presensi,  "[$index]p3")->widget(Select2::classname(), [
                                                                    'data' => ['Alfa'=>'Alfa', 'Hadir'=>'Hadir', 'Izin'=>'Izin', 'Sakit'=>'Sakit'],
                                                                    'hideSearch' => true,
                                                                    'options' => ['placeholder' => '....',
                                                                                ],
                                                                    'pluginOptions' => ['allowClear' => true],
                                                                    ]); 
                                            ?>
                                        </td>
                                        <td>
                                            <?= $form->field($presensi,  "[$index]p4")->widget(Select2::classname(), [
                                                                    'data' => ['Alfa'=>'Alfa', 'Hadir'=>'Hadir', 'Izin'=>'Izin', 'Sakit'=>'Sakit'],
                                                                    'hideSearch' => true,
                                                                    'options' => ['placeholder' => '....',
                                                                                ],
                                                                    'pluginOptions' => ['allowClear' => true],
                                                                    ]); 
                                            ?>
                                        </td>
                                        <td> 
                                            <?= $form->field($presensi,  "[$index]p5")->widget(Select2::classname(), [
                                                                    'data' => ['Alfa'=>'Alfa', 'Hadir'=>'Hadir', 'Izin'=>'Izin', 'Sakit'=>'Sakit'],
                                                                    'hideSearch' => true,
                                                                    'options' => ['placeholder' => '....',
                                                                                ],
                                                                    'pluginOptions' => ['allowClear' => true],
                                                                    ]); 
                                            ?>
                                        </td>
                                        <td>
                                            <?= $form->field($presensi,  "[$index]p6")->widget(Select2::classname(), [
                                                                    'data' => ['Alfa'=>'Alfa', 'Hadir'=>'Hadir', 'Izin'=>'Izin', 'Sakit'=>'Sakit'],
                                                                    'hideSearch' => true,
                                                                    'options' => ['placeholder' => '....',
                                                                                ],
                                                                    'pluginOptions' => ['allowClear' => true],
                                                                    ]); 
                                            ?>
                                        </td>
                                        <td> 
                                            <?= $form->field($presensi,  "[$index]p7")->widget(Select2::classname(), [
                                                                    'data' => ['Alfa'=>'Alfa', 'Hadir'=>'Hadir', 'Izin'=>'Izin', 'Sakit'=>'Sakit'],
                                                                    'hideSearch' => true,
                                                                    'options' => ['placeholder' => '....',
                                                                                ],
                                                                    'pluginOptions' => ['allowClear' => true],
                                                                    ]); 
                                            ?>
                                        </td>
                                        <td>
                                            <?= $form->field($presensi,  "[$index]uts")->widget(Select2::classname(), [
                                                                    'data' => ['Alfa'=>'Alfa', 'Hadir'=>'Hadir', 'Izin'=>'Izin', 'Sakit'=>'Sakit'],
                                                                    'hideSearch' => true,
                                                                    'options' => ['placeholder' => '....',
                                                                                ],
                                                                    'pluginOptions' => ['allowClear' => true],
                                                                    ]); 
                                            ?>
                                        </td>
                                        <td> 
                                            <?= $form->field($presensi,  "[$index]p8")->widget(Select2::classname(), [
                                                                    'data' => ['Alfa'=>'Alfa', 'Hadir'=>'Hadir', 'Izin'=>'Izin', 'Sakit'=>'Sakit'],
                                                                    'hideSearch' => true,
                                                                    'options' => ['placeholder' => '....',
                                                                                ],
                                                                    'pluginOptions' => ['allowClear' => true],
                                                                    ]); 
                                            ?>
                                        </td>
                                        <td>
                                            <?= $form->field($presensi,  "[$index]p9")->widget(Select2::classname(), [
                                                                    'data' => ['Alfa'=>'Alfa', 'Hadir'=>'Hadir', 'Izin'=>'Izin', 'Sakit'=>'Sakit'],
                                                                    'hideSearch' => true,
                                                                    'options' => ['placeholder' => '....',
                                                                                ],
                                                                    'pluginOptions' => ['allowClear' => true],
                                                                    ]); 
                                            ?>
                                        </td>
                                        <td> 
                                            <?= $form->field($presensi,  "[$index]p10")->widget(Select2::classname(), [
                                                                    'data' => ['Alfa'=>'Alfa', 'Hadir'=>'Hadir', 'Izin'=>'Izin', 'Sakit'=>'Sakit'],
                                                                    'hideSearch' => true,
                                                                    'options' => ['placeholder' => '....',
                                                                                ],
                                                                    'pluginOptions' => ['allowClear' => true],
                                                                    ]); 
                                            ?>
                                        </td>
                                        <td>
                                            <?= $form->field($presensi,  "[$index]p11")->widget(Select2::classname(), [
                                                                    'data' => ['Alfa'=>'Alfa', 'Hadir'=>'Hadir', 'Izin'=>'Izin', 'Sakit'=>'Sakit'],
                                                                    'hideSearch' => true,
                                                                    'options' => ['placeholder' => '....',
                                                                                ],
                                                                    'pluginOptions' => ['allowClear' => true],
                                                                    ]); 
                                            ?>
                                        </td>
                                        <td> 
                                            <?= $form->field($presensi,  "[$index]p12")->widget(Select2::classname(), [
                                                                    'data' => ['Alfa'=>'Alfa', 'Hadir'=>'Hadir', 'Izin'=>'Izin', 'Sakit'=>'Sakit'],
                                                                    'hideSearch' => true,
                                                                    'options' => ['placeholder' => '....',
                                                                                ],
                                                                    'pluginOptions' => ['allowClear' => true],
                                                                    ]); 
                                            ?>
                                        </td>
                                        <td>
                                            <?= $form->field($presensi,  "[$index]p13")->widget(Select2::classname(), [
                                                                    'data' => ['Alfa'=>'Alfa', 'Hadir'=>'Hadir', 'Izin'=>'Izin', 'Sakit'=>'Sakit'],
                                                                    'hideSearch' => true,
                                                                    'options' => ['placeholder' => '....',
                                                                                ],
                                                                    'pluginOptions' => ['allowClear' => true],
                                                                    ]); 
                                            ?>
                                        </td>
                                        <td> 
                                            <?= $form->field($presensi,  "[$index]p14")->widget(Select2::classname(), [
                                                                    'data' => ['Alfa'=>'Alfa', 'Hadir'=>'Hadir', 'Izin'=>'Izin', 'Sakit'=>'Sakit'],
                                                                    'hideSearch' => true,
                                                                    'options' => ['placeholder' => '....',
                                                                                ],
                                                                    'pluginOptions' => ['allowClear' => true],
                                                                    ]); 
                                            ?>
                                        </td>
                                        <td>
                                            <?= $form->field($presensi,  "[$index]uas")->widget(Select2::classname(), [
                                                                    'data' => ['Alfa'=>'Alfa', 'Hadir'=>'Hadir', 'Izin'=>'Izin', 'Sakit'=>'Sakit'],
                                                                    'hideSearch' => true,
                                                                    'options' => ['placeholder' => '....',
                                                                                ],
                                                                    'pluginOptions' => ['allowClear' => true],
                                                                    ]); 
                                            ?>
                                        </td>
                                        
                                <?php } ?>
                            </tr>
                            
                        </table>
                        </div>
                    </div>
                    <?= Html::submitButton('Simpan Presensi', ['class' => 'btn btn-primary btn-sm btn-block mt-2']) ?>
                    <?php ActiveForm::end(); ?>
                </div>
            </div>
    </div>
</div>