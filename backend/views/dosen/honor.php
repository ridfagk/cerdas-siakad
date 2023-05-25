<?php
use yii\widgets\{Pjax, ListView};
use yii\helpers\{Html,Url};
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
                <?= Html::a('<b><i class="fas fa-plus"></i> Tambah Honor Dosen</b>', ['add-honor', 'id_pegawai' => $id_pegawai], ['class' => 'btn btn-primary btn-xs']);?>
                
            </p>
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th>Bulan</th>
                    <th>Tahun</th>
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
        $('.custom_buttone').click(function(){
            $('#modalViewe').modal('show').find('#modalContentViewe').load($(this).attr('value'));
        
        });});


js;
$this->registerJs($js);

    Modal::begin(['id'=>'modalViewe', 'title'=>'Tambah Riwayat Pendidikan','size'=>'modal-lg']);
    echo "<div id='modalContentViewe'></div>";
    Modal::end();
    
   
?>