/* Placeholders.js v4.0.1 */
/*!
 * The MIT License
 *
 * Copyright (c) 2012 James Allardice
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to
 * deal in the Software without restriction, including without limitation the
 * rights to use, copy, modify, merge, publish, distribute, sublicense, and/or
 * sell copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING
 * FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS
 * IN THE SOFTWARE.
 */
!function(a){"use strict";function b(){}function c(){try{return document.activeElement}catch(a){}}function d(a,b){for(var c=0,d=a.length;d>c;c++)if(a[c]===b)return!0;return!1}function e(a,b,c){return a.addEventListener?a.addEventListener(b,c,!1):a.attachEvent?a.attachEvent("on"+b,c):void 0}function f(a,b){var c;a.createTextRange?(c=a.createTextRange(),c.move("character",b),c.select()):a.selectionStart&&(a.focus(),a.setSelectionRange(b,b))}function g(a,b){try{return a.type=b,!0}catch(c){return!1}}function h(a,b){if(a&&a.getAttribute(B))b(a);else for(var c,d=a?a.getElementsByTagName("input"):N,e=a?a.getElementsByTagName("textarea"):O,f=d?d.length:0,g=e?e.length:0,h=f+g,i=0;h>i;i++)c=f>i?d[i]:e[i-f],b(c)}function i(a){h(a,k)}function j(a){h(a,l)}function k(a,b){var c=!!b&&a.value!==b,d=a.value===a.getAttribute(B);if((c||d)&&"true"===a.getAttribute(C)){a.removeAttribute(C),a.value=a.value.replace(a.getAttribute(B),""),a.className=a.className.replace(A,"");var e=a.getAttribute(I);parseInt(e,10)>=0&&(a.setAttribute("maxLength",e),a.removeAttribute(I));var f=a.getAttribute(D);return f&&(a.type=f),!0}return!1}function l(a){var b=a.getAttribute(B);if(""===a.value&&b){a.setAttribute(C,"true"),a.value=b,a.className+=" "+z;var c=a.getAttribute(I);c||(a.setAttribute(I,a.maxLength),a.removeAttribute("maxLength"));var d=a.getAttribute(D);return d?a.type="text":"password"===a.type&&g(a,"text")&&a.setAttribute(D,"password"),!0}return!1}function m(a){return function(){P&&a.value===a.getAttribute(B)&&"true"===a.getAttribute(C)?f(a,0):k(a)}}function n(a){return function(){l(a)}}function o(a){return function(){i(a)}}function p(a){return function(b){return v=a.value,"true"===a.getAttribute(C)&&v===a.getAttribute(B)&&d(x,b.keyCode)?(b.preventDefault&&b.preventDefault(),!1):void 0}}function q(a){return function(){k(a,v),""===a.value&&(a.blur(),f(a,0))}}function r(a){return function(){a===c()&&a.value===a.getAttribute(B)&&"true"===a.getAttribute(C)&&f(a,0)}}function s(a){var b=a.form;b&&"string"==typeof b&&(b=document.getElementById(b),b.getAttribute(E)||(e(b,"submit",o(b)),b.setAttribute(E,"true"))),e(a,"focus",m(a)),e(a,"blur",n(a)),P&&(e(a,"keydown",p(a)),e(a,"keyup",q(a)),e(a,"click",r(a))),a.setAttribute(F,"true"),a.setAttribute(B,T),(P||a!==c())&&l(a)}var t=document.createElement("input"),u=void 0!==t.placeholder;if(a.Placeholders={nativeSupport:u,disable:u?b:i,enable:u?b:j},!u){var v,w=["text","search","url","tel","email","password","number","textarea"],x=[27,33,34,35,36,37,38,39,40,8,46],y="#ccc",z="placeholdersjs",A=new RegExp("(?:^|\\s)"+z+"(?!\\S)"),B="data-placeholder-value",C="data-placeholder-active",D="data-placeholder-type",E="data-placeholder-submit",F="data-placeholder-bound",G="data-placeholder-focus",H="data-placeholder-live",I="data-placeholder-maxlength",J=100,K=document.getElementsByTagName("head")[0],L=document.documentElement,M=a.Placeholders,N=document.getElementsByTagName("input"),O=document.getElementsByTagName("textarea"),P="false"===L.getAttribute(G),Q="false"!==L.getAttribute(H),R=document.createElement("style");R.type="text/css";var S=document.createTextNode("."+z+" {color:"+y+";}");R.styleSheet?R.styleSheet.cssText=S.nodeValue:R.appendChild(S),K.insertBefore(R,K.firstChild);for(var T,U,V=0,W=N.length+O.length;W>V;V++)U=V<N.length?N[V]:O[V-N.length],T=U.attributes.placeholder,T&&(T=T.nodeValue,T&&d(w,U.type)&&s(U));var X=setInterval(function(){for(var a=0,b=N.length+O.length;b>a;a++)U=a<N.length?N[a]:O[a-N.length],T=U.attributes.placeholder,T?(T=T.nodeValue,T&&d(w,U.type)&&(U.getAttribute(F)||s(U),(T!==U.getAttribute(B)||"password"===U.type&&!U.getAttribute(D))&&("password"===U.type&&!U.getAttribute(D)&&g(U,"text")&&U.setAttribute(D,"password"),U.value===U.getAttribute(B)&&(U.value=T),U.setAttribute(B,T)))):U.getAttribute(C)&&(k(U),U.removeAttribute(B));Q||clearInterval(X)},J);e(a,"beforeunload",function(){M.disable()})}}(this);



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
