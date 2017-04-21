$(document).ready(function() {
	
	/* ---------------------------------------------- /*
	 * Smooth scroll / Scroll To Top
	/* ---------------------------------------------- */

	$('a[href*="#"]').bind("click", function(e){       
		var anchor = $(this);
		if($(window).width() >= 751){
			$('html, body').stop().animate({	
					scrollTop: $(anchor.attr('href')).offset().top
			}, 1000);
		} else {
			$('html, body').stop().animate({	
					scrollTop: $(anchor.attr('href')).offset().top-162
			}, 1000);
		}
		e.preventDefault();
	});

	$(window).scroll(function() {
		if ($(this).scrollTop() > 100 && $(window).width() >= 751) {
			$('.scroll-up').fadeIn();
		} else {
			$('.scroll-up').fadeOut();
		}
	});


	/* ---------------------------------------------- /*
	 * Testimonials Slider - Slick plugin
	/* ---------------------------------------------- */
		
	$('.testimonials__container').slick({
		infinite: false,
		slidesToShow: 1,
		slidesToScroll: 1,
		arrows: true,
		rtl: true
	});

	/* ---------------------------------------------- /*
	 * Photo Gallery - Viewbox plugin
	/* ---------------------------------------------- */

    
    /* ---------------------------------------------- /*
	 * Wishlist Hover
	/* ---------------------------------------------- */
    
    jQuery("#wish_list").mouseenter(function(){
	    jQuery('#wish_list_item').css('display','block');
	});
    
    jQuery("#wish_list").mouseleave(function(){
	    jQuery('#wish_list_item').css('display','none');
	});

    /* ---------------------------------------------- /*
	 * Fix lunar Hover
	/* ---------------------------------------------- */
    jQuery('.lnOpenAlbum').text('פתח אלבום');
});