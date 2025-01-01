<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\indikator $model */

$this->title = 'Create Indikator';
$this->params['breadcrumbs'][] = ['label' => 'Indikators', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="indikator-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
