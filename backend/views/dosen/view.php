<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use kartik\tabs\TabsX;
use yii\bootstrap5\Modal;

/** @var yii\web\View $this */
/** @var backend\models\Pegawai $model */

$this->title = $model->nama_pegawai;
$this->params['breadcrumbs'][] = ['label' => 'Dosen', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
//\yii\web\YiiAsset::register($this);
$items = [
    [
        'label'=>'Biodata Dosen',
        'content'=>$this->render('biodata', [
            'model' => $model, 
        ]),
        'active'=>true
    ],
    [
        'label'=>'Riwayat Pendidikan',
        'content'=>$this->render('pendidikan', [
            'pendidikan' => $pendidikan, 
        ]),
        
    ],
    [
        'label'=>'Research Interest',
        'content'=>$this->render('research', [
            'research' => $research, 
        ]),
        
    ],
    [
        'label'=>'Pengabdian Masyarakat',
        'content'=>$this->render('pengabdian', [
            'pengabdian' => $pengabdian, 
        ]),
        
    ],
];
?>
<div class="pegawai-view">
    <div class="card card-body">
        
            <h5>Biodata Dosen</h5>
        
        <div class="row">
            <div class="col-md-3">
                <div class="card card-body">
                    <center>
                        <?= Html::img('@imageurl/frontend/web/img/user.png',['width' => '150'])?>

                        <p class="pt-1">
                            <?= Html::a('Update', ['update', 'id_pegawai' => $model->id_pegawai], ['class' => 'btn btn-primary']) ?>
                            <?= Html::a('Delete', ['delete', 'id_pegawai' => $model->id_pegawai], [
                                'class' => 'btn btn-danger',
                                'data' => [
                                    'confirm' => 'Are you sure you want to delete this item?',
                                    'method' => 'post',
                                ],
                            ]) ?>
                        </p>
                        <div class="mb-2">
                            <h6 class="mb-0">Status Ikatan Kerja</h6>
                            <div class="text-secondary">
                                <?= $model->status_ikatankerja?>
                            </div>
                        </div>
                        <div class="mb-2">
                            <h6 class="mb-0">Status Aktif</h6>
                            <div class="text-secondary">
                                <?= $model->status_aktif?>
                            </div>
                        </div>
                    </center>
                </div>
            </div>
            <div class="col-md-9">
                <div class="card card-body">
                    <?php echo TabsX::widget([
                        'items'=>$items,
                        'position'=>TabsX::POS_ABOVE,
                        'encodeLabels'=>false
                    ]);?>
                    
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

    $(function(){
        $('.custom_buttonb').click(function(){
            $('#modalViewb').modal('show').find('#modalContentViewb').load($(this).attr('value'));
        
        });});

    $(function(){
        $('.custom_buttonc').click(function(){
            $('#modalViewc').modal('show').find('#modalContentViewc').load($(this).attr('value'));
        
        });});

js;
$this->registerJs($js);

    Modal::begin(['id'=>'modalViewa', 'title'=>'Tambah Research Interest','size'=>'modal-md']);
    echo "<div id='modalContentViewa'></div>";
    Modal::end();

    Modal::begin(['id'=>'modalViewb', 'title'=>'Tambah Riwayat Pendidikan','size'=>'modal-md']);
    echo "<div id='modalContentViewb'></div>";
    Modal::end();

    Modal::begin(['id'=>'modalViewc', 'title'=>'Tambah Pengabdian Masyarakat','size'=>'modal-md']);
    echo "<div id='modalContentViewc'></div>";
    Modal::end();
    
   
?>
