<?php 
use common\models\Post;
// $blog_sql = "select title, content, update_time,meta_desc, slug from {{%post}} where is_approved=1 order by id desc limit 2";
// $blog_result = Yii::$app->db->createCommand($blog_sql)->queryAll();
$blog_result = Post::find()->where('is_approved=1')->limit(2)->orderBy('id desc')->all();

$video_sql = "select videocode from {{%video}} where visible=1 order by rand() limit 2";
$video_result = Yii::$app->db->createCommand($video_sql)->queryAll();

?>

<div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="travel-blog-video">
          <div class="main_title">
            <h2>Travel <span>Blog and</span> Videos</h2>
            <p>Travel Tales-Get inspired and start travelling</p>

            <div class="travel-blog-cont">
              <div class="row">
                <!--<div class="col-md-4">
                  <div class="blog-content">
                    <div class="blog-cont-author">By Admin</div>
                    <div class="blog-cont-date">17th Jul, 2019</div>
                    <a class="blog-cont-title" href="#">Why Is Tourism A Flourishing Industry In Nepal?</a>
                    <img src="images/blog/why-tourism-in-nepal.jpg" alt="..." title="..." class="img-fluid blog-cont-img">
                  </div> End of blog-content -->

                  <!-- <div class="blog-content">
                    <div class="blog-cont-author">By Admin</div>
                    <div class="blog-cont-date">10th Jul, 2019</div>
                    <a class="blog-cont-title" href="#">Why It Is Important To "Visit Nepal 2020" To Get Once In A Lifetime Experience?</a>
                    <img src="images/blog/visitnepal2020.jpg" alt="..." title="..." class="img-fluid blog-cont-img">
                  </div>End of blog-content -->
                <!-- </div>End of col-md-4 -->

                <!--<div class="col-md-4">
                  <div class="blog-content-mid">
                    <a class="blog-cont-title-mid" href="#">Why Luxury Trekking In Everest Region Is The Perfect Choice?</a>
                    <div class="blog-cont-author-mid">By Admin</div>
                    <div class="blog-cont-date-mid">14th Jul, 2019</div>
                    <p>Nepal, the trekker's paradise, land of the Himalayas and the birthplace of Lord Buddha, is an adventure Disneyland for those who love adventures from simple escapade to nail-biting experience.</p>
                    <img src="images/blog/luxury-trekking.jpg" alt="..." title="..." class="img-fluid blog-cont-img-mid">
                  </div> End of blog-content -->
                <!--</div> End of col-md-4 -->

                <div class="col-md-8">
                  <ul class="blog-content-sec">
                  <?php foreach($blog_result as $bData){?>
                    <li>
                      <div class="blog-content-mid">
                        <img src="<?=$bData->postImage?$bData->postImage->imageUrl:'';?>" alt="<?=$bData->title;?>" title="<?=$bData->meta_title;?>" class="img-fluid blog-cont-img-mid">

                        <div class="blog-main-content">
                          <a class="blog-cont-title-mid"  title="<?=$bData->meta_title;?>"  href="<?=Yii::$app->urlManager->createUrl(['blog/slug','slug'=>$bData->slug]);?>"><?=$bData['title'];?></a>

                          <div class="blog-author-date">
                            <div class="blog-cont-author-mid">By Admin</div>
                            <div class="blog-cont-date-mid"><?=date('Y-m-d',$bData['update_time']);?></div>
                          </div><!-- End of blog-author-mid -->
                            <p><?=$bData['meta_desc'];?></p>
                        </div><!-- End of blog-main-content -->
                      </div><!-- End of blog-content -->
                    </li><!-- End of col-md-4 -->
                  <?php }?>
              
                    <li>
                        <div class="text-center">
                          <div class="view-all-packages">
                            <a title="View Our Travel Related Blog" href="<?=Yii::$app->urlManager->createUrl('/blog');?>" >View all Blogs</a>
                          </div><!-- End of view-all-packages -->
                        </div><!-- End col -->
                    </li>
                  </ul>
                </div><!-- End of col-md-8 -->

                <div class="col-md-4">
                <?php
                if(!is_array($video_result))
                foreach($video_result as $vData){
                  $vp = explode('v=',$vData['videocode']);
                  $vid = $vp[1];
                  ?>
                  <div class="blog-you-tube">
                    <iframe width="100%" height="180" src="https://www.youtube.com/embed/<?=$vid;?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                  </div><!-- End of blog-you-tube -->
                <?php }?>

                  <?php /*?>  
                  <div class="blog-you-tube text-center">
                    <div class="view-all-packages">
                      <a href="<?=Yii::$app->urlManager->createUrl('/video');?>">View all Videos</a>
                    </div><!-- End of view-all-packages -->
                  </div><!-- End col -->
                  <?php */?>

                </div><!-- End of col-md-4 -->
              </div><!-- End of row -->
            </div><!-- End of travel-blog-cont -->
          </div><!-- End of main_title -->
        </div><!-- End of travel-blog-video -->
      </div><!-- End of col-md-12 -->
    </div><!-- End of row -->
  </div><!-- End of container -->
