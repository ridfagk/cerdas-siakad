<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var backend\models\DataTA $model */

$this->title = $model->id_thnakademik;
$this->params['breadcrumbs'][] = ['label' => 'Data Tas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="data-ta-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id_thnakademik' => $model->id_thnakademik], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id_thnakademik' => $model->id_thnakademik], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_thnakademik',
            'thn_akademik',
            'status',
        ],
    ]) ?>

</div>
