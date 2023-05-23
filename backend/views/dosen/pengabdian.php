<?php
    use yii\widgets\{Pjax, ListView};
    use yii\helpers\Url;

    $id_pegawai = $_GET['id_pegawai'];
?>
 <p style="text-align:right">
                        <a class="btn btn-primary btn-sm custom_buttonc text-white" value="<?= Url::to(['add-pendidikan','id_pegawai' => $id_pegawai]) ?>">
                            <b><i class="fas fa-plus"></i> Tambah Pengabdian</b>
                        </a>
                    
                    </p>
<table class="table table-bordered">
    <thead>
    <tr>
        <th>Jenjang Pendidikan</th>
        <th>Nama Institusi</th>
        <th>Prodi</th>
        <th>Waktu Pendidikan</th>
        <th>Action</th>
    </tr>
    </thead>
    <tbody>
    <?= ListView::widget([
                                        'options' => ['class' => 'list-view'],
                                        'dataProvider' => $pengabdian,
                                        
                                        'itemView' => '_pendidikan_item',
                                        'pager' => [
                                            'options'=>['class'=>'pagination justify-content-center pagination-sm','style'=>'display:none'],   // set clas name used in ui list of pagination
                                        ],      
                            ]) ?>
        
    </tbody>
</table>

