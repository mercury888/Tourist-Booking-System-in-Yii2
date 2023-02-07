<?php 
$sql = "select *from {{%review}} where status=2 order by id desc limit 2";
$results = Yii::$app->db->createCommand($sql)->queryAll();
?>


<div class="reviewAbout">
    <div class="contLeft">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="client-reviews">
              <h1>Traveller's Reviews <span><a href="<?=Yii::$app->urlManager->createUrl('/testimonials');?>">Read More Reviews</a></span></h1>

              <div class="row">
              <?php foreach($results as $rData){?>
                <?=$this->render("//review/include/single-review-1",['model'=>$rData]);?>
              <?php }?>
                
                <!-- <div class="col-md-12">
                  <div class="client-review-readmore">
                    <a href="#">Read More Reviews</a> -->
                  <!-- </div>End of client-review-readmore -->
                <!-- </div>End of col-md-12 -->
              </div><!-- End of row -->
            </div><!-- End of client-reviews -->
          </div><!-- End of col-md-12 -->
        </div>
      </div>
    </div>

    <div class="contRight">
      <div class="why-mountain-sherpa">
        <!-- <div class="experience-frame"> -->
          <div class="container">
            <div class="row">
              <div class="col-md-12">
                <div class="why-mt-sherpa-content">
                  <h1>Why Mountain Sherpa Treking?</h1>
                  <p>We are specializing for small groups trekking, tours and climbing in Nepal, Tibet and Bhutan. For more than 2 decades we have been working hard to become Nepal's most responsible adventure tour operator. This makes us, without doubt, the leading adventure Sherpa’s company in Nepal.</p>

                  <ul>
                    <li>Over 20 Years of Experiences</li>
                    <li>100% Customer Satisfaction</li>
                    <li>Safety is our first Priority</li>
                    <li>Hassle Free Services</li>
                    <li>Authentic Sherpa Experiences</li>
                    <li>Expert Local Sherpa Guides</li>
                    <!-- <li>Guaranteed and Reasonable price</li>
                    <li>Well-designed & Flexible Itinerary</li> -->
                  </ul>
                </div><!-- End of why-mt-sherpa-content -->
              </div><!-- End of col-md-12 -->
            </div>
          </div>
        <!-- </div>End of experience-frame -->
      </div><!-- End of why-mountain-sherpa -->
    </div>
  </div><!-- End of reviewAbout -->
