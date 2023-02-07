<ul>
<?php if(isset($other_data) && !empty($other_data) && isset($other_data['save_trip_fact'])){?>
    <li><a href="#" class="sc-sp-list">Trip Facts</a></li>
<?php }?>
<?php if($model->packageItenerary){?>
    <li><a href="#" class="sc-sp-list">Itinerary</a></li>
<?php }?>
    <li><a href="#" class="sc-sp-list">Date & Availability</a></li>
<?php if(isset($other_data) && !empty($other_data) && isset($other_data['save_inclusion_detail'])){?>
    <li><a href="#" class="sc-sp-list">Inclusion Detail</a></li>
<?php }?>
<?php //if($model->packageReview){?>
    <li><a href="#" class="sc-sp-list">Reviews</a></li>
<?php //}?>
<?php if(isset($other_data) && !empty($other_data) && isset($other_data['save_vital_info'])){?>
    <li><a href="#" class="sc-sp-list">Vital Information</a></li>
<?php }?>
<?php if(isset($other_data['Map Image']) && !empty($other_data['Map Image'])){?>
    <li><a href="#" class="sc-sp-list">Map</a></li>
<?php }?>
<?php if($model->packageFaq){?>
    <li><a href="#" class="sc-sp-list">FAQs</a></li>
<?php }?>
<?php if($model->packagePhoto){?>
    <li><a href="#" class="sc-sp-list">Photos</a></li>
<?php }?>
</ul>
<a href="<?=Yii::$app->urlManager->createUrl(['/start-planning-tour','slug'=>$model->slug]);?>" class="sticky-lft-btn">Start Planning</a>