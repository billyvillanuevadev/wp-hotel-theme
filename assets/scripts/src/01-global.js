jQuery(function($){
  console.log('code by Billy Villanueva');

  /**
   * Make the header stick at the top on scroll
   */
  function stickyHeader() {
    if ($(this).scrollTop() > 1){  
      $('.xbv-sticky-header').addClass("sticky");
    } else {
      $('.xbv-sticky-header').removeClass("sticky");
    }
  }

  /** 
   * Document ready
   */
  $(document).ready(function(){

    /**
     * Initialize Slick Carousels
     */
    $('.slick-leaf').slick({
      fade: true,
      infinite: false,
      speed: 500,
      slidesToShow: 1,
      arrows: true,
      asNavFor: '.slick-leaf-desc'
    });
    $('.slick-leaf-desc').slick({
      infinite: false,
      slidesToShow: 1,
      asNavFor: '.slick-leaf',
      arrows: true,
      dots: true
    });
    $('.slick-gallery').slick({
      slidesToShow: 3,
      slidesToScroll: 1,
      dots: false,
      centerMode: true,
      infinite: true,
      autoplay: true, 
      autoplaySpeed: 2000,
      focusOnSelect: false,
      responsive: [
        {
          breakpoint: 992,
          settings: {
            slidesToShow: 2,
            centerMode: false,
            slidesToScroll: 1
          }
        },
        {
          breakpoint: 768,
          settings: {
            slidesToShow: 1,
            centerMode: true,
            slidesToScroll: 1
          }
        }
      ]
    });

    /**
     * Make the header stick at the top on scroll
     * @see stickyHeader()
     */
    stickyHeader();
    $(window).scroll(function() {
      stickyHeader();
    });

    /**
     * Add Smooth Scrolling effect on anchor tags
     */
    $(".xbv-smooth-scroll a").on('click', function(event) {
      if (this.hash !== "") {
        var hash = this.hash;
  
        if ( $(hash).length >= 1 ) {
          event.preventDefault();
          var fixed_header_height = 0;
          var scroll_top = ( $(hash).offset().top + fixed_header_height );
          var scroll_speed = 600; // Scroll animation speed in miliseconds
          $('html, body').animate({
            scrollTop: scroll_top
          }, scroll_speed);
        }
      }
    });

  }); // document.ready
  
  /**
   * Initialize AOS plugin
   * @see AOS - Animate-On-Scroll Library
   */
  $(window).ready(function() {
    // Initialize AOS 
    AOS.init();
  });
});

/**
 * xbv preloader
 * @desc On window load, remove the preloader/loading screen
 */ 
window.addEventListener('load', function () {
  var xbv_body = document.body; 
  xbv_body.style.overflow = "hidden";
  xbv_body.className = document.body.className.replace("xbv-preload","");
  setTimeout(function() {
    xbv_body.style.overflow = "visible";
  }, 600);
});