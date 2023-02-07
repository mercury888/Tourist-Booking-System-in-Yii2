<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\PackageSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Packages';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="package-index box">

    <!-- <h1><?= Html::encode($this->title) ?></h1> -->

    <p style="margin-top:10px">
        <?= Html::a('Create Package', ['create'], ['class' => 'btn btn-success pull-right']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'name',
            'duration',
            'grade',
            // 'id',
            // 'activity_id',
            // 'subactivity_id',
            // 'destination_id',
            // 'region_id',
            //  'book_now',
            // 'enquire',
            // 'price',
            'price_3',
            'price_5',
            // 'supplement_3',
            // 'supplement_5',
            //'image',
            //'map_image',
            //'book_now',
            //'enquire',
         
            'date_added',
            'visible',
            // 'slug',
            // 'highpriority',
            // 'show_on_menu',
            // 'other_data:ntext',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
