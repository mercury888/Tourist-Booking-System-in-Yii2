<div class="header-div" id="date-avi-block">
    <div class="heading sc-sp-data-dis sticky-rt-main-title">Date & Availability</div>
    <div class="data">
    <div class="scrollSectionCont">
        <div class="vitalInformationSection">
        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item vitalInformationTabLft">
            <a class="nav-link active" id="smallgroupdates-tab" data-toggle="tab" href="#smallgroupdates" role="tab" aria-controls="smallgroupdates" aria-selected="true">Small Group Dates</a>
            </li>

            <li class="nav-item vitalInformationTabMid">
            <a class="nav-link" id="goprivate-tab" data-toggle="tab" href="#goprivate" role="tab" aria-controls="goprivate" aria-selected="false">Go Private</a>
            </li>

            <li class="nav-item vitalInformationTabRt">
            <a class="nav-link" id="gobespoke-tab" data-toggle="tab" href="#gobespoke" role="tab" aria-controls="gobespoke" aria-selected="false">Go Bespoke</a>
            </li>
        </ul>

        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="smallgroupdates" role="tabpanel" aria-labelledby="smallgroupdates-tab">
                <div class="row">
                    <div class="col-md-12">
                    <?=$this->render("//package/include/sg-date-price",['model'=>$model]);?>
                    </div>    
                </div>    
            </div>

            <div class="tab-pane fade" id="goprivate" role="tabpanel" aria-labelledby="goprivate-tab">
            <div class="row">
            <?php if(isset($other_data['Go Private Image']) && !empty($other_data['Go Private Image'])){?>
                <div class="col-md-4">
                    <img src="<?=$model->getMapImage($other_data['Go Private Image']['image']);?>" alt="" title="" class="img-fluid">
                </div>
                <?php } else {?>
                    <div class="col-md-4">
                        <img src="images/Amalfi-Coast-Walking-Pin.jpg" alt="" title="" class="img-fluid">
                    </div>

                <?php }?>    
            <!-- Go Bespoke Image -->
                <div class="col-md-8">
                <div class="row">
                    <?php if(isset($other_data) && !empty($other_data) && isset($other_data['save_go_private_info'])){ ?>
                        <?php $go_private_text = json_decode($other_data['save_go_private_info'],true); ?>
                            <div class="col-md-12">
                            <h3><?=$go_private_text['title'];?></h3>
                            </div><!-- End of col-md-12 -->
                            <div class="col-md-6">
                                <p><?=nl2br($go_private_text['detail']);?></p>
                            </div>
                        <?php }?>  

                    <div class="col-md-6">
                    <?php if(isset($other_data) && !empty($other_data) && isset($other_data['save_group_pricing'])){ ?>
                        <?php $group_pricing = json_decode($other_data['save_group_pricing'],true); ?>
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th scope="col">Travellers</th>
                                <th scope="col">Pricing From (USD) †</th>
                            </tr>
                            </thead>
                            <tbody>
                                <?php 
                                if(!empty($group_pricing))
                                foreach($group_pricing as $key=>$pVal){?>
                                    <tr>
                                        <td><?=$pVal['min'];?>-<?=$pVal['max'];?></td>
                                        <td>$<?=$pVal['price'];?></td>
                                    </tr>
                                <?php }?>
                            <tr>
                                <td></td>
                                <td>† Double occupancy</td>
                            </tr>
                            </tbody>
                        </table>
                        <p>* Trip elements may be adjusted on smaller group sizes.</p>
                    <?php }?>
                    </div>

                    <div class="col-md-12">
                    <div class="date-availability-btn">
                        <a title="Book your trip to <?=$model->name;?> privately so that you feel more comforatble with your trip" href="<?=Yii::$app->urlManager->createUrl(['booking/private-booking','slug'=>$model->slug]);?>" class="stickySectionBtn">Request Your Private Date</a>
                    </div><!-- End of date-availability-btn -->
                    </div>
                </div><!-- End of row -->
                </div><!-- End of col-md-8 -->
            </div><!-- End of row -->
            </div>

            <div class="tab-pane fade" id="gobespoke" role="tabpanel" aria-labelledby="gobespoke-tab">
            <div class="row">
                <?php if(isset($other_data['Go Bespoke Image']) && !empty($other_data['Go Bespoke Image'])){?>
                    <div class="col-md-6">
                    <img src="<?=$model->getMapImage($other_data['Go Bespoke Image']['image']);?>" alt="Walking Sticks" title="Walking Sticks" class="img-fluid">
                    </div><!-- End of col-md-6 -->
                <?php } else {?>
                    <div class="col-md-6">
                    <img src="images/suit.png" alt="Walking Sticks" title="Walking Sticks" class="img-fluid">
                    </div><!-- End of col-md-6 -->
                
                <?php }?>
   
                <div class="col-md-6">
                    
                <?php if(isset($other_data) && !empty($other_data) && isset($other_data['save_bespoke_info'])){ ?>
                    <?php $be_spoke_text = json_decode($other_data['save_bespoke_info'],true); ?>
                            <p><?=nl2br($be_spoke_text['detail']);?></p>
                <?php }?>      

                <div class="date-availability-btn">
                    <a title="Book your trip to <?=$model->name;?> privately so that you feel more comforatble with your trip" href="<?=Yii::$app->urlManager->createUrl(['booking/customized-booking','slug'=>$model->slug]);?>" class="stickySectionBtn">Request A Quote</a>
                </div><!-- End of date-availability-btn -->
                </div><!-- End of col-md-6 -->
            </div><!-- End of row -->
            </div>
        </div>
        </div><!-- End of vitalInformationSection -->
    </div>
    </div>
</div>

