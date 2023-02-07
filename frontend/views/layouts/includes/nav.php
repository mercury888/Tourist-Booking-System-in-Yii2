<?php 
use common\components\Helper;
Helper::setConfigData();
$data = Helper::getConfigData();
// echo '<pre>';
$main_menu = [];
if(isset($data[1]) && !empty($data[1])){
  $json_menu_data = json_decode($data[1]['value'],true);
}
?>
  
  <div class="main-nav">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <nav class="mash-menu" data-color="">
            <section class="mash-menu-inner-container">
                <!-- brand -->
                <ul class="mash-brand">
                    <li>
                        <!-- <a href="#"><img src="images/logo.png"></a> -->
                        <!-- mobile button -->
                        <button class="mash-mobile-button"><span></span></button>
                    </li>
                </ul>

                <!-- list items -->
                <ul class="mash-list-items">
                    <!-- active -->
                    <li class="active"><a href="<?=Yii::$app->homeUrl;?>"> Home</a></li>
                    <?php if(!empty($json_menu_data)){?>
                        <?php foreach($json_menu_data as $main_key=>$val){?>
                            <?php 
                                  $turl =  strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '-', trim($val['name']))));
                                ?>
                            <?php if($val['menu_type']=='megha'){?>
                                <li><a href="<?=Yii::$app->urlManager->createUrl(['find-your-trip','slug' => $turl]);?>"><?=$val['name'];?> <i class="fa fa-caret-down fa-indicator"></i> </a>
                                    <!-- full size drop down -->
                                    <div class="drop-down-large">
                                        <!-- vertical tabs container -->
                                        <div class="vertical-tabs-container">
                                            <!-- bootstrap start -->
                                            <div class="container-fluid space-0">   <!-- bootstrap fluid container -->
                                                <div class="row">
                                                <div class="col-sm-3 col-md-2 clearfix space-0">
                                                    <!-- vertical tab -->
                                                    <div class="vertical-tabs">
                                                        <?php if(is_array($val['sub_menu']) && !empty($val['sub_menu'])){?>
                                                            <?php $tab = 1;foreach($val['sub_menu'] as $tabkey=>$sub1Val){?>
                                                                    <a class="<?=$tab==1?'active':'';?>" href="#content<?=$main_key;?>-<?=$tabkey;?>"><?=$sub1Val['name'];?> <i class="fa fa-angle-right hidden-xs"></i> </a>
                                                            <?php $tab++;}?>
                                                        <?php }?>
                                                        <!-- active --> <!-- hidden-xs,sm,md-lg id bootstrap classes -->
                                                        <!-- <a class="active" href="#content-1">Nepal <i class="fa fa-angle-right hidden-xs"></i> </a>
                                                        <a href="#content-2">Tibet <i class="fa fa-angle-right hidden-xs"></i> </a>
                                                        <a href="#content-3">Bhutan <i class="fa fa-angle-right hidden-xs"></i> </a> -->
                                                    </div>
                                                </div>

                                                <div class="col-sm-9 col-md-10 space-0">
                                                    <!-- vertical tabs content container -->
                                                    <div class="vertical-tabs-content-container">
                                                        <!-- this is vertical tabs content 1 -->
                                                        <?php if(is_array($val['sub_menu']) && !empty($val['sub_menu'])){?>
                                                            <?php $contentInc = 1;foreach($val['sub_menu'] as $tabkey=>$sub1Val){?>
                                                                <div id="content<?=$main_key;?>-<?=$tabkey;?>" class="vertical-tabs-content">
                                                                        <!-- bootstrap start -->
                                                                        <div class="container-fluid">
                                                                            <div class="row">
                                                                            <?php if(is_array($sub1Val['sub_menu']) && !empty($sub1Val['sub_menu'])){?>
                                                                                <?php foreach($sub1Val['sub_menu'] as $key => $sub2Val){?>
                                                                                    <div class="col-sm-6 col-md-3">
                                                                                    <div class="navMainContent">
                                                                                    
                                                                                    <?php 
                                                                                    $url = '#';
                                                                                    if(isset($sub2Val['package_slug']) && !empty($sub2Val['package_slug'])){
                                                                                        $url_part = $sub2Val['package_slug'];
                                                                                        $url_pieces = explode('=',$url_part);
                                                                                       if(sizeof($url_pieces)==2){
                                                                                           $keyurl = $url_pieces[0];
                                                                                           $valurl = $url_pieces[1];
                                                                                           $url = Yii::$app->urlManager->createUrl(['/find-your-trip',$keyurl=>$valurl]);
                                                                                       }else {
                                                                                        $url_pieces = explode('&',$url_part);
                                                                                        $urpart_arr = [];
                                                                                        $up1 = $url_pieces[0];
                                                                                        $url_pi1 = explode('=',$up1);
                                                                                        $keyurl = $url_pi1[0];
                                                                                        $valurl = $url_pi1[1];

                                                                                        $up2 = $url_pieces[1];
                                                                                        $url_pi2 = explode('=',$up2);
                                                                                        $keyurl1 = $url_pi2[0];
                                                                                        $valurl2 = $url_pi2[1];
                                                                                        $url = Yii::$app->urlManager->createUrl(['/find-your-trip',$keyurl=>$valurl,$keyurl1=>$valurl2]);
                                                                                       }
                                                                                    }
                                                                                    ?>
                                                                                    <a href="<?=$url;?>" class="navSubTour"><?=$sub2Val['name'];?></a>
                                                                                    <ul class="navCat">
                                                                                    <?php if(is_array($sub2Val['sub_menu']) && !empty($sub2Val['sub_menu'])){?>
                                                                                        <?php foreach($sub2Val['sub_menu'] as $key => $sub3Val){?>
                                                                                            <li>
                                                                                                <a href="<?=Yii::$app->urlManager->createUrl(['package/slug','slug'=>$sub3Val['package_slug']]);?>">
                                                                                                <?=$sub3Val['name'];?>
                                                                                                <?php if(isset($sub3Val['menu_extra_detail']) && !empty($sub3Val['menu_extra_detail'])){?>
                                                                                                    <span><?=$sub3Val['menu_extra_detail'];?></span>
                                                                                                <?php }?>
                                                                                                </a>
                                                                                            </li>
                                                                                        <?php }?>
                                                                                    <?php }?>
                                                                                    </ul>
                                                                                    </div>
                                                                                </div>
                                                                                <?php }?>
                                                                            <?php }?>        

                                                                                
                                                                               
                                                                            </div>
                                                                        </div>
                                                                        <!-- bootstrap end -->
                                                                </div>
                                                            <?php $contentInc++;}?>
                                                        <?php }?>
                                                       
                                                        
                                                    </div>
                                                </div>
                                                </div>
                                            </div>
                                            <!-- bootstrap end -->
                                        </div>
                                    </div>

                                </li>
                            <?php }?>

                            <?php if($val['menu_type']=='simple-dropdown2'){?>
                                <li><a href="<?=Yii::$app->urlManager->createUrl(['find-your-trip','slug' => $turl]);?>"><?=$val['name'];?> <i class="fa fa-caret-down fa-indicator"></i> <div class="ripple-wrapper"></div></a>
                                    <ul class="drop-down" style="display: none;">
                                    <?php if(is_array($val['sub_menu']) && !empty($val['sub_menu'])){?>
                                          <?php foreach($val['sub_menu'] as $key=>$sub1Val){?>
                                              <li><a href="<?=Yii::$app->urlManager->createUrl(['package/slug','slug'=>$sub1Val['package_slug']]);?>"><?=$sub1Val['name'];?></a></li>
                                          <?php }?>
                                      <?php }?>
                                    </ul>
                                </li>
                              <?php }?>
                              <?php if($val['menu_type']=='simple'){?>
                                      <li><a href="<?=$val['url'];?>"><?=$val['name'];?></a></li>
                              <?php }?>

                        <?php }?> 
                    <?php }?> 


					
                </ul>
				
				
				
				
				
            </section>
          </nav>
        </div><!-- End of col-md-12 -->
      </div><!-- End of row -->
    </div><!-- End of container -->
  </div><!-- End of main-nav -->
