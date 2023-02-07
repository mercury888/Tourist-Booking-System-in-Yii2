<?php
$sql = "select *from {{%seo}} where slug='start-planning-tour'";
$result = Yii::$app->db->createCommand($sql)->queryOne();
$this->title = $result ?$result['title']:'Start Planning your tour';
Yii::$app->view->registerMetaTag([
    'name' => 'description',
    'content' => $result ?$result['description']:'Start Planning your tour'
]); 
Yii::$app->view->registerMetaTag([
    'name' => 'keywords',
    'content' => $result ?$result['keywords']:'Start Planning your tour'
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
            <li><a href="<?=Yii::$app->urlManager->createUrl(['package/slug','slug'=>$package->slug]);?>"><?=$package->name;?></a> <span> <i class="fa fa-angle-right" aria-hidden="true"></i> </span></li>
            <li>Private Booking</li>
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

              <p>DuVine travelers experience the best of each region – world-class accommodations, sublime meals, and carefully designed itineraries. The DuVine Guides and Behind the Scenes team can’t wait to help you design the cycling trip of a lifetime that goes above and beyond your expectations.</p>

              <p>Please complete the form and one of our expert tour designers will contact you within one business day. Let’s go places!</p>

              <div class="row">
                <div class="col-md-7">
                <?php $form = ActiveForm::begin(['id' => 'trip-plan-form']); ?>
                    <?=$form->errorSummary($model);?>  
                    <div class="form-row">
                      <div class="form-group col-md-6">
                      <?= $form->field($model, 'first_name')->textInput(['autofocus' => true,'placeholder' => 'First Name *']) ?>

                        <!-- <label for="fname">First Name *</label>
                        <input type="text" class="form-control" id="fname">
                      <span class="formError">Please complete this required field.</span> -->
                      </div>
                      <div class="form-group col-md-6">
                      <?= $form->field($model, 'last_name')->textInput(['placeholder' => 'Last Name *']) ?>
                      </div>
                    </div>

                    <div class="form-group">
                      <?= $form->field($model, 'email')->textInput(['placeholder' => 'Email *']) ?>
                    </div>

                    <div class="form-group">
                      <?= $form->field($model, 'phone')->textInput(['placeholder' => 'Phone *']) ?>
                    </div>

                    <div class="form-group">
                      <?= $form->field($model, 'address')->textInput(['placeholder' => 'Address *']) ?>
                    </div>

                    <div class="form-group" style="display:none">
                      <?= $form->field($model, 'package_id')->textInput(['placeholder' => 'Select Package *','style'=>'display:nonee']) ?>
                      <!-- <label for="phonenumber">Where Would You Like To Travel?</label>
                      <select id="inputState" class="form-control">
                        <option selected>Choose...</option>
                        <option>...</option>
                      </select> -->
                    </div>

                    <div class="form-group">
                      <?= $form->field($model, 'desired_depature_date')->textInput(['placeholder' => 'Desired Departure Date *','type'=>'date']) ?>
                      <!-- <label for="phonenumber">Desired Departure Date</label>
                      <input type="text" class="form-control" id="phonenumber"> -->
                    </div>

                  

                    <div class="form-group">
                      <?= $form->field($model, 'no_of_adults')->textInput(['placeholder' => 'No of guest *','type'=>'number']) ?>
                    </div>

                    <div class="form-group">
                      <?= $form->field($model, 'no_of_children')->textInput(['placeholder' => 'No of guest *','type'=>'number']) ?>
                    </div>
                    <div class="form-group">
                    <?php 
                        $model->travelled_withus_before = $model->travelled_withus_before?$model->travelled_withus_before:2;
                    ?>
                      <?= $form->field($model, 'travelled_withus_before')->inline(true)->radioList([1=>'Yes',2=>'No'])->label("Have you travelled with us before?") ?>
                    </div>

                    <?php 
                        $model->working_with_travel_agent = $model->working_with_travel_agent?$model->working_with_travel_agent:2;
                    ?>
                    <div class="form-group">
                      <?= $form->field($model, 'working_with_travel_agent')->inline(true)->radioList(['1'=>'Yes','2'=>'No'])->label("Are you working with a Travel Agent??") ?>
                    </div>
                    <?php 
                        $model->want_extra_advice = $model->want_extra_advice?$model->want_extra_advice:2;
                    ?>
                      <p>Get expert insight from our award-winning blog and be the first to know about new trips and hot regions. *</p>
                    <div class="form-group">
                      <?= $form->field($model, 'want_extra_advice')->inline(true)->radioList([1=>'Yes, please! I want expert travel advice',2=>'No thanks'])->label(false) ?>
                    </div>

                    

                    <div class="form-group">
                      <?= $form->field($model, 'message')->textArea(['placeholder' => 'Write Message *','rows'=>6]) ?>
                      <!-- <label for="phonenumber">Message</label>
                      <textarea class="form-control" id="exampleFormControlTextarea1" rows="1"></textarea> -->
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
