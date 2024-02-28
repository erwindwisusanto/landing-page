"use strict";

const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]');
const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(
		tooltipTriggerEl));

const WA_CEPAT_SEHAT = "6285212500030";

$('#btn-wa').click(()=> {
let name = $('#name').val();
let addres = $('#address').val();
let service = $('#service').val();

if (name.length < 3 || addres.length < 3 || service.length < 3) {
	alert('please fill form with correctly');
	return;
}

let formatMessage = `Hallo CepatSehat.com by Klinik Cepat Sehat, saya ingin konsultasi\n\nNama: ${name}\nAlamat: ${addres}\nLayanan: ${service}`;
	window.open(`https://api.whatsapp.com/send/?phone=${WA_CEPAT_SEHAT}&text=${encodeURIComponent(formatMessage)}`);
});

$('#btn-tele').click(()=> {
	let telegram = window.open(`https://t.me/cepat_sehat`);
});

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
