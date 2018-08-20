
/**
 *  Whole-script strict mode syntax
 */

(function($) {
  'use strict';

  var script_counter = 1;
  var cssmenu = $("#cssmenu")
  var footermap = $("#footer-section-map")
  var arc_testimonials = $('.arc-testimonials')
  var testimonials = $('.testimonials')
  var front_gallery = $(".front-gallery")
  var portfolio_gallery =  $(".portfolio-gallery")
  var blog_owl = $(".blog-section-owl")
  var shop_related_product = $(".shop-related-product-owl")
  var gallery_caption_img = $(".gallery-caption img")

  /**
   *  Navigation
   */
    if( cssmenu.length ){
      	cssmenu.menumaker({
      	  title: "Menu",
      	  format: "multitoggle"
      	});
    }

  /** 
   * Google Map 
   */
  if( footermap.length ){
      function initialize(){

        var myCenter = new google.maps.LatLng(23.09176472945984,72.60019697248936);
        var mapProp = { center:myCenter, zoom:18, scrollwheel: false, mapTypeId:google.maps.MapTypeId.SATELLITE };
        var map = new google.maps.Map (document.getElementById("footer-section-map"), mapProp );

      } google.maps.event.addDomListener(window, 'load', initialize);
  }

  /**
   *  Owl-Carousel Scripts
   */
  if( arc_testimonials.length ){  
      arc_testimonials.owlCarousel({
        rtl:false,
        loop:true,
        margin:10,
        nav:true,
        navText:["<i class='fa fa-lg fa-caret-left'></i><span class='navborder'></span>","<i class='fa fa-lg fa-caret-right'></i>"],
        responsive:{ 0:{ items:1 }, 600:{ items:1 }, 1000:{ items:1 } }
      }); 
  }
  if( testimonials.length ){  
      testimonials.owlCarousel({
        rtl:false,
        loop:true,
        margin:10,
        nav:true,
        navText:["<i class='fa fa-lg fa-caret-left'></i><span class='navborder'></span>","<i class='fa fa-lg fa-caret-right'></i>"],
        responsive:{ 0:{ items:1 }, 600:{ items:1 }, 1000:{ items:1 } }
      }); 
  }


  if( front_gallery.length ){ 
      front_gallery.owlCarousel({
        rtl:false,
        loop:true,
        margin:0,
        nav:true,
        navText:["<div class='gallery_prev_div'><i class='fa fa-long-arrow-left'></i> &nbsp; PREV </div>","<div class='gallery_next_div'>NEXT &nbsp; <i class='fa fa-long-arrow-right'></i></div>"],
        responsive:{ 0:{ items:1 }, 600:{ items:3 }, 800:{ items:4 }, 1000:{ items:5 } }
      }); 
  }
  if( portfolio_gallery.length ){ 
      portfolio_gallery.owlCarousel({
        rtl:false,
        loop:true,
        margin:0,
        nav:true,
        navText:["<div class='gallery_prev_div'><i class='fa fa-long-arrow-left'></i> &nbsp; PREV </div>","<div class='gallery_next_div'>NEXT &nbsp; <i class='fa fa-long-arrow-right'></i></div>"],
        responsive:{ 0:{ items:1 }, 600:{ items:1 }, 800:{ items:1 }, 1000:{ items:1 } }
      }); 
  }
  if( blog_owl.length ){ 
      blog_owl.owlCarousel({
        rtl:false,
        loop:true,
        margin:0,
        nav:true,
        navText:["<div class='blog_prev_div'><i class='fa fa-long-arrow-left'></i> &nbsp; PREV </div>","<div class='blog_next_div'>NEXT &nbsp; <i class='fa fa-long-arrow-right'></i></div>"],
        responsive:{ 0:{ items:1 }, 600:{ items:1 }, 1000:{ items:1 } }
      }); 
  }
  if( shop_related_product.length ){ 
      shop_related_product.owlCarousel({
        rtl:false,
        loop:true,
        margin:15,
        nav:true,
        navText:["<div class='blog_prev_div'><i class='fa fa-long-arrow-left'></i> &nbsp; PREV </div>","<div class='blog_next_div'>NEXT &nbsp; <i class='fa fa-long-arrow-right'></i></div>"],
        responsive:{ 0:{ items:1 }, 768:{ items:2 }, 992:{ items:3 }, 1000:{ items:4 } }
      }); 
  }

  /** 
   *   Gallery Post Hove Effect for Caption Script.
   */
  function gallery_hover(){

    if(  gallery_caption_img.length ){ 
         gallery_caption_img.mouseover(function(){
          var img_width  =  gallery_caption_img.width();
          var img_height = gallery_caption_img.height();
          $(".gallery-caption .blur").css({"height": img_height, "width": img_width });
        }); 
    }
  } gallery_hover();

  /** 
   *   Project Gallery Post Hove Effect for Caption Script.
   */
  var project_gallery = $('.project-gallery')

  function gallery_2(){

    if( project_gallery.length ){

      for( var ids = $('.project-gallery img').map(function(i) { $(this).attr('id', "gallery_"+script_counter++ );  return this.id; }), i = 0; i<=ids.length-1; i++ ){
         var img_height = $( '#'+ids[i] ).height(), img_width  = $( '#'+ids[i] ).width(); 
         $( '#'+ids[i] ).next().attr( 'style', 'height:'+ ( img_height - 40 ) +'px;width:'+ ( img_width -40 ) +'px;' );

         var caption_height = $( '#'+ids[i] ).next().height(), caption_width  = $( '#'+ids[i] ).next().width(); 
         $( '#'+ids[i] ).next().find("h1").attr( 'style', 'margin-top:'+ (( caption_height/2) - ( caption_height/4 )) +'px;' );
      }
    }
  } gallery_2();

  /**
   *  Footer Section Box Height and Width Set using Script.
   */
   var footer_box = $('.footer-boxdiv-two')
  function footer(){
      if( footer_box.length ){ 
         $('.footer-boxdiv-one').attr('style','height:'+ $('.footer-boxdiv-two').outerHeight() +'px;'); 
      }
  }footer();

  /**
   *  @live demo link : rateyo.fundoocode.ninja
   */
   var rateYO = $("#rateYo")
  if( rateYO.length ){ 
      rateYO.rateYo({ rating: 0, fullStar: true }); 
  }

  /**
   *  Magnific Popup Demo link : http://dimsemenov.com/plugins/magnific-popup/
   */
   var front_gallery_section = $('.front-gallery, .gallery-section')
  if( front_gallery_section.length ){

      front_gallery_section.magnificPopup({

        delegate: 'a', type: 'image',  tLoading: 'Loading image #%curr%...',
        mainClass: 'mfp-img-mobile',  gallery: {  enabled: true, navigateByImgClick: true, preload: [0,1] },
        image: {
          tError: '<a href="%url%">The image #%curr%</a> could not be loaded.',
          titleSrc: function(item) { return item.el.attr('title') + '<small>by Marsel Van Oosten</small>'; }
        }
      });
  }

  var img_popup = $('.image-popup-no-margins')
  if( img_popup.length ){

      img_popup.magnificPopup({
        type: 'image', closeOnContentClick: true, closeBtnInside: false, 
        fixedContentPos: true, mainClass: 'mfp-no-margins mfp-with-zoom',
        image: { verticalFit: true },
        zoom: { enabled: true, duration: 300 }
      });
  }

  /** 
   *   Image Filter Script 
   */
  var $container = $('.portfolioContainer');
  var portfolio = $('.portfolioFilter')

  if( portfolio.length ){

    $('.portfolioFilter a').click(function(){

        $('.portfolioFilter .current').removeClass('current');
        $(this).addClass('current');
        var selector = $(this).attr('data-filter');
        $container.isotope({
            filter: selector, animationOptions: { duration: 750, easing: 'linear', queue: false }
        });  return false;
    });
  }

  /** 
   *   Sticky Menu 
   */
   var stick_headr = $(".sticky-header")
    if ($(window).width() >= "768" && stick_headr.length ) {
        $(".sticky-header").sticky({ topSpacing: 0 });
    }

  /** 
   *  Window is Resize to Condition Check and Add and Remove Class
   */
   var headr_bg = $(".header-background")
  $( window ).resize(function() {

     if( $( window ).width() <= 786 && headr_bg.length ){
             headr_bg.removeClass("pagebg");
     }else{  headr_bg.addClass("pagebg"); }

      gallery_hover();  gallery_2(); footer();
  });

  /** searchbar **/
  var search_icon = $('#search-icon')

  search_icon.on('click', function(e) {
      $('#search-bar').toggleClass("open close"); //you can list several class names 
      search_icon.toggleClass("fa icon");
      search_icon.toggleClass("fa-close icon-search");
      e.preventDefault();
  });

    // browser window scroll (in pixels) after which the "back to top" link is shown
    var offset = 300,
      //browser window scroll (in pixels) after which the "back to top" link opacity is reduced
      offset_opacity = 1200,
      //duration of the top scrolling animation (in ms)
      scroll_top_duration = 700,
      //grab the "back to top" link
      $back_to_top = $('.cd-top');

    //hide or show the "back to top" link
    $(window).scroll(function(){
      ( $(this).scrollTop() > offset ) ? $back_to_top.addClass('cd-is-visible') : $back_to_top.removeClass('cd-is-visible cd-fade-out');
      if( $(this).scrollTop() > offset_opacity ) { 
        $back_to_top.addClass('cd-fade-out');
      }
    });

    //smooth scroll to top
    $back_to_top.on('click', function(event){
      event.preventDefault();
      $('body,html').animate({
        scrollTop: 0 ,
        }, scroll_top_duration
      );
    }); 


  var sync1 = $(".portfolio-gallery-details");
  var sync2 = $(".portfolio-thumb");
  var syncedSecondary = true;

  if( sync1.length || sync2.length ){

        sync1.owlCarousel({
            items:1,
            loop:true,
            margin:10,
            autoplay:true,
            autoplayTimeout:6000,
            autoplayHoverPause:false,
            nav: false,
            dots: true
        }).on('changed.owl.carousel', syncPosition);

        sync2
        .on('initialized.owl.carousel', function () {
            sync2.find(".item .projectitem").eq(0).addClass("active");
        })
        .owlCarousel({
            items:3,
            margin:10,
            autoplay:false,
            nav: false,
            dots: false
        }).on('changed.owl.carousel', syncPosition2);

        function syncPosition(el) {

            var count = el.item.count-1;
            var current = Math.round(el.item.index - (el.item.count/2) - .5);
            if(current < 0) {
                current = count;
            }
            if(current > count) {
                current = 0;
            }

            sync2
            .find(".projectitem")
            .removeClass("active")
            .eq(current)
            .addClass("active");
        }

        function syncPosition2(el) {
            if(syncedSecondary) {
                var number = el.item.index;
                sync1.data('owl.carousel').to(number, 100, true);
            }
        }
        sync2.on("click", ".projectitem", function(e){
            e.preventDefault();
            sync1.trigger('to.owl.carousel', [$(e.target).parents('.owl-item').index(), 300, true]);
        });
  }

/*  $( window ).on('load', function(){ 
    $('.status').fadeOut();
    $('.preloader').delay(350).fadeOut('slow'); 
  });*/

    // Right click disable
  $(document).bind("contextmenu", function (e) {
      e.preventDefault();
      alert("Right Click is Disabled");
  });

})(jQuery);