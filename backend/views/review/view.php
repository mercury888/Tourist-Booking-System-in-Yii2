<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Review */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Reviews', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="review-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'title',
            'content:ntext',
            'status',
            'create_time',
            'author',
            'email:email',
            'url:url',
            'image',
            'author_id',
            'package_id',
            'rating',
            'posted_to_facebook',
            'allow_fb_post',
            'photos:ntext',
            'slug',
            'pre_trip_info_rating',
            'meal_rating',
            'staffs_rating',
            'transportation_rating',
            'accommodation_rating',
            'vale_of_money_rating',
            'why_did_you_choose',
            'would_you_recomend',
            'advice_traveller',
            'help_full_yes_count',
            'help_full_no_count',
        ],
    ]) ?>

</div>
