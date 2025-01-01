<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\penilaianprodi $model */

$this->title = 'Update Penilaianprodi: ' . $model->id_penilaian;
$this->params['breadcrumbs'][] = ['label' => 'Penilaianprodis', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_penilaian, 'url' => ['view', 'id_penilaian' => $model->id_penilaian]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="penilaianprodi-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
