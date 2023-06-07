<?php
use yii\helpers\{Html, Url};
use yii\widgets\ActiveForm;
use mdm\widgets\TabularInput;
use backend\models\{MhsNilai, KelasKRS};
use yii\helpers\ArrayHelper;

$questidx = array_merge(array(''=>' '), ArrayHelper::map(KelasKRS::find()->where(['kelas_id'=>$_GET['id_kelas']])->all(),'id_mkkrs' ,'id_mkkrs'));
?>


        <h4>Penilaian</h4>
        <div class="card mb-2">
            <div class="card-body shadow-sm">
                
                <?php $form = ActiveForm::begin(['id'=>'exam']); ?>
                    
                    <div class="tab-content" id="myTabContent">
                        <div class="table-responsive">
                        <table class="table table-bordered">
                            <tr>
                                <th width="3%">NIM</th>    
                                <th width="10%">Nama Mahasiswa</th>
                                <th>Nilai UTS</th>
                                <th>Nilai UAS</th>
                                <th>Nilai Tugas</th>
                                <th>Nilai Keaktifan</th>
                                <th>Total Nilai</th>
                                <th>Nilai Mutu</th>
                                <th>Nilai Huruf</th>
                            </tr>
                            <tr>
                                <?php foreach ($grades as $index => $grade) { 
                                    $list = KelasKRS::find()->where(['id_mkkrs'=>$questidx[$index]])->one();
                                    $grade->nim = $list->nim;
                                    $grade->matkul_id = $list->matkul_id;
                                    $grade->thn_akademik = $list->krs->thn_akademik;
                                    $grade->semester = $list->semester;
                                    $grade->kelas_id = $list->kelas_id;
                                    $grade->sks = $list->sks;
                                    ?>
                                        <?= $form->field($grade, "[$index]nim")->hiddenInput(['maxlength' => true])->label(false) ?> 
                                        <?= $form->field($grade, "[$index]matkul_id")->hiddenInput(['maxlength' => true])->label(false) ?> 
                                        <?= $form->field($grade, "[$index]thn_akademik")->hiddenInput(['maxlength' => true])->label(false) ?> 
                                        <?= $form->field($grade, "[$index]semester")->hiddenInput(['maxlength' => true])->label(false) ?> 
                                        <?= $form->field($grade, "[$index]kelas_id")->hiddenInput(['maxlength' => true])->label(false) ?> 
                                        <?= $form->field($grade, "[$index]sks")->hiddenInput(['maxlength' => true])->label(false) ?> 

                                        <td><?=  $list->nim;?> </td>
                                        <td><?=  $list->mhs->nama_mahasiswa;?> </td>
                                        <td><?= $form->field($grade, "[$index]nilai_uts")->textInput(['type' => 'number'])->label(false) ?> </td>
                                        <td><?= $form->field($grade, "[$index]nilai_uas")->textInput(['type' => 'number'])->label(false) ?> </td>
                                        <td><?= $form->field($grade, "[$index]nilai_tugas")->textInput(['type' => 'number'])->label(false) ?> </td>
                                        <td><?= $form->field($grade, "[$index]nilai_keaktifan")->textInput(['type' => 'number'])->label(false) ?> </td>
                                        <td><?= $form->field($grade, "[$index]total_nilai")->textInput(['disabled' => 'disabled'])->label(false) ?> </td>
                                        <td><?= $form->field($grade, "[$index]nilai_angka")->textInput(['disabled' => 'disabled'])->label(false) ?> </td>
                                        <td><?= $form->field($grade, "[$index]nilai_huruf")->textInput(['disabled' => 'disabled'])->label(false) ?> </td>
                                <?php } ?>
                            </tr>
                            
                        </table>
                        </div>
                    </div>
                    <?= Html::submitButton('Simpan Nilai', ['class' => 'btn btn-primary btn-block']) ?>
                    <?php ActiveForm::end(); ?>
                </div>
            </div>
