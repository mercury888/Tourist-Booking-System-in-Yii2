<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Review */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="review-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'content')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'status')->textInput() ?>

    <?= $form->field($model, 'create_time')->textInput() ?>

    <?= $form->field($model, 'author')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'url')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'image')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'author_id')->textInput() ?>

    <?= $form->field($model, 'package_id')->textInput() ?>

    <?= $form->field($model, 'rating')->textInput() ?>

    <?= $form->field($model, 'posted_to_facebook')->textInput() ?>

    <?= $form->field($model, 'allow_fb_post')->textInput() ?>

    <?= $form->field($model, 'photos')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'slug')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pre_trip_info_rating')->textInput() ?>

    <?= $form->field($model, 'meal_rating')->textInput() ?>

    <?= $form->field($model, 'staffs_rating')->textInput() ?>

    <?= $form->field($model, 'transportation_rating')->textInput() ?>

    <?= $form->field($model, 'accommodation_rating')->textInput() ?>

    <?= $form->field($model, 'vale_of_money_rating')->textInput() ?>

    <?= $form->field($model, 'why_did_you_choose')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'would_you_recomend')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'advice_traveller')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'help_full_yes_count')->textInput() ?>

    <?= $form->field($model, 'help_full_no_count')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
