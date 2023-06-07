<?php
use yii\helpers\{Html, Url};
use yii\widgets\ActiveForm;
use mdm\widgets\TabularInput;
use backend\models\{MhsNilai, KelasKRS};
use yii\helpers\ArrayHelper;
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
                    <h4>Penilaian</h4>
                </div>
                
                <div class="col-md-6">
                    <p style="text-align:right">
                        <a class="btn btn-primary btn-sm custom_buttona text-white m-1" value="<?= Url::to(['form-nilai','id_kelas' => $id_kelas]) ?>">
                            <b><i class="fas fa-plus"></i> Isi Penilaian</b>
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
                    
        <div class="tab-content mt-4" id="myTabContent">
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
                    <?php foreach ($kelasmhs as $index => $mhs) { 
                        $grade = MhsNilai::find()->where(['nim'=>$mhs->nim])->one();
                        ?>

                            <td><?=  $mhs->nim;?> </td>
                            <td><?=  $mhs->mhs->nama_mahasiswa;?> </td>
                            <td> <?= (empty($grade)) ? '' : $grade->nilai_uts ?></td>
                            <td> <?= (empty($grade)) ? '' : $grade->nilai_uas ?></td>
                            <td> <?= (empty($grade)) ? '' : $grade->nilai_tugas ?></td>
                            <td> <?= (empty($grade)) ? '' : $grade->nilai_keaktifan ?></td>
                            <td> <?= (empty($grade)) ? '' : $grade->total_nilai ?></td>
                            <td> <?= (empty($grade)) ? '' : $grade->nilai_angka ?></td>
                            <td> <?= (empty($grade)) ? '' : $grade->nilai_huruf ?></td>
                            
                            
                    <?php } ?>
                </tr>
                
            </table>
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