<?php
use yii\widgets\ListView;
?>

<?php
$sql = "select *from {{%seo}} where slug='testimonials'";
$result = Yii::$app->db->createCommand($sql)->queryOne();
$this->title = $result ?$result['title']:'Curstomer Reviews';
Yii::$app->view->registerMetaTag([
    'name' => 'description',
    'content' => $result ?$result['description']:'Curstomer Reviews'
]); 
Yii::$app->view->registerMetaTag([
    'name' => 'keywords',
    'content' => $result ?$result['keywords']:'Curstomer Reviews'
]); 
use common\components\Helper;
$banner_image = Helper::getSiteImage('site-image','Testimonial Banner')
?>

  <?php if(!empty($banner_image)){?>
    <div class="product-view-banner-section">
    <img src="<?=$banner_image;?>" alt="" title="" class="img-fluid productBannerImg" style="background-size: cover !important;">

    <div class="parallax-content-2">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h1>Travellers's Reviews</h1>
            <span>Travel experiences of our clients who recently returned from their trips.</span>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php }?>
  

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
            <li><a href="#">Reviews</a> <span> <i class="fa fa-angle-right" aria-hidden="true"></i> </span></li>
            <li>Customer's Reviews</li>
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
              <!-- <div class="heading sc-sp-data-dis sticky-rt-main-title">Reviews</div> -->
              <div class="data">
                <div class="scrollSectionCont">
                  <div class="packageReviews">
                    <div class="personalReview">
                    <?php
                      echo ListView::widget( [
                      'dataProvider' => $dataProvider,
                      'itemView' => '//review/include/single-review-2',
                      'pager' => [
                        'disabledPageCssClass' => 'page-link',
                          'linkContainerOptions' => [
                            'class' => ['page-item']
                          ],
                          'linkOptions' => [
                            'class' => ['page-link']
                          ]
                                 
      
                        ],
                  ] ); ?>
                     
                    </div><!-- End of personalReview -->
                  </div><!-- End of packageReviews -->
                </div>
              </div>
          </div>
        </div><!-- End of col-md-12 -->
      </div><!-- End of row -->
    </div><!-- End of container -->
  </div><!-- End of package-view-overview -->
