<?php

use yii\helpers\Html;

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
                        <?= Html::img('@imageurl/frontend/web/img/univ.png',['class' => 'img-circle mb-2','width' => '150'])?><br>
                        <?= Html::a('Upload Logo PT', ['create'], ['class' => 'btn btn-primary']) ?>
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
