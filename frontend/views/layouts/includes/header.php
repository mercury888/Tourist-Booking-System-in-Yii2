<?php 
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;
use frontend\models\QuickInquiryForm;
use common\models\QuickInquiry;

$qeform = new QuickInquiryForm;
if($qeform->load(Yii::$app->request->post()) && $qeform->validate()){
  $qimodel = new QuickInquiry;
  $qimodel->attributes = $qeform->attributes;
  $qimodel->message = $qeform->body;
  $qimodel->status = 0;
  $qimodel->create_time = time();
  $qimodel->save(false);
  $qeform->sendEmail($qeform->email);
  $qeform->sendEmailToAdmin(Yii::$app->params['adminEmail']);
  $qeform = new QuickInquiryForm;
//  unset($qeform->attributes);
}
?>

<div class="header-section">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div id="logo_home">
                  <a href="<?=Yii::$app->homeUrl;?>"><img src="images/logo.png" alt="Mountain Sherpa" title="Mountain Sherpa" class="img-fluid"></a>
                </div>
            </div><!-- End of col-md-3 -->

            <div class="col-md-8 offset-md-1 align-self-center d-none d-lg-block">
              <div class="header-right-cont">
                <ul>
                  <li class="popUpSection">
                    <!-- <a href="#" data-toggle="modal" data-target="#product_view">Quick Inquiry</a> -->
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary quick-inquiry-head" data-toggle="modal" data-target="#exampleModalCenter">
                      Quick Inquiry
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                      <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                        <div class="modal-content modal-quick-inquiry">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalCenterTitle">We Help You Decide Your Special Trip</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                            <div class="row">
                              <div class="col-md-8">
                                <img src="https://www.thirdrockadventures.com/images/ppnepal.jpg" alt="" title="" class="img-fluid">
                              </div><!-- End of col-md-6 -->

                              <div class="col-md-4">
                              <?php $form = ActiveForm::begin(['id' => 'qe-form']); ?>
                                  <div class="row form-row align-items-center headQuickQuery">
                                    <?php 
                                    echo $form->field($qeform, 'name',[
                                    'template' => '<div class="col-md-12 quick-inquiry-cont">
                                                      <label class="sr-only"> {label}</label>
                                                      <div class="input-group field-quickinquiryform-name required">
                                                      <div class="input-group-prepend">
                                                        <div class="input-group-text"><i class="fa fa-user" aria-hidden="true"></i></div>
                                                      </div>
                                                      {input}
                                                      </div>
                                                      <p class="help-block help-block-error"></p>
                                                    </div>'
                                  ])->textInput(['autofocus' => true,'placeholder' => 'Name *'])->label(false);?>
                                    <?php 
                                    echo $form->field($qeform, 'email',[
                                    'template' => '<div class="col-md-12 quick-inquiry-cont">
                                                      <label class="sr-only"> {label}</label>
                                                      <div class="input-group  field-quickinquiryform-email required">
                                                      <div class="input-group-prepend">
                                                        <div class="input-group-text"><i class="fa fa-envelope" aria-hidden="true"></i></div>
                                                      </div>
                                                      {input}
                                                      </div>
                                                      <p class="help-block help-block-error"></p>
                                                    </div>'
                                  ])->textInput(['autofocus' => true,'placeholder' => 'Email *'])->label(false);?>

                                    <?php 
                                    echo $form->field($qeform, 'phone',[
                                    'template' => '<div class="col-md-12 quick-inquiry-cont">
                                                      <label class="sr-only"> {label}</label>
                                                      <div class="input-group  field-quickinquiryform-phone required">
                                                      <div class="input-group-prepend">
                                                        <div class="input-group-text"><i class="fa fa-phone" aria-hidden="true"></i></div>
                                                      </div>
                                                      {input}
                                                      </div>
                                                      <p class="help-block help-block-error"></p>
                                                    </div>'
                                  ])->textInput(['autofocus' => true,'placeholder' => 'Phone *'])->label(false);?>

                                    <?php 
                                    echo $form->field($qeform, 'address',[
                                    'template' => '<div class="col-md-12 quick-inquiry-cont">
                                                      <label class="sr-only"> {label}</label>
                                                      <div class="input-group  field-quickinquiryform-address required">
                                                      <div class="input-group-prepend">
                                                        <div class="input-group-text"><i class="fa fa-list-ul" aria-hidden="true"></i></div>
                                                      </div>
                                                      {input}
                                                      </div>
                                                      <p class="help-block help-block-error"></p>
                                                    </div>'
                                  ])->textInput(['autofocus' => true,'placeholder' => 'Address *'])->label(false);?>

                                    <?php 
                                    echo $form->field($qeform, 'body',[
                                    'template' => '<div class="col-md-12 quick-inquiry-cont">
                                                      <label class="sr-only"> {label}</label>
                                                      <div class="input-group  field-quickinquiryform-body required">
                                                      <div class="input-group-prepend">
                                                        <div class="input-group-text"><i class="fa fa-commenting-o" aria-hidden="true"></i></div>
                                                      </div>
                                                      {input}
                                                      </div>
                                                      <p class="help-block help-block-error"></p>
                                                    </div>'
                                  ])->textInput(['autofocus' => true,'placeholder' => 'Message *'])->label(false);?>

                                    <div class="col-md-12">
                                      <button type="submit" class="btn btn-primary quick-inquiry-btn">Submit</button>
                                    </div>
                                  </div>
                                <?php ActiveForm::end(); ?>
                              </div><!-- End of col-md-6 -->
                            </div><!-- End of row -->
                          </div>
                          <!-- <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save changes</button>
                          </div> -->
                        </div>
                      </div>
                    </div>
                  </li>

                  <li class="contact-person">
                    Pasang Sherpa (Managing Director)
                    <h3><span><i class="fas fa-mobile-alt"></i></span> +977-9851060947</h3>
                  </li>

                  <!-- <li>
                    Sumba Sherpa (Sales Director)
                    <h3><span><i class="fas fa-mobile-alt"></i></span> 9849643731</h3>
                  </li>

                  <li>
                    Tandi Sherpa (Operation Director)
                    <h3><span><i class="fas fa-mobile-alt"></i></span> 9841289596</h3>
                  </li> -->
                </ul>
              </div><!-- End of header-right-cont -->
            </div><!-- End of col-md-9 -->
        </div><!-- End of row -->
    </div><!-- container -->
  </div><!-- End of header-section -->
