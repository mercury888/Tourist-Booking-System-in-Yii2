<?php

$this->title = $model->meta_title;
Yii::$app->view->registerMetaTag([
    'name' => 'description',
    'content' => $model->meta_desc
]); 
Yii::$app->view->registerMetaTag([
    'name' => 'keywords',
    'content' => $model->meta_key
]); 
?>
  
  
  <div class="product-view-banner-section">
    <img src="images/blogimg.jpg" alt="" title="" class="img-fluid productBannerImg" style="background-size: cover !important;">

    <div class="parallax-content-2">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h1><?=$model->title;?></h1>
            <span><?=$model->category?$model->category->name:'';?></span>
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
            <li><a href="#">Blog</a> <span> <i class="fa fa-angle-right" aria-hidden="true"></i> </span></li>
            <li><a href="#"><?=$model->category?$model->category->name:'';?></a> <span> <i class="fa fa-angle-right" aria-hidden="true"></i> </span></li>
            <li><?=$model->title;?></li>
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
              <div class="blogSection">
                <div class="row">
                  <div class="col-md-8">
                    <h2 class="blogTitle"><?=$model->title;?></h2>
                    <span class="blogSubTitle">Th<?=$model->category?$model->category->name:'';?></span>

                    <div class="blogViewAuthorDate">
                      <div class="authorName"><span><i class="fa fa-user" aria-hidden="true"></i></span> Mountain Sherpa Admin</div>
                      <div class="vertialDivider">|</div>
                      <div class="personalReviewDate"><span><i class="fa fa-clock-o" aria-hidden="true"></i></span> <?=date('M d, Y',$model->update_time);?></div>
                    </div><!-- End of blogAuthorDate -->
                    
                    <img src="<?=$model->postImage?$model->postImage->imageUrl:'';?>" title="" alt="" class="img-fluid"> 
                    <?=$model->content;?>
                   
                  </div><!-- End col-md-8 -->

                  <div class="col-md-4">
                    <div class="personalReviewRt">
                      <?=$this->render("//blog/category");?>
                      <?php /*?>
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
                                  <form>
                                    <div class="form-row">
                                      <div class="form-group col-md-6">
                                        <div class="form-group row">
                                          <label for="fname" class="col-sm-4 col-form-label reviewLabel">First Name *</label>
                                          <div class="col-sm-8">
                                            <input type="text" class="form-control" id="fname" placeholder="First Name">
                                          </div>
                                        </div>
                                      </div>
                                      <div class="form-group col-md-6">
                                        <div class="form-group row">
                                          <label for="lname" class="col-sm-4 col-form-label reviewLabel">Last Name *</label>
                                          <div class="col-sm-8">
                                            <input type="text" class="form-control" id="lname" placeholder="Last Name">
                                          </div>
                                        </div>
                                      </div>
                                    </div>

                                    <div class="form-row">
                                      <div class="form-group col-md-6">
                                        <div class="form-group row">
                                          <label for="email" class="col-sm-4 col-form-label reviewLabel">Email *</label>
                                          <div class="col-sm-8">
                                            <input type="email" class="form-control" id="email" placeholder="Enter Email">
                                          </div>
                                        </div>
                                      </div>
                                      <div class="form-group col-md-6">
                                        <div class="form-group row">
                                          <label for="gender" class="col-sm-4 col-form-label reviewLabel">Gender *</label>
                                          <div class="col-sm-8">
                                            <select id="gender" class="form-control">
                                              <option selected>Choose...</option>
                                              <option>...</option>
                                            </select>
                                          </div>
                                        </div>
                                      </div>
                                    </div>

                                    <div class="form-row">
                                      <div class="form-group col-md-6">
                                        <div class="form-group row">
                                          <label for="country" class="col-sm-4 col-form-label reviewLabel">Country *</label>
                                          <div class="col-sm-8">
                                            <select id="country" class="form-control">
                                              <option selected>Choose...</option>
                                              <option>...</option>
                                            </select>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="form-group col-md-6">
                                        <div class="form-group row">
                                          <label for="title" class="col-sm-4 col-form-label reviewLabel">Title *</label>
                                          <div class="col-sm-8">
                                            <input type="email" class="form-control" id="title" placeholder="Enter Short Title">
                                          </div>
                                        </div>
                                      </div>
                                    </div>

                                    <div class="form-row">
                                      <div class="form-group col-md-12">
                                        <div class="form-group row">
                                          <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm reviewLabel">Description *</label>
                                          <div class="col-sm-10">
                                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Write Your Review"></textarea>
                                          </div>
                                        </div>
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
                                                  <div class="">
                                                    <div class="rating allRatingWrite-Review">
                                                      <i class="fa fa-star" aria-hidden="true"></i>
                                                      <i class="fa fa-star" aria-hidden="true"></i>
                                                      <i class="fa fa-star" aria-hidden="true"></i>
                                                      <i class="fa fa-star" aria-hidden="true"></i>
                                                      <i class="fa fa-star-half-o" aria-hidden="true"></i>
                                                    </div><!-- end rating -->

                                                    <p>Provide ratings for following category</p>
                                                  </div>
                                                </div>

                                                <div class="col-md-6">
                                                  <div class="c-p-review">Pre-trip Info</div>

                                                  <div class="rating">
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star-half-o" aria-hidden="true"></i>
                                                  </div><!-- end rating -->
                                                </div><!-- End of col-md-6 -->

                                                <div class="col-md-6">
                                                  <div class="c-p-review">Meals</div>
                                                  
                                                  <div class="rating">
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star-half-o" aria-hidden="true"></i>
                                                  </div><!-- end rating -->
                                                </div><!-- End of col-md-6 -->
                                                
                                                <div class="col-md-6">
                                                  <div class="c-p-review">Staffs</div>
                                                  
                                                  <div class="rating">
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star-half-o" aria-hidden="true"></i>
                                                  </div><!-- end rating -->
                                                </div><!-- End of col-md-6 -->
                                                
                                                <div class="col-md-6">
                                                  <div class="c-p-review">Transportation</div>
                                                  
                                                  <div class="rating">
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star-half-o" aria-hidden="true"></i>
                                                  </div><!-- end rating -->
                                                </div><!-- End of col-md-6 -->
                                                
                                                <div class="col-md-6">
                                                  <div class="c-p-review">Accommodation</div>
                                                  
                                                  <div class="rating">
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star-half-o" aria-hidden="true"></i>
                                                  </div><!-- end rating -->
                                                </div><!-- End of col-md-6 -->
                                                
                                                <div class="col-md-6">
                                                  <div class="c-p-review">Value for Money</div>
                                                  
                                                  <div class="rating">
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star-half-o" aria-hidden="true"></i>
                                                  </div><!-- end rating -->
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
                                          <label for="colFormLabelSm" class="col-sm-12 col-form-label col-form-label-sm reviewLabel-title">Why did you choose Third Rock Adventures?</label>
                                          <div class="col-sm-12">
                                            <div class="row">
                                              <div class="col-md-4">
                                                <div class="form-group form-check">
                                                  <input type="checkbox" class="form-check-input" id="bestdestination">
                                                  <label class="form-check-label" for="bestdestination">Best Destination</label>
                                                </div>
                                              </div>

                                              <div class="col-md-4">
                                                <div class="form-group form-check">
                                                  <input type="checkbox" class="form-check-input" id="goodvalue">
                                                  <label class="form-check-label" for="goodvalue">Good Value</label>
                                                </div>
                                              </div>

                                              <div class="col-md-4">
                                                <div class="form-group form-check">
                                                  <input type="checkbox" class="form-check-input" id="likeitinerary">
                                                  <label class="form-check-label" for="likeitinerary">I like itinerary</label>
                                                </div>
                                              </div>

                                              <div class="col-md-4">
                                                <div class="form-group form-check">
                                                  <input type="checkbox" class="form-check-input" id=" recommendedbyfriend">
                                                  <label class="form-check-label" for=" recommendedbyfriend">Recommended by Friend</label>
                                                </div>
                                              </div>

                                              <div class="col-md-4">
                                                <div class="form-group form-check">
                                                  <input type="checkbox" class="form-check-input" id="bestselectedtours">
                                                  <label class="form-check-label" for="bestselectedtours">Best and Selected Tours</label>
                                                </div>
                                              </div>

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
                                          <label for="colFormLabelSm" class="col-sm-12 col-form-label col-form-label-sm reviewLabel-title">Would you recommend Third Rock Adventures to your friends?</label>
                                          
                                          <div class="col-md-12">
                                            <div class="form-check form-check-inline">
                                              <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                              <label class="form-check-label" for="inlineRadio1">Yes</label>
                                            </div>

                                            <div class="form-check form-check-inline">
                                              <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                              <label class="form-check-label" for="inlineRadio2">Not Sure</label>
                                            </div>

                                            <div class="form-check form-check-inline">
                                              <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3">
                                              <label class="form-check-label" for="inlineRadio3">Recommended this trip</label>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>

                                    <div class="form-row">
                                      <div class="form-group col-md-12">
                                        <div class="form-group row">
                                          <label for="colFormLabelSm" class="col-sm-12 col-form-label col-form-label-sm reviewLabel-title">Why did you choose this trip?</label>
                                          <div class="col-sm-12">
                                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="1"></textarea>
                                          </div>
                                        </div>
                                      </div>
                                    </div>

                                    <div class="form-row">
                                      <div class="form-group col-md-12">
                                        <div class="form-group row">
                                          <label for="colFormLabelSm" class="col-sm-12 col-form-label col-form-label-sm reviewLabel-title">What were the most enjoyable or memorable parts of your trip?</label>
                                          <div class="col-sm-12">
                                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="1"></textarea>
                                          </div>
                                        </div>
                                      </div>
                                    </div>

                                    <div class="form-row">
                                      <div class="form-group col-md-12">
                                        <div class="form-group row">
                                          <label for="colFormLabelSm" class="col-sm-12 col-form-label col-form-label-sm reviewLabel-title">What would you advice other travellers?</label>
                                          <div class="col-sm-12">
                                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="1"></textarea>
                                          </div>
                                        </div>
                                      </div>
                                    </div>

                                    <div class="form-group">
                                      <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="gridCheck">
                                        <label class="form-check-label" for="gridCheck">
                                          I agree terms & condition
                                        </label>
                                      </div>
                                    </div>

                                    <div class="reviewSubmitBtn">
                                      <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                  </form>
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

                      <div class="averateRating">
                        <div class="avgTitle">Average Customer Ratings</div>

                        <div class="rating">
                          <i class="fa fa-star" aria-hidden="true"></i>
                          <i class="fa fa-star" aria-hidden="true"></i>
                          <i class="fa fa-star" aria-hidden="true"></i>
                          <i class="fa fa-star" aria-hidden="true"></i>
                          <i class="fa fa-star-half-o" aria-hidden="true"></i>
                        </div><!-- end rating -->

                        <div class="avgRating">5</div>
                      </div><!-- End of averateRating -->

                      <div class="reviewFilter">
                        <h4>Select a row below to filter reviews.</h4>

                        <div class="reviewFilterList">
                          <ul>
                            <li>
                              <div class="fiverStart">5 <i class="fa fa-star" aria-hidden="true"></i></div>

                              <div class="progress">
                                <div class="progress-bar bg-success" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                              </div>

                              <div class="reviewStartCount">77</div>
                            </li>

                            <li>
                              <div class="fiverStart">4 <i class="fa fa-star" aria-hidden="true"></i></div>

                              <div class="progress">
                                <div class="progress-bar bg-success" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                              </div>

                              <div class="reviewStartCount">4</div>
                            </li>

                            <li>
                              <div class="fiverStart">3 <i class="fa fa-star" aria-hidden="true"></i></div>

                              <div class="progress">
                                <div class="progress-bar bg-success" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                              </div>

                              <div class="reviewStartCount">30</div>
                            </li>

                            <li>
                              <div class="fiverStart">2 <i class="fa fa-star" aria-hidden="true"></i></div>

                              <div class="progress">
                                <div class="progress-bar bg-success" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                              </div>

                              <div class="reviewStartCount">5</div>
                            </li>

                            <li>
                              <div class="fiverStart">1 <i class="fa fa-star" aria-hidden="true"></i></div>

                              <div class="progress">
                                <div class="progress-bar bg-success" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                              </div>

                              <div class="reviewStartCount">4</div>
                            </li>
                          </ul>
                        </div><!-- End of reviewFilterList -->
                      </div><!-- End of reviewFilter -->
                      <?php */?>  
                      <div class="reviewSectionVideo">
                        <div class="video-testimonial-block">
                            <div class="video-thumbnail"><img src="https://img.youtube.com/vi/zd9IWLYiIPc/maxresdefault.jpg" alt="" class="img-fluid"></div>
                            <div class="video">
                                <iframe width="100%" height="" src="https://www.youtube.com/embed/zd9IWLYiIPc" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                            <a href="#" class="video-play"></a>
                        </div>
                      </div><!-- End of reviewSectionVideo -->


                    </div><!-- End of personalReviewRt -->
                  </div><!-- End of col-md-4 -->
                </div><!-- End of row -->
              </div><!-- End of blogSection -->
            </div><!-- End of aboutUs -->
          </div><!-- End of header-div -->
        </div><!-- End of col-md-12 -->
      </div><!-- End of row -->
    </div><!-- End of container -->
  </div><!-- End of package-view-overview -->
<?php 
$url = Yii::$app->urlManager->createUrl(['package/load-blog-related-package','id'=>$model->id]);
$js =<<<JS
$(document).ready(function(){
  var ele = $(".relatedBlog");
  for(i=0;i<ele.length; i++){
    var singleEle = $(ele[i]);
    getPackage(singleEle)
    
  }
})
function getPackage(ele){
  $.ajax({
    type: 'post',
    url: '$url',
    data: ele.data(),
    dataType: 'json',
    success: function(res){
      if(res.status=='success'){
        ele.append(res.data);

      }

    }
  })
}
JS;
$this->registerJS($js);
?>