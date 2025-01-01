<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\Prodi;
use app\models\Akreditasi;

/** @var yii\web\View $this */
/** @var app\models\AkreditasiProdi $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="akreditasi-prodi-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'prodi_id')->dropDownList(
        ArrayHelper::map(Prodi::find()->all(), 'id', 'name'),
        ['prompt' => 'Select Prodi']
    ) ?>

    <?= $form->field($model, 'akreditasi_id')->dropDownList(
        ArrayHelper::map(Akreditasi::find()->all(), 'id', 'name'),
        ['prompt' => 'Select Akreditasi']
    ) ?>

    <?= $form->field($model, 'tahun')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>