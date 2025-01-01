<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\LembagaAkreditas $model */

$this->title = 'Update Lembaga Akreditas: ' . $model->id_la;
$this->params['breadcrumbs'][] = ['label' => 'Lembaga Akreditas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_la, 'url' => ['view', 'id_la' => $model->id_la]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="lembaga-akreditas-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
