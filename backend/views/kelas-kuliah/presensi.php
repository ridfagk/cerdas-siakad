
<?php
use yii\helpers\{Html, Url};
use yii\widgets\ActiveForm;
use mdm\widgets\TabularInput;
use backend\models\{MhsPresensi, KelasKRS};
use yii\helpers\ArrayHelper;
use kartik\select2\Select2;
use yii\bootstrap5\Modal;

$questidx = array_merge(array(''=>' '), ArrayHelper::map(KelasKRS::find()->where(['kelas_id'=>$_GET['id_kelas']])->all(),'id_mkkrs' ,'id_mkkrs'));
?>
   <div class="row">
        <div class="col-md-2">
            <?= $this->render('sidemenu') ?>
        </div>
        <div class="col-md-10 card card-body">
            <div class="row">
                <div class="col-md-6">
                    <h4>Presensi Kelas</h4>
                </div>
                
                <div class="col-md-6">
                    <p style="text-align:right">
                        <a class="btn btn-primary btn-sm custom_buttona text-white m-1" value="<?= Url::to(['form-presensi','id_kelas' => $id_kelas]) ?>">
                            <b><i class="fas fa-plus"></i> Isi Presensi</b>
                        </a>
                    
                    </p>
                </div>
            </div>
        
        

        <div class="row">
                <div class="col-md-6">
                    <span><b>Tahun Akademik: </b><?= $kelas->thn_akademik ?></span>
                
                </div>
                <div class="col-md-6">
                    <span><b>Nama Kelas: </b> <?= $kelas->nama_kelas ?></span>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <span><b>Prodi: </b> <?= $kelas->prodi->nama_prodi ?></span>
                </div>
                <div class="col-md-6">
                    <span><b>Matkul: </b> <?= $kelas->matkul->nama_matkul ?></span>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <span><b>Semester: </b><?= $kelas->semester ?></span>
                
                </div>
                <div class="col-md-6">
                    <span><b>SKS: </b> <?= $kelas->sks ?></span>        
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <span><b>Hari: </b><?= $kelas->hari ?></span>
                
                </div>
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-6">
                            <span><b>Tgl Mulai: </b><?= $kelas->tgl_mulai ?></span>
                        </div>
                        <div class="col-md-6">
                            <span><b>Tgl Akhir: </b> <?= $kelas->tgl_akhir ?></span>        
                        </div>
                    </div>
                </div>
            </div>
                

            <div class="row">
                <div class="col-md-6">
                    <span><b>Jam Mulai: </b><?= $kelas->jam_mulai ?></span>
                </div>
                <div class="col-md-6">
                    <span><b>Jam Akhir: </b><?= $kelas->jam_akhir ?></span>
                </div>
            </div>
        <div class="card mb-2 mt-4">

                
                
                    
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
                                <?php foreach ($kelasmhs as $index => $mhs) { 
                                    $presensi = MhsPresensi::find()->where(['mahasiswa_id'=>$mhs->nim])->one();
                                    ?>
                                        
                                        <td><?=  $mhs->nim;?> </td>
                                        <td><?=  $mhs->mhs->nama_mahasiswa;?> </td>
                                        <td> <?= (empty($presensi)) ? '' : $presensi->p1 ?></td>
                                        <td> <?= (empty($presensi)) ? '' : $presensi->p2 ?></td>
                                        <td> <?= (empty($presensi)) ? '' : $presensi->p3 ?></td>
                                        <td> <?= (empty($presensi)) ? '' : $presensi->p4 ?></td>
                                        <td> <?= (empty($presensi)) ? '' : $presensi->p5 ?></td>
                                        <td> <?= (empty($presensi)) ? '' : $presensi->p6 ?></td>
                                        <td> <?= (empty($presensi)) ? '' : $presensi->p7 ?></td>
                                        <td> <?= (empty($presensi)) ? '' : $presensi->uts ?></td>
                                        <td> <?= (empty($presensi)) ? '' : $presensi->p8 ?></td>
                                        <td> <?= (empty($presensi)) ? '' : $presensi->p9 ?></td>
                                        <td> <?= (empty($presensi)) ? '' : $presensi->p10 ?></td>
                                        <td> <?= (empty($presensi)) ? '' : $presensi->p11 ?></td>
                                        <td> <?= (empty($presensi)) ? '' : $presensi->p12 ?></td>
                                        <td> <?= (empty($presensi)) ? '' : $presensi->p13 ?></td>
                                        <td> <?= (empty($presensi)) ? '' : $presensi->p14 ?></td>
                                        <td> <?= (empty($presensi)) ? '' : $presensi->uas ?></td>
                                <?php } ?>
                            </tr>
                            
                        </table>
                        </div>
                    </div>
                    
                
            </div>
    </div>
</div>
<?php
$js=<<<js
    $(function(){
        $('.custom_buttona').click(function(){
            $('#modalViewa').modal('show').find('#modalContentViewa').load($(this).attr('value'));
        
        });});

js;
$this->registerJs($js);

    Modal::begin(['id'=>'modalViewa', 'title'=>'Isi Presensi Kelas','size'=>'modal-xl']);
    echo "<div id='modalContentViewa'></div>";
    Modal::end();
    
   
?>