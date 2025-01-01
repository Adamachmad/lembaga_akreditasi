<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\AkreditasiProdi $model */

$this->title = $model->id_akreditasi;
$this->params['breadcrumbs'][] = ['label' => 'Akreditasi Prodis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="akreditasi-prodi-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id_akreditasi' => $model->id_akreditasi], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id_akreditasi' => $model->id_akreditasi], [
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
            'id_akreditasi',
            'id_prodi',
            'id_la',
            'tgl_mulai',
            'tgl_akhir',
            'no_sk',
            'file',
        ],
    ]) ?>

</div>
