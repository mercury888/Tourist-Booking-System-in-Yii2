<?php if($model->packageItenerary){?>
<div class="header-div">
    <div class="heading sc-sp-data-dis sticky-rt-main-title">Itinerary <span><a href="<?=Yii::$app->urlManager->createUrl(['download/slug','slug'=>$model->slug]);?>" target="_blank">Print Itinerary</a></span></div>
    <div class="data">
    <div class="scrollSectionCont">
        <div class="sticky-itinerary">
        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
            <div class="expandCollapse">
                <a href="javascript:void(0);" data-role="button" onClick="openAllPanels()" style="display:block"  id="openAll">Open All</a>
                <a href="javascript:void(0);" data-role="button" onClick="closeAllPanels()" style="display:none" id="closeAll">Close All</a>
            </div>
            <?php foreach($model->packageItenerary as $itinerary){?>
            <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="heading<?=$itinerary->id;?>">
                    <h4 class="panel-title">
                        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse<?=$itinerary->id;?>" aria-expanded="true" aria-controls="collapse<?=$itinerary->id;?>" class="accordion__header itinerary__title">
                            <div class="itinerary__daymarker">
                                <?=$itinerary->day_no;?>
                            <!-- Day <span>1</span> -->
                            </div><!-- End of itinerary__daymarker -->

                            <h3 class="sticky-itinerary-title"><?=$itinerary->short_desc;?></h3>
                            
                            <div class="sticky-accordion-up-down">
                                <i class="more-less fa fa-chevron-up" aria-hidden="true"></i>
                            </div><!-- End of sticky-accordion-up-down -->
                        </a>
                    </h4>
                </div>

                <div id="collapse<?=$itinerary->id;?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading<?=$itinerary->id;?>">
                    <div class="panel-body">
                        <div class="sticly-section-contents">
                            <?=$itinerary->full_desc;?>
                            <?php if(isset($other_data) && !empty($other_data) && isset($other_data['save_itinerary_extra_info'])){ ?>
                            <?php $ite_extra_info = json_decode($other_data['save_itinerary_extra_info'],true); ?>
                                <?php foreach($ite_extra_info as $key=>$itiData){
                                    $find = $itinerary->day_no;
                                    $str = $itiData['itinerary_id'];
                                    preg_match("/($find)/", $str, $matches);
                                if(is_array($matches) && !empty($matches)){?>
                                        <?php foreach($itiData['ite_icon'] as $icon){?>
                                                <div class="sticky-hightlights-cont">
                                                    <div class="s-h-icons"><i class="<?php echo $icon['icon'];?>" aria-hidden="true" style="color:<?=$icon['icon_color'];?>"></i></div>
                                                    <div class="s-h-title"><?php echo $icon['icon_text'];?></div>
                                                    <!-- <div class="s-h-sub-title"></div> -->
                                                </div> 
                                            <?php }?>
                                <?php  }
                                }?>
                                
                            <?php }?>    
                        </div><!-- End of sticly-section-contents -->
                    </div>
                </div>
            </div>
            <?php }?>
            
        </div><!-- panel-group -->
        </div><!-- End of sticky-itinerary -->
    </div><!-- End of scrollSectionCont -->
    </div><!-- End of data -->
</div>
<?php }?>