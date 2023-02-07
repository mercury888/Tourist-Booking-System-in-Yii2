<?php
$sql = "select *from {{%seo}} where slug='booking'";
$result = Yii::$app->db->createCommand($sql)->queryOne();
$this->title = $result ?$result['title']:'Booking your trip to '.$model->name;
Yii::$app->view->registerMetaTag([
    'name' => 'description',
    'content' => $result ?$result['description']:'Booking your trip to '.$model->name
]); 
Yii::$app->view->registerMetaTag([
    'name' => 'keywords',
    'content' => $result ?$result['keywords']:'Booking your trip to '.$model->name
]); 
?>

<?php 
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
?>
  <div class="product-view-banner-section">
    <img src="images/blogimg.jpg" alt="" title="" class="img-fluid productBannerImg" style="background-size: cover !important;">

    <div class="parallax-content-2">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h1>Booking Form : <?=$model->name;?></h1>
            <span>Travellers specifications</span>
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
            <!-- <li><a href="#">Booking</a> <span> <i class="fa fa-angle-right" aria-hidden="true"></i> </span></li> -->
            <li>Booking</li>
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

              <p>All of your personal information will be securely stored in our office. We will not share your information with anyone unless we are completing previously agreed to official business on your behalf (obtaining travel permits, national park registration cards). Please complete the following information for each individual in your party.</p>

              <?php $form = ActiveForm::begin(['id' => 'booking-form']); ?>
              <?=$form->errorSummary($model);?>
              <div class="bookingSection">
                <div class="row">
                  <div class="col-md-8">
                    <div class="bookingContent">
                      <h1>Personal Information</h1>
                      <div class="bookingMainContent">
                          <p>Take care: Your name here should match your passport.</p>

                            <div class="form-row">
                              <div class="form-group col-md-6">
                                  <?= $form->field($booking_form, 'first_name')->textInput(['autofocus' => true,'placeholder' => 'First Name *']); ?>
                              </div>

                              <div class="form-group col-md-6">
                                  <?= $form->field($booking_form, 'last_name')->textInput(['placeholder' => 'Last Name *']); ?>
                              </div>
                            </div>

                            <div class="form-row">

                              <div class="form-group col-md-6">
                                  <?= $form->field($booking_form, 'email')->textInput(['placeholder' => 'Your Email Id *']); ?>
                              </div>
                              <div class="form-group col-md-6">
                                  <?= $form->field($booking_form, 'phone_no')->textInput(['placeholder' => 'Phone No *']); ?>
                              </div>
                              <div class="form-group col-md-6">
                                  <?= $form->field($booking_form, 'mobile_no')->textInput(['placeholder' => 'Mobile No *']); ?>
                              </div>

                              <div class="form-group col-md-6">
                                  <?= $form->field($booking_form, 'date_of_birth')->textInput(['placeholder' => 'Date of Birth *','type'=>'date']); ?>
                              </div>
                            </div>

                            <div class="form-row">
                              <div class="form-group col-md-6">
                                  <?= $form->field($booking_form, 'passport_no')->textInput(['placeholder' => 'Passport No *']); ?>
                              </div>
                              <div class="form-group col-md-6">
                                  <?= $form->field($booking_form, 'nationality')->textInput(['placeholder' => 'Nationality *']); ?>
                              </div>
                            
                            </div>

                            <div class="form-row">
                              <div class="form-group col-md-6">
                                  <?= $form->field($booking_form, 'address')->textInput(['placeholder' => 'Address *']); ?>
                              </div>

                              <div class="form-group col-md-6">
                              <?php $booking_form->gender = !$booking_form->gender? 0:$booking_form->gender;?>
                              <?= $form->field($booking_form, 'gender')->inline(true)->radioList([0 => 'Male', 1 => 'Female'],['placeholder' => 'Gender *']); ?>
                                <!-- <label for="gender" class="bookingGender">Gender</label>
                                <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                  <label class="form-check-label" for="inlineRadio1">Male</label>
                                </div>

                                <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                  <label class="form-check-label" for="inlineRadio2">Female</label>
                                </div> -->
                              </div>
                            </div>
                      </div>
                    </div><!-- End of bookingContent -->


                    <div class="bookingContent">
                      <h1>Trip Details</h1>
                      <div class="bookingMainContent smallGroupDates">
                      <!-- <form> -->
                        <div class="form-row year-line">
                        <div class="form-group col-md-3">
                            <div class="input-group">
                              
                              <input type="number" class="form-control" value="<?=$booking_form->pax?$booking_form->pax:1;?>" id="package-booking-pax" placeholder="1">
                              <div class="input-group-prepend">
                                <div class="input-group-text">pax</div>
                              </div>
                            </div>
                              <?php
                              $booking_form->pax = $booking_form->pax?$booking_form->pax:1;
                              $booking_form->hotel_booking_package = $booking_form->hotel_booking_package?$booking_form->hotel_booking_package:3;
                              echo $form->field($booking_form, 'pax')->textInput(['placeholder' => 'Pax *','type' => 'number','style'=>'display:none'])->label(false); ?>
                          </div>
                          <div class="form-group col-md-5 dates">
                            <span  class="cur guaranteed"><?=$model->name;?></span>
                          </div>
                          <div class="form-group col-md-6" style="display:none">
							                <?= $form->field($booking_form, 'package_id')->textInput(['placeholder' => 'Select Package *'])->label(false); ?>
                          </div>

                          <div class="form-group col-md-3" style="display:none">
							                <?= $form->field($booking_form, 'start_date')->textInput(['placeholder' => 'Start Date *']); ?>
                          </div>

                          <div class="form-group col-md-3" style="display:none">
							                <?= $form->field($booking_form, 'end_date')->textInput(['placeholder' => 'End Date *']); ?>
                          </div>

                          <div class="form-group col-md-3 dates">
                            <span  class="cur guaranteed"><?=$booking_form->display_data['dategname'];?>, <?=$booking_form->display_data['year'];?></span>
                          </div>
                          
                        </div>

                        <div class="form-row">
                         

                          <div class="form-group col-md-6" style="display:none">
							                <?= $form->field($booking_form, 'hotel_booking_package')->dropDownList($booking_form::$hbp_lookup); ?>
                          </div>
                        </div>

                        <div class="form-group">
                            <!-- <label class="bookingInputData">Price Per Person:</label> -->
                              <div class="pvo-price">
                                    <div class="package-view-price <?=$booking_form->hotel_booking_package==3?'selected-price':'';?>" data-hotel_booking_package="3" data-id="<?=$model->id;?>">
                                        <h3>3 Star Hotel Package</h3>
                                        <div class="p-v-pirce-cont">
                                        <?=$model->price;?><sup>USD</sup>
                                            <span>per persion</span>
                                        </div><!-- End of p-v-price-cont -->
                                        <p>*Including healthy meals</p>
                                                        
                                    </div><!-- End of package-view-price -->

                                    <div class="package-view-price package-price-rt <?=$booking_form->hotel_booking_package==5?'selected-price':'';?>"  data-hotel_booking_package="5"  data-id="<?=$model->id;?>">
                                            <h3>5 Star Hotel Package</h3>
                                            <div class="p-v-pirce-cont">
                                            <?=$model->price_5;?><sup>USD</sup>
                                                <span>per persion</span>
                                            </div><!-- End of p-v-price-cont -->
                                            <p class="pull-right">*Including healthy meals</p>
                                    </div><!-- End of package-view-price -->
                              </div><!-- End of pvo-price -->

                        </div>
                        <?php $booking_form->paying_per = !$booking_form->paying_per? 35:$booking_form->paying_per;?>
                        <div class="form-group">
                            <div class="btn-tellfren-dwn">
                                  <div class="row">
                                    <div class="col-6">
                                      <a  href="javascript:void(0)" data-value="35" class="btn btn-success btn-block package-paying-percentage <?=$booking_form->paying_per=='35'?'green':'';?>" title="">35% (Deposit) </a>
                                    </div>

                                    <div class="col-6">
                                      <a class="btn btn-success btn-block package-paying-percentage <?=$booking_form->paying_per=='100'?'green':'';?>" data-value="100" href="javascript:void(0)">100% (Full Price)</a>
                                    </div>
                                  </div>
                              </div>
                        </div>
                        <div class="form-group" style="display:none">

                            
                            <label class="bookingInputData">You are Paying</label>
                           
                            <?= $form->field($booking_form, 'paying_per')->inline(true)->radioList([35 => '35% (Deposit)', 100 => '100% (Full Price)'],['data-price1'=>$model->price,'data-price1'=>$model->price_5])->label(false); ?>

                        </div>

                        <div class="form-group">
                        <div class="package-view-price package-price-rt">
                                          <h3>Your Total Payment</h3>
                                          <div class="p-v-pirce-cont total-package-price">
                                          <?php if(!empty($model->price)){?>
                                              <?=($model->price*$booking_form->paying_per*$booking_form->pax/100);?>
                                          <?php }?><sup>USD</sup>
                                              <!-- <span>per persion</span> -->
                                          </div><!-- End of p-v-price-cont -->
                                          <!-- <p class="pull-right">*Including healthy meals</p> -->
                                  </div><!-- End of package-view-price -->


                          <!-- <label class="bookingInputData">Your Total Payment:</label> -->
                          
                        </div>

                        <div class="form-group">
                          <img src="https://www.mountainsherpatrekking.com/images/card-all.png" class="img-fluid" title="" alt="">
                        </div>

                        <div class="reviewSubmitBtn">
                          <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                      </div>
                      <!-- </form> -->
                    </div><!-- End of bookingContent -->
                  </div><!-- End of col-md-8 -->

                  <div class="col-md-4">
                    <div class="bookingContent">
                      <h1>Emergency Contact</h1>
                      <div class="bookingMainContent">
                          <p>Just in Case of Emergency</p>
                          
                          <!-- <form> -->
                            <div class="form-group">
                            <?= $form->field($booking_form, 'full_name')->textInput(['placeholder' => 'Full Name *']); ?>
                            </div>

                            <div class="form-group">
                            <?= $form->field($booking_form, 'relationship')->textInput(['placeholder' => 'Relationship *']); ?>
                            </div>

                            <div class="form-group">
                            <?= $form->field($booking_form, 'emergency_address')->textInput(['placeholder' => 'Address *']); ?>
                            </div>

                            <div class="form-group">
                            <?= $form->field($booking_form, 'emergency_phone_no')->textInput(['placeholder' => 'Phone No *']); ?>
                            </div>

                            <div class="form-group">
                            <?= $form->field($booking_form, 'emergency_mobile_no')->textInput(['placeholder' => 'Mobile No *']); ?>
                            </div>

                            <div class="form-group">
                            <?= $form->field($booking_form, 'emergency_email')->textInput(['placeholder' => 'Email *']); ?>
                            </div>
                      </div>
                    </div><!-- End of bookingContent -->


                    <div class="bookingContent">
                      <h1>Special Note</h1>
                      <div class="bookingMainContent">
                          <div class="form-group">
                          <?= $form->field($booking_form, 'special_note')->textArea(['placeholder' => 'Special Note *','rows' => 10])->label(false); ?>
                          </div>
                      </div>
                    </div><!-- End of bookingContent -->
                  </div><!-- End of col-md-4 -->
                </div><!-- End of row -->
              </div><!-- End of bookingSection -->
              <?php ActiveForm::end(); ?>
            </div><!-- End of aboutUs -->
          </div>
        </div><!-- End of col-md-12 -->
      </div><!-- End of row -->
    </div><!-- End of container -->
  </div><!-- End of package-view-overview -->

<style>
.package-view-price:hover {
  background-color: #e2f5e7
}

.selected-price {
  background-color: #e2f5e7
}
</style>
<?php 
$url = Yii::$app->urlManager->createUrl(['booking/calculate-price','id'=>$model->id]);
$js = <<<JS
$(".package-view-price").on('click',function(ev){
  ev.preventDefault();
  var obj = $(this);
  // alert('I am here')
  console.log(obj.data());
  $(".package-view-price").removeClass('selected-price')
  obj.addClass("selected-price");
  $("#bookingform-hotel_booking_package").val(obj.data('hotel_booking_package'));
  updateTotalPrice();

})

$("#package-booking-pax").on('keyup',function(ev){
  var obj = $(this);
  $("#bookingform-pax").val(obj.val());
  updateTotalPrice();
  // console.log(obj.val());
})

$("#package-booking-pax").change(function () {
    var direction = this.defaultValue < this.value
    this.defaultValue = this.value;
    $("#bookingform-pax").val(this.defaultValue);
    updateTotalPrice();
    // if (direction) alert("increase!");
    // else alert("decrease!");
});

$(".package-paying-percentage").on('click',function(ev){
  ev.preventDefault();
  var obj = $(this);
  console.log(obj.data('value'));
  selected_val = obj.data('value');
  var radio = $("#bookingform-paying_per").find('input:radio[value="'+selected_val+'"]').click();
    $(".package-paying-percentage").removeClass("green");
    obj.addClass("green");
    updateTotalPrice();
})

function updateTotalPrice(){
  pax = $("#package-booking-pax").val();
  paying_for = $("#bookingform-hotel_booking_package").val();
  paying_percentage = $("input[name='BookingForm[paying_per]']:checked").val();
  
  


  $.ajax({
    type: 'post',
    url: '$url',
    dataType: 'json',
    data: { 
      pax: pax,
      paying_for: paying_for,
      paying_percentage: paying_percentage,
    },
    success: function (res){
      $(".total-package-price").html(res.price)
    }
  })
}



JS;
$this->registerJS($js);
?>

<style>
.green {
    background-color: #28a745 !important
}
</style>