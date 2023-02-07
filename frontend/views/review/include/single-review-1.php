<div class="col-md-6">
    <div class="client-review-cont">
    <h3><?=$model['title'];?></h3>
    <p><?=substr($model['content'],0,250);?>...</p>

    <div class="client-review-rating">
    <i class="fa fa-star" aria-hidden="true"></i>
    <i class="fa fa-star" aria-hidden="true"></i>
    <i class="fa fa-star" aria-hidden="true"></i>
    <i class="fa fa-star" aria-hidden="true"></i>
    <i class="fa fa-star-half-o" aria-hidden="true"></i>
    </div><!-- end rating -->

    <div class="review-client-detail">
    <div class="riview-client-flag"><img src="https://www.thirdrockadventures.com/assets/images/flags/GBR.png" alt="" title="" class="img-fluid"></div>
    <div class="riview-client-name">- <?=$model['author'];?> / <?=date('M d '.','.'Y',strtotime($model["create_time"]));?></div>
    </div><!-- End of review-client-detail -->
    </div><!-- End of client-review-cont -->
</div><!-- End of col-md-6 -->
