<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\LembagaAkreditas $model */

$this->title = $model->id_la;
$this->params['breadcrumbs'][] = ['label' => 'Lembaga Akreditas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="lembaga-akreditas-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id_la' => $model->id_la], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id_la' => $model->id_la], [
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
            'id_la',
            'nama_la',
        ],
    ]) ?>

</div>
