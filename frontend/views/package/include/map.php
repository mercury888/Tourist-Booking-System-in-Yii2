<?php if(isset($other_data['Map Image']) && !empty($other_data['Map Image'])){
    $map = $other_data['Map Image']['image'];
    // echo 
    ?>
<div class="header-div">
    <div class="heading sc-sp-data-dis sticky-rt-main-title">Map</div>
    <div class="data">
    <div class="scrollSectionCont">
        <div class="packageViewMap">
        <a href="#"><img src="<?=$model->getMapImage($map);?>" alt="" title="" class="img-fluid"></a>
        </div><!-- End of packageViewMap -->
    </div>
    </div>
</div>
<?php }?>