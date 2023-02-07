<?php 
use common\models\Package;
$featured_item_sql = "select package_id from {{%featured_items}} where id=8 order by display_order";
$item_result = Yii::$app->db->createCommand($featured_item_sql)->queryAll();
$package_ids = [];
foreach($item_result as $fiData){
  $package_ids[] = $fiData['package_id'];
}
$pids = implode(',',$package_ids);
// $package_sql = "select price,price_5,slug, duration, price_3,image, name from {{%package}} where id in($pids) limit 3";
// $packages = Yii::$app->db->createCommand($package_sql)->queryAll();
$packages = Package::find()->select('id,price,price_5,slug, price_3,image, name')->where(['in','id',$package_ids])->limit(3)->all();

?>

  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="trekking-climbing-exp">
          <div class="row">
            <div class="col-md-12">
              <div class="main_title luxury-travel-expreience-title">
                <h2>Luxury Travel Expreience</h2>
                <p>We offer a range of holiday packages. Whether you are looking for Trekking or adventure Climbing, Cultural Tours or adventure tours. We offer comprehensive holiday packages at an affordable rate.</p>
              </div><!-- End of main_title -->
            </div><!-- End of col-md-12 -->
            <?php foreach($packages as $pData){?>
              <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.1s">
              <?=$this->render("//package/include/single-package-layout-3",['model'=>$pData]);?>
            </div><!-- End col -->
            <?php }?>
          
          </div><!-- End of row -->
        </div><!-- End of trekking-climbing-exp -->
      </div><!-- End of col-md-12 -->
    </div><!-- End of row -->
  </div><!-- End of container -->
