<div class="p-r-col">
  <div class="row">
    <div class="col-md-3">
      <div class="personalReviewLft">
      <?=$this->render("//review/include/rating-widget",['rating'=>'4.5']);?>
        

        <div class="personalReviewAuthor">
          <div class="authorName"><?=$model->author;?></div>
          <!-- <div class="authorCountry"><img src="https://www.thirdrockadventures.com/assets/images/flags/RUS.png" alt="Russian Federation" title="Russian Federation"> Russia</div> -->
        </div><!-- End of personalReviewAuthor -->

        <div class="personalReviewDate"><?=date('M d, Y',strtotime($model->create_time));?></div>

        <div class="clientPackageReview travellerReview">
          <div class="row">
            <div class="col-md-12">
              <div class="c-p-review">Pre-trip Info</div>
              <?=$this->render("//review/include/rating-widget",['rating'=>$model->pre_trip_info_rating]);?>
             
            </div><!-- End of col-md-12 -->

            <div class="col-md-12">
              <div class="c-p-review">Meals</div>
              <?=$this->render("//review/include/rating-widget",['rating'=>$model->meal_rating]);?>
            </div><!-- End of col-md-12 -->
            
            <div class="col-md-12">
              <div class="c-p-review">Staffs</div>
              <?=$this->render("//review/include/rating-widget",['rating'=>$model->staffs_rating]);?>
            </div><!-- End of col-md-12 -->
            
            <div class="col-md-12">
              <div class="c-p-review">Transportation</div>
              <?=$this->render("//review/include/rating-widget",['rating'=>$model->transportation_rating]);?>
            </div><!-- End of col-md-12 -->
            
            <div class="col-md-12">
              <div class="c-p-review">Accommodation</div>
              <?=$this->render("//review/include/rating-widget",['rating'=>$model->accommodation_rating]);?>
            </div><!-- End of col-md-12 -->
            
            <div class="col-md-12">
              <div class="c-p-review">Value for Money</div>
              <?=$this->render("//review/include/rating-widget",['rating'=>$model->vale_of_money_rating]);?>
            </div><!-- End of col-md-12 -->
          </div><!-- End of row -->
        </div><!-- End of clientPackageReview -->
      </div><!-- End of personalReviewLft -->
    </div><!-- End of col-md-3 -->

    <div class="col-md-9">
      <div class="clientReviewSection">
        <h3><?=$model->title;?></h3>

        <?=nl2br($model->content);?>
        <br />
        <br />
        <strong>Why did you choose Third Rock Adventures?</strong>
        <p><?=$model->why_did_you_choose;?></p>

        <strong>Would you recommend Third Rock Adventures to your friends?</strong>
        <p><?=$model->would_you_recomend;?></p>

        <strong>What would you advice other travellers?</strong>
        <p><?=$model->advice_traveller;?></p>

        <div class="reportReview">
          <ul>
            <li>Helpful?</li>
            <li><a href="#"><i class="fa fa-thumbs-up" aria-hidden="true"></i> Yes <span><?=$model->help_full_yes_count;?></span></a></li>
            <li>|</li>
            <li><a href="#"><i class="fa fa-thumbs-down" aria-hidden="true"></i> No <span><?=$model->help_full_no_count;?></span></a></li>
            <li><a href="#">Report</a></li>
          </ul>
        </div><!-- End of reportReview -->
      </div><!-- End of clientReviewSection -->
    </div><!-- End of col-md-9 -->
  </div><!-- End of row -->
</div><!-- End of p-r-col -->