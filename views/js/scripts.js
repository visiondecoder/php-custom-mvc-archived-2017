 
$(function() {

    "use strict";// this function is executed in strict mode

 
	$(document).ready(function() {

		/* ------------------------------------------------------ */
		/*  1. SHRINK HEADER JS
		/* ------------------------------------------------------ */ 
		var shrinkHeader=1;
			$(window).on('scroll', function () {
			var scroll=getCurrentScroll();
				if(scroll>=shrinkHeader){
					$('.navbar').addClass('shrink');
				}
			else{
				$('.navbar').removeClass('shrink');}
		});
		function getCurrentScroll(){
			return window.pageYOffset;
		}
		
		var sections = $('section')
		, nav = $('nav')
		, nav_height = nav.outerHeight();
	
		
		/* --------------------------- */
		/*  2. wow animate JS
		/* --------------------------- */
		new WOW().init();
		
		/* --------------------------- */
		/*  3. YouTube video click box JS
		/* --------------------------- */   
		// $('.video-v').magnificPopup({ 
		// type: 'iframe'
		// // other options
		// });
		
		/* --------------------------- */
		/* 4. what-do-slier JS
		/* --------------------------- */  
		$('.what-do-slier').owlCarousel({
			loop:true,
			margin: 0,
			autoplay:true,
			smartSpeed:600,
			dots: true,
			nav:false,
			center: true,
			dots:false,
			responsive:{
				0:{
					items:1,center:false
				},
				600:{
					items:1,
					center:false
				},
				768:{
					items:2,
					center:false
				},
				1000:{
					items:3,
					
				}
			} 
		});
		/* --------------------------- */
		/*  5. all-logo JS
		/* --------------------------- */  
		$('.all-logo-slider').owlCarousel({
			loop:true,  
			autoplay: 1000,
			nav:false, 
			responsive:{
				0:{
					items:2
				},
				600:{
					items:3
				},
				1000:{
					items:4
				}
			}
		});
		/* --------------------------- */
		/*  6. imagesLoaded JS
		/* --------------------------- */  
		$('#container').imagesLoaded( function() {
			var $grid = $('.portfolio-grid').isotope({
			itemSelector: '.portfolio-grid-item',
			percentPosition: true,
			masonry: {
				// use outer width of grid-sizer for columnWidth
				columnWidth: '.portfolio-grid-item'
			}
			});

			// filter items on button click
			$('.filter-button-group').on( 'click', 'button', function() {
			var filterValue = $(this).attr('data-filter');
			$grid.isotope({ filter: filterValue });
			});
			
			//for menu active class
			$('.portfolio-button button').on('click', function(event) {
				$(this).siblings('.active').removeClass('active');
				$(this).addClass('active');
				event.preventDefault();
			});
		});
		/* --------------------------- */
		/*  7. container JS
		/* --------------------------- */ 
		$('#container').imagesLoaded( function() {
			var $grid = $('.about-cay').isotope({
			itemSelector: '.about-cay-item',
			percentPosition: true,
			masonry: {
				// use outer width of grid-sizer for columnWidth
				columnWidth: 1
			}
			}); 
		}); 
		
		/* --------------------------- */
		/*  8. popup-gallery JS
		/* --------------------------- */ 
		// $('.popup-gallery').magnificPopup({
		// 	delegate: 'a',
		// 	type: 'image',
		// 	tLoading: 'Loading image #%curr%...',
		// 	mainClass: 'mfp-img-mobile',
		// 	gallery: {
		// 		enabled: true,
		// 		navigateByImgClick: true,
		// 		preload: [0,1] // Will preload 0 - before current, and 1 after the current image
		// 	},
		// 	image: {
		// 		tError: '<a href="%url%">The image #%curr%</a> could not be loaded.',
		// 		titleSrc: function(item) {
		// 			return item.el.attr('title') + '<small>by Marsel Van Oosten</small>';
		// 		}
		// 	}
		// });

		var owl = $('.header .owl-carousel'); 
		// Slider owlCarousel
		$('.fullslider').owlCarousel({
			items: 1,
			loop:true,
			margin: 0,
			nav:true,
			navText:['<i class="fa fa-angle-double-left"></i>','<i class="fa fa-angle-double-right"></i>'],
			autoplay:true,
			dots: false,
			smartSpeed:700
		}); 

		owl.on('changed.owl.carousel', function(event) {
			var item = event.item.index - 2;     
			$('h1').removeClass('animated fadeInLeft');
			$('p').removeClass('animated fadeInRight'); 
			$('.btn').removeClass('animated zoomIn');
			$('.owl-item').not('.cloned').eq(item).find('h1').addClass('animated fadeInLeft');
			$('.owl-item').not('.cloned').eq(item).find('p').addClass('animated fadeInRight'); 
			$('.owl-item').not('.cloned').eq(item).find('.btn').addClass('animated zoomIn');
		});

	});

}(jQuery));