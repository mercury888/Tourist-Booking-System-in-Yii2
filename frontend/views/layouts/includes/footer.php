<?php 
use common\components\Helper;
$data = Helper::getConfigData();
$config_data = $data[0];
// print_r($config_data['value']);
// exit;
$links = json_decode($config_data['value'],true);
// print_r($links);exit;
?>

  <div class="pre-footer">
    <div class="pre-footer-shad">
      <div class="container">
        <div class="row">
          <div class="col-md-3">
            <div class="pre-footer-cont">
              <h2>Contact Address</h2>

              <ul>
                <li><span><i class="fas fa-map-marker-alt"></i></span> Bhagwan Bahal, Thamel, Dabali Marg-29, Kathmandu, Nepal</li>
                <li><span><i class="fas fa-phone-volume"></i></span> +977 - 1 - 44 35 828</li>
                <li><span><i class="fa fa-mobile" aria-hidden="true"></i></span> +977 - 9851060947</li>
                <li><span><i class="far fa-envelope"></i></span> mountainsherpatrek@gmail.com</li>
              </ul>

              <div class="plan-my-trip"><a href="<?=Yii::$app->urlManager->createUrl('/start-planning-tour');?>">Help me Plan my Trip</a></div>

              <!-- <ul class="social-sec">
                <li><a href="#"><span><i class="fab fa-facebook-f"></i></span></a></li>
                <li><a href="#"><span><i class="fab fa-twitter"></i></span></a></li>
                <li><a href="#"><span><i class="fab fa-youtube"></i></span></a></li>
                <li><a href="#"><span><i class="fab fa-google-plus-g"></i></span></a></li>
                <li><a href="#"><span><i class="fab fa-instagram"></i></span></a></li>
              </ul> -->
            </div><!-- End of pre-footer-cont -->
          </div><!-- End of col-md-3 -->

          <div class="col-md-3">
            <div class="pre-footer-cont">
              <h2>About Us</h2>

              <ul class="pre-footer-link">
                <li><a href="<?=Yii::$app->urlManager->createUrl(['/our-team']);?>">Our Team</a></li>
                <li><a href="<?=Yii::$app->urlManager->createUrl(['page/slug','slug'=>'our-licenses']);?>">Our Government Licenses</a></li>
                <li><a href="<?=Yii::$app->urlManager->createUrl(['page/slug','slug'=>'why-mste']);?>">Why MSTE?</a></li>
                <li><a href="<?=Yii::$app->urlManager->createUrl(['page/slug','slug'=>'be-our-business-partner']);?>">Be Our business Partner</a></li>
                <li><a href="<?=Yii::$app->urlManager->createUrl(['page/slug','slug'=>'we-give-back-to-society']);?>">We give back to society</a></li>
                <li><a href="<?=Yii::$app->urlManager->createUrl(['page/slug','slug'=>'payment-cancellation']);?>">Payment & cancellation</a></li>
                <li><a href="<?=Yii::$app->urlManager->createUrl(['page/slug','slug'=>'service-overview']);?>">Service Overview</a></li>
                <li><a href="<?=Yii::$app->urlManager->createUrl(['/testimonials']);?>">Testimonials</a></li>
                <li><a href="<?=Yii::$app->urlManager->createUrl(['site/contact']);?>">Contact Us</a></li>
              </ul>
            </div><!-- End of pre-footer-cont -->
          </div><!-- End of col-md-3 -->

          <div class="col-md-3">
            <div class="pre-footer-cont">
              <h2>Useful Links</h2>

              <ul class="pre-footer-link">
              <?php foreach($links as $link){?>
                  <?php if($link['footer_link_type']==='Useful Links'){?>
                    <li><a href="<?=$link['url'];?>"><?=$link['name'];?></a></li>
                  <?php }?>
                <?php }?>
              </ul>
            </div><!-- End of pre-footer-cont -->
          </div><!-- End of col-md-3 -->

          <div class="col-md-3">
            <div class="pre-footer-cont">
              <h2>Activities</h2>

              <ul class="pre-footer-link">
                <?php foreach($links as $link){?>
                  <?php if($link['footer_link_type']==='Activities'){?>
                    <li><a href="<?=$link['url'];?>"><?=$link['name'];?></a></li>
                  <?php }?>
                <?php }?>
              </ul>
            </div><!-- End of pre-footer-cont -->
          </div><!-- End of col-md-3 -->
        </div><!-- End of row -->

        <div class="row">
          <div class="col-md-12 text-center">
            <div class="uk-grid">
              <div class="uk-width-1-1@m uk-first-column">
                <div class="uk-text-center uk-heading-line">
                  <span><img src="images/logo.png" alt="" title="" class="img-fluid footer-logo"></span>
                </div><!-- End of uk-text-center uk-heading-line -->
              </div><!-- End of uk-width-1-1@m uk-first-column -->
            </div><!-- End of uk-grid -->
          </div><!-- End of col-md-12 -->
        </div><!-- End of row -->

        <div class="row">
          <div class="col-md-12">
            <div class="copy-right-sec">
              <div class="row">
                <div class="col-md-12">
                  <p>Copyright &copy 1992-2019. All Rights Reserved. <span><a href="#">Mountain Sherpa Trekking and Expeditions Pvt. Ltd.</a></span></p>
                </div><!-- End of col-md-6 -->

                <!-- <div class="col-md-6">
                  <img src="images/icons/card-all.png" alt="" title="" class="img-fluid pre-footer-card">
                </div> --><!-- End of col-md-6 -->
              </div><!-- End of row -->
            </div><!-- End of copy-right-sec -->
          </div>
        </div><!-- End of row -->
      </div><!-- End of container -->
    </div><!-- End of pre-footer-shad -->
  </div><!-- End of pre-footer -->
