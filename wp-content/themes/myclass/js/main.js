jQuery(document).ready(function($) {
   $('#section2 #right #content').owlCarousel({
   		items:4,
	  nav:true,
	  loop:true,
	  navText:[
	  "<i class='fas fa-angle-left'></i>",
	  "<i class='fas fa-angle-right'></i>"
	  ],
	  autoplay:true,
	  autoplaySpeed:1000,
	  autoplayTimeout:1111000,
	  autoplayHoverPause:true
	});
   $('.owl-carousel').owlCarousel({
   		items:1,
   		nav:false,
   		autoplay:true,
	  autoplaySpeed:1000,
	  autoplayTimeout:5000,
	  autoplayHoverPause:true
   });
})