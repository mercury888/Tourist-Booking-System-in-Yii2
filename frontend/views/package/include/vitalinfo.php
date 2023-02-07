<?php if(isset($other_data) && !empty($other_data) && isset($other_data['save_vital_info'])){?>
    <div class="header-div">
        <div class="heading sc-sp-data-dis sticky-rt-main-title">Vital Information</div>
        <div class="data">
        <div class="scrollSectionCont">
            <div class="vitalInformationSection">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <?php $inc_data = json_decode($other_data['save_vital_info'],true); ?>
                    <?php 
                    if(!empty($inc_data))
                    $i=1;foreach($inc_data as $key=>$viData){?>
                        <li class="nav-item vitalInformationTabLft">
                        <a class="nav-link <?=$i==1?'active':'';?>" id="<?=$viData['tab_name'];?>-tab" data-toggle="tab" href="#<?=$viData['tab_name'];?>" role="tab" aria-controls="<?=$viData['tab_name'];?>" aria-selected="true"><?=$viData['title'];?></a>
                        </li>
                    <?php $i++;}?>

                    <!-- <li class="nav-item vitalInformationTabMid">
                    <a class="nav-link" id="whatincluded-tab" data-toggle="tab" href="#whatincluded" role="tab" aria-controls="whatincluded" aria-selected="false">What's Included</a>
                    </li>

                    <li class="nav-item vitalInformationTabMid">
                    <a class="nav-link" id="gear-tab" data-toggle="tab" href="#gear" role="tab" aria-controls="gear" aria-selected="false">Gear</a>
                    </li>

                    <li class="nav-item vitalInformationTabRt">
                    <a class="nav-link" id="extendtrip-tab" data-toggle="tab" href="#extendtrip" role="tab" aria-controls="extendtrip" aria-selected="false">Extend Your Trip</a>
                    </li> -->
            </ul>

            <div class="tab-content" id="myTabContent">
                    <?php if(isset($other_data) && !empty($other_data) && isset($other_data['save_vital_info'])){?>
                    <?php $inc_data = json_decode($other_data['save_vital_info'],true); ?>
                        <?php 
                        if(!empty($inc_data))
                        $i=1;foreach($inc_data as $key=>$viData){?>
                    
                        <div class="tab-pane fade show <?=$i==1?'active':'';?>" id="<?=$viData['tab_name'];?>" role="tabpanel" aria-labelledby="<?=$viData['tab_name'];?>-tab">
                        <div class="row">
                            <div class="col-md-12">
                            <?php foreach($viData['item'] as $key=>$vITData){?>
                                <p><?=nl2br($vITData);?></p>
                            <?php }?>
                            
                        </div><!-- End of col-md-9 -->
                        
                        </div><!-- End of row -->
                        </div>
                        <?php $i++;}?>
                    <?php }?>
            </div>
            </div><!-- End of vitalInformationSection -->
        </div>
        </div>
    </div>
<?php }?>
