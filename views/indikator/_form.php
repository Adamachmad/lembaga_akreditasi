<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Indikator $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="indikator-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_indikator')->textInput() ?>

    <?= $form->field($model, 'id_elemen')->textInput() ?>

    <?= $form->field($model, 'nama_indikator')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
