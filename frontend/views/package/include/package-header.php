<?php if(!isset($other_data['Main Header Image']) && !empty($other_data['Main Header Image'])){?>
       
<div class="product-view-banner-section">
    <img src="<?=$model->getMapImage($other_data['Main Header Image']['image']);?>" alt="" title="<?=$model->packageDesc->meta_title;?>" class="img-fluid productBannerImg">

    <div class="parallax-content-2">
      <div class="container">
        <div class="row">
          <div class="col-md-8">
            <h1><?=$model->name;?></h1>
            <?php if(isset($other_data['save_alt_title']) && !empty($other_data['save_alt_title'])){?>
              <span><?=json_decode($other_data['save_alt_title'],true);?></span>
            <?php }?>
          </div>

          <!-- <div class="col-md-4  d-none d-lg-block">
            <div id="price_single_main"> -->
              <!-- <span><sup>$</sup>1352</span> -->
            <!-- </div>
          </div> -->
        </div>
      </div>
    </div>
  </div>
  <!-- <span><?=json_decode($other_data['save_alt_title'],true);?></span> -->
 
  <?php }?>

  <div class="breadcrumb-nav">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <ul>
            <li><a href="<?=Yii::$app->homeUrl;?>">Home</a> <span> <i class="fa fa-angle-right" aria-hidden="true"></i> </span></li>
            <!-- <li><a href="#">Package</a> <span> <i class="fa fa-angle-right" aria-hidden="true"></i> </span></li> -->
            <li><?=$model->name;?></li>
          </ul>
        </div><!-- End of col-md-12 -->
      </div><!-- End of row -->
    </div><!-- End of container -->
  </div><!-- End of breadcrumb-nav -->
