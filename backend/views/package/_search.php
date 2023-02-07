<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\PackageSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="package-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'activity_id') ?>

    <?= $form->field($model, 'subactivity_id') ?>

    <?= $form->field($model, 'destination_id') ?>

    <?= $form->field($model, 'region_id') ?>

    <?php // echo $form->field($model, 'name') ?>

    <?php // echo $form->field($model, 'duration') ?>

    <?php // echo $form->field($model, 'grade') ?>

    <?php // echo $form->field($model, 'image') ?>

    <?php // echo $form->field($model, 'map_image') ?>

    <?php // echo $form->field($model, 'book_now') ?>

    <?php // echo $form->field($model, 'enquire') ?>

    <?php // echo $form->field($model, 'price') ?>

    <?php // echo $form->field($model, 'price_3') ?>

    <?php // echo $form->field($model, 'price_5') ?>

    <?php // echo $form->field($model, 'supplement_3') ?>

    <?php // echo $form->field($model, 'supplement_5') ?>

    <?php // echo $form->field($model, 'date_added') ?>

    <?php // echo $form->field($model, 'visible') ?>

    <?php // echo $form->field($model, 'slug') ?>

    <?php // echo $form->field($model, 'highpriority') ?>

    <?php // echo $form->field($model, 'show_on_menu') ?>

    <?php // echo $form->field($model, 'other_data') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
