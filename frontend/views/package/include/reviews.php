<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
// use yii\captcha\Captcha;

// $this->title = 'Contact';
// $this->params['breadcrumbs'][] = $this->title;
?>
<?php //if($model->packageReview){?>
<div class="header-div">
    <div class="heading sc-sp-data-dis sticky-rt-main-title">Reviews</div>
    <div class="data">
    <div class="scrollSectionCont">
        <div class="packageReviews">
        <h2>Latest Traveller's Reviews</h2>
        <h4>Travel experiences of our clients who recently returned from their trips.</h4>

        <div class="personalReview">
            <div class="row">
            <div class="col-md-8">
            <?php
            $total_reivew = 0;
            $review_arr = [];
            $i=0;foreach($model->packageReview as $review){?>
                <?php 
                    $total_reivew +=$review->rating;
                     if($review->rating==1){
                         $review_arr[1][$i] = $review->rating;
                     }
                     if($review->rating==2){
                         $review_arr[2][$i] = $review->rating;
                     }
                     if($review->rating==3){
                         $review_arr[3][$i] = $review->rating;
                     }
                     if($review->rating==4){
                         $review_arr[4][$i] = $review->rating;
                     }
                     if($review->rating==5){
                         $review_arr[5][$i] = $review->rating;
                     }

                ?>
                <?=$this->render("//review/include/single-review-3",['model'=>$review,'package'=>$model]);?>
            <?php $i++;}?>
            
            <?php if(!$model->packageReview){?>
            <h2>No reviews provided for this package.</h2>
            <?php } ?>
            </div><!-- End of col-md-8 -->

            <div class="col-md-4">
                <div class="personalReviewRt">
                <a href="#" class="writeReviewBtn popUpSection" data-toggle="modal" data-target="#writeReview">Write your Review</a>

                <!-- Modal -->
                <div class="modal fade" id="writeReview" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                    <div class="modal-content modal-quick-inquiry">
                        <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalCenterTitle">Write a Review</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        </div>
                        <div class="modal-body">
                        <div class="row">
                            <div class="col-md-12">
                            <?php $form = ActiveForm::begin(['id' => 'review-form']); ?>
                                <div class="form-row">
                                <div class="form-group col-md-6">
                                <?= $form->field($rform, 'first_name')->textInput(['autofocus' => true,'placeholder' => 'First Name *']) ?>
                                   
                                </div>
                                <div class="form-group col-md-6">
                                <?= $form->field($rform, 'last_name')->textInput(['placeholder' => 'Last Name *']) ?>
                                   
                                </div>
                                </div>

                                <div class="form-row">
                                <div class="form-group col-md-6">
                                <?= $form->field($rform, 'email')->textInput(['placeholder' => 'Email *']) ?>
                                    
                                </div>
                                <div class="form-group col-md-6">
                                <?= $form->field($rform, 'gender')->textInput(['placeholder' => 'Gender *']) ?>
                                    
                                </div>
                                </div>

                                <div class="form-row">
                                <div class="form-group col-md-6">
                                <?= $form->field($rform, 'country')->textInput(['placeholder' => 'Country *']) ?>
                                   
                                </div>
                                <div class="form-group col-md-6">
                                <?= $form->field($rform, 'title')->textInput(['placeholder' => 'Title *']) ?>
                                   
                                </div>
                                </div>

                                <div class="form-row">
                                <div class="form-group col-md-12">
                                <?= $form->field($rform, 'content')->textArea(['placeholder' => 'Detail *']) ?>
                                   
                                </div>
                                </div>

                                <div class="form-row">
                                <div class="form-group col-md-12">
                                    <div class="form-group row">
                                    <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm reviewLabel">Overall Rating *</label>
                                    <div class="col-sm-10">
                                        <div class="clientPackageReview">
                                        <div class="row">
                                            <div class="col-md-12">
                                            <!-- <div class=""> -->
                                            <div class="rating_user" data-ratevalue="overall" data-rate-value=5></div>
                                                <p>Provide ratings for following category</p>
                                                <?= $form->field($rform, 'rating')->textInput(['placeholder' => 'rating','style'=>'display:none'])->label(false) ?>
                                            </div>
                                            <!-- </div> -->

                                            <div class="col-md-6">
                                            <div class="c-p-review">Pre-trip Info</div>
                                                <div class="rating rating_user"  data-ratevalue="pre-trip"  data-rate-value=5></div>
                                                <?= $form->field($rform, 'pre_trip_info_rating')->textInput(['placeholder' => 'pre_trip_info_rating','style'=>'display:none'])->label(false) ?>
                                            
                                            </div><!-- End of col-md-6 -->

                                            <div class="col-md-6">
                                            <div class="c-p-review">Meals</div>
                                                <div class="rating rating_user"  data-ratevalue="meals"  data-rate-value=5></div>
                                                <?= $form->field($rform, 'meal_rating')->textInput(['placeholder' => 'meal_rating','style'=>'display:none'])->label(false) ?>
                                            
                                            </div><!-- End of col-md-6 -->
                                            
                                            <div class="col-md-6">
                                            <div class="c-p-review">Staffs</div>
                                                <div class="rating rating_user"   data-ratevalue="staff"  data-rate-value=5></div>
                                                <?= $form->field($rform, 'staffs_rating')->textInput(['placeholder' => 'staffs_rating','style'=>'display:none'])->label(false) ?>
                                            </div><!-- End of col-md-6 -->
                                            
                                            <div class="col-md-6">
                                            <div class="c-p-review">Transportation</div>
                                                <div class="rating rating_user"   data-ratevalue="transportation"  data-rate-value=5></div>
                                                <?= $form->field($rform, 'transportation_rating')->textInput(['placeholder' => 'transportation_rating','style'=>'display:none'])->label(false) ?>
                                            
                                            </div><!-- End of col-md-6 -->
                                            
                                            <div class="col-md-6 
                                            ">
                                            <div class="c-p-review">Accommodation</div>
                                              <div class="rating rating_user"   data-ratevalue="accommodation" data-rate-value=5></div>
                                                <?= $form->field($rform, 'accommodation_rating')->textInput(['placeholder' => 'accommodation_rating','style'=>'display:none'])->label(false) ?>
                                            
                                            </div><!-- End of col-md-6 -->
                                            
                                            <div class="col-md-6">
                                            <div class="c-p-review">Value for Money</div>
                                            <div class="rating rating_user"   data-ratevalue="value-of-money"  data-rate-value=5></div>
                                                <?= $form->field($rform, 'vale_of_money_rating')->textInput(['placeholder' => 'vale_of_money_rating','style'=>'display:none'])->label(false) ?>
                                            
                                            </div><!-- End of col-md-6 -->
                                        </div><!-- End of row -->
                                        </div><!-- End of clientPackageReview -->
                                    </div>
                                    </div>
                                </div>
                                </div>

                                <div class="form-row">
                                <div class="form-group col-md-12">
                                    <div class="form-group row">
                                    <label for="colFormLabelSm" class="col-sm-12 col-form-label col-form-label-sm reviewLabel-title">Why did you choose Mountain Sherpa Trekking?</label>
                                    <div class="col-sm-12">

                                        <div class="row">
                                        <?php 
                                        $option = [
                                            'Best Destination' => 'Best Destination',
                                            'Good Value' => 'Good Value',
                                            'I like itinerary' => 'I like itinerary',
                                            'Recommended by Friend' => 'Recommended by Friend',
                                            'Best and Selected Tours' => 'Best and Selected Tours',
                                        ];
                                            echo $form->field($rform, 'why_did_you_choose')->inline(true)->checkboxList($option)->label(false);
                                        ?>

                                        <div class="col-md-4">
                                            <div class="form-group form-check">
                                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Example input placeholder">
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                                </div>

                                <div class="form-row">
                                <div class="form-group col-md-12">
                                    <div class="form-group row">
                                    <label for="colFormLabelSm" class="col-sm-12 col-form-label col-form-label-sm reviewLabel-title">Would you recommend Mountain Sherpa Trekking to your friends?</label>
                                    
                                    <div class="col-md-12">
                                    <?php
                                    $option = [
                                        'Yes' => 'Yes',
                                        'Not Sure' => 'Not Sure',
                                        'Recommended this trip' => 'Recommended this trip'
                                    ];
                                    echo $form->field($rform, 'would_you_recomend')->inline(true)->radioList($option)->label(false);
                                    ?>
                                        
                                    </div>
                                    </div>
                                </div>
                                </div>

                                <div class="form-row">
                                <div class="form-group col-md-12">
                                    <div class="form-group row">
                                    <label for="colFormLabelSm" class="col-sm-12 col-form-label col-form-label-sm reviewLabel-title">Why did you choose this trip?</label>
                                    <div class="col-sm-12">
                                    <?= $form->field($rform, 'why_did_you_choose_this_trip')->textArea(['placeholder' => 'Detail here','row' =>1])->label(false) ?>
                                    </div>
                                    </div>
                                </div>
                                </div>

                                <div class="form-row">
                                <div class="form-group col-md-12">
                                    <div class="form-group row">
                                    <label for="colFormLabelSm" class="col-sm-12 col-form-label col-form-label-sm reviewLabel-title">What were the most enjoyable or memorable parts of your trip?</label>
                                    <div class="col-sm-12">
                                    <?= $form->field($rform, 'most_memorable_parts_this_trip')->textArea(['placeholder' => 'Detail here','row' =>1])->label(false) ?>
                                    </div>
                                    </div>
                                </div>
                                </div>

                                <div class="form-row">
                                <div class="form-group col-md-12">
                                    <div class="form-group row">
                                    <label for="colFormLabelSm" class="col-sm-12 col-form-label col-form-label-sm reviewLabel-title">What would you advice other travellers?</label>
                                    <div class="col-sm-12">
                                    <?= $form->field($rform, 'advice_traveller')->textArea(['placeholder' => 'Detail here','row' =>1])->label(false) ?>
                                        <!-- <textarea class="form-control" id="exampleFormControlTextarea1" rows="1"></textarea> -->
                                    </div>
                                    </div>
                                </div>
                                </div>

                                <div class="form-group">
                                <div class="form-check">
                               
                                    <input class="form-check-input" type="checkbox" id="confimCheck">
                                    <label class="form-check-label" for="gridCheck">
                                    I agree terms & condition
                                    </label>
                                </div>
                                </div>

                                <div class="reviewSubmitBtn">
                                <button type="submit" class="btn btn-primary review-submit" id="review-submit">Submit</button>
                                </div>
                            <?php ActiveForm::end(); ?>
                            </div>
                        </div><!-- End of row -->
                        </div>
                        <!-- <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                        </div> -->
                    </div>
                    </div>
                </div>
                <?php if($model->packageReview){?>  
                    <div class="averateRating">
                        <div class="avgTitle">Average Customer Ratings</div>
                        <?php  $totalr = $model->packageReview?round($total_reivew/count($model->packageReview)):0;?>
                        <?=$this->render("//review/include/rating-widget",['rating'=>$totalr]);?>

                        <div class="avgRating"><?=$totalr;?></div>
                    </div><!-- End of averateRating -->

                    <div class="reviewFilter">
                        <h4>Reviews Summary provides by customer.</h4>
                        <div class="reviewFilterList">
                            <ul>
                                <li>
                                <div class="fiverStart">5 <i class="fa fa-star" aria-hidden="true"></i></div>
                                <?php if(isset($review_arr[5])){
                                        $c5 = count($review_arr[5]);
                                        $p5 = $c5/$i * 100; 
                                } else {
                                    $c5 = 0;
                                    $p5 = 0;
                                }?>
                                <div class="progress">
                                    <div class="progress-bar bg-success" role="progressbar" style="width: <?=$p5;?>%" aria-valuenow="<?=$p5;?>" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>

                                <div class="reviewStartCount"><?=$c5;?></div>
                                </li>

                                <li>
                                <div class="fiverStart">4 <i class="fa fa-star" aria-hidden="true"></i></div>
                                <?php if(isset($review_arr[4])){
                                        $c4 = count($review_arr[4]);
                                        $p4 = $c4/$i * 100; 
                                } else {
                                    $c4 = 0;
                                    $p4 = 0;
                                }?>
                                <div class="progress">
                                    <div class="progress-bar bg-success" role="progressbar" style="width: <?=$p4;?>%" aria-valuenow="<?=$p4;?>" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>

                                <div class="reviewStartCount"><?=$c4;?></div>
                                </li>

                                <li>
                                <div class="fiverStart">3 <i class="fa fa-star" aria-hidden="true"></i></div>
                                <?php if(isset($review_arr[3])){
                                        $c3 = count($review_arr[3]);
                                        $p3 = $c3/$i * 100; 
                                } else {
                                    $c3 = 0;
                                    $p3 = 0;
                                }?>
                                <div class="progress">
                                    <div class="progress-bar bg-success" role="progressbar" style="width: <?=$p3;?>%" aria-valuenow="<?=$p3;?>" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>

                                <div class="reviewStartCount"><?=$c3;?></div>
                                </li>

                                <li>
                                <div class="fiverStart">2 <i class="fa fa-star" aria-hidden="true"></i></div>
                                <?php if(isset($review_arr[2])){
                                        $c2 = count($review_arr[2]);
                                        $p2 = $c2/$i * 100; 
                                } else {
                                    $c2 = 0;
                                    $p2 = 0;
                                }?>
                                <div class="progress">
                                    <div class="progress-bar bg-success" role="progressbar" style="width: <?=$p2;?>%" aria-valuenow="<?=$p2;?>" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>

                                <div class="reviewStartCount"><?=$c2;?></div>
                                </li>

                                <li>
                                <div class="fiverStart">1 <i class="fa fa-star" aria-hidden="true"></i></div>

                                <div class="progress">
                                <?php if(isset($review_arr[1])){
                                        $c1 = count($review_arr[1]);
                                        $p1 = $c1/$i * 100; 
                                } else {
                                    $c1 = 0;
                                    $p1 = 0;
                                }?>
                                    <div class="progress-bar bg-success" role="progressbar" style="width: <?=$p1;?>%" aria-valuenow="<?=$p1;?>" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>

                                <div class="reviewStartCount"><?=$c1;?></div>
                                </li>
                            </ul>
                        </div><!-- End of reviewFilterList -->
                    </div><!-- End of reviewFilter -->
                <?php }?>            
               <?=$this->render('package-video',['model'=>$model]);?>
                </div><!-- End of personalReviewRt -->
            </div><!-- End of col-md-4 -->
            </div><!-- End of row -->
        </div><!-- End of personalReview -->
        </div><!-- End of packageReviews -->
    </div>
    </div>
</div>
<?php //}?>

<?php 
$js =<<<JS
$("#review-submit").on('click',function(ev){
    ev.preventDefault();
    var obj = $("#confimCheck");
    if(!obj.is(":checked")){
        alert("Please agree with the terms and condition");
        return true;
    } else {
        $(".form-group").removeClass("has-error")
        $(".help-block").html('')
        $.ajax({
            type:'post',
            url: obj.data('url'),
            data: $("#review-form").serialize(),
            dataType: 'json',
            success: function(res) {
                if(res.status=='error'){
                    $.each(res.data,function(key,val){
                        console.log(key)
                        console.log(val)
                        var ele = $(".field-reviewform-" + key);
                        ele.addClass("has-error")
                        ele.find('.help-block').html(val[0])
                    })
                } else {
                   alert('Review has been submited successfully');
                   location.reload();
                }
                console.log(res);
            }
            
        })
    }
    // console.log(obj);
    // console.log(obj.is(":checked"));
})
var options = {
    max_value: 5,
    step_size: 0.5,
}
$(".rating_user").rate(options);

$(".rating_user").on("afterChange", function(ev, data){
    var obj = $(this);
    if(obj.data('ratevalue')=='overall'){
        $("#reviewform-rating").val(data.to)
    }
    if(obj.data('ratevalue')=='pre-trip'){
        $("#reviewform-pre_trip_info_rating").val(data.to)
    }
    if(obj.data('ratevalue')=='meals'){
        $("#reviewform-meal_rating").val(data.to)
    }
    if(obj.data('ratevalue')=='staff'){
        $("#reviewform-staffs_rating").val(data.to)
    }
    if(obj.data('ratevalue')=='transportation'){
        $("#reviewform-transportation_rating").val(data.to)
    }
    if(obj.data('ratevalue')=='accommodation'){
        $("#reviewform-accommodation_rating").val(data.to)
    }
    if(obj.data('ratevalue')=='value-of-money'){
        $("#reviewform-vale_of_money_rating").val(data.to)
    }
    console.log(obj.data());
    console.log(data);
});


// $(".rating").rate();
JS;
$this->registerJS($js);
?>
<style>
.rating_user {
    color:#14659a;
    font-size:20px !important;
    display:block;
}
</style>