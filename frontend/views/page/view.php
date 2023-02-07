<?php

$this->title = $model->contentDesc->meta_title;
Yii::$app->view->registerMetaTag([
    'name' => 'description',
    'content' => $model->contentDesc->meta_desc
]); 
Yii::$app->view->registerMetaTag([
    'name' => 'keywords',
    'content' => $model->contentDesc->meta_key
]); 

use common\components\Helper;
$banner_image = Helper::getSiteImage('site-image','Pages Banner')
?>
<?php if(!empty($banner_image)){?>
  <div class="product-view-banner-section">
      <img src="<?=$banner_image;?>" alt="" title="" class="img-fluid productBannerImg" style="background-size: cover !important;">

      <div class="parallax-content-2">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <h1><?=$model->contentDesc?$model->contentDesc->title:'';?></h1>
              <span>Sherpa Owned & Operated Company since 1998 / 15,000+ Happy Guests </span>
            </div>
          </div>
        </div>
      </div>
    </div>
<?php }?>

  <div class="breadcrumb-nav">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <ul>
            <li><a href="<?=Yii::$app->homeUrl;?>">Home</a> <span> <i class="fa fa-angle-right" aria-hidden="true"></i> </span></li>
            <!-- <li><a href="#">About</a> <span> <i class="fa fa-angle-right" aria-hidden="true"></i> </span></li> -->
            <li><?=$model->contentDesc?$model->contentDesc->title:'';?></li>
          </ul>
        </div><!-- End of col-md-12 -->
      </div><!-- End of row -->
    </div><!-- End of container -->
  </div><!-- End of breadcrumb-nav -->


<!-- <h1><?=$model->contentDesc?$model->contentDesc->title:'';?></h1> -->

<div class="package-view-overview">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="header-div">
            <div class="aboutUs">
              <!-- <div class="heading sc-sp-data-dis sticky-rt-main-title">Reviews</div> -->
              <?=$model->contentDesc?$model->contentDesc->detail:'';?>
              <!-- <div class="aboutYtVideo">
                <iframe width="100%" height="550" src="https://www.youtube.com/embed/zd9IWLYiIPc" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
              </div> -->
              <!-- End of aboutYtVideo -->
            </div><!-- End of aboutUs -->
          </div>
        </div><!-- End of col-md-12 -->
      </div><!-- End of row -->
    </div><!-- End of container -->
  </div><!-- End of package-view-overview -->


  <script type="application/ld+json">
{
  "@context": "http://schema.org/",
  "@type": "NewsArticle",
  "headline": "About Us",
   "datePublished": "2018-05-14 18:58:25",
   "dateModified": "2020-04-15 06:36:44",
  "description": "Third Rock Adventures offer you the most competitive rates for unique travel experiences  and collaborate with our contacts around the world and try to give you the best value for you",
  
    "mainEntityOfPage": {
       "@type": "WebPage",
      "@id": "https://www.thirdrockadventures.com/page/about-us"
      },
  "image": {
    "@type": "ImageObject",
    "height": "",
    "width": "",
    "url": "https://www.thirdrockadventures.com/page/about-us"
  },
  "author": "Third Rock Adventures: Tour Operator -Trekking In The Himalayas",
  "publisher": {
    "@type": "Organization",
    "logo": {
      "@type": "ImageObject",
      "url": "https://www.thirdrockadventures.com/assets-back/images/company/third-rock-adventures-NEk.png"
    },
    "name": "Third Rock Adventures: Tour Operator -Trekking In The Himalayas"
  },
  "articleBody": "Third Rock Adventures offer you the most competitive rates for unique travel experiences  and collaborate with our contacts around the world and try to give you the best value for you"
}
</script>