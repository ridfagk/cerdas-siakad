<?php
use yii\widgets\{Pjax, ListView};
use yii\helpers\Url;
use yii\bootstrap5\Modal;

$id_pegawai = $_GET['id_pegawai'];
?>
<div class="row">
    <div class="col-md-2">
        <?= $this->render('sidemenu') ?>
    </div>
    <div class="col-md-10">
        <div class="card card-body">
            <h4>Pengabdian Masyarakat</h4>
            <p style="text-align:right">
                                    <a class="btn btn-primary btn-sm custom_buttonc text-white" value="<?= Url::to(['add-pengabdian','id_pegawai' => $id_pegawai]) ?>">
                                        <b><i class="fas fa-plus"></i> Tambah Pengabdian</b>
                                    </a>
                                
                                </p>
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th>Judul Pengabdian</th>
                    <th>Tanggal Pengabdian</th>
                    <th>Lokasi</th>
                    <th>Mitra</th>
                    <th>Mahasiswa Terlibat</th>
                    <th>Penjelasan</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <?= ListView::widget([
                                                    'options' => ['class' => 'list-view'],
                                                    'dataProvider' => $pengabdian,
                                                    
                                                    'itemView' => '_pengabdian_item',
                                                    'pager' => [
                                                        'options'=>['class'=>'pagination justify-content-center pagination-sm','style'=>'display:none'],   // set clas name used in ui list of pagination
                                                    ],      
                                        ]) ?>
                    
                </tbody>
            </table>
        </div>
    </div>
</div>

<?php
$js=<<<js

    $(function(){
        $('.custom_buttonc').click(function(){
            $('#modalViewc').modal('show').find('#modalContentViewc').load($(this).attr('value'));
        
        });});

js;
$this->registerJs($js);

    Modal::begin(['id'=>'modalViewc', 'title'=>'Tambah Pengabdian Masyarakat','size'=>'modal-md']);
    echo "<div id='modalContentViewc'></div>";
    Modal::end();
    
   
?>