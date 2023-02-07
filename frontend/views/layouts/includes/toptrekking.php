<?php 
use common\models\Content;
use common\models\Package;
$content = Content::find()->where(['slug'=>'we-are-sherpa'])->one();
$featured_item_sql = "select package_id from {{%featured_items}} where id=3 order by display_order";
$item_result = Yii::$app->db->createCommand($featured_item_sql)->queryAll();
$package_ids = [];
foreach($item_result as $fiData){
  $package_ids[] = $fiData['package_id'];
}
$pids = implode(',',$package_ids);
// $package_sql = "select price,price_5,slug, price_3,image, name from {{%package}} where id in($pids) limit 4";
// print_r($pids); exit;
$packages = Package::find()->select('id,price,price_5,slug, price_3,image, name')->where(['in','id',$package_ids])->limit(4)->all();
// $packages = Yii::$app->db->createCommand($package_sql)->queryAll();
?>

<div class="container">
    <div class="row">
      <div class="col-md-12">
      <?php if($content){?>
        <div class="wel-come-top-trekking">
          <div class="row">
            <div class="col-md-4">
              <div class="wel-come">
      					<div class="main_title">
      						<h2><?=$content->name;?></h2>
      						<span><?=$content->contentDesc?$content->contentDesc->sub_title:'';?></span>
      					</div><!-- End of main_title -->                  
                <?=$content->contentDesc?$content->contentDesc->detail:'';?>
              </div><!-- End of wel-come -->
              <?php }?>
            </div><!-- End of col-md-4 -->

            <div class="col-md-8">
              <div class="top-trekking">
                  <div class="row">
                    <div class="col-md-12 top-trekking-title">
          						<div class="main_title">
          							<h2>Top <span>Trekking</span> Expreience</h2>
          						</div><!-- End of main_title -->
                    </div>
                    
                    <div class="trekking-climbing-exp">
                      <div class="row">
                      <?php foreach($packages as $pData){?>
                          <div class="col-lg-6 col-md-6">
                            <?=$this->render("//package/include/single-package-layout-1",['model'=>$pData]);?>
                           </div><!-- End col -->
                      <?php }?>
                        

                        <div class="col-lg-12 col-md-12 text-center">
                          <div class="view-all-packages">
                            <a href="<?=Yii::$app->urlManager->createUrl(['/find-your-trip','featured_id' => 3]);?>">View all Packages</a>
                          </div><!-- End of view-all-packages -->
                        </div><!-- End col -->
                      </div><!-- End of row -->
                    </div><!-- End of trekking-climbing-exp -->
                  </div><!-- End of row -->
              </div><!-- End of top-trekking -->
            </div><!-- End of col-md-8 -->
          </div><!-- End of row -->
        </div><!-- End of wel-come-top-trekking -->
      </div><!-- End of col-md-12 -->
    </div><!-- End of row -->
  </div><!-- End of container -->
