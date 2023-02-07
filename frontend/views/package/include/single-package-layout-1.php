<div class="tour_container">
    <div class="img_container">
        <a title="<?=$model->packageDesc->meta_title;?>" href="<?=Yii::$app->urlManager->createUrl(['package/slug','slug'=>$model['slug']]);?>">
        <img src="<?=$model->imageUrl;?>" width="800" height="533" class="img-fluid" alt="<?=$model->name;?>" title="<?=$model->packageDesc->meta_title;?>">

        <div class="short_info">
        <?=$model['name'];?><span class="price"><sup>$</sup><?=$model['price'];?></span>
        </div>
        </a>
    </div>
</div><!-- End box tour -->