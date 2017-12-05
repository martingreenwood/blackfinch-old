/* HTML5 Placeholder jQuery Plugin - v2.3.1
 * Copyright (c)2015 Mathias Bynens
 * 2015-12-16
 */
!function(a){"function"==typeof define&&define.amd?define(["jquery"],a):a("object"==typeof module&&module.exports?require("jquery"):jQuery)}(function(a){function b(b){var c={},d=/^jQuery\d+$/;return a.each(b.attributes,function(a,b){b.specified&&!d.test(b.name)&&(c[b.name]=b.value)}),c}function c(b,c){var d=this,f=a(this);if(d.value===f.attr(h?"placeholder-x":"placeholder")&&f.hasClass(n.customClass))if(d.value="",f.removeClass(n.customClass),f.data("placeholder-password")){if(f=f.hide().nextAll('input[type="password"]:first').show().attr("id",f.removeAttr("id").data("placeholder-id")),b===!0)return f[0].value=c,c;f.focus()}else d==e()&&d.select()}function d(d){var e,f=this,g=a(this),i=f.id;if(!d||"blur"!==d.type||!g.hasClass(n.customClass))if(""===f.value){if("password"===f.type){if(!g.data("placeholder-textinput")){try{e=g.clone().prop({type:"text"})}catch(j){e=a("<input>").attr(a.extend(b(this),{type:"text"}))}e.removeAttr("name").data({"placeholder-enabled":!0,"placeholder-password":g,"placeholder-id":i}).bind("focus.placeholder",c),g.data({"placeholder-textinput":e,"placeholder-id":i}).before(e)}f.value="",g=g.removeAttr("id").hide().prevAll('input[type="text"]:first').attr("id",g.data("placeholder-id")).show()}else{var k=g.data("placeholder-password");k&&(k[0].value="",g.attr("id",g.data("placeholder-id")).show().nextAll('input[type="password"]:last').hide().removeAttr("id"))}g.addClass(n.customClass),g[0].value=g.attr(h?"placeholder-x":"placeholder")}else g.removeClass(n.customClass)}function e(){try{return document.activeElement}catch(a){}}var f,g,h=!1,i="[object OperaMini]"===Object.prototype.toString.call(window.operamini),j="placeholder"in document.createElement("input")&&!i&&!h,k="placeholder"in document.createElement("textarea")&&!i&&!h,l=a.valHooks,m=a.propHooks,n={};j&&k?(g=a.fn.placeholder=function(){return this},g.input=!0,g.textarea=!0):(g=a.fn.placeholder=function(b){var e={customClass:"placeholder"};return n=a.extend({},e,b),this.filter((j?"textarea":":input")+"["+(h?"placeholder-x":"placeholder")+"]").not("."+n.customClass).not(":radio, :checkbox, [type=hidden]").bind({"focus.placeholder":c,"blur.placeholder":d}).data("placeholder-enabled",!0).trigger("blur.placeholder")},g.input=j,g.textarea=k,f={get:function(b){var c=a(b),d=c.data("placeholder-password");return d?d[0].value:c.data("placeholder-enabled")&&c.hasClass(n.customClass)?"":b.value},set:function(b,f){var g,h,i=a(b);return""!==f&&(g=i.data("placeholder-textinput"),h=i.data("placeholder-password"),g?(c.call(g[0],!0,f)||(b.value=f),g[0].value=f):h&&(c.call(b,!0,f)||(h[0].value=f),b.value=f)),i.data("placeholder-enabled")?(""===f?(b.value=f,b!=e()&&d.call(b)):(i.hasClass(n.customClass)&&c.call(b),b.value=f),i):(b.value=f,i)}},j||(l.input=f,m.value=f),k||(l.textarea=f,m.value=f),a(function(){a(document).delegate("form","submit.placeholder",function(){var b=a("."+n.customClass,this).each(function(){c.call(this,!0,"")});setTimeout(function(){b.each(d)},10)})}),a(window).bind("beforeunload.placeholder",function(){var b=!0;try{"javascript:void(0)"===document.activeElement.toString()&&(b=!1)}catch(c){}b&&a("."+n.customClass).each(function(){this.value=""})}))});


/**
 * APP JS
 *
 * @package Blackfinch
 */
function resizeIframe(obj) {
	obj.style.height = obj.contentWindow.document.body.scrollHeight + 'px';
}

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
	$('input, textarea').placeholder();
})(jQuery);

(function($){
	$(".termsOverlay input[type='radio']").click(function(){
	    var radioValue = $("input[name='radio-270']:checked").val();
	    if (radioValue == 'decline') {
	    	window.location.replace("http://google.com");
	    } else {
	    	$.cookie("accept", 1);
	    	$(".termsOverlay").fadeOut('fast');
	    }
	});
})(jQuery);

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

		var src = $('.smallBurger img').attr('src');
	    var newsrc = (src=='wp-content/themes/blackfinch/img/close.svg') ? 'wp-content/themes/blackfinch/img/menu.svg' : 'wp-content/themes/blackfinch/img/close.svg';
	    $('.smallBurger img').attr('src', newsrc );
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
	    var newsrc = (src=='wp-content/themes/blackfinch/img/close.svg') ? 'wp-content/themes/blackfinch/img/search.svg' : 'wp-content/themes/blackfinch/img/close.svg';
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
