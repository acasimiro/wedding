(function($) {
	"use strict";

	$(document).ready(function() {
		
		// ====================================================================

		// Navbar position

		$(window).scroll(function(){
			if ($(this).scrollTop() > $(window).height()) {
				$('.navbar').addClass('fixed');
				$('body').css('padding-top', '110px');
			} else {
				$('.navbar').removeClass('fixed');
				$('body').css('padding-top', '0');
			}
		});
		
		// ====================================================================

		// Smooth Scroll on Menu Click
		function downScroll() {
			var scroller = function() {
				var t= window.location.hash;
				var t=t.length&&t||$('[name='+t.slice(1)+']');
				if(t.length){
					var tOffset=($(t).offset().top - 92);
					$('html,body').animate({scrollTop:tOffset},'slow');
					return false;
				}
			}
			setTimeout(scroller, 20);
		}


		$('.navbar a[href^=#]').on("click",function(){
			downScroll();
		});

		// ====================================================================

		// Superslides

		$('#slides').superslides({
			play: 5000,
			animation_speed: 2000,
			animation: 'fade',
			pagination: false
		});

		// ====================================================================

		// Countdown
		var weddingDate = new Date(2015, 9, 29, 19, 30, 0, 0);
		$(".countdown").countdown({
			until: weddingDate,
			format: 'ODHMS'
		});

		// ====================================================================

		// Owl Carousel

		$("#registry .owl-carousel").owlCarousel({
			items: 6,
			itemsDesktop: [1199,5],
			itemsDesktopSmall: [991,4],
			itemsTablet: [767,3],
			slideSpeed: 800
		});

		// ====================================================================

		// Parallax

		$('.parallax').scrolly({bgParallax: true});

		// ====================================================================

		// Fun Facts Counter

		var flag = 0;

	    $(window).scroll(function() {
	        if (flag == 1){
	           return false;
	        }
	        else{
	           var bh = $(window).height();
	           var st = $(window).scrollTop();
	           var el = $('.timer');
	           var eh = el.height();
	           if ( st >= (100 + eh) - bh ) {
	               el.countTo({
	                   speed: 2000,
	                   refreshInterval: 20
	               });
	           }
	           flag = 1;
	        }
	    });

		// ====================================================================

		// Fancybox

		$('.fancybox').fancybox({
			openEffect: 'none'
		});

		// ====================================================================

		// Scroll Reveal

		if ($(window).width() > 767) {

			// The starting defaults.
			var config = {
				after: '0s',
				enter: 'top',
				move: '40px',
				over: '0.50s',
				easing: 'ease-in-out',
				viewportFactor: 0.33,
				reset: false,
				init: true
			};

			window.scrollReveal = new scrollReveal(config);
		}

		downScroll();
	})

})(jQuery);