<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\prodi $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="prodi-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_prodi')->textInput() ?>

    <?= $form->field($model, 'id_fakultas')->textInput() ?>

    <?= $form->field($model, 'nama_prodi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'jenjang')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
