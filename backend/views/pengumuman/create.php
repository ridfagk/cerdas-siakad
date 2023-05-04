<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var backend\models\Pengumuman $model */

$this->title = 'Buat Pengumuman';
$this->params['breadcrumbs'][] = ['label' => 'Pengumumen', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pengumuman-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
