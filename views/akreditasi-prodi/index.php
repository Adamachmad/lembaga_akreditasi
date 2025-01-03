<?php

use app\models\AkreditasiProdi;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\models\AkreditasiProdiSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Akreditasi Prodis';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="akreditasi-prodi-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Akreditasi Prodi', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_akreditasi',
            'id_prodi',
            'id_la',
            'tgl_mulai',
            'tgl_akhir',
            //'no_sk',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, AkreditasiProdi $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id_akreditasi' => $model->id_akreditasi]);
                 }
            ],
        ],
    ]); ?>


</div>
