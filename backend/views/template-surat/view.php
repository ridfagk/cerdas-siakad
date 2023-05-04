<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var backend\models\DataTemplateSurat $model */

$this->title = $model->id_surat;
$this->params['breadcrumbs'][] = ['label' => 'Data Template Surats', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="data-template-surat-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id_surat' => $model->id_surat], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id_surat' => $model->id_surat], [
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
            'id_surat',
            'nama_surat',
            'file',
        ],
    ]) ?>

</div>
