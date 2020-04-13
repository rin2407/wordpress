
window.onscroll = function() {
    console.log(window.pageYOffset);
    var nav = document.getElementById('menu-header');
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
        slidesToScroll: 1
      });
  });
  // slick multiple
  jQuery(document).ready(function(){
    jQuery('.slider-multiple').slick({
        infinite: true,
        slidesToShow: 3,
        slidesToScroll: 3
      });
  });
//   slick slider-3
jQuery(document).ready(function(){
    jQuery('.slider-3').slick({
        infinite: true,
        slidesToShow: 3,
        slidesToScroll:1
      });
  });
  // change image
  jQuery(document).ready(function(){
    jQuery(".change-image img").click(function(){
        // Change src attribute of image
        // var title=jQuery(this).attr('data-header');
        // alert(title);
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
// magnific
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
// 
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
				return item.el.attr('title') + '<small>by Marsel Van Oosten</small>';
			}
		}
	});
});
