<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\penilaianprodi $model */

$this->title = $model->id_penilaian;
$this->params['breadcrumbs'][] = ['label' => 'Penilaianprodis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="penilaianprodi-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id_penilaian' => $model->id_penilaian], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id_penilaian' => $model->id_penilaian], [
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
            'id_penilaian',
            'id_indikator',
            'id_prodi',
            'tahun',
            'nilai',
        ],
    ]) ?>

</div>
