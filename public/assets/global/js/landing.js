"use strict";

const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]');
const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(
		tooltipTriggerEl));

const WA_CEPAT_SEHAT = "6285212500030";

$('#btn-wa').click(()=> {
	let lang = $('#lang').val();
	let name = $('#name').val();
	let address = $('#address').val();
	let service = $('#service').val();
	let landingPage = $('#landing-page').val();
	let formatMessage;

	if (name.length < 3 || address.length < 3 || service.length < 3) {
		alert('please fill form with correctly');
		return;
	}

	if (landingPage === "teeth-whitening") {
		switch (lang) {
			case 'ID':
				formatMessage = wordingIndonesianTw(name, address, service);
				break;
			case 'EN':
				formatMessage = wordingEnglishTw(name, address, service);
				break;
			default:
				alert('error!');
		}
	} else if (landingPage === "ozone-theraphy") {
		alert('this ozone');
	}

	window.open(`https://api.whatsapp.com/send/?phone=${WA_CEPAT_SEHAT}&text=${encodeURIComponent(formatMessage)}`);
});

$('#btn-tele').click(()=> {
	window.open(`https://t.me/cepat_sehat`);
});

var wordingIndonesianTw = (name, address, service) => {
	return `Hallo Perawatan pemutihan gigi di rumah by Klinik Cepat Sehat, saya ingin konsultasi\n\nNama: ${name}\nAlamat: ${address}\nLayanan: ${service}`;
}

var wordingEnglishTw = (name, address, service) => {
	return `Hello In-Home Teeth Whitening by Cepat Sehat Clinic, i want a consultation\n\nName: ${name}\nAddress: ${address}\nService: ${service}`;
}

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

	let lang = $('#lang').val();

	$('.btn-circle.whatsapp a').attr('href', function() {
		let langID = "Hallo Perawatan pemutihan gigi di rumah by Klinik Cepat Sehat, saya ingin konsultasi";
		let langEN = "Hello In-Home Teeth Whitening by Cepat Sehat Clinic, i want a consultation";

		return lang === 'ID' ? `https://api.whatsapp.com/send/?phone=${WA_CEPAT_SEHAT}&text=${encodeURIComponent(langID)}`
												: `https://api.whatsapp.com/send/?phone=${WA_CEPAT_SEHAT}&text=${encodeURIComponent(langEN)}`;
	});
});
