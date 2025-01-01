<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\penilaianprodi $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="penilaianprodi-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_penilaian')->textInput() ?>

    <?= $form->field($model, 'id_indikator')->textInput() ?>

    <?= $form->field($model, 'id_prodi')->textInput() ?>

    <?= $form->field($model, 'tahun')->textInput() ?>

    <?= $form->field($model, 'nilai')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
