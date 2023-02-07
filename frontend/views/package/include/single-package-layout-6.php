	  <div class="relatedBlogImg">
		<a title="<?=$model->packageDesc->meta_title;?>" href="<?=Yii::$app->urlManager->createUrl(['package/slug','slug'=>$model->slug]);?>">
		<img src="<?=$model->imageUrl;?>"  title="<?=$model->packageDesc->meta_title;?>" alt="<?=$model->name;?>"></a>
	  </div><!-- End of relatedBlogImg -->

	  <div class="relatedBlogCont">
		<h2 class="relatedBLogTitle"><a href="<?=Yii::$app->urlManager->createUrl(['package/slug','slug'=>$model->slug]);?>"><?=$model->name;?></a></h2>
		<div class="relateBlogPriceDay">
		  <div class="relateBlogPrice"> <span>USD <?=$model->price;?></span> | <?=$model->duration;?> days</div>
		</div><!-- End of relateBlogPriceDay -->

		<div class="relateBlogRating">
        	<?=$this->render("//review/include/rating-widget",['rating'=>$model->avgRating]);?>
		</div><!-- End of relateBlogRating -->
	  </div><!-- End of relatedBlogCont -->