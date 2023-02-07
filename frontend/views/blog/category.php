<?php 
use common\models\BlogCategory;
$category = BlogCategory::find()->all();

?>

<div class="blogByCategory">
    <h2>Blog Categories</h2>
    <ul>
    <?php foreach($category as $cData){?>
        <li><a href="<?=Yii::$app->urlManager->createUrl(['blog/category','slug'=>$cData->slug]);?>"><?=$cData->name;?> (<?=$cData->blogCount;?>)</a></li>
    <?php }?>
    </ul>
</div><!-- End of blogByCategory -->