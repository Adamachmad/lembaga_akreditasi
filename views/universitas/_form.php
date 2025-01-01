<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Universitas $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="universitas-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_universitas')->textInput() ?>

    <?= $form->field($model, 'nama_universitas')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
