<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\penilaianprodi $model */

$this->title = 'Create Penilaianprodi';
$this->params['breadcrumbs'][] = ['label' => 'Penilaianprodis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="penilaianprodi-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
