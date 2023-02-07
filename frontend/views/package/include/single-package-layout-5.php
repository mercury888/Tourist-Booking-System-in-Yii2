<div class="fyt-rt-package-filter">
    <div class="row">
    <div class="col-md-5">
        <div class="fyt-rt-package-filterImg">
        <a  title="<?=$model->packageDesc->meta_title;?>" data-pjax="0" href="<?=Yii::$app->urlManager->createUrl(['package/slug','slug'=>$model->slug]);?>">
            <img src="<?=$model->imageUrl;?>" alt="<?=$model->name;?>"  title="<?=$model->packageDesc->meta_title;?>" class="img-fluid">
        </a>
        </div><!-- End of fyt-rt-package-filterImg -->
    </div><!-- End of col-md-5 -->

    <div class="col-md-7">
        <div class="fyt-rt-content-head">
        <div class="fyt-rt-titleSection">
            <h3><a  title="<?=$model->packageDesc->meta_title;?>" data-pjax="0" href="<?=Yii::$app->urlManager->createUrl(['package/slug','slug'=>$model->slug]);?>"><?=$model->name;?></a></h3>
            <div class="overviewRating">
            <?php //$model->avgRating;?>
            <?=$this->render("//review/include/rating-widget",['rating'=>round($model->avgRating)]);?>
            <p>based on <?=$model->ratingCount;?> review(s)</p>
            </div><!-- End of overviewRating -->
        </div><!-- End of fyt-rt-titleSection -->

        <div class="des-price-sectin">
            <!-- <div class="old_price">USD 1610</div> -->
            <div class="new_price"><span><i class="fa fa-tags"></i></span> USD <?=$model->price;?></div>
            <div class="duration"><?=$model->duration;?> days</div>
        </div>
        </div><!-- End of fyt-rt-content-head -->

        <ul class="facts-list">
        <?php $trip_fact = json_decode($model->overview_text,true); ?>


        <li>Trip Level: <?=$model->activityLevel[$model->grade];?></li>
        <li>Trip Style: <?=$trip_fact['trip_style_text'];?></li>
        <li>Group Size: <?=$model->packageDesc->group_size;?></li>
        <!-- <li>Arrival on: Kathmandu, Nepal</li> -->
        <li>Trip Destination : <?=$model->destination->name?></li>
        </ul>
    </div><!-- End of col-md-7 --> 
    </div><!-- End of row -->
    </div><!-- End of fyt-rt-package-filter -->