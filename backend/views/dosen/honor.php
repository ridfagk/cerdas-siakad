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
            <h4>Honor Dosen</h4>
            <p style="text-align:right">
                <a class="btn btn-primary btn-sm custom_buttonb text-white" value="<?= Url::to(['add-honor','id_pegawai' => $id_pegawai]) ?>">
                    <b><i class="fas fa-plus"></i> Tambah Honor Dosen</b>
                </a>
            </p>
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th>Bulan</th>
                    <th>Tahun</th>
                    <th>Jumlah</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <?= ListView::widget([
                                                    'options' => ['class' => 'list-view'],
                                                    'dataProvider' => $honor,
                                                    
                                                    'itemView' => '_honor_item',
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
        $('.custom_buttonb').click(function(){
            $('#modalViewb').modal('show').find('#modalContentViewb').load($(this).attr('value'));
        
        });});


js;
$this->registerJs($js);

    Modal::begin(['id'=>'modalViewb', 'title'=>'Tambah Riwayat Pendidikan','size'=>'modal-md']);
    echo "<div id='modalContentViewb'></div>";
    Modal::end();
    
   
?>