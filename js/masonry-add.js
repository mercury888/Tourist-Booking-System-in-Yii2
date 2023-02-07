/*** function to call masonry in testimonials page **/
function testimonialMasonry(){
   
    // Takes the gutter width from the bottom margin of .post
    var gutter = parseInt(jQuery('.testimonial-post').css('marginBottom'));
    var container = jQuery('#testimonial-posts .items');
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
        jQuery('#testimonial-posts .items, body > #grid').css('width', 'auto');

        // Calculates how many .post elements will actually fit per row. Could this code be cleaner?
        posts_per_row = jQuery('#testimonial-posts .items').innerWidth() / post_width;
        floor_posts_width = (Math.floor(posts_per_row) * post_width) - gutter;
        ceil_posts_width = (Math.ceil(posts_per_row) * post_width) - gutter;
        posts_width = (ceil_posts_width > jQuery('#testimonial-posts .items').innerWidth()) ? floor_posts_width : ceil_posts_width;
        if (posts_width == jQuery('.testimonial-post').width()) {
          posts_width = '100%';
        }
        // Ensures that all top-level elements have equal width and stay centered
        jQuery('#testimonial-posts, #grid').css('width', posts_width);
        jQuery('#grid').css({'margin': '0 auto'});
      }
    }).trigger('resize');
}
// Load is used to ensure all images have been loaded, impossible with document
jQuery(window).load(function () {
    testimonialMasonry();

});
