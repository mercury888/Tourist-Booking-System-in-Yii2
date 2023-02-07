<div class="tour_container">
                  <div class="img_container">
                    <a href="<?=Yii::$app->urlManager->createUrl(['package/slug','slug'=>$model['slug']]);?>"  title="<?=$model->packageDesc->meta_title;?>">
                      <img src="<?=$model->imageUrl;?>" width="800" height="533" class="img-fluid" alt="<?=$model['name'];?>"  title="<?=$model->packageDesc->meta_title;?>">

                      <div class="short_info">
                        <i class="icon_set_1_icon-44"></i><?=$model['name'];?><span class="price"><sup>$</sup><?=$model['price'];?></span>
                      </div>
                    </a>
                  </div>

                  <div class="tour_title">
                    <div class="tour_cont_up">
                    <?=$this->render("//review/include/rating-widget",['rating'=>$model->avgRating]);?>
                      <div class="tour_duration">
                        <h3><strong><?=$model['duration'];?> </strong>Days</h3>
                      </div><!-- End of tour_duration -->

                      <div class="tour_activity_level">
                        Activity Levels <span>Tough</span>
                      </div><!-- End of tour_activity_level -->
                    </div><!-- End of tour_cont_up -->

                    <div class="tour_cont_mid">
                      <div class="tour_activity">
                        Activity <span>Trekking in Nepal</span>
                      </div><!-- End of tour_activity -->

                      <div class="tour_view_detail">
                        <a title="<?=$model->packageDesc->meta_title;?>" href="<?=Yii::$app->urlManager->createUrl(['package/slug','slug'=>$model['slug']]);?>">View More</a>
                      </div><!-- End of tour_view_detail -->
                    </div><!-- End of tour_cont_mid -->
                  </div><!-- End of tour_title -->
                </div><!-- End box tour -->