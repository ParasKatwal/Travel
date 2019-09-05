$(document).ready(function(){
    $('.ct-slick-homepage').on('init', function(event, slick){
        $('.animated').addClass('activate fadeInUp');
    });   
  
    $('.ct-slick-homepage').slick({
        autoplay: false,
        autoplaySpeed: 3000,
        pauseOnHover: false,
        prevArrow: '<div class="left"><span class="fa fa-angle-left"></span></div>',
        nextArrow: '<div class="right"><span class="fa fa-angle-right"></span></div>'
    });     
  
    $('.ct-slick-homepage').on('afterChange', function(event, slick, currentSlide) {
        $('.animated').removeClass('off');
        $('.animated').addClass('activate fadeInUp');
    });   
  
    $('.ct-slick-homepage').on('beforeChange', function(event, slick, currentSlide) {
        $('.animated').removeClass('activate fadeInUp');
        $('.animated').addClass('off');
    });

    $(window).scroll(function() {
        if ($(this).scrollTop() > 0) {
          $('nav').fadeOut();
        } else {
          $('nav').fadeIn();
        }
    });
    $(window).scroll(function() {
        if ($(this).scrollTop() > 0) {
          $('.top-nav').fadeOut();
        } else {
          $('.top-nav').fadeIn();
        }
    });

    $('.collapse').collapse()

    $('.upcoming_slider').slick({
        autoplay: true,
        autoplaySpeed: 3000,
        pauseOnHover: false,
        prevArrow: '<div class="left"><span class="fa fa-angle-left"></span></div>',
        nextArrow: '<div class="right"><span class="fa fa-angle-right"></span></div>'
    });
    $('.testimonials_slider').slick({
        autoplay: true,
        autoplaySpeed: 3000,
        pauseOnHover: true,
    });

});
  
$(document).ready(function() {
    if ($('[data-background]').length > 0) {
         $('[data-background]').each(function() {
            var $background, $backgroundmobile, $this;
            $this = $(this);
            $background = $(this).attr('data-background');
            $backgroundmobile = $(this).attr('data-background-mobile');
            if ($this.attr('data-background').substr(0, 1) === '#') {
                return $this.css('background-color', $background);
            } else if ($this.attr('data-background-mobile') && device.mobile()) {
                return $this.css('background-image', 'url(' + $backgroundmobile + ')');
            } else {
                return $this.css('background-image', 'url(' + $background + ')');
            }
        });
    }
});