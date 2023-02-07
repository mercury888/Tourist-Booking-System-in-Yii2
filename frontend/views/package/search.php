<?php 
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
?>
<h1>Search for Trips</h1>




<?php $form = ActiveForm::begin([
                    'action' => ['index'],
                    'id'=>'my-form',
                    'method' => 'get',
                    'options' => [
                        'data-pjax' => 1
                    ],
                ]); ?>
            <div class="fyt-lft-search">
              <h3>Destinations</h3>
              
                <ul>
                  <!-- <li>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="all_destination"  value="option1">
                      <label class="form-check-label" for="alldestinations">
                        All Destinations
                      </label>
                    </div>
                  </li> -->
                  <?php //$form->field($model,'destination_id')->checkBoxList($model->destinations)->label(false);?>  
                  <?php foreach($model->destinations as $dData){?>
                    <li>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox"  name="PackageSearch[destination_id][]" value="<?=$dData->id;?>">
                      <label class="form-check-label" for="destibhutan">
                        <?=$dData->name;?> <span>(<?=$dData->countPackage;?>)</span>
                      </label>
                    </div>
                  </li>
                  <?php }?>
                </ul>
            </div><!-- End of fyt-lft-search -->

            <div class="fyt-lft-search">
              <h3>Activities</h3>
                <ul>
                  <!-- <li>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="exampleRadios"  value="option1">
                      <label class="form-check-label" for="alldestinations">
                        All Activities
                      </label>
                    </div>
                  </li> -->

                  <?php foreach($model->activities as $aData){?>
                    <li>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox"  name="PackageSearch[activity_id][]" value="<?=$aData->id;?>">
                      <label class="form-check-label" for="activity_id">
                        <?=$aData->name;?> <span>(<?=$aData->countPackage;?>)</span>
                      </label>
                    </div>
                  </li>
                  <?php }?>
                </ul>
            </div><!-- End of fyt-lft-search -->


            <div class="fyt-lft-search">
              <h3>Featured</h3>
                <ul>
                  <?php foreach($model->featured as $fData){?>
                    <li>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox"  name="PackageSearch[featured_id][]" value="<?=$fData->id;?>">
                      <label class="form-check-label" for="activity_id">
                        <?=$fData->name;?> <span>(<?=$fData->countPackage;?>)</span>
                      </label>
                    </div>
                  </li>
                  <?php }?>
                </ul>
            </div><!-- End of fyt-lft-search -->


            <div class="fyt-lft-search">
              <h3>Regions</h3>
                <ul>
                  <?php foreach($model->regions as $rData){?>
                    <li>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox"  name="PackageSearch[region_id][]" value="<?=$rData->id;?>">
                      <label class="form-check-label" for="region_id">
                        <?=$rData->name;?> <span>(<?=$rData->countPackage;?>)</span>
                      </label>
                    </div>
                  </li>
                  <?php }?>
                </ul>
            </div><!-- End of fyt-lft-search -->

            <div class="fyt-lft-search">
              <h3>Activity Level</h3>
                <ul>
                <?php foreach($model->activityLevel as $key=>$alData){?>
                    <li>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="PackageSearch[new_grade]" value="<?=$key;?>">
                      <label class="form-check-label" for="region_id">
                        <?=$alData;?>
                      </label>
                    </div>
                  </li>
                  <?php }?>
                </ul>
            </div><!-- End of fyt-lft-search -->

            <div class="fyt-lft-search">
              <h3>Duration</h3>
                <ul>
                  <li>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="PackageSearch[duration]"  value="<3">
                      <label class="form-check-label" for="alldestinations">
                        Less than 3 days
                      </label>
                    </div>
                  </li>

                  <li>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="PackageSearch[duration]"  value="<=7">
                      <label class="form-check-label" for="alldestinations">
                        A week time or less
                      </label>
                    </div>
                  </li>

                  <li>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="PackageSearch[duration]"  value="<=15">
                      <label class="form-check-label" for="alldestinations">
                        15 days or less
                      </label>
                    </div>
                  </li>

                  <li>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="PackageSearch[duration]"  value="<=30">
                      <label class="form-check-label" for="alldestinations">
                        30 days or less
                      </label>
                    </div>
                  </li>

                  <li>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="PackageSearch[duration]"  value="<=30">
                      <label class="form-check-label" for="alldestinations">
                        60 days or less
                      </label>
                    </div>
                  </li>
                </ul>
            </div><!-- End of fyt-lft-search -->

            <div class="fyt-lft-search">
              <h3>Price Range</h3>
                <ul>
                  <li>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="PackageSearch[price_range]"  value="<1000">
                      <label class="form-check-label" for="alldestinations">
                        Below USD 1000
                      </label>
                    </div>
                  </li>

                  <li>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="PackageSearch[price_range]" name="exampleRadios" value="1000-2000">
                      <label class="form-check-label" for="destibhutan">
                        USD 1000 - 2000
                      </label>
                    </div>
                  </li>

                  <li>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="PackageSearch[price_range]" name="exampleRadios" id="destiindia" value=">2000">
                      <label class="form-check-label" for="destiindia">
                        USD 2000 above
                      </label>
                    </div>
                  </li>

                 
                </ul>
            </div><!-- End of fyt-lft-search -->
                <?php ActiveForm::end(); ?>
