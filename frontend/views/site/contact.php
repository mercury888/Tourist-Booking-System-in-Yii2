<?php
$sql = "select *from {{%seo}} where slug='contact'";
$result = Yii::$app->db->createCommand($sql)->queryOne();
$this->title = $result ?$result['title']:'Contact US';
Yii::$app->view->registerMetaTag([
    'name' => 'description',
    'content' => $result ?$result['description']:'Contact US'
]); 
Yii::$app->view->registerMetaTag([
    'name' => 'keywords',
    'content' => $result ?$result['keywords']:'Contact US'
]); 


?>

<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;
use common\components\Helper;
$banner_image = Helper::getSiteImage('site-image','Contact Banner');
// $this->title = 'Contact';
$this->params['breadcrumbs'][] = $this->title;
?>

<?php if(!empty($banner_image)){?>
	<div class="product-view-banner-section">
		<img src="<?=$banner_image;?>" alt="" title="" class="img-fluid productBannerImg" style="background-size: cover !important;">

		<div class="parallax-content-2">
		<div class="container">
			<div class="row">
			<div class="col-md-12">
				<h1>Feel Free To Contact</h1>
				<span>Our travel experts are on hand to help !</span>
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
            <li><a href="<?=Yii::$app->homeUrl;?>">Home</a> <span> <i class="fa fa-angle-right" aria-hidden="true"></i> </span></li>
            <!-- <li><a href="#">Booking</a> <span> <i class="fa fa-angle-right" aria-hidden="true"></i> </span></li> -->
            <li>Contact</li>
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
				  <div class="contactSection">
					<div class="row">
					  <div class="col-md-6">
						<h1>If you prefer, you can contact us by filling the form below.</h1>

						<?php $form = ActiveForm::begin(['id' => 'contact-form']); ?>
						<?=$form->errorSummary($model);?>
						  <div class="form-row">
							<div class="form-group col-md-6">
							<?= $form->field($model, 'first_name')->textInput(['autofocus' => true,'placeholder' => 'First Name *'])->label(false) ?>
							  <!-- <label for="fname">First Name *</label> -->
							  <!-- <input type="text" class="form-control" id="fname" placeholder="First Name *"> -->
							  <!-- <span class="formError">Please complete this required field.</span> -->
							</div>

							<div class="form-group col-md-6">
							  <!-- <label for="lname">Last Name *</label> -->
							<?= $form->field($model, 'last_name')->textInput(['placeholder' => 'Last Name *'])->label(false) ?>
							  <!-- <input type="text" class="form-control" id="lname" placeholder="Last Name *"> -->
							  <!-- <span class="formError">Please complete this required field.</span> -->
							</div>
						  </div>

						  <div class="form-row">
							<div class="form-group col-md-6">
							<?= $form->field($model, 'email')->textInput(['placeholder' => 'Email Id *'])->label(false) ?>
							  <!-- <label for="emailid">Email</label> -->
							  <!-- <input type="email" class="form-control" id="emailid" placeholder="Your Email Id *"> -->
							</div>

							<div class="form-group col-md-6">
							<?= $form->field($model, 'phone')->textInput(['placeholder' => 'Phone *'])->label(false) ?>
							  <!-- <select id="inputState" class="form-control">
								<option selected>Choose Country *</option>
								<option>...</option>
							  </select> -->
							</div>
						  </div>

						  

						  <div class="form-row">
							<div class="form-group col-md-12">
							  <!-- <label for="skype">Skype</label> -->
							<?= $form->field($model, 'address')->textInput(['placeholder' => 'Address *'])->label(false) ?>
							  <!-- <input type="email" class="form-control" id="skype" placeholder="Skype"> -->
							</div>

							<!-- <div class="form-group col-md-6">
							  <label for="gender" class="bookingGender">Gender</label>
							  <div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
								<label class="form-check-label" for="inlineRadio1">Male</label>
							  </div>

							  <div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
								<label class="form-check-label" for="inlineRadio2">Female</label>
							  </div>
							</div>-->
						  </div> 

						  <div class="form-group">
							<!-- <label for="address">Address *</label> -->
							<!-- <input type="text" class="form-control" id="address" placeholder="Address *"> -->
							<?= $form->field($model, 'subject')->textInput(['placeholder' => 'Subject *'])->label(false) ?>
						  </div>

						  <div class="form-group">
							<!-- <label for="phonenumber">Comments / Questions?</label> -->
							<?= $form->field($model, 'body')->textArea(['placeholder' => 'Comments / Questions? *','rows'=>3])->label(false) ?>
							<!-- <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Comments / Questions?"></textarea> -->
						  </div>

						  <div class="reviewSubmitBtn">
							<button type="submit" class="btn btn-primary">Submit</button>
						  </div>
						  <?php ActiveForm::end(); ?>
					  </div><!-- End of col-md-6 -->

					  <div class="col-md-6">
						<div class="googleMap">
						  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3532.069267386862!2d85.30978131438481!3d27.71514753175745!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb1a2992285449%3A0x17d7b0f507296410!2sMountain%20Sherpa%20Trekking%20(Best%20Trekking%20Company%20in%20Nepal)!5e0!3m2!1sen!2snp!4v1579858054180!5m2!1sen!2snp" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
						</div><!-- End of googleMap -->
					  </div><!-- End of col-md-6 -->

					  <div class="col-md-12">
						<div class="contactFooter">
						  <div class="row">
							<div class="col-md-6">
							  <h3>Post Booking</h3>
							  <p>If you have any question about your booking, including information about flights and visas, you can call our customer operations team and quote your booking reference at <span>+977-9851060947 Pasang Sherpa (Managing Director)</span></p>
							</div><!-- End of col-md-6 -->

							<div class="col-md-6">
							  <h3>Contact Information</h3>
							  <ul>
								<li><span>Address:</span> Mandikhatar Centre, Kathmandu, Nepal</li>
								<li><span>Phone:</span> +977 9813175762</li>
								<li><span>WhatsApp:</span> +977 9801050015</li>
								<li><span>Email:</span> <a href="mailto:info@sherpa-adventure.com">info@sherpa-adventure.com</a></li>
							  </ul>
							</div><!-- End of col-md-6 -->
						  </div><!-- End of row -->
						</div><!-- End of contactFooter -->
					  </div><!-- End of col-md-12 -->
				  </div><!-- End of contactSection -->
				</div><!-- End of aboutUs -->
			  </div>
			</div><!-- End of col-md-12 -->
		  </div><!-- End of row -->
		</div><!-- End of container -->
	  </div><!-- End of package-view-overview -->
   </div>

<?php /*?>
<div class="site-contact">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        If you have business inquiries or other questions, please fill out the following form to contact us. Thank you.
    </p>

    <div class="row">
        <div class="col-lg-5">
            <?php $form = ActiveForm::begin(['id' => 'contact-form']); ?>

                <?= $form->field($model, 'name')->textInput(['autofocus' => true]) ?>

                <?= $form->field($model, 'email') ?>

                <?= $form->field($model, 'subject') ?>

                <?= $form->field($model, 'body')->textarea(['rows' => 6]) ?>

                <?= $form->field($model, 'verifyCode')->widget(Captcha::className(), [
                    'template' => '<div class="row"><div class="col-lg-3">{image}</div><div class="col-lg-6">{input}</div></div>',
                ]) ?>

                <div class="form-group">
                    <?= Html::submitButton('Submit', ['class' => 'btn btn-primary', 'name' => 'contact-button']) ?>
                </div>

            <?php ActiveForm::end(); ?>
        </div>
    </div>

</div>
<?php */?>