<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\Indikator $model */

$this->title = $model->id_indikator;
$this->params['breadcrumbs'][] = ['label' => 'Indikators', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="indikator-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id_indikator' => $model->id_indikator], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id_indikator' => $model->id_indikator], [
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
            'id_indikator',
            'id_elemen',
            'nama_indikator',
        ],
    ]) ?>

</div>
