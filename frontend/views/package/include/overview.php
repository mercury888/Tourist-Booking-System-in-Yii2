<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$trip_fact = json_decode($model->overview_text,true);
  // print_r($trip_fact);
  // exit;
?>

<div class="package-view-overview">
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <div class="pvo-lft-cont">
            <h3 class="package-box-title">Overview</h3>
            <div class="pvo-content">
              <div class="row">
                <div class="col-md-12">
                  <div class="pvo-price">
                    <div class="package-view-price">
                    <?php //if($model->price_3){?>
                        <h3>3 Star Hotel Package</h3>
                        <div class="p-v-pirce-cont">
                            <?=$model->price_3;?><sup>USD</sup>
                            <span>per persion</span>
                        </div><!-- End of p-v-price-cont -->
                        <p>*Including healthy meals</p>
                    <?php //}?>
                     
                    </div><!-- End of package-view-price -->

                    <div class="package-view-price package-price-rt">
                        <?php //if($model->price_5){?>
                            <h3>5 Star Hotel Package</h3>
                            <div class="p-v-pirce-cont">
                                <?=$model->price_5;?><sup>USD</sup>
                                <span>per persion</span>
                            </div><!-- End of p-v-price-cont -->
                            <p>*Including healthy meals</p>
                        <?php //}?>
                    </div><!-- End of package-view-price -->
                  </div><!-- End of pvo-price -->
                </div><!-- End of col-md-12 -->

                <?php if(!empty($trip_fact)){?>
                    <div class="col-md-12">
                    <ul>
                      <li>Trip Style <span>
                        <?=$trip_fact['trip_style_text'];?>
                        <!-- <a href="#" target="_blank">Trekking & Hiking</a> -->
                      </span></li>
                      <li>
                        Trip Difficulty
                        <!-- <span>Moderate</span> -->
                        <a type="button" class="mountTrekTooltips" data-toggle="tooltip" data-placement="right" title="<?= isset($trip_fact['trip_difficulty_tooltip_text'])?$trip_fact['trip_difficulty_tooltip_text']:'';?>">
                        <?=$trip_fact['trip_difficulty_text'];?>
                        
                        <!-- Moderate -->
                        </a>
                      </li>
                    </ul>
                  </div>
                <?php }?>
                

                <div class="col-md-12">
                  <div class="overviewRating">
                    <?=$this->render("//review/include/rating-widget-2",['rating'=>$model->avgRating]);?>
                    <p>based on <?=$model->ratingCount;?> review(s)</p>
                  </div><!-- End of overviewRating -->
                </div>
              </div>

              <a class="book-now-btn" href="#date-avi-block">Book Now</a>
              <a class="btn_full_outline" href="javascript:void(0)"><i class=" icon-heart"></i> Best Price & Service Guaranteed</a>

              <div class="btn-tellfren-dwn">
                <div class="row">
                  <div class="col-6">
                    <a data-toggle="modal" data-target="#exampleModalLong" data-original-title="" href="javascript:void(0)" class="btn btn-success btn-block" title="">Tell a Friend</a>
                  </div>

                  <div class="col-6">
                    <a class="btn btn-success btn-block" href="<?=Yii::$app->urlManager->createUrl(['download/slug','slug'=>$model->slug]);?>">Download as PDF</a>
                  </div>
                </div>
              </div><!-- End of btn-tellfren-dwn -->
            </div><!-- End of pvo-content -->
          </div><!-- End of pvo-lft-cont -->
        </div><!-- End of row -->

        <div class="col-md-8">
          <div class="package-view-gallery">
            <div class="packageViewImg">
              <img src="<?=$model->imageUrl;?>" alt="<?=$model->packageDesc->meta_title;?>" title="<?=$model->packageDesc->meta_title;?>" class="img-fluid">
            </div><!-- End of packageViewImg -->
          </div><!-- End of package-view-gallery -->
        </div><!-- End of col-md-8 -->

        <div class="col-md-12">
          <div class="package-view-para">
          <?=$model->packageDesc?$model->packageDesc->description:'';?>
         
          </div><!-- End of package-view-para -->
        </div><!-- End of col-md-12 -->
      </div><!-- End of row -->
    </div><!-- End of container -->
  </div><!-- End of package-view-overview -->

  <!-- Modal -->
 <!-- Modal -->
 <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
      <div class="modal-content modal-quick-inquiry">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalCenterTitle">Tell your riend about <?=$model->name;?></h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="row">
            
            <div class="col-md-12">
            <?php $form = ActiveForm::begin(['id' => 'tf-form']); ?>
                <div class="row form-row align-items-center">
                  <div class="col-md-4 quick-inquiry-cont">
                  <?= $form->field($tf_form, 'name')->textInput(['autofocus' => true,'placeholder' => 'Name *']) ?>
                  </div>
                  
                  <div class="col-md-4 quick-inquiry-cont">
                    <?= $form->field($tf_form, 'email')->textInput(['placeholder' => 'Email *']) ?>
                    <?= $form->field($tf_form, 'package_id')->hiddenInput(['style' => 'display:none','value'=>$model->id])->label(false) ?>
                    </div>
                  
                  <div class="col-md-4 quick-inquiry-cont">
                    <?= $form->field($tf_form, 'friend_email')->textInput(['placeholder' => 'Friend Email *']) ?>
                      </div>

                  <div class="col-md-12 quick-inquiry-cont">
                  <?= $form->field($tf_form, 'message')->textArea(['placeholder' => 'Message *','rows'=>4]) ?>
                  </div>

                  <div class="col-md-2">
                  </div>
                  <div class="col-md-8">
                      <div class="message-body sk-msg-preview" style="align:center">
                        <div style="background: #FFFFFF; margin:0; padding:0; font-family:Arial, Helvetica, sans-serif; font-size:13px; color:#666;">
                          <div style="width:600px; margin: 20px auto;">
                              <div class="custom-msg">"Your Message Here"</div>
                          </div>
                          <table width="600" align="center" cellspacing="0" cellpadding="0">
                              <tbody><tr style="background: #006498;">
                                  <td width="40%">
                                      <a href="https://www.mountainsherpatrekking.com" target="_blank">
                                          <img src="https://www.mountainsherpatrekking.com/images/logo.png" alt="Mountain Sherpa" style="margin: 10px auto;">
                                      </a>
                                  </td>
                                  <td style="padding: 5px;float:right;color:#FFF;">
                                      <table width="100%">
                                          <tbody><tr>
                                              <td style="padding: 5px;float:left;color:#FFF;">

                                              </td>
                                              <td style="padding: 5px;float:right;color:#FFF;font-size: 11px">
                                                  mountainsherpatrek@gmail.com                        </td>
                                          </tr>
                                          <tr>
                                              <td style="padding: 5px;float:left;color:#FFF;">
                                                  <img src="https://www.mountainsherpatrekking.com/images/phone_ffffff_32.png" alt="phone">
                                              </td>
                                              <td style="padding: 5px;float:right;color:#FFF;">
                                                  977-9851060947 <br>
                                                  977-9849643731                        </td>
                                          </tr>

                                      </tbody></table>
                                  </td>
                              </tr>

                              <tr>
                                  <td colspan="3">
                                      <div style=" line-height: 18px; font-weight: bold;margin:10px 0;text-align:center; ">
                                      <a href="https://www.mountainsherpatrekking.com/<?=$model->slug;?>" style="font-size: 20px; color: #333333; text-decoration: none;" target="_blank">
                                      <?=$model->name;?>                </a>
                                      </div>
                                      <img width="600px" src="https://www.mountainsherpatrekking.com/images/frontend/main/<?=$model->image;?>" alt="Everest Base Camp Trek Photo with expert sherpa guide">                <div style="font-size: 14px; color: #333333; line-height: 18px;margin: 0 0 10px;">
                                      <?=$model->packageDesc->description;?>
                                      </div>
                                  </td>
                              </tr>

                              <tr>
                                  <td colspan="3">
                                      <div style="display:block; background:#006498; font-size: 20px; margin-bottom: 3px; padding: 10px; text-transform: uppercase; color:#fff;">
                                          Overview
                                      </div>
                                  </td>
                              </tr>
                              <tr>
                                  <td colspan="3">
                                      <table style="margin:0 0 20px 0;" width="100%">
                                                                  <tbody>
                                                               
                  
                                            <?php if(!empty($trip_fact)){?>
                                              <tr>
                                              <td style="text-align: right; vertical-align: text-top;padding:5px; font-weight: bold;">&nbsp;</td>
                                              <td>
                                                  <table width="100%">
                                                      <tbody>
                                                      
                                                      <tr>
                                                          <td width="50%" style="font-weight: bold;font-size: 15px;font-family: lato;color: #3D3D3D;vertical-align: top;border-color: #F3F3F3;text-transform: capitalize;padding: 0px 3% 20px 8px;">
                                                          Trip Style                                      
                                                          </td>

                                                          <td>
                                                           <p style="color: #ff6f00;font: 14px 'Neo_Sans_Bold';">
                                                            <?=$trip_fact['trip_style_text'];?>   
                                                                  <!-- <span  style="display: block;font: italic 14px 'neo_sans';">per persion</span>                                       -->
                                                                  <!-- <span style="display: inline;padding: 0.1em 0.3em;position: absolute;background: none repeat scroll 0% 0% #108E25;font-size: 12px;font-weight: 400;color: #FFF;text-transform: lowercase;bottom: 0px;right: 0px;">Per Person</span> -->
                                                              </p>

                                                          </td>
                                                         
                                                      </tr>

                                                      <tr>
                                                      <td width="50%" style="font-weight: bold;font-size: 15px;font-family: lato;color: #3D3D3D;vertical-align: top;border-color: #F3F3F3;text-transform: capitalize;padding: 0px 3% 20px 8px;">
                                                              Trip Difficulty                              
                                                                
                                                          </td>

                                                          <td>
                                                               <p style="color: #ff6f00;font: 14px 'Neo_Sans_Bold';">
                                                                  <?=$trip_fact['trip_difficulty_text'];?>
                                                                  </p>  
                                                              <p> 
                                                                  <?= isset($trip_fact['trip_difficulty_tooltip_text'])?$trip_fact['trip_difficulty_tooltip_text']:'';?>
                                                              </p> 

                                                          </td>
                                                      </tr>
                                                      
                                                  </tbody></table>
                                              </td>
                                          </tr>
                                          <?php }?>
                                              <tr>
                                              <td style="text-align: right; vertical-align: text-top;padding:5px; font-weight: bold;">&nbsp;</td>
                                              <td>
                                                  <table width="100%">
                                                      <tbody><tr>
                                                          <td width="50%" style="font-weight: bold;font-size: 15px;font-family: lato;color: #3D3D3D;vertical-align: middle;border-color: #F3F3F3;text-transform: capitalize;padding: 0px 3% 20px 8px;">
                                                          3 Star Hotel Package                                      
                                                           <p style="color: #ff6f00;font: 36px 'Neo_Sans_Bold';">
                                                                  USD <?=$model->price_3;?><br />      
                                                                  <span  style="display: block;font: italic 14px 'neo_sans';">per persion</span>                                      
                                                                  <!-- <span style="display: inline;padding: 0.1em 0.3em;position: absolute;background: none repeat scroll 0% 0% #108E25;font-size: 12px;font-weight: 400;color: #FFF;text-transform: lowercase;bottom: 0px;right: 0px;">Per Person</span> -->
                                                              </p>
                                                          </td>
                                                          <td width="50%" style="font-weight: bold;font-size: 15px;font-family: lato;color: #3D3D3D;vertical-align: middle;border-color: #F3F3F3;text-transform: capitalize;padding: 0px 3% 20px 8px;">
                                                                5 Star Hotel Package                                  
                                                                 <p style="color: #ff6f00;font: 36px 'Neo_Sans_Bold';">
                                                                  USD <?=$model->price_5;?><br />   
                                                                  <span style="display: block;font: italic 14px 'neo_sans';">per persion</span>                                         
                                                                  <!-- <span style="display: inline;padding: 0.1em 0.3em;position: absolute;background: none repeat scroll 0% 0% #108E25;font-size: 12px;font-weight: 400;color: #FFF;text-transform: lowercase;bottom: 0px;right: 0px;">Per Person</span> -->
                                                              </p>
                                                          </td>
                                                      </tr>
                                                      <!-- <tr>
                                                          <td width="50%" style="font-weight: bold;font-size: 15px;font-family: lato;color: #3D3D3D;vertical-align: middle;border-color: #F3F3F3;text-transform: capitalize;padding: 0px 3% 20px 8px;">
                                                              3-star Supplement                                        <p style="display: block; margin: 3px 0px 0px; vertical-align: middle; height: 30px; padding: 10px; text-align: center; color: #FFF; line-height: 20px; font-size: 20px; font-weight: bold; text-transform: uppercase;position: relative;background: none repeat scroll 0% 0% #139B2B">
                                                                  USD 0                                            <span style="display: inline;padding: 0.1em 0.3em;position: absolute;background: none repeat scroll 0% 0% #108E25;font-size: 12px;font-weight: 400;color: #FFF;text-transform: lowercase;bottom: 0px;right: 0px;">Per Person</span>
                                                              </p>
                                                          </td>
                                                          <td width="50%" style="font-weight: bold;font-size: 15px;font-family: lato;color: #3D3D3D;vertical-align: middle;border-color: #F3F3F3;text-transform: capitalize;padding: 0px 3% 20px 8px;">
                                                              5-star Supplement                                        <p style="display: block; margin: 3px 0px 0px; vertical-align: middle; height: 30px; padding: 10px; text-align: center; color: #FFF; line-height: 20px; font-size: 20px; font-weight: bold; text-transform: uppercase;position: relative;background: none repeat scroll 0% 0% #139B2B">
                                                                  USD 0                                            <span style="display: inline;padding: 0.1em 0.3em;position: absolute;background: none repeat scroll 0% 0% #108E25;font-size: 12px;font-weight: 400;color: #FFF;text-transform: lowercase;bottom: 0px;right: 0px;">
                                                                      Per Person</span>
                                                              </p>
                                                          </td>
                                                      </tr> -->
                                                  </tbody></table>
                                              </td>
                                          </tr>
                                          <tr>
                                              <td></td> 
                                              <td style="font-weight: bold;font-size: 15px;font-family: lato;color: #3D3D3D;vertical-align: middle;border-color: #F3F3F3;text-transform: capitalize;padding: 0px 3% 20px 8px;">
                                                  <table width="100%">
                                                      <tbody><tr>
                                                          <td width="50%" style="font-weight: bold;font-size: 15px;font-family: lato;color: #3D3D3D;vertical-align: middle;border-color: #F3F3F3;text-transform: capitalize;padding: 0px 3% 20px 8px;">
                                                              <a href="https://www.mountainsherpatrekking.com/en/everest-base-camp-trek" style="display: block; margin: 3px 0px 0px; vertical-align: middle; padding: 10px; text-align: center; color: #FFF; line-height: 20px; font-size: 20px; font-weight: bold; text-transform: uppercase;position: relative;background: none repeat scroll 0% 0% #139B2B; text-decoration: none;" target="_blank">
                                                                  View Details
                                                              </a>
                                                          </td>
                                                          <td width="50%" style="font-weight: bold;font-size: 15px;font-family: lato;color: #3D3D3D;vertical-align: middle;border-color: #F3F3F3;text-transform: capitalize;padding: 0px 3% 20px 8px;">
                                                              <a href="https://www.mountainsherpatrekking.com/en/booking/everest-base-camp-trek" style="display: block; margin: 3px 0px 0px; vertical-align: middle; padding: 10px; text-align: center; color: #FFF; line-height: 20px; font-size: 20px; font-weight: bold; text-transform: uppercase;position: relative;background: none repeat scroll 0% 0% #EBBD00; text-decoration: none;" target="_blank">
                                                                  Book Now
                                                              </a>
                                                          </td>
                                                      </tr>
                                                  </tbody></table>   
                                              </td>
                                          </tr>
                                      </tbody>
                                      </table>
                                  </td>
                              </tr>
                             
                              <tr>
                                  <td colspan="3">
                                      <div style="height:8px; display:block; background:#f2c319; margin-bottom: 3px;"></div>
                                      <div style="text-align:center;color:#000000; font-size:18px;background:#006498;margin-bottom:3px;padding:5px;">
                                          <a href="https://www.mountainsherpatrekking.com" target="_blank">
                                              <img src="https://www.mountainsherpatrekking.com/images/logo.png" alt="Mountain Sherpa">
                                          </a>
                                          <div style="clear:both"></div>
                                      </div>
                                      <div style="color:#000000; margin:20px 0; line-height: 22px;">
                                          <div style="text-align: center;">
                                          <p style=" margin-bottom: 25px;"><a href="https://www.mountainsherpatrekking.com" style="font-size:20px; line-height:25px; font-weight:bold; color:#006498; display:block; text-decoration:none;" target="_blank">https://www.mountainsherpatrekking.com</a></p> 
                                          </div>
                                      </div>
                                  </td> 
                              </tr>
                          </tbody>
                          </table>
                        </div>
                      </div>
                  </div>
                  <div class="col-md-2">
                  </div>

                  <div class="col-md-6">
                    <button type="submit" id="tellFriendBtn" data-aurl="<?=Yii::$app->urlManager->createUrl(['package/tell-friend','id'=>$model->id]);?>" class="btn btn-primary quick-inquiry-btn">Submit</button>
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

<?php 
$js = <<<JS
$("#tellfriendform-message").on('keyup',function(ev){
  var obj = $(this);
  console.log(obj);
  $(".custom-msg").html(obj.val());

})

$("#tellFriendBtn").on('click',function(ev){
    ev.preventDefault();
    var obj = $(this);
    // var obj = $("#confimCheck");
    // if(!obj.is(":checked")){
    //     alert("Please agree with the terms and condition");
    //     return true;
    // } else {
        $(".form-group").removeClass("has-error")
        $(".help-block").html('')
        $.ajax({
            type:'post',
            url: obj.data('aurl'),
            data: $("#tf-form").serialize(),
            dataType: 'json',
            success: function(res) {
                if(res.status=='error'){
                    $.each(res.data,function(key,val){
                        console.log(key)
                        console.log(val)
                        var ele = $(".field-tellfriendform-" + key);
                        ele.addClass("has-error")
                        ele.find('.help-block').html(val[0])
                    })
                } else {
                   alert(res.data);
                   location.reload();
                }
                console.log(res);
            }
            
        })
    // }
    // console.log(obj);
    // console.log(obj.is(":checked"));
})
JS;
$this->registerJS($js);
?>