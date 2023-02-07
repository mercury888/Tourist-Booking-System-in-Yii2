<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Package */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="package-form row">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'activity_id')->textInput() ?>

    <?= $form->field($model, 'subactivity_id')->textInput() ?>

    <?= $form->field($model, 'destination_id')->textInput() ?>

    <?= $form->field($model, 'region_id')->textInput() ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'duration')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'grade')->textInput() ?>

    <?= $form->field($model, 'image')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'map_image')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'book_now')->textInput() ?>

    <?= $form->field($model, 'enquire')->textInput() ?>

    <?= $form->field($model, 'price')->textInput() ?>

    <?= $form->field($model, 'price_3')->textInput() ?>

    <?= $form->field($model, 'price_5')->textInput() ?>

    <?= $form->field($model, 'supplement_3')->textInput() ?>

    <?= $form->field($model, 'supplement_5')->textInput() ?>

    <?= $form->field($model, 'date_added')->textInput() ?>

    <?= $form->field($model, 'visible')->textInput() ?>

    <?= $form->field($model, 'slug')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'highpriority')->textInput() ?>

    <?= $form->field($model, 'show_on_menu')->textInput() ?>

    <?= $form->field($model, 'other_data')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
