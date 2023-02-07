<?php
use common\components\Helper;
$banner_image = Helper::getSiteImage('site-image','Over 22 Years of Experience');
if(empty($banner_image)){
$banner_image = Yii::$app->urlManager->baseUrl.'/images/experience-img.jpg';
}
?>
<div class="experience-section" style="background: url('<?=$banner_image;?>') no-repeat fixed center center;">
    <div class="experience-frame">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="experience-content">
              <h1>Over 22 Years of Experience</h1>
              <p>We are 100% Local Sherpa owned & operated Company.As we are mountains Specialists “No one Knows Himalayas like we do".</p>
              <p>We deliver high quality customer Service for any trips in Himalaya.</p>
            </div><!-- End of experience-content -->
          </div><!-- End of col-md-12 -->
        </div><!-- End of row -->
      </div><!-- End of container -->
    </div><!-- End of experience-frame -->
  </div><!-- End of experience-section -->
