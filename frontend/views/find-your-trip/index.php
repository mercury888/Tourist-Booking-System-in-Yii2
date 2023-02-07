<?php
use yii\widgets\ListView;
use yii\widgets\Pjax;
?>
<?php
$sql = "select *from {{%seo}} where slug='search-trips'";
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
use common\components\Helper;
$banner_image = Helper::getSiteImage('site-image','Find Your Trip Page Banner')
?>
<!-- [{"type":"Over 22 Years of Experience","image":"detail-slider.jpg"},{"type":"Find Your Trip Page Banner","image":"fallback-sm.png"},{"type":"Planning Tour Banner","image":"inner.jpg"}] -->
<?php if(!empty($banner_image)){?>
  <div class="product-view-banner-section">
    <img src="<?=$banner_image;?>" alt="" title="" class="img-fluid productBannerImg">

    <div class="parallax-content-2">
      <div class="container">
        <div class="row">
          <div class="col-md-8">
            <h1>Find Your Trip</h1>
            <!-- <span>Trek to Everest Base Camp for 16 days</span> -->
          </div>

          <div class="col-md-4  d-none d-lg-block">
            <div id="price_single_main">
              <!-- <span><sup>$</sup>1352</span> -->
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
<?php }?>


  <div class="breadcrumb-nav">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <ul>
            <li><a href="#">Home</a> <span> <i class="fa fa-angle-right" aria-hidden="true"></i> </span></li>
            <!-- <li><a href="#">Find Your Trip</a> <span> <i class="fa fa-angle-right" aria-hidden="true"></i> </span></li> -->
            <li>Find Your Trip</li>
            <li>
            <a href="#" id="mobile-search" data-toggle="modal" data-target="#mobileSearch"><i class="fas fa-search"></i></a>
            </li>
          </ul>
        </div><!-- End of col-md-12 -->
      </div><!-- End of row -->
    </div><!-- End of container -->
  </div><!-- End of breadcrumb-nav -->

 
  <div class="findYourTrip">
    <div class="container">
      
      <div class="row">
        <div class="col-md-3">
          <div class="findYourTrip-lft search-main-content">
            <?=$this->render("//package/search",['model'=>$searchModel]);?>
          </div><!-- End of findYourTrip-lft -->
        </div><!-- End of col-md-3 -->

        <div class="col-md-9">
          <div class="findYourTrips-rt">
            <h1>All Tours Package(s)</h1>
           
            <?php   Pjax::begin(['id'=>'trip-search']);?>
          <?php
              echo ListView::widget( [
              'dataProvider' => $dataProvider,
              'itemView' => '//package/include/single-package-layout-5',
              'pager' => [
                  'disabledPageCssClass' => 'page-link',
                    'linkContainerOptions' => [
                      'class' => ['page-item']
                    ],
                    'linkOptions' => [
                      'class' => ['page-link']
                    ]
                           

                  ],
            ] ); 
          ?>
           <?php  Pjax::end();?>
            <!-- <div class="loadMoreFilterPackage">
              <a href="#">Load More</a>
            </div> -->
            <!-- End of loadMoreFilterPackage -->
          </div><!-- End of findYourTrips-rt -->
        </div><!-- End of col-md-9 -->
      </div><!-- End of row -->
       
    </div><!-- End of container -->
  </div><!-- End of findYourTrip -->

<!-- Modal -->
<div class="modal fade" id="mobileSearch" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <!-- <h5 class="modal-title" id="exampleModalLabel">Modal title</h5> -->
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body mobile-search-content">
      
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

<?php 
$js =<<<JS
var searchContent = '';
var is_search = 0
$("#mobile-search").on('click',function(e){
  e.preventDefault();
  console.log(is_search);
  // alert('I am here')
  if(!searchContent){
    searchContent = $(".search-main-content").clone();
   
  }
  if(is_search===0){
    is_search = 1
    // console.log("i am in on updating search form again");
    $(".mobile-search-content").empty().append(searchContent[0].innerHTML);
    $(".search-main-content").empty();

  }
  console.log(is_search);
  // console.log(searchContent)
  // $(".mobile-search-content").append("test");


})
$("body").on('change','.form-check-input',function(e){
    e.preventDefault();

    // alert('here')
    // $.pjax({
    //          type: 'POST',
    //     container: '#trip-search',
    //     url: $(this).href,
    //     data: $("#my-form").serialize(),
    // });
    var formData = $("#my-form");

    
    console.log(formData);
    $.pjax.reload({

        type: 'POST',

        url: $(this).href,
        // async: false,
        container: '#trip-search',

        data: formData.serialize(),

        // dataType: 'application/json',
        success: function() {
            alert('I am')
            // $.pjax.reload({container:"#countries"});
            // $.pjax.reload({container: '#trip-search'})
        }


        })
})
// excludedate: [''];


JS;
$this->registerJS($js);

?>