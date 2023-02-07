<?php
use yii\widgets\ListView;
?>
<?php

$this->title = $category->catDesc->meta_title?$category->catDesc->meta_title:$category->name;
// echo $category->id; exit;
Yii::$app->view->registerMetaTag([
    'name' => 'description',
    'content' => $category->catDesc->meta_desc
]); 
Yii::$app->view->registerMetaTag([
    'name' => 'keywords',
    'content' => $category->catDesc->meta_key
]); 
?>
  <div class="product-view-banner-section">
    <img src="images/blogimg.jpg" alt="" title="" class="img-fluid productBannerImg" style="background-size: cover !important;">

    <div class="parallax-content-2">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h1>Blog</h1>
            <span><?=$this->title;?></span>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- <div class="pageTitleSection">
    <img src="images/customer-reviews.png" alt="" title="" class="img-fluid productBannerImg" style="background-size: cover !important;">

    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="pageTitleContent">
            <h1>Travellers's Reviews</h1>
            <span>Travel experiences of our clients who recently returned from their trips.</span>
          </div>
        </div>
      </div>
    </div>
  </div> -->

  <div class="breadcrumb-nav">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <ul>
            <li><a href="#">Home</a> <span> <i class="fa fa-angle-right" aria-hidden="true"></i> </span></li>
            <li><a href="<?=Yii::$app->urlManager->createUrl(['/blog']);?>">Our Blog</a> <span> <i class="fa fa-angle-right" aria-hidden="true"></i> </span></li>
            <li><?=$this->title;?></li>
          </ul>
        </div><!-- End of col-md-12 -->
      </div><!-- End of row -->
    </div><!-- End of container -->
  </div><!-- End of breadcrumb-nav -->

  <div class="package-view-overview">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="header-div">
            <div class="aboutUs">
              <div class="blogSection">
                <div class="row">
                  <div class="col-md-8">
                  <?php
                  echo ListView::widget( [
                  'dataProvider' => $dataProvider,
                  'itemView' => '//blog/single-blog',
              ] ); ?>
                    
                  </div><!-- End col-md-8 -->

                  <div class="col-md-4">
                    <div class="personalReviewRt">
                    <?=$this->render("//blog/category");?>
                    
                      <div class="reviewSectionVideo">
                        <div class="video-testimonial-block">
                            <div class="video-thumbnail"><img src="https://img.youtube.com/vi/zd9IWLYiIPc/maxresdefault.jpg" alt="" class="img-fluid"></div>
                            <div class="video">
                                <iframe width="100%" height="" src="https://www.youtube.com/embed/zd9IWLYiIPc" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                            <a href="#" class="video-play"></a>
                        </div>
                      </div><!-- End of reviewSectionVideo -->
                    </div><!-- End of personalReviewRt -->
                  </div><!-- End of col-md-4 -->
                </div><!-- End of row -->
              </div><!-- End of blogSection -->
            </div><!-- End of aboutUs -->
          </div><!-- End of header-div -->
        </div><!-- End of col-md-12 -->
      </div><!-- End of row -->
    </div><!-- End of container -->
  </div><!-- End of package-view-overview -->
