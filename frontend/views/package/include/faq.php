<?php if($model->packageFaq){?>
<div class="header-div">
    <div class="heading sc-sp-data-dis sticky-rt-main-title">FAQs</div>
    <div class="data">
      <div class="scrollSectionCont">
        <div class="sticky-itinerary">
          <div class="panel-group" id="accordion1" role="tablist" aria-multiselectable="true">
              <div class="expandCollapse">
              <a href="javascript:void(0);" data-role="button" onClick="openAllPanelsF()" style="display:block"  id="openAllF">Open All</a>
              <a href="javascript:void(0);" data-role="button" onClick="closeAllPanelsF()" style="display:none" id="closeAllF">Close All</a>
           
                <!-- <a href="#" data-role="button" id="openAllF">Open All Collapsible</a> -->
                <!-- <a href="#" data-role="button" id="closeAllF">Close All Collapsible</a> -->
              </div>
              <?php foreach($model->packageFaq as $fData){?>
                <div class="panel panel-default">
                  <div class="panel-heading" role="tab" id="heading<?=$fData->id;?>Faq">
                      <h4 class="panel-title">
                          <a role="button" data-toggle="collapse" data-parent="#accordion1" href="#collapse<?=$fData->id;?>Faq" aria-expanded="true" aria-controls="collapse<?=$fData->id;?>Faq" class="accordion__header itinerary__title">
                            <div class="itinerary__daymarker">
                              <span><i class="fa fa-commenting-o" aria-hidden="true"></i></span>
                            </div><!-- End of itinerary__daymarker -->

                            <h3 class="sticky-itinerary-title"><?=$fData->question;?>?</h3>
                            
                            <div class="sticky-accordion-up-down">
                              <i class="more-less fa fa-chevron-up" aria-hidden="true"></i>
                            </div><!-- End of sticky-accordion-up-down -->
                          </a>
                      </h4>
                  </div>

                  <div id="collapse<?=$fData->id;?>Faq" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading<?=$fData->id;?>Faq">
                    <div class="panel-body">
                      <div class="sticly-section-contents">
                      <p><?=$fData->answer;?></p>
                        <!-- <p>Everest base camp trek is not very difficult trek. But, a reasonable level of fitness is required to enjoy this trek fully. If you are relatively fit and don’t mid to walk 5-6 hours a day then you can walk to Everest base camp. As there are steep ascent and descents, rocky paths, rock steps and some moraine walking. So, this trek isn’t suitable for anyone with knee problems or weak ankles. Anyone with heart trouble or lung problems should check with their doctor.</p> -->

                        <!-- <p>We suggest you to do some physical fitness programs such as running, swimming, hiking before embark on your journey.</p> -->
                      </div><!-- End of sticly-section-contents -->
                    </div>
                  </div>
              </div>

              <?php }?>
              
          </div><!-- panel-group -->
        </div><!-- End of sticky-itinerary -->
      </div>
    </div>
</div>
<?php }?>