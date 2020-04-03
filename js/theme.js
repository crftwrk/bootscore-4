jQuery(document).ready(function($) {

	// Scrollspy
	$('body').scrollspy({
		target: '#bootscore-navbar-collapse',
		offset: 58
	});


	// Smooth Scroll
	$(function() {
		$('a[href*="#"]:not([href="#"]):not([href="#tab-reviews"]):not([href="#tab-additional_information"]):not([href="#tab-description"]):not([href="#reviews"]):not([href="#carouselExampleIndicators"])').click(function() {
			if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
				var target = $(this.hash);
				target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
				if (target.length) {
					$('html, body').animate({
						// Change your offset according to your navbar height
						scrollTop: target.offset().top - 56
					}, 1000);
					return !1
				}
			}
		})
	});


	// Scroll to ID from external url
	if (window.location.hash) scroll(0, 0);
	setTimeout(function() {
		scroll(0, 0)
	}, 1);
	$(function() {
		$('.scroll').on('click', function(e) {
			e.preventDefault();
			$('html, body').animate({
				// Change your offset according to your navbar height
				scrollTop: $($(this).attr('href')).offset().top - 56
			}, 1000, 'swing')
		});
		if (window.location.hash) {
			$('html, body').animate({
				// Change your offset according to your navbar height
				scrollTop: $(window.location.hash).offset().top - 56
			}, 1000, 'swing')
		}
	});


	// Scroll to top Button
	$(window).scroll(function() {
		var scroll = $(window).scrollTop();

		if (scroll >= 500) {
			$(".top-button").addClass("visible");
		} else {
			$(".top-button").removeClass("visible");
		}
	});




	// Default Nav

	// Close nav collapse on click nav-link, keep sub-menu item open
	$('.navbar-nav>li>a:not(.dropdown-toggle), a.dropdown-item').on('click', function() {
		$('.navbar-collapse').collapse('hide')
	});

	// Close nav collapse on click sub-menu nav-link
	$('.navbar-nav>li>a:not(.dropdown-toggle), a.dropdown-item').on('click', function() {
		$('ul.dropdown-menu').removeClass('show')
	});

	// Close nav collapse on click / touch outside
	$('.site-content').on('click touchstart', function() {
		$(".navbar-collapse.show").collapse('hide')
	});

	// Close toggler on click nav-link
	$('.navbar-nav>li>a:not(.dropdown-toggle), a.dropdown-item').on('click', function() {
		$('.toggler-icon-animated.open').removeClass('open')
	});

	// Close toggler on click / touch outside
	$('.site-content').on('click touchstart', function() {
		$('.toggler-icon-animated.open').removeClass('open')
	});

	// CSS Toggler
	$('.navbar-toggler').on('click', function() {
		$('.toggler-icon-animated').toggleClass('open')
	});




	// Offcanvas Nav - activate the stylesheet in style.css in line 33, rename header.php in whateveryouwant.php and rename header-offcanvas.php into header.php
	/*$(function() {
		'use strict'

		$('[data-toggle="offcanvas"]').on('click', function() {
			$('.offcanvas-collapse').toggleClass('open')
		})
	})

	// Close nav collapse on click sub-menu nav-link
	$('.navbar-nav>li>a:not(.dropdown-toggle), a.dropdown-item').on('click', function() {
		$('.offcanvas-collapse').removeClass('open')
	});

	// Close Offcanvas on click / touch outside
	$('.site-content').on('click touchstart', function() {
		$('.offcanvas-collapse').removeClass('open')
	});*/




	// Nav up on scroll down, nav down on scroll up - activate the stylesheet in style.css in line 30
	/*var lastScrollTop = 0;
	$(window).scroll(function (event) {
		var st = $(this).scrollTop();
		if (st > lastScrollTop) {
			if (!$('body').hasClass('down')) {
				$('body').addClass('down')
			}
		} else {
			$('body').removeClass('down')
		}
		lastScrollTop = st;
		if ($(this).scrollTop() <= 0) {
			$('body').removeClass('down')
		}
	});*/




	// Nav transform - activate the stylesheet in style.css in line 31
	/*$("#nav-main").addClass("on-top clear");
	$(window).scroll(function () {
		var scroll = $(window).scrollTop();
		if (scroll > 0) {
			$("#nav-main").removeClass("on-top clear")
		} else {
			$("#nav-main").addClass("on-top clear")
		}
	});

	// Nav transform toggle
	$('.clear .navbar-toggler').on('click', function () {
		$('#nav-main.on-top').toggleClass('clear')
	});
	
	// Nav transform on click / touch outside
	$('.content').on('click touchstart', function () {
		$("#nav-main.on-top").addClass('clear')
	});*/




	// Nav overlay- activate the stylesheet in style.css in line 32
	/*$('.navbar-toggler').on('click', function () {
		$('#bootscore-navbar-collapse ul').toggleClass('fade-in')
	});
	
	$('.nav-link').on('click', function () {
		$('#bootscore-navbar-collapse ul').removeClass('fade-in')
	});*/




	// Preloader
	$(window).on('load', function() {
		$('#status').fadeOut();
		$('#preloader').delay(350).fadeOut('slow');
		$('body').delay(350).css({
			'overflow': 'visible'
		})
	})
	setTimeout(function() {
		$('#status').fadeOut();
		$('#preloader').delay(350).fadeOut('slow');
		$('body').delay(350).css({
			'overflow': 'visible'
		})
	}, 1500);


	// Cookie consent
	jQuery('.gdpr-button-accept').click(function() {
		jQuery('#gdpr-box').fadeOut('slow');
		if (!jQuery('.cookies-accept').is()) {
			jQuery.cookie('cookiebar', 1, {
				// Add the cookie. It will remain for 12 days, change your time here
				expires: 12,
				path: '/'
			})
		}
		return !1
	});
	if (!jQuery.cookie('cookiebar') == 1) {
		jQuery('.cookies-accept').css({
			'display': 'block'
		})
	}


	// div height, add class to your content
	$(".height-50").css("height", 0.5 * $(window).height());
	$(".height-75").css("height", 0.75 * $(window).height());
	$(".height-100").css("height", 1.0 * $(window).height());


	// Mobile Search Button hide if empty
	if ($('#searchform').length != 0) {
		$('.top-nav-search-mobile').addClass('visible');
	}
	// Mobile Search Button hide if empty End


	// Tooltips
	$(function() {
		$('[data-toggle="tooltip"]').tooltip()
	})


	// Hide Search Dropdown on scroll
	$(function() {
		var header = $(".dropdown-menu");
		$(window).scroll(function() {
			var scroll = $(window).scrollTop();

			if (scroll >= 0) {
				header.removeClass('show');
			} else {
				header.removeClass("show");
			}
		});
	});


	// Forms
	$('select').addClass('custom-select');
	$('#text_field, #text_area, .password, .wpcf7-textarea, .wpcf7-text').addClass('form-control');
	$('.button, .wpcf7-submit').addClass('btn btn-outline-primary');
	$('.wp-block-button__link').addClass('btn btn-outline-primary');

	// Comment Checkbox
	$('.comment-form-cookies-consent').addClass('form-group form-check');
	$('input#wp-comment-cookies-consent').addClass('form-check-input');
	$('label').addClass('form-check-label');


}); // jQuery End