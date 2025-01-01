<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\LembagaAkreditas $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="lembaga-akreditas-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_la')->textInput() ?>

    <?= $form->field($model, 'nama_la')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
