<?php 
use common\models\Package;
$featured_item_sql = "select package_id from {{%featured_items}} where id=3 order by display_order";
$item_result = Yii::$app->db->createCommand($featured_item_sql)->queryAll();
$package_ids = [];
foreach($item_result as $fiData){
  $package_ids[] = $fiData['package_id'];
}
$pids = implode(',',$package_ids);
// $package_sql = "select price,price_5,slug, duration, price_3,image, name from {{%package}} where id in($pids) limit 6";
// $packages = Yii::$app->db->createCommand($package_sql)->queryAll();

$packages = Package::find()->select('id,price,price_5,slug, price_3,image, name')->where(['in','id',$package_ids])->limit(6)->all();
?>


<div class="container">
  	<div class="row">
  		<div class="col-md-12">
  			<div class="trekking-climbing-exp">
  				<div class="row">
  					<div class="col-md-12">
							<div class="main_title">
								<h2>Trekking <span>and Climbing</span> Expreience</h2>
								<p>We offer a range of holiday packages. Whether you are looking for Trekking or adventure Climbing, Cultural Tours or adventure tours. We offer comprehensive holiday packages at an affordable rate.</p>
							</div><!-- End of main_title -->
						</div><!-- End of col-md-12 -->
            <?php foreach($packages as $pData){?>
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.1s">
                <?=$this->render("//package/include/single-package-layout-2",['model'=>$pData]);?>
              </div><!-- End col -->
            <?php }?>
            

            <div class="col-lg-12 col-md-12 wow zoomIn text-center" data-wow-delay="0.7s">
              <div class="view-all-packages">
                <a href="<?=Yii::$app->urlManager->createUrl(['/find-your-trip','featured_id' => 3]);?>">View all Packages</a>
              </div><!-- End of view-all-packages -->
            </div><!-- End col -->
  				</div><!-- End of row -->
  			</div><!-- End of trekking-climbing-exp -->
  		</div><!-- End of col-md-12 -->
  	</div><!-- End of row -->
  </div><!-- End of container -->
