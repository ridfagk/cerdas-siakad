<?php
    use yii\widgets\{Pjax, ListView};
    use yii\helpers\Url;

    $id_pegawai = $_GET['id_pegawai'];
?>
 <p style="text-align:right">
                        <a class="btn btn-primary btn-sm custom_buttona text-white" value="<?= Url::to(['add-research','id_pegawai' => $id_pegawai]) ?>">
                            <b><i class="fas fa-plus"></i> Tambah Research Interest</b>
                        </a>
                    
                    </p>
<table class="table table-bordered">
    <thead>
    <tr>
        <th>Judul Research</th>
        <th>Penjelasan</th>
        <th>Tahun Research</th>
        <th>Jenis Research</th>
        <th>Action</th>
    </tr>
    </thead>
    <tbody>
    <?= ListView::widget([
                                        'options' => ['class' => 'list-view'],
                                        'dataProvider' => $research,
                                        
                                        'itemView' => '_research_item',
                                        'pager' => [
                                            'options'=>['class'=>'pagination justify-content-center pagination-sm','style'=>'display:none'],   // set clas name used in ui list of pagination
                                        ],      
                            ]) ?>
        
    </tbody>
</table>

