<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\ReviewSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="review-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'title') ?>

    <?= $form->field($model, 'content') ?>

    <?= $form->field($model, 'status') ?>

    <?= $form->field($model, 'create_time') ?>

    <?php // echo $form->field($model, 'author') ?>

    <?php // echo $form->field($model, 'email') ?>

    <?php // echo $form->field($model, 'url') ?>

    <?php // echo $form->field($model, 'image') ?>

    <?php // echo $form->field($model, 'author_id') ?>

    <?php // echo $form->field($model, 'package_id') ?>

    <?php // echo $form->field($model, 'rating') ?>

    <?php // echo $form->field($model, 'posted_to_facebook') ?>

    <?php // echo $form->field($model, 'allow_fb_post') ?>

    <?php // echo $form->field($model, 'photos') ?>

    <?php // echo $form->field($model, 'slug') ?>

    <?php // echo $form->field($model, 'pre_trip_info_rating') ?>

    <?php // echo $form->field($model, 'meal_rating') ?>

    <?php // echo $form->field($model, 'staffs_rating') ?>

    <?php // echo $form->field($model, 'transportation_rating') ?>

    <?php // echo $form->field($model, 'accommodation_rating') ?>

    <?php // echo $form->field($model, 'vale_of_money_rating') ?>

    <?php // echo $form->field($model, 'why_did_you_choose') ?>

    <?php // echo $form->field($model, 'would_you_recomend') ?>

    <?php // echo $form->field($model, 'advice_traveller') ?>

    <?php // echo $form->field($model, 'help_full_yes_count') ?>

    <?php // echo $form->field($model, 'help_full_no_count') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
