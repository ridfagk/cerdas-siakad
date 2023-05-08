<?php

use yii\helpers\{Html,Url};
use yii\bootstrap5\Modal;

/** @var yii\web\View $this */
/** @var backend\models\DataPT $model */

$this->title = 'Update Data Pt: ' . $model->kd_pt;
$this->params['breadcrumbs'][] = ['label' => 'Data Pts', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->kd_pt, 'url' => ['view', 'kd_pt' => $model->kd_pt]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="data-pt-update">

<div class="card card-body">
        <div class="row">
            <div class="col-md-4">
                <div class="card card-body">
                    <center>
                        <?php if($model->logo_pt == ''){?>
                            <?= Html::img('@imageurl/frontend/web/img/univ.png',['class' => 'img-circle mb-2','width' => '150'])?><br>
                        <?php } else { ?>
                            <?= Html::img('@imageurl/backend/web/img/'.$model->logo_pt,['class' => 'img-circle mb-2','width' => '150'])?><br>
                        <?php } ?>
                        <h5><?= $model->nama_pt?></h5>
                        <a class="btn btn-primary modalLogo mt-2" value="<?= Url::to(['addlogo']) ?>"><i class="fas fa-camera">&nbsp;</i> Upload Logo PT</a>
                    
                    </center>
                </div>
            </div>
            <div class="col-md-8">
                <?= $this->render('_form', [
                    'model' => $model,
                ]) ?>
            </div>
        </div>
    </div>

</div>
<?php
$js=<<<js

  $('.modalLogo').on('click', function () {
    $('#modalfoto').modal('show')
            .find('#modalFoto')
            .load($(this).attr('value'));
  });

js;
$this->registerJs($js);

Modal::begin([  
  'id' => 'modalfoto',
  'size' => 'modal-md',
]);
echo "<div id='modalFoto'></div>";
Modal::end();
?>

