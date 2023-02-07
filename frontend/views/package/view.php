<?php

$this->title = $model->packageDesc->meta_title;
Yii::$app->view->registerMetaTag([
    'name' => 'description',
    'content' => $model->packageDesc->meta_desc
]); 
Yii::$app->view->registerMetaTag([
    'name' => 'keywords',
    'content' => $model->packageDesc->meta_key
]); 
?>
<?php 
$other_data = json_decode($model->other_data,true);

?>
 
 <?=$this->render("//package/include/package-header",['model' => $model,'other_data' => $other_data]);?>
 <?=$this->render("//package/include/overview",['model' => $model,'other_data' => $other_data,'tf_form' => $tf_form]);?>
 
  <div class="stickySection">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="cf outersec">
            <div class="row">
              <div class="col-md-2">
                <div class="sidebar">
                  <div class="right-col">
                      <div class="inner">
                      	<h3 class="sticky-lft-title">On This Page:</h3>
                        <?=$this->render("//package/include/tabmenu",['model' => $model,'other_data' => $other_data]);?>
                      </div>
                  </div>
                </div>
              </div>

              <div class="col-md-10">
                <div class="content">
                  <div class="left-col">
                      <div class="inner">
                        <?=$this->render("//package/include/tripfact",['model' => $model,'other_data' => $other_data]);?>
                        <?=$this->render("//package/include/itenerary",['model' => $model,'other_data' => $other_data]);?>
                        <?=$this->render("//package/include/date",['model' => $model,'other_data' => $other_data]);?>
                        <?=$this->render("//package/include/inclusion",['model' => $model,'other_data' => $other_data]);?>
                        <?=$this->render("//package/include/reviews",['model' => $model,'other_data' => $other_data,'rform' => $rform]);?>
                        <?=$this->render("//package/include/vitalinfo",['model' => $model,'other_data' => $other_data]);?>
                        <?=$this->render("//package/include/map",['model' => $model,'other_data' => $other_data]);?>
                        <?=$this->render("//package/include/faq",['model' => $model,'other_data' => $other_data]);?>
                        <?=$this->render("//package/include/photo",['model' => $model,'other_data' => $other_data]);?>
                      </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>
<?php 
$js = <<<JS

$(document).ready(function ($) {
      $('#Img_carousel').sliderPro({
        width: 960,
        height: 500,
        fade: true,
        arrows: true,
        buttons: false,
        fullScreen: false,
        smallSize: 500,
        startSlide: 0,
        mediumSize: 1000,
        largeSize: 3000,
        thumbnailArrows: true,
        autoplay: false
      });
    });
  $('.carousel-thumbs-2').owlCarousel({
      loop:false,
      margin:5,
      responsiveClass:true,
      nav:false,
      responsive:{
        0:{
          items:1
        },
        600:{
          items:3
        },
        1000:{
          items:4,
          nav:false
        }
      }
    });

    function toggleIcon(e) {
    $(e.target)
        .prev('.panel-heading')
        .find(".more-less")
        .toggleClass('fa-chevron-down');
    }
    $('.panel-group').on('hidden.bs.collapse', toggleIcon);
    $('.panel-group').on('shown.bs.collapse', toggleIcon);

    $(function () {
    // ADDING DATA
        (function () {
            var inc = 0;
            $('.sc-sp-data-dis').each(function () {
                $(this).attr('data-scsp', "data" + inc)
                inc++;
            });
        })();
        (function () {
            var inc = 0;
            $('.sc-sp-list').each(function (ev) {
                $(this).attr('data-scsp', "data" + inc)
                inc++;
            });
        })();

        $(window).on("load scroll", function () {
            var windowScroll = $(this).scrollTop();
            $(".sc-sp-data-dis").each(function () {
                var thisOffsetTop = Math.round($(this).offset().top - 30);

                if (windowScroll >= thisOffsetTop) {
                    var thisAttr = $(this).attr('data-scsp');
                    $('.sc-sp-list').parent().removeClass("active");
                    $('.sc-sp-list[data-scsp="' + thisAttr + '"]').parent().addClass("active");
                }
            });
        });

        $('.sc-sp-list').click(function (ev) {
            ev.preventDefault();
            var thisAttr = $(this).attr("data-scsp");
            var scrollTo = $('.sc-sp-data-dis[data-scsp="' + thisAttr + '"]').offset().top;

            $(this).parent().addClass("active").siblings().removeClass("active");

            $(".sc-sp-data-dis").removeClass("active");
            $('.sc-sp-data-dis[data-scsp="' + thisAttr + '"]').addClass("active");

            $('html, body').animate({
                scrollTop: scrollTo - 5
            }, 150);
        });
  
        /* Tooltips */
        $(function () {
          $('[data-toggle="tooltip"]').tooltip()
        })

        /*********************************************/
        /* Category Expandable Section */
        /*********************************************/
        // $('.package-view-para1').expandable({
        //   height: 100,
        // });

        // $('.clientReviewSection1').expandable({
        //   height: 210,
        // });

        $("a.clientReview-MoreBtn").click(function(e) {
          e.preventDefault();
          var moreSection = $(this).parents(".clientReviewSection").find(".more-section");
              if($(this).text() == "Show more" && moreSection.hasClass("hide")){
            $(this).text("Show less");
            moreSection.removeClass("hide").addClass("show");
          }else{
            $(this).text("Show more")
            moreSection.addClass("hide").removeClass("show");
          }
        });

        /*********************************************/
        /* Youtube Video Review Section */
        /*********************************************/
        $(".video-play").on('click', function(e) {
            e.preventDefault(); 
            var vidWrap = $(this).parent(),
                iframe = vidWrap.find('.video iframe'),
                iframeSrc = iframe.attr('src'),
                iframePlay = iframeSrc += "?autoplay=1";
            vidWrap.children('.video-thumbnail').fadeOut();
            vidWrap.children('.video-play').fadeOut();
            vidWrap.find('.video iframe').attr('src', iframePlay);
        });
 




        // $('.portfolio-item').isotope({
        //   itemSelector: '.item',
        //   layoutMode: 'fitRows'
        //  });
         $('.portfolio-menu ul li').click(function(){
          $('.portfolio-menu ul li').removeClass('active');
          $(this).addClass('active');
          
          var selector = $(this).attr('data-filter');
          $('.portfolio-item').isotope({
            filter:selector
          });
          return  false;
         });
         $(document).ready(function() {
         var popup_btn = $('.popup-btn');
         popup_btn.magnificPopup({
         type : 'image',
         gallery : {
          enabled : true
         }
         });
         });



    });

    $('input.date-pick').datepicker('setDate', 'today');
  var iteneary = 'hide'
  openAllPanels = function(aId = 'accordion') {
    console.log("setAllPanelOpen");
    $("#"+aId +' .panel-collapse:not(".in")').collapse('show');
    iteneary = 'show';
    $("#closeAll").show();
    $("#openAll").hide();
  }
  closeAllPanels = function(aId ='accordion') {
    console.log("setAllPanelclose");
    $("#"+aId +' .panel-collapse.show').collapse('hide');
    iteneary = 'hide';
    $("#closeAll").hide();
    $("#openAll").show();
  }

  var faq = 'hide'
  openAllPanelsF = function(aId = 'accordion1') {
    console.log("setAllPanelOpen");
    $("#"+aId +' .panel-collapse:not(".in")').collapse('show');
    faq = 'show';
    $("#closeAllF").show();
    $("#openAllF").hide();
  }
  closeAllPanelsF = function(aId ='accordion1') {
    console.log("setAllPanelclose");
    $("#" + aId + ' .panel-collapse.show').collapse('hide');
    faq = 'hide';
    $("#closeAllF").hide();
    $("#openAllF").show();
  }

  $(document).ready(function(){
  $(".datepicker").datepicker({
            // format: "M d, yyyy",
            // autoclose: true,
            // startDate: date,
            // datesDisabled: excludedate,
            // endDate: '+3y'
            
        })
        // .attr('readonly','readonly');
})

     
JS;
$this->registerJS($js);
?>
<style>
  
	.next {
		content: url("https://cdn0.iconfinder.com/data/icons/flat-round-arrow-arrow-head/512/Red_Arrow_Right-512.png");
	}
	.prev {
		content: url("https://cdn0.iconfinder.com/data/icons/flat-round-arrow-arrow-head/512/Red_Arrow_Left-512.png");
	}
  </style>