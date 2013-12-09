jQuery(document).ready(function($){

	if ($(window).width() < 600) {
		$('body').addClass('mobile');
	} else {
		$('body').removeClass('mobile');
	}
	
	var win_height = $(window).height() - 100;

	if ( ! win_height )
		return;
	
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

	$('.gallery-item').magnificPopup({
		type: 'image',
		gallery:{
			enabled:true
		}
	});

});