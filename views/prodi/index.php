<?php

use app\models\prodi;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\models\prodiSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Prodis';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="prodi-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Prodi', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_prodi',
            'id_fakultas',
            'nama_prodi',
            'jenjang',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, prodi $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id_prodi' => $model->id_prodi]);
                 }
            ],
        ],
    ]); ?>


</div>
