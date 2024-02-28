"use strict"

const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]');
const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl));

$(document).ready(function () {
	new Swiper('.swiper-article', {
		loop: true,
		slidesPerView: 3.5,
		centeredSlides: false,
		spaceBetween: 14,
		speed: 800,
		autoplay: {
				delay: 2000,
				disableOnInteraction: false,
		},
		breakpoints: {
			// when window width is >= 320px
			320: {
					slidesPerView: 1.2
			},
			// when window width is >= 480px
			480: {
					slidesPerView: 2.5,
			},

			// when window width is >= 640px
			768: {
					slidesPerView: 3.5
			}
		}
	});

	$('.hero-banner').find('a').click(function () {
		var $href = $(this).attr('href');
		var $anchor = $($href).offset();
		var offsetValue = 100;
		$('html, body').animate({
				scrollTop: $anchor.top - offsetValue
		}, 1000); // added duration for smooth scrolling
		return false;
	});
});



