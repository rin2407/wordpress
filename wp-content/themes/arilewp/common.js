window.onscroll = function() {
    console.log(window.pageYOffset);
    var nav = document.getElementById('wrapper');
    if (window.pageYOffset > 100) {
        nav.classList.add("scrolled");
    } else {
        nav.classList.remove("scrolled");
    }
}

//slick
jQuery(document).ready(function(){
    jQuery('.slider').slick({
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
      });
  });
jQuery(document).ready(function(){
  jQuery('.main-image').hover(function(){
    jQuery(this).parent().parent().parent().parent().parent().parent().parent().parent().prev().show();
    jQuery(this).parent().parent().parent().parent().parent().parent().parent().parent().next().show();
  },function(){
    jQuery(this).parent().parent().parent().parent().parent().parent().parent().parent().prev().hide();
    jQuery(this).parent().parent().parent().parent().parent().parent().parent().parent().next().hide();
  })
  jQuery('.slider .slick-arrow').hover(function(){
    jQuery(this).show();
  },function(){
    jQuery(this).hide();
  })
})
  // slick multiple
  jQuery(document).ready(function(){
    jQuery('.slider-multiple').slick({
        infinite: true,
        slidesToShow: 3,
        slidesToScroll: 3,
        responsive: [
            {
              breakpoint: 1024,
              settings: {
                slidesToShow: 2,
                slidesToScroll: 2
              }
            },
            {
              breakpoint: 480,
              settings: {
                slidesToShow: 1,
                slidesToScroll: 1
              }
            }
          ]
      });
  });
    // change image
    jQuery(document).ready(function(){
        jQuery(".change-image img").click(function(){
            var data_header= jQuery(this).parent().parent().parent().next().children().attr('data-header');
            var data_content= jQuery(this).parent().parent().parent().next().children().attr('data-content');
            var a_href=jQuery(this).parent().parent().parent().next().children().children().children().attr('href');
            var change=jQuery(this).attr('src');
            jQuery(".slider .slick-active img").attr('srcset',change);
            jQuery(".slider .slick-active .title-h2 a").html(data_header);
            jQuery(".slider .slick-active .title-h2 a").attr('href',a_href);
            jQuery(".slider .slick-active .text-wrap p").html(data_content);
    
        });    
    });
    // magnific video
jQuery(document).ready(function() {
	jQuery('.popup-youtube, .popup-vimeo, .popup-gmaps').magnificPopup({
		disableOn: 700,
		type: 'iframe',
		mainClass: 'mfp-fade',
		removalDelay: 160,
		preloader: false,

		fixedContentPos: false
	});
});
//slider-3
jQuery(document).ready(function(){
    jQuery('.slider-3').slick({
        infinite: true,
        slidesToShow: 3,
        slidesToScroll:1,
        autoplay: true,
        responsive: [
            {
              breakpoint: 1024,
              settings: {
                slidesToShow: 2,
                slidesToScroll: 2
              }
            },
            {
              breakpoint: 480,
              settings: {
                slidesToShow: 1,
                slidesToScroll: 1
              }
            }
          ]
      });
  });
  //
  jQuery(document).ready(function(){
    jQuery('.owl2 ').owlCarousel({
      stagePadding: 50,
      loop:true,
      margin:10,
      nav:true,
      Dots:false,
      responsive:{
          0:{
              items:1
          },
          600:{
              items:1
          },
          1000:{
              items:1
          }
      }
    })
  })
  //
// popup
jQuery(document).ready(function() {
	jQuery('.popup-gallery').magnificPopup({
		delegate: 'a',
		type: 'image',
		tLoading: 'Loading image #%curr%...',
		mainClass: 'mfp-img-mobile',
		gallery: {
			enabled: true,
			navigateByImgClick: true,
			preload: [0,1] // Will preload 0 - before current, and 1 after the current image
		},
		image: {
			tError: '<a href="%url%">The image #%curr%</a> could not be loaded.',
			titleSrc: function(item) {
				return item.el.attr('title');
			}
		}
	});
});
jQuery(document).ready(function() {
  jQuery('.product-grid6').hover(function(){
    jQuery(this).children().next().children().children().next().css({"color": "white"});
    jQuery(this).children().next().children().children().next().css({"display": "block"});
    jQuery(this).children().next().css({"background-color": "#000032", "color": "white"});
    jQuery(this).css({"background-color":"#000032"});

  },function(){
    jQuery(this).children().next().css({"background-color": "white", "color": "black"});
    jQuery(this).children().next().children().children().next().css({"color": "#000032"});
    jQuery(this).children().next().children().children().next().css({"display": "none"});
    jQuery(this).css({"background-color":"white"});
  })
})
jQuery(document).ready(function(){
    jQuery('.slider-3 a').hover(function(){
      jQuery(this).children().css("opacity","80%");
        jQuery(this).parent().next().css("opacity","100%");
    },
    function(){
      jQuery(this).children().css("opacity","100%");
      jQuery(this).parent().next().css("opacity","0%");
    })
})
// wow
jQuery(document).ready(function() {
  new WOW().init();
});