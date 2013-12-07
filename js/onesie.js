jQuery(document).ready(function($){
	
	var win_height = $(window).height() - 100;
	
	$('.block').css({ height: win_height });

	$('a[href*=#]:not([href=#])').click(function() {
		if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
			var target = $(this.hash);
			target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
			if (target.length) {
				$('html,body').animate({
					scrollTop: target.offset().top
				}, 300);
				return false;
			}
		}
	});

	var distance = $('.site-title').offset().top;

	$(window).scroll(function() {
		
		if ($(window).scrollTop() > distance) {
			$('.site-title').addClass("fixed");
		} else {
			$('.site-title').removeClass("fixed");
		}
	});

	$('.gallery-item').magnificPopup({
		type: 'image',
		gallery:{
			enabled:true
		}
	});

});