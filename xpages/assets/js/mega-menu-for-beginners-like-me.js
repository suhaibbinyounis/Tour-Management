(function($) {
"use strict";
document.cookie = 'cross-site-cookie=bar; SameSite=None; Secure';
$(document).ready(function() {
	$('.dropdown').on('mouseenter',function() {
	if(!$(this).hasClass('show')){
		$('>[data-toggle="dropdown"]', this).dropdown('toggle');
	}
	});
	$('.dropdown').on('mouseleave',function() {
		if($(this).hasClass('show')){
			$('>[data-toggle="dropdown"]', this).dropdown('toggle');
		}
	});
	$('.dropdown-hover-all').on('mouseenter', '.dropdown', function() {
		if(!$(this).hasClass('show')){
			$('>[data-toggle="dropdown"]', this).dropdown('toggle');
		}
	});
	$('.dropdown-hover-all').on('mouseleave', '.dropdown', function() {
		if($(this).hasClass('show')){
			$('>[data-toggle="dropdown"]', this).dropdown('toggle');
		}
	});
	
	//Scroll totop
	//-----------------------------------------------
	$(window).scroll(function() {
		if($(this).scrollTop() != 0) {
			$(".scrollToTop").addClass("fadeToTop");
			$(".scrollToTop").removeClass("fadeToBottom");
		} else {
			$(".scrollToTop").removeClass("fadeToTop");
			$(".scrollToTop").addClass("fadeToBottom");
		}
	});
	$(".scrollToTop").click(function() {
		$("body,html").animate({scrollTop:0},800);
	});
	
});

})(jQuery);