<div class="blogContent">
    <h2><a href="<?=Yii::$app->urlManager->createUrl(['blog/slug','slug'=>$model->slug]);?>"><?=$model->title;?></a></h2>

    <div class="blogAuthorDate">
    <div class="authorName"><span><i class="fa fa-user" aria-hidden="true"></i></span> Mountain Sherpa Admin</div>
    <div class="personalReviewDate"><span><i class="fa fa-clock-o" aria-hidden="true"></i></span> <?=date('M d, Y',$model->update_time);?></div>
    </div><!-- End of blogAuthorDate -->

    <a href="<?=Yii::$app->urlManager->createUrl(['blog/slug','slug'=>$model->slug]);?>"><img src="<?=$model->postImage?$model->postImage->imageUrl:'';?>" alt="" title="" class="img-fluid"></a>

    <p><?php 
    
    $str = substr($model->content,0,467);
    echo strip_tags ($str);
    ?> ... <a href="<?=Yii::$app->urlManager->createUrl(['blog/slug','slug'=>$model->slug]);?>">Read More</a></p>
</div><!-- End of blogContent -->