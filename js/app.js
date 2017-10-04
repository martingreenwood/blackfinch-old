/**
 * APP JS
 *
 * @package Blackfinch
 */

function changeMenu(){
	$ = jQuery;
	var offset = $("#masthead").offset();
	var searchMargin = offset.left + 260 ;
	var emailMargin = offset.left + 335; 
	var windowWidth = $('#page').width() - 260;
	var windowWidth2 = $('#page').width();
	
	
	$('.subPageBarContain').css('width', windowWidth);
	$('.homeSubBar').show();

	
	
	if ($(window).width() < 768) {
		
		
		$('.subPageBarContain').css('width', windowWidth2);
		
	   	$('.mainNav').css('font-size', '0');
		//$('.menuDrop').css('width', '75px');
		$('.menuDrop').hide();
		$('.mobileMenu').show();
		$('.phoneWrap').hide();
		$('.menuPhoneIcon').show();
		$('.subPageBar .emailIcon').css('left','150px');
		$('.subPageBar .searchIcon ').css('left','225px');
		
		$('.smallMenu').show();
		
		$('.menuDrop, .homeIcon, .menuPhoneIcon, .emailIcon, .searchIcon, .menuContainer, .phoneIcon, .emailIcon2').hide();
		
		$('.homeSubBar').show();
		
	} else {
		$('.mainNav').css('font-size', '15px');
		//$('.menuDrop').css('width', '260px');
		$('.menuDrop').show()
		$('.mobileMenu').hide();
		$('.phoneWrap').show();
		$('.menuPhoneIcon').hide();
		$('.subPageBar .emailIcon').css('left', 'inherit');
		$('.subPageBar .emailIcon').css('right', emailMargin);
		
		$('.subPageBar .searchIcon ').css('left','inherit');
		$('.subPageBar .searchIcon ').css('right', searchMargin);
		
		$('.smallMenu').hide();
		
		$('.homeSubBar').hide();
		
		$('.menuDrop, .homeIcon, .emailIcon, .searchIcon, .menuContainer').show();
		//$('.menuDrop, .homeIcon, .menuPhoneIcon, .emailIcon, .searchIcon, .menuContainer, .phoneIcon, .emailIcon2').show();
	}
	
	if ($(window).width() < 480) {
		
		$('.menuDrop, .homeIcon, .menuPhoneIcon, .emailIcon, .searchIcon, .menuContainer').hide();
		
	} else {
		
		//$('.smallMenu').hide();
		
		$('.menuDrop, .homeIcon, .phoneIcon, .emailIcon, .emailIcon2, .searchIcon, .menuContainer').show();
		
	}
}

/*=============================
=            CALLS            =
=============================*/

(function($){
	$('.menuContainer').click(function() {
		$(this).addClass('menuOpen');
	  	$('.menuChildren').slideToggle( 250 );
	});
})(jQuery);

(function($){
	$('.smallBurger').click(function() {
		$(this).addClass('menuOpen');
		$('.menuChildren').slideToggle( 250 );
	});
})(jQuery);

(function($){
	$('.adaptHover').hover(function() {
		//var text = $("adaptMore").text();
		//$(".adaptMore").text( text == "Less" ? "More" : "Less");
		// $(".adaptMore").toggleClass('active');
	  	$('.adaptOverlay').fadeToggle( 250 );
	});

	$('.evolveHover').hover(function() {
		// var text = $(this).text();
		// $(this).text( text == "Less" ? "More" : "Less");
		// $(this).toggleClass('active');
	  	$('.evolveOverlay').fadeToggle( 250 );
	});

	$('.thriveHover').hover(function() {
		// var text = $(this).text();
		// $(this).text( text == "Less" ? "More" : "Less");
		// $(this).toggleClass('active');
	  	$('.thriveOverlay').fadeToggle( 250 );
	});
})(jQuery);


(function($){
	$('.menuDrop').on('click', function(event) {
		event.preventDefault();
		$(this).toggleClass('open');
	});
})(jQuery);

(function($){
	$(window).scroll(function(e) {
	    e.preventDefault();
		
		var headHeight = $("#masthead").height() + ($(".homeBar").height() / 2);
		
		//$('.menuDrop').css('right', offset.left);
		
		if ($(window).width() > 768) {
		
		
			if ($(this).scrollTop() > headHeight) {
				$('.headerContent h1').hide();
				//$('.homeBar').fadeOut('fast');
				$('.homeSubBar').show();
			}
			
			if ($(this).scrollTop() < headHeight) {
				//$('.site-branding').fadeIn('fast');
				$('.headerContent h1').show();
				//$('.homeBar').fadeIn('fast');
				$('.homeSubBar').hide();
			}
			
			// $('.menuDrop').css(
			// 	'top', $(window).scrollTop()
			// );
			
		} else {
			
			$('.homeSubBar').show();
	
		}
	});
})(jQuery);

(function($){
	var barWidth = $('.infobar').width();
	var barHeight = $('.infobar').height();
	var phoneHeight = $('.phoneNumber').height();
	var newHeight = barHeight - phoneHeight / 2;
	var offset = $("#masthead").offset();
	var searchMargin = offset.left + 260 ;
	var emailMargin = offset.left + 335; 
	var phoneWidth = $("#masthead").width() - 260 - 150 -75;
	
	changeMenu()

	$('.subPageBar .phoneWrap').css('width', phoneWidth);
	
	$('.subPageBar .searchIcon').css('right', searchMargin);
	$('.subPageBar .emailIcon').css('right', emailMargin);
	
	
	$('.menuChildren').css('right', offset.left);
	//$('.menuDrop').css('right', offset.left);
	//$('.phoneNumber').css('margin-top', newHeight /3 );
})(jQuery);

(function($){
	//on resize get topbar width
	$(window).resize(function(){
	    var barWidth = $('.infobar').width();
		var barHeight = $('.infobar').height();
		var phoneHeight = $('.phoneNumber').height();
		var newHeight = barHeight - phoneHeight / 2;
		var offset = $("#masthead").offset();
		var searchMargin = offset.left + 260 ;
		var emailMargin = offset.left + 335; 
		var phoneWidth = $("#masthead").width() - 260 - 150 -75;
		
		changeMenu()
		
		$('.subPageBar .phoneWrap').css('width', phoneWidth);
		
		$('.subPageBar .searchIcon').css('right', searchMargin);
		$('.subPageBar .emailIcon').css('right', emailMargin);
		
		$('.menuChildren').css('right', offset.left);
		
		//$('.searchBar').css('width', barWidth - 150);
		
		$('.subPageBar .searchBar').css('width', barWidth - 156);
		
		//$('.phoneNumber').css('margin-top', newHeight /3 );
		
		$('.menuChildren').css('right', offset.left);
		//$('.menuDrop').css('right', offset.left);
		
	});
})(jQuery);

(function($){
	$('.searchIcon').click(function() {
		var barWidth = $('.infobar').width();	
		//$('.searchBar').css('width', barWidth - 150 );
		$('.subPageBar .searchBar').css('width', barWidth - 156);
		
		
		var src = $('.searchIcon img').attr('src');
	    var newsrc = (src=='/wp-content/themes/blackfinch/img/search.jpg') ? '/wp-content/themes/blackfinch/img/close.jpg' : '/wp-content/themes/blackfinch/img/search.jpg';
	    $('.searchIcon img').attr('src', newsrc );

		$('.searchBar').animate({width: 'toggle'}, 250);

	});
})(jQuery);

(function($){
	$('.smallSearch').click(function() {
		
		$('.smallSearchContain').slideToggle(250);
		
	});
})(jQuery);

(function($){
	$('.slickme').slick({
		arrows: false,
		dots: false,
	});
})(jQuery);
