                    <div class="smallGroupDates">
                    <h3>Go with the right number of like-minded travellers to make new friends.</h3>
                    <?php 
                    //  echo '<pre>';
                    if($model->packagePriceDate){
                        $formated_date_price = $model->getFormatedPackageDates();
                        $new_formated_data = $model->getFormatedPackageDatesNew();    
                        $i=1;foreach($formated_date_price as $year => $yearData){?>
                                <!-- Year List Display Here -->
                                <?php if($i==1){?>
                                    <div class="year-line">
                                    <span class="title">Choose Year</span>      
                                    <div class="years">
                                <?php }?>
                                    <span data-year="<?=$year;?>" class="<?=$i==1?'cur':'future-dates';?> booking_year_ni" ><?=$year;?></span>
                                
                                <?php if($i==count($formated_date_price)){?>
                                    </div>
                                    </div><!-- End of year-line -->
                                <?php }?>
                                      <!-- Dates on that year display here -->
                         <?php $i++;}?>       

                         <?php $i=1;foreach($formated_date_price as $year => $yearData){?>
                                    <div data-year="<?=$year;?>" class="year-line year-line-grp-dates" style="display:<?=$i==1?'block':'none';?>">
                                        <span class="title">CHOOSE DATES</span>
                                        <div class="dates" data-year="<?=$year;?>">
                                        <?php $j=1;foreach($yearData as $datesData){?>
                                            <span data-year="<?=$year;?>" data-dateid="<?=$datesData['id'];?>" data-dategname="<?=$datesData['between_dates'];?>" data-datekey="<?=$j;?>" data-yeardate="<?=$year;?>_<?=$j;?>" class="<?=$j==1?'':'';?> guaranteed booking_grp_date_ni"><?=$datesData['between_dates'];?></span>
                                        <?php $j++;}?>
                                        </div>
                                    </div><!-- End of year-line -->
                        <?php $i++;}?>   

                        <?php $c=1;foreach($new_formated_data as $year => $yearData){?>
                            <?php $d=1;foreach($yearData as $datesData){?>
                                <div data-year="<?=$year;?>" data-yeardate="<?=$year;?>_<?=$d;?>" class="calendar-content booking_date_ni" style="display:<?=($d==1 && $c==1)?'block':'none';?>">
                                    <h3><?=$model->name;?></h3>
                                    <div class="br-cal-value">
                                
                                        <div class="br-calendar">
                                            <span class="date datename-nir"><?=$datesData['between_dates'];?> <?=$datesData['year'];?></span>
                                            <ul class="br-week">
                                                <li>S</li>
                                                <li>M</li>
                                                <li>T</li>
                                                <li>W</li>
                                                <li>T</li>
                                                <li>F</li>
                                                <li>S</li>
                                            </ul>
                                            <ul class="br-days">
                                                <?php foreach($datesData['calaender_days'] as $day => $wday){?>
                                                    <li class="<?=$wday!='n/a'?'cur':'';?>"><?=$day;?> </li>
                                                <?php }?>
                                            </ul>
                                            <span class="daynight date-day-night-nir" >6 Days / 5 Nights</span>
                                        </div>
                                    
                                        <div class="sc-price-content">
                                            <span class="per">per person from</span>
                                            <div class="sc-price">
                                                <span>$<?=$model->price;?></span> USD
                                            </div>

                                            <div class="sc-supplement">
                                            Single supplement: <span>$2,800</span>
                                            </div> 

                                            <span class="sc-guar">Guaranteed Departure</span>
                                            <span class="sc-upg">Upgrades Available</span>
                                        </div>
                                    </div>

                                    <div class="date-availability-btn">
                                        <a class="stickySectionBtn book-now-button" href="<?=Yii::$app->urlManager->createUrl(['booking/slug','slug'=>$model->slug]);?>">BOOK NOW</a>
                                    </div>
                                </div>
                            <?php $d++;}?>
                        <?php $c++;}?>
                    <?php } else {?>    
                        <h4>No specific dates avalilable for this package but you can still request a quote .</h4>
                        <div class="date-availability-btn row">
                            <div class="col-md-4">
                                <div class="fom-group">
                                    <label>Trip Start Date</label>
                                    <input type="text" id="no_date_end_date" class="form-control datepicker">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="fom-group">
                                    <!-- <label>Trip Start Date</label> -->
                                    <div class="date-availability-btn">
                                        <a class="stickySectionBtn book-now-button-nodate" href="<?=Yii::$app->urlManager->createUrl(['booking/slug','slug'=>$model->slug]);?>">BOOK NOW</a>
                                    </div>
                                </div>
                            </div>
                        <!-- <input type="text" id="no_date_end_date" class="form-control datepicker"> -->
                            <!-- <input type="text" class="form-control datepicker col-6" id="no_date_start_date" placeholder="Start Date" /> -->

                            <!-- <input type="text" class="form-control datepicker col-6" id="no_date_end_date" placeholder="End Date" /> -->
                            <!-- <a title="Book your trip to Kopra Ridge Trek  privately so that you feel more comforatble with your trip" href="<?=Yii::$app->urlManager->createUrl(['/start-planning-tour','slug'=>$model->slug]);?>" class="stickySectionBtn">Plan My Trip</a> -->
                        </div>
                        <!-- <a href="<?=Yii::$app->urlManager->createUrl(['/start-planning-tour','slug'=>$model->slug]);?>" class="sticky-lft-btn">Start Planning</a> -->

                    <?php }?>    
                    </div><!-- End of smallGroupDates -->
<?php 
$data_param_url = Yii::$app->urlManager->createUrl(['package/date-param','id'=>$model->id]);
$js = <<<JS
var current_year = '';
var current_date_grp_key = '';
var current_selected_date_data;
$(".booking_year_ni").on('click',function(e){
    var obj = $(this);
    $(".booking_year_ni").removeClass('cur');
    $(".booking_grp_date_ni").removeClass('cur');
    $(".booking_date_ni").hide();
    $(".booking_year_ni").addClass('future-dates');
    obj.removeClass('future-dates')
    obj.addClass('cur')
    current_year = obj.data('year');
    $(".year-line-grp-dates").hide();
    $('.year-line-grp-dates[data-year='+current_year+']').show();
    console.log(obj.data());
})

$(".booking_grp_date_ni").on('click',function(e){
    var obj = $(this);
    current_date_grp_key = obj.data('yeardate');
    // var finder_key = current_year+'_'+current_date_grp_key
    $(".booking_grp_date_ni").removeClass('cur');
    // $(".booking_grp_date_ni").addClass('future-dates');
    // obj.removeClass('future-dates')
    $(".datename-nir").html(obj.data('dategname') + ', '+ obj.data('year'));
    obj.addClass('cur')
    $(".booking_date_ni").hide();
    $(".booking_date_ni[data-yeardate='"+current_date_grp_key+"']").show();
    var data = obj.data();
    var result =JSON.stringify(data); 
    current_selected_date_data = $.param(data); 
    

    // console.log(obj.data());
})
$(".book-now-button").on('click',function(ev){
    ev.preventDefault();
    var obj = $(this);
    if(current_selected_date_data){
        console.log(obj.attr('href'));
        window.location.href = obj.attr('href') + '&' + current_selected_date_data;
    } else {
        alert('Please select date');
    }
    console.log(current_selected_date_data);
    
    
    // console.log(JSON.stringify(obj.data()));
    // const encodedData = window.btoa(JSON.stringify(obj.data())); // encode a string
    // console.log(encodedData);

})
$(".book-now-button-nodate").on('click',function(ev){
    ev.preventDefault();
    var obj = $(this);
   
    var current_selected_date_data= $("#no_date_end_date").val();
    console.log(current_selected_date_data);
    if(!current_selected_date_data){
        return false;
    }
   
    $.ajax({
        type: 'post',
        data: { sdate: current_selected_date_data },
        dataType: 'json',
        url: '$data_param_url',
        success: function(res){
            // console.log(res);
            current_selected_date_data = $.param(res); 
            window.location.href = obj.attr('href') + '&' + current_selected_date_data;
        }
        
    })
    // console.log(obj.attr('href'));

    
    // console.log(JSON.stringify(obj.data()));
    // const encodedData = window.btoa(JSON.stringify(obj.data())); // encode a string
    // console.log(encodedData);

})


$(document).ready(function() {
    $( "#no_date_end_date" ).datepicker({
        // onSelect: function(dateText,inst) {
        //     alert(dateText)
        // },
        format: 'yyyy-mm-dd',
       
    });
  } );
JS;
$this->registerJS($js);
?>