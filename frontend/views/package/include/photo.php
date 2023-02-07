<?php if($model->packagePhoto){?>
<div class="header-div">
    <div class="heading sc-sp-data-dis sticky-rt-main-title">Photos</div>
    <div class="data">
    <div class="scrollSectionCont">
        <div class="portfolio-item row">
        <?php foreach($model->packagePhoto as $pData){?>
            <div class="item selfie col-lg-3 col-md-4 col-6 col-sm">
                <a href="<?= $pData->imageUrl;?>" class="fancylight popup-btn" data-fancybox-group="light"> 
                <img class="img-fluid" src="<?= $pData->imageUrl;?>" alt="">
                </a>
            </div>
        <?php }?>
    </div>
    </div>
    </div>
</div>
<?php }?>