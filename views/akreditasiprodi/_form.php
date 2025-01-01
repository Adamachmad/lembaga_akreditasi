<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\AkreditasiProdi $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="akreditasi-prodi-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_akreditasi')->textInput() ?>

    <?= $form->field($model, 'id_prodi')->textInput() ?>

    <?= $form->field($model, 'id_la')->textInput() ?>

    <?= $form->field($model, 'tgl_mulai')->textInput() ?>

    <?= $form->field($model, 'tgl_akhir')->textInput() ?>

    <?= $form->field($model, 'no_sk')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'file')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
