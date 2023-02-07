<?php if(isset($other_data) && !empty($other_data) && isset($other_data['save_inclusion_detail'])){?>
<div class="header-div">
    <div class="heading sc-sp-data-dis sticky-rt-main-title">Inclusion Detail</div>
    <div class="data">
    <div class="scrollSectionCont">
        <div class="inclusionDetailSection">
        <?php if(isset($other_data['Inclusion Image']) && !empty($other_data['Inclusion Image'])){?>
        <img src="<?=$model->getMapImage($other_data['Inclusion Image']['image']);?>" alt="Inclusion Detail" title="Inclusion Detail" class="img-fluid">
        <?php }?>

        <div class="row">
            <?php $inc_data = json_decode($other_data['save_inclusion_detail'],true); ?>
            <?php 
            if(!empty($inc_data))
            foreach($inc_data as $key=>$iData){?>
                <div class="col-md-6">
                <h3><?=$iData['heading'];?></h3>
                <ul>
                    <?php foreach($iData['item'] as $key=>$liData){?>
                        <?php if(!empty($liData)){?>
                            <li><?=$liData;?></li>
                        <?php }?>
                    <?php }?>
                </ul>
                </div><!-- End of col-md-6 -->
            <?php }?>
            
            <div class="col-md-12">
            <div class="inclusionDetailSecFooter">
                <div class="row">
                <?php if(isset($other_data) && !empty($other_data) && isset($other_data['save_exclusion_detail'])){?>
                    <?php $exc_data = json_decode($other_data['save_exclusion_detail'],true); ?>
                    <?php 
                    if(!empty($exc_data))
                    foreach($exc_data as $key=>$iData){?>
                        <div class="col-md-6">
                        <h3><?=$iData['heading'];?></h3>
                        <ul>
                            <?php foreach($iData['item'] as $key=>$liData){?>
                                <?php if(!empty($liData)){?>
                                    <li><?=$liData;?></li>
                                <?php }?>
                            <?php }?>
                        </ul>
                        </div><!-- End of col-md-6 -->
                    <?php }?>
                    
                <?php }?>   
              
                </div><!-- End of row -->
            </div><!-- End of inclusionDetailSecFooter -->
            </div><!-- End of col-md-12 -->
        </div><!-- End of row -->
        </div><!-- End of inclusionDetailSection -->
    </div>
    </div>
</div>
<?php }?>    