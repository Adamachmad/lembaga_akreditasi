<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\penilaianprodiSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="penilaianprodi-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_penilaian') ?>

    <?= $form->field($model, 'id_indikator') ?>

    <?= $form->field($model, 'id_prodi') ?>

    <?= $form->field($model, 'tahun') ?>

    <?= $form->field($model, 'nilai') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
