<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\ReviewSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Reviews';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="review-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Review', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'title',
            'content:ntext',
            'status',
            'create_time',
            //'author',
            //'email:email',
            //'url:url',
            //'image',
            //'author_id',
            //'package_id',
            //'rating',
            //'posted_to_facebook',
            //'allow_fb_post',
            //'photos:ntext',
            //'slug',
            //'pre_trip_info_rating',
            //'meal_rating',
            //'staffs_rating',
            //'transportation_rating',
            //'accommodation_rating',
            //'vale_of_money_rating',
            //'why_did_you_choose',
            //'would_you_recomend',
            //'advice_traveller',
            //'help_full_yes_count',
            //'help_full_no_count',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
