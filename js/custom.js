/*** add clearfix after each given items **/
function add_row_after_items(itemId,number){
  $(itemId).each(function(i){
    if(i!=0 && i%number==0){
      $(this).before("<div class='clearfix'></div>");  
    }
  });
}
function add_row_after_3items(itemId){
  add_row_after_items(itemId,3);
}
function add_row_after_2items(itemId){
  add_row_after_items(itemId,2);
}
/***  end adding clearfix **/

$(window).bind("load", function() {
   // to auto select the tab on menu
   $('.dropdown-menu.mega-dropdown-menu ul.nav-stacked').each(function(){
     $(this).children(':first-child').addClass('active');
   });
   $('.dropdown-menu.mega-dropdown-menu .tab-content').each(function(){
     $(this).children(':first-child').addClass('active');
   });
   //$('.dropdown-menu.mega-dropdown-menu .tab-content').children(':first-child').addClass('active');
 });
$(document).ready(function(){

  $(window).scroll(function () {
    if ($(this).scrollTop() > 50) {
      $('#back-to-top').fadeIn();
    } else {
      $('#back-to-top').fadeOut();
    }
  });

// scroll body to 0px on click
$('#back-to-top').click(function () {
  $('body,html').animate({
    scrollTop: 0
  }, 800);
  return false;
});

if (document.documentElement.clientWidth > 1025) {
  $(".dropdown").hover(            
    function() {
      $('.dropdown-menu', this).stop( true, true ).delay(250).slideDown("fast");
      $(this).toggleClass('open');        
    },
    function() {
      $('.dropdown-menu', this).stop( true, true ).slideUp("fast");
      $(this).toggleClass('open');       
    }
    );
}


// tabs plus/minus
$('.collapse').on('shown.bs.collapse', function(){
  $(this).parent().find(".glyphicon-plus").removeClass("glyphicon-plus").addClass("glyphicon-minus");
}).on('hidden.bs.collapse', function(){
  $(this).parent().find(".glyphicon-minus").removeClass("glyphicon-minus").addClass("glyphicon-plus");
});
$('.collapse').on('shown.bs.collapse', function(){
  $(this).parent().find(".fa-plus-circle").removeClass("fa-plus-circle").addClass("fa-minus-circle");
}).on('hidden.bs.collapse', function(){
  $(this).parent().find(".fa-minus-circle").removeClass("fa-minus-circle").addClass("fa-plus-circle");
});

// package slider mobile viewport
/*function convertToSlider(){
var package =  $('.tab-pane .package');
package.wrap('<div class="item"></div>');
$('.tab-pane .item').wrapAll('<div class="carousel-inner" role="listbox"></div>');
$('.tab-pane .carousel-inner').wrap('<div id="carousel-example-generic-'+i+'" class="carousel slide" data-ride="carousel"></div>');
$('div.item:first-child').addClass('active');
var arrow = '<div class="arrows-custom"><a class="left carousel-control" href="#carousel-example-generic-'+i+'" role="button" data-slide="prev">'+
'<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>'+
'<span class="sr-only">Previous</span>'+
'</a>'+
'<a class="right carousel-control" href="#carousel-example-generic-'+i+'" role="button" data-slide="next">'+
'<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>'+
'<span class="sr-only">Next</span>'+
'</a>';
$('.tab-pane #carousel-example-generic-'+i).append(arrow);
i++;
}*/
var i = 99;
var windowsize = $(window).width();
if (windowsize <= 480) {
  convertToSlider();
}

function convertToSlider(){
  $('.tab-pane').each(function(ind, val){
    var package =  $(val).children('.package');
//console.log(package);
package.wrap('<div class="item"></div>');
$(val).children('.item').wrapAll('<div class="carousel-inner" role="listbox"></div>');
$(val).children('.carousel-inner').wrap('<div id="carousel-example-generic-'+i+'" class="carousel slide" data-ride="carousel"></div>');
$('div.item:first-child').addClass('active');
var arrow = '<div class="arrows-custom"><a class="left carousel-control" href="#carousel-example-generic-'+i+'" role="button" data-slide="prev">'+
'<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>'+
'<span class="sr-only">Previous</span>'+
'</a>'+
'<a class="right carousel-control" href="#carousel-example-generic-'+i+'" role="button" data-slide="next">'+
'<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>'+
'<span class="sr-only">Next</span>'+
'</a>';
$(val).children('#carousel-example-generic-'+i).append(arrow);
i--;
});
  $('#myTab1').tabCollapse({
    tabsClass: 'hidden-sm hidden-xs',
    accordionClass: 'visible-sm visible-xs'
  });
}

// Alternatively, spy on the body element itself.
// Make sure to remove the `#content` CSS rule to try this.
$('html,body').scrollspy();
// (In this case, one or both of the `data-spy` and `data-target` attributes may be unnecessary.)
// smooth scroll in the same page anchors
$('#trip-details-nav a').click(function(e) {
var goTo = $(this).attr('href'); // selects element that was clicked
$("html,body").animate({scrollTop:$(goTo).offset().top}, 1000);
e.preventDefault();
// smooth scroll in the same page anchors ends
});

$('[data-toggle="tooltip"]').tooltip({
  html:true,
});

// easy popovers
$('.po-markup > .po-link').popover({
  trigger: 'hover',
html: true,  // must have if HTML is contained in popover
// get the title and conent
title: function() {
  return $(this).parent().find('.po-title').html();
},
content: function() {
  return $(this).parent().find('.po-body').html();
},
container: 'body',
placement: 'right'
});

$('.dropdown-menu.mega-dropdown-menu .nav-tabs > li ').hover( function(){
  if($(this).hasClass('hoverblock'))
    return;
  else
    $(this).find('a').tab('show');
});

});
/*
// Load is used to ensure all images have been loaded, impossible with document
jQuery(window).load(function () {
// Takes the gutter width from the bottom margin of .post
var gutter = parseInt(jQuery('.testimonial-post').css('marginBottom'));
var container = jQuery('#testimonial-posts');
// Creates an instance of Masonry on #posts
container.masonry({
gutter: gutter,
itemSelector: '.testimonial-post',
columnWidth: '.testimonial-post'
});
// This code fires every time a user resizes the screen and only affects .post elements
// whose parent class isn't .container. Triggers resize first so nothing looks weird.
jQuery(window).bind('resize', function () {
if (!jQuery('#testimonial-posts').parent().hasClass('container')) {
// Resets all widths to 'auto' to sterilize calculations
post_width = jQuery('.testimonial-post').width() + gutter;
jQuery('#testimonial-posts, body > #grid').css('width', 'auto');
// Calculates how many .post elements will actually fit per row. Could this code be cleaner?
posts_per_row = jQuery('#testimonial-posts').innerWidth() / post_width;
floor_posts_width = (Math.floor(posts_per_row) * post_width) - gutter;
ceil_posts_width = (Math.ceil(posts_per_row) * post_width) - gutter;
posts_width = (ceil_posts_width > jQuery('#testimonial-posts').innerWidth()) ? floor_posts_width : ceil_posts_width;
if (posts_width == jQuery('.testimonial-post').width()) {
posts_width = '100%';
}
// Ensures that all top-level elements have equal width and stay centered
jQuery('#testimonial-posts, #grid').css('width', posts_width);
jQuery('#grid').css({'margin': '0 auto'});
}
}).trigger('resize');
});*/
$(function() {
  $('.item-mh , .gallery .full-width').matchHeight();
});


// for affix sideba navigation
jQuery(function($){ // on window load
  var topPos = 0, navHeight = 0, bottomPos=0;
    $('#stickyspymenu').ddscrollSpy({ // initialize first demo
      enableprogress: 'progress'
    });
    if($('#trip-details').length>0){
      topPos = $('#trip-details').offset().top;
      navHeight = $('#trip-details').height();
      bottomPos = $(document).height() - topPos - navHeight ;
    }
    //console.log("window:"+$(document).height()+" bottom:"+bottomPos+"nvaheoght:"+navHeight); 
    $('#stickyspymenu').sticky({topSpacing:5}) // make menu sticky
    $('#stickyspymenu').sticky({bottomSpacing:bottomPos}) // make menu sticky
  });



$(document).ready(function () {
  $('#carousel-recent-view').carousel({
    interval: 6000
  })

  $('.fdi-Carousel .item').each(function () {
    if($('.fdi-Carousel .item').length>4){
      var next = $(this).next();
      if (!next.length) {
        next = $(this).siblings(':first');
      }
      next.children(':first-child').clone().appendTo($(this));
      var next_2 = next.next();
      if (next_2.length > 0) {
        next_2.children(':first-child').clone().appendTo($(this));
      } 
      else {
        $(this).siblings(':first').children(':first-child').clone().appendTo($(this));
      }

      if (next_2.next().length > 0) {
        next_2.next().children(':first-child').clone().appendTo($(this));
      }
      else {
        if(next_2.length != 0)
          $(this).siblings(':first').children(':first-child').clone().appendTo($(this));
        else
          $(this).siblings(':nth-child(2)').children(':nth-child(1)').clone().appendTo($(this));
      }
    }
  });
});

  $(function() {
    window.prettyPrint && prettyPrint()
    $(document).on('click', '.dropdown', function(e) {
      e.stopPropagation()
    })
  })
  $(document).ready(function () {
    $(".navbar-nav li.trigger-collapse a").click(function(event) {
      $(".navbar-collapse").collapse('hide');
    });
  });
