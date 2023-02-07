<?php
$sql = "select *from {{%seo}} where slug='book'";
$result = Yii::$app->db->createCommand($sql)->queryOne();
$this->title = $result ?$result['title']:'Book your package';
Yii::$app->view->registerMetaTag([
    'name' => 'description',
    'content' => $result ?$result['description']:'Book your package'
]); 
Yii::$app->view->registerMetaTag([
    'name' => 'keywords',
    'content' => $result ?$result['keywords']:'Book your package'
]); 
?>
  <?php 
  use yii\helpers\Html;
  use yii\bootstrap\ActiveForm;
  use yii\captcha\Captcha;
  ?>
  
  <div class="breadcrumb-nav">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <ul>
            <li><a href="<?=Yii::$app->homeUrl;?>">Home</a> <span> <i class="fa fa-angle-right" aria-hidden="true"></i> </span></li>
            <li>Book</li>
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
              <!-- <div class="heading sc-sp-data-dis sticky-rt-main-title">Reviews</div> -->

              <!-- <p>DuVine travelers experience the best of each region – world-class accommodations, sublime meals, and carefully designed itineraries. The DuVine Guides and Behind the Scenes team can’t wait to help you design the cycling trip of a lifetime that goes above and beyond your expectations.</p> -->

              <!-- <p>Please complete the form and one of our expert tour designers will contact you within one business day. Let’s go places!</p> -->

              <div class="row">
                <div class="col-md-7">
                <?php $form = ActiveForm::begin(['id' => 'trip-plan-form']); ?>
                    <?=$form->errorSummary($model);?>  
                      <div class="form-group">
                      <?= $form->field($model, 'name')->textInput(['autofocus' => true,'placeholder' => 'Name *']) ?>

                        <!-- <label for="fname">First Name *</label>
                        <input type="text" class="form-control" id="fname">
                      <span class="formError">Please complete this required field.</span> -->
                      </div>

                    <div class="form-group">
                      <?= $form->field($model, 'email')->textInput(['placeholder' => 'Email *']) ?>
                    </div>

                      <div class="form-group">
                      <?= $form->field($model, 'trip_name')->textInput(['placeholder' => 'Trip Name *']) ?>
                      </div>

                    <div class="form-group">
                      <?= $form->field($model, 'trip_start_date')->textInput(['placeholder' => 'Trip Start Date *']) ?>
                    </div>

                    <div class="form-group">
                      <?= $form->field($model, 'nationality')->textInput(['placeholder' => 'Nationality *']) ?>
                    </div>
                    <div class="form-group">
                      <?= $form->field($model, 'amount')->textInput(['placeholder' => 'Amount (USD) *']) ?>
                    </div>

                    <div class="reviewSubmitBtn">
                      <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                    <?php ActiveForm::end(); ?>
                </div>

                <div class="col-md-5 ">
                <div class="row">
                  <div class="col-md-12">
                    <h3>Post Booking</h3>
                    <p>If you have any question about your booking, including information about flights and visas, you can call our customer operations team and quote your booking reference at <span>+977-9851060947 Pasang Sherpa (Managing Director)</span></p>
                  </div><!-- End of col-md-6 -->

                  <div class="col-md-12">
                    <h3>Contact Information</h3>
                    <ul>
                    <li><span>Address:</span> Mandikhatar Centre, Kathmandu, Nepal</li>
                    <li><span>Phone:</span> +977 9813175762</li>
                    <li><span>WhatsApp:</span> +977 9801050015</li>
                    <li><span>Email:</span> <a href="mailto:info@sherpa-adventure.com">info@sherpa-adventure.com</a></li>
                    </ul>
                  </div><!-- End of col-md-6 -->
						  </div><!-- End of row -->

                </div>
              </div>
            </div><!-- End of aboutUs -->
          </div>
        </div><!-- End of col-md-12 -->
      </div><!-- End of row -->
    </div><!-- End of container -->
  </div><!-- End of package-view-overview -->
