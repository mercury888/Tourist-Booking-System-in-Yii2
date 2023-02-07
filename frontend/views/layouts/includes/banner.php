<?php 
$sql = "select image from {{%slider}} order by display_order limit 4";
$banner = Yii::$app->db->createCommand($sql)->queryAll();

?>
  <div class="banner-section">
  <?php if(!empty($banner)){?>
    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
        <div class="carousel-inner">
            <?php $i=1;foreach($banner as $bData){?>
                <?php  //if(file_exists(Yii::$app->urlManager->baseUrl.'/images/frontend/main/'.$bData['image']) && $bData['image'])
                    //{?>
                    <div class="carousel-item <?=$i==1?'active':'';?>">
                        <img src="<?=Yii::$app->urlManager->baseUrl;?>/images/frontend/main/<?=$bData['image'];?>" class="d-block w-100" alt="..." title="...">
                    </div>
                    <?php //}?>
            <?php $i++;}?>
        </div>
         <?php if($banner && count($banner)>1){?>
            <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
            </a>

            <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
         <?php }?>       
       
    </div>
    <?php }?>
  </div><!-- End main -->
