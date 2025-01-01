<?php

use app\models\penilaianprodi;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\models\penilaianprodiSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Penilaianprodis';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="penilaianprodi-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Penilaian Prodi', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_penilaian',
            'id_indikator',
            'id_prodi',
            'tahun',
            'nilai',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, penilaianprodi $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id_penilaian' => $model->id_penilaian]);
                 }
            ],
        ],
    ]); ?>


</div>
