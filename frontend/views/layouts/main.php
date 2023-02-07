<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
<?=$this->render('//layouts/includes/pre-head');?>
<?=$this->render('//layouts/includes/header');?>
<?=$this->render('//layouts/includes/nav');?>
<?=$content;?>
<?=$this->render('//layouts/includes/associated-with');?>
<?=$this->render('//layouts/includes/newsletter');?>
<?=$this->render('//layouts/includes/flowus');?>
<?=$this->render('//layouts/includes/footer');?>
  
<?php 
$js =<<<JS
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



});
JS;
$this->registerJS($js);
?>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
