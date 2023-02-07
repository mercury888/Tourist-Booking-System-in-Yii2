<?php 
use common\models\Content;
use common\models\Department;
use common\models\Employee;
$page = Content::find()->where(['slug'=>'team'])->one();
$department = Department::find()->all();
$employee = Employee::find()->where(['visible'=>1])->all();
$emp_data = [];
$i=1;foreach($employee as $empData){
  $emp_data[$empData->department_id][$i] = $empData; 
$i++;}

use common\components\Helper;
$banner_image = Helper::getSiteImage('site-image','Our Team Banner')
?>
<?php
$sql = "select *from {{%seo}} where slug='our-team'";
$result = Yii::$app->db->createCommand($sql)->queryOne();
$this->title = $result ?$result['title']:'Our Team';
Yii::$app->view->registerMetaTag([
    'name' => 'description',
    'content' => $result ?$result['description']:'Our Team'
]); 
Yii::$app->view->registerMetaTag([
    'name' => 'keywords',
    'content' => $result ?$result['keywords']:'Our Team'
]); 
?>
  <?php if(!empty($banner_image)){?>
    <div class="product-view-banner-section">
    <img src="<?=$banner_image;?>" alt="" title="" class="img-fluid productBannerImg" style="background-size: cover !important;">

    <div class="parallax-content-2">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h1>Presenting... The Team!</h1>
            <span>Always in collaboration with local teams, these globetrotting dynamos bring our trips to life.</span>
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
            <li><a href="#">Home</a> <span> <i class="fa fa-angle-right" aria-hidden="true"></i> </span></li>
            <!-- <li><a href="#">Our Team</a> <span> <i class="fa fa-angle-right" aria-hidden="true"></i> </span></li> -->
            <li>Our Team</li>
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
                  <div class="col-md-12">
                      <div class="ourTeam">
                        <div class="row">
                            <div class="col-md-12 mx-auto text-center">
                                <div class="section-title">
                                    <h4><?=$page->name;?></h4>
                                </div>
                                <img src="https://www.mountainsherpatrekking.com/files/images/Sherpa%20Team.jpg" alt="" title="" class="img-fluid" />
                                <?php echo $page->contentDesc?$page->contentDesc->detail:''; ?>
                                <!--  <p>Every member of the Mountain Sherpa Trekking & Expeditions team has a minimum of ten years guiding experience in their region of expertise and our entire guides are certified & hold trekking & climbing guide licensed, verified from Nepal government.</p>

                                <p>Our Expert Sherpa Guides and field staff have trained the hard way - working with trekking and climbing some of the highest mountains in the world. They are personally committed to preserving their environment and culture, and to provide personalized, quality service.</p>

                                <p>The assurance of the expertise of your field staff team and the professionalism of Mountain Sherpa Trekking & Expeditions bring you new dimensions to your experiences of Nepal. Our field staff have years of experience that have led to a thorough understanding of your needs and all the factors that go into making a unforgettable and meaningful adventure. This local knowledge adds that extra bit of garnishing that goes to make a delicious repast.</p>

                                <p>Safety and health are important for a memorable vacation. We make sure there is proper acclimatization days and rest days built into each Trek and Expedition.Our continued efforts attempt to deliver always high quality and personalized services, offering great value for money. We are now unification our experiences and professionalism in every aspect of adventure tourism and related services and are now moving ahead to a wider scale of professional quality services not only in Nepal, but also in, Tibet, Sikkim, Bhutan and India</p> -->
                            </div>
                        </div>

                        <div class="row">
                            <div class="container">
                              <div class="row">
                                <div class="col-md-12 ">
                                  <nav>
                                    <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                                    <?php $i=1;foreach($department as $dData){?>
                                        <a class="nav-item nav-link <?=$i==1?'active':'';?>" id="nav-<?=$dData->id;?>-tab" data-toggle="tab" href="#nav-<?=$dData->id;?>" role="tab" aria-controls="nav-<?=$dData->id;?>" aria-selected="true"><?=$dData->name;?></a>
                                    
                                    <?php $i++;}?>

                                      <!-- <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Trekking Guides</a>

                                      <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Climbing & Trek Guides</a>

                                      <a class="nav-item nav-link" id="nav-about-tab" data-toggle="tab" href="#nav-about" role="tab" aria-controls="nav-about" aria-selected="false">Camping Cooks</a> -->
                                    </div>
                                  </nav>

                                  <div class="tab-content py-3 px-3 px-sm-0 ourTeamMainContent" id="nav-tabContent">
                                  <?php $i=1;foreach($emp_data as $key=>$eArray){?>
                                    <div class="tab-pane fade show <?=$i==1?'active':'';?>" id="nav-<?=$key;?>" role="tabpanel" aria-labelledby="nav-<?=$key;?>-tab">
                                      <div class="row">
                                      <?php foreach($eArray as $eData){?>
                                        <div class="col-md-4">
                                          <div class="single-team">
                                            <a href="javascript:void(0)">
                                              <img src="<?=$eData->imageUrl;?>" alt="<?=$eData['name'];?>  <?=$eData->detail->position;?>" title="<?=$eData['name'];?>  <?=$eData->detail->position;?>" class="img-fluid" data-toggle="modal" data-target="#ourteam<?=$eData->id;?>">
                                            </a>

                                            <!-- Modal -->
                                            <div class="modal fade" id="ourteam<?=$eData->id;?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                              <div class="modal-dialog modal-xl modal-dialog-centered" role="document">
                                                <div class="modal-content modal-quick-inquiry">
                                                  <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalCenterTitle">PRESENTING...THE TEAM!</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                      <span aria-hidden="true">&times;</span>
                                                    </button>
                                                  </div>
                                                  <div class="modal-body">
                                                    <div class="row">
                                                      <div class="col-md-6">
                                                        <h2><?=$eData['name'];?> <span><?=$eData->detail->position;?></span></h2>
                                                        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                                                          <div class="carousel-inner">
                                                          <?php 
                                                          
                                                          // print_r($eData->otherImages);
                                                          $i=1;foreach($eData->otherImages as $image){?>
                                                            <div class="carousel-item <?=$i==1?'active':'';?>">
                                                              <img src="<?=$image;?>" alt="" title="" class="img-fluid d-block w-100">
                                                            </div>
                                                          <?php $i++;}?>
                                                            <!-- <div class="carousel-item">
                                                              <img src="https://www.thirdrockadventures.com/images/ppnepal.jpg" alt="" title="" class="img-fluid d-block w-100">
                                                            </div>
                                                            <div class="carousel-item">
                                                              <img src="https://www.thirdrockadventures.com/images/ppnepal.jpg" alt="" title="" class="img-fluid d-block w-100">
                                                            </div> -->
                                                          </div>
                                                          <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                            <span class="sr-only">Previous</span>
                                                          </a>
                                                          <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                            <span class="sr-only">Next</span>
                                                          </a>
                                                        </div>
                                                      </div><!-- End of col-md-6 -->

                                                      <div class="col-md-6">
                                                        <div class="ourTeamPersonalView">
                                                          <?=$eData->detail->description;?>
                                                          <!-- <p>He also took both Trekking cook and climbing Guide Training from Government of Nepal in 1993. He has been Visited Most of all Trekking regions and high Mountain area of Nepal. His other interest apart from trekking is travailing, he likes to visit new places and meet new people. His zeal for travailing has taken him on visits many countries in the world & also guided many trekking & tours in Bhutan, Tibet & Darjeeling.</p> -->
                                                        </div>
                                                      </div><!-- End of col-md-6 -->
                                                    </div><!-- End of row -->
                                                  </div>
                                                </div>
                                              </div>
                                            </div>

                                            <div class="team-hover">
                                                <h4><?=$eData['name'];?><span><?=$eData->detail->position;?></span></h4>
                                                <a href=""><i class="fa fa-facebook"></i></a>
                                                <a href=""><i class="fa fa-twitter"></i></a>
                                                <a href=""><i class="fa fa-youtube"></i></a>
                                                <a href=""><i class="fa fa-linkedin"></i></a>
                                            </div>
                                          </div>
                                        </div>
                                      <?php }?>
                                       
                                      </div>
                                    </div>
                                  <?php $i++;}?>
                                    
                                  </div>
                                
                                </div>
                              </div>
                            </div>
                        </div>
                      </div><!-- End of ourTeam -->
                  </div><!-- End col-md-12 -->
                </div><!-- End of row -->
              </div><!-- End of blogSection -->
            </div><!-- End of aboutUs -->
          </div><!-- End of header-div -->
        </div><!-- End of col-md-12 -->
      </div><!-- End of row -->
    </div><!-- End of container -->
  </div><!-- End of package-view-overview -->
