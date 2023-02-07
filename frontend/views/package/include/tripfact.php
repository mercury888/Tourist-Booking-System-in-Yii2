<?php if(isset($other_data) && !empty($other_data) && isset($other_data['save_trip_fact'])){?>
    <div class="header-div">
        <div class="heading sc-sp-data-dis sticky-rt-main-title">Trip Facts</div>
        <div class="data">
            <div class="scrollSectionCont">
                <div class="sticky-hightlights">
                <div class="row">
                        <?php $trip_fact = json_decode($other_data['save_trip_fact'],true); ?>
                        <?php 
                        if(!empty($trip_fact))
                        foreach($trip_fact as $key=>$val){?>
                            <div class="col-md-3">
                                <div class="sticky-hightlights-cont">
                                    <div class="s-h-icons"><i class="<?=$val['icon'];?>" style="color:<?=isset($val['color'])?$val['color']:'';?>" aria-hidden="true"></i></div>
                                    <div class="s-h-title" style="color:<?=isset($val['color'])?$val['color']:'';?>"><?=$val['heading'];?></div>
                                    <div class="s-h-sub-title">
                                    <ul class="s-h-sub-title-mainCont">
                                        <?php foreach($val['text'] as $tKey=>$tVal){?>
                                            <li><?=$tVal;?></li>
                                        <?php }?>
                                    </ul>
                                    </div>
                                </div><!-- End of sticky-hightlishts-cont -->
                            </div><!-- End of col-md-3 -->
                        <?php }?>
                </div><!-- End of row -->
                </div><!-- End of sticky-highlights -->
            </div>
        </div>
    </div>
<?php }?>