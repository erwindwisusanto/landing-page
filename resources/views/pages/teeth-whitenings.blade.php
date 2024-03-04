<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teeth Whitening</title>

    <!-- icons -->
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/7.2.96/css/materialdesignicons.min.css"
        integrity="sha512-LX0YV/MWBEn2dwXCYgQHrpa9HJkwB+S+bnBpifSOTO1No27TqNMKYoAn6ff2FBh03THAzAiiCwQ+aPX+/Qt/Ow=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- favicon -->
    <link rel="icon" type="image/x-icon" href="assets/tw/img/favicon.svg">

    <!-- fontello -->
    <link rel="stylesheet" href="assets/tw/fontello/css/csehat.css">

    <!-- swiper -->
    <link rel="stylesheet" href="assets/tw/css/swiper-bundle.min.css">

    <!-- bootstrap -->
    <link rel="stylesheet" href="assets/tw/bootstrap/css/bootstrap.min.css">

    <!-- custom -->
    <link rel="stylesheet" href="assets/tw/css/style.css">
</head>

<body>

    <nav class="nav nav-top fixed-top">
        <div class="container">
            <div class="d-flex align-items-center">
                <a href="index.html" class="nav-brand">
                    <img src="assets/tw/img/logo.png" alt="">
                </a>
                <div class="btn-group ms-auto">
                    <button type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        <i class="mdi mdi-earth me-2"></i> {{ strtoupper(app()->getLocale()) }}
                    </button>
                    <ul class="dropdown-menu dropdown-menu-end">
                        <li><a class="dropdown-item d-flex gap-1" type="submit" href="lang/en"><img src="assets/global/flag/EN Flag_new.png" alt="" class="mt-1" width="25">English</a></li>
                        <li><a class="dropdown-item d-flex gap-1" type="submit" href="lang/id"><img src="assets/global/flag/ID Flag_new.png" alt="" class="mt-1" width="25">Indonesia</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>

    <div class="content">
        <section class="banner-pages homepage">
            <div class="container">
                <div class="text">
                    <h3>
											{{ __('landing.banner.h3') }}
                    </h3>
                    <p>
											{{ __('landing.banner.p') }}
                    </p>
                    <a href="#book" class="btn btn-warning fs-14"> Contact Us </a>
                </div>
            </div>
        </section>

        <section class="saygood my-1 my-md-2">
            <div class="d-block d-md-none">
                <img src="assets/tw/img/img-saygood.png" class="w-100" alt="">
            </div>
            <div class="d-none d-md-block">
                <img src="assets/tw/img/img-saygood-desktop.png" class="w-100" alt="">
            </div>
        </section>


        <div class="row g-0">
            <div class="col-md-12">
                <section class="kelebihan">
                    <div class="container">
                        <h3 class="title-section">
													{{ __('landing.section3.h3') }}
                        </h3>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="list-benefits">
                                    <div class="items-benefits">
                                        <img src="assets/tw/img/icon-why/ic-why01.svg" class="img-benefits" alt="">
                                        <div class="title">
                                            <h5>
																							{{ __('landing.section3.h5_1') }}
                                            </h5>
                                            <p>
																							{{ __('landing.section3.p_1') }}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="list-benefits mt-md-4 mt-0">
                                    <div class="items-benefits">
                                        <img src="assets/tw/img/icon-why/ic-why02.svg" class="img-benefits" alt="">
                                        <div class="title">
                                            <h5>
																							{{ __('landing.section3.h5_2') }}
                                            </h5>
                                            <p>
																							{{ __('landing.section3.p_2') }}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="list-benefits mt-md-4 mt-0">
                                    <div class="items-benefits">
                                        <img src="assets/tw/img/icon-why/ic-why03.svg" class="img-benefits" alt="">
                                        <div class="title">
                                            <h5>
																							{{ __('landing.section3.h5_3') }}
                                            </h5>
                                            <p>
																							{{ __('landing.section3.p_3') }}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </section>
            </div>
        </div>

        <section class="our-teeth mt-4">
            <h3 class="title-section mb-4">
							{{ __('landing.section4.h3') }}
            </h3>
            <div class="row g-0 align-items-center">
                <div class="col-6 p-4 p-md-5">
                    <h5>
											{{ __('landing.section4.h5_1') }}
                    </h5>
                    <p>
											{{ __('landing.section4.p_1') }}
                    </p>
                </div>
                <div class="col-6">
                    <img src="assets/tw/img/img-ourteeth01.png" class="w-100" alt="">
                </div>
            </div>
            <div class="row g-0 align-items-center">
                <div class="col-6">
                    <img src="assets/tw/img/img-ourteeth03.png" class="w-100" alt="">
                </div>
                <div class="col-6 p-4 p-md-5">
                    <h5>
											{{ __('landing.section4.h5_2') }}
                    </h5>
                    <p>
											{{ __('landing.section4.p_2') }}
                    </p>
                </div>
            </div>
            <div class="row g-0 align-items-center">
                <div class="col-6 p-4 p-md-5">
                    <h5>
											{{ __('landing.section4.h5_3') }}
                    </h5>
                    <p>
											{{ __('landing.section4.p_3') }}
                    </p>
                </div>
                <div class="col-6">
                    <img src="assets/tw/img/img-ourteeth02.png" class="w-100" alt="">
                </div>
            </div>
        </section>

        <section class="portable mt-4 mt-md-0">
            <div class="row gy-4 align-items-end">
                <div class="col-12 order-last bg-provide">
                    <div class="row justify-content-center">
                        <div class="col-md-4">
                            <img src="assets/tw/img/img-providing.png" class="w-100" alt="">
                        </div>
                    </div>

                </div>
                <div class="col-12 pt-md-5 p-0 equipment">
                    <div class="title-section">
											{{ __('landing.section5.title') }} <br> {{ __('landing.section5.title_2') }}
                    </div>

                    <div class="swiper swiper-article">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <img src="assets/tw/img/slider/img-slider01.png" class="d-block w-100" alt="...">
                            </div>
                            <div class="swiper-slide">
                                <img src="assets/tw/img/slider/img-slider02.png" class="d-block w-100" alt="...">
                            </div>
                            <div class="swiper-slide">
                                <img src="assets/tw/img/slider/img-slider03.png" class="d-block w-100" alt="...">
                            </div>
                            <div class="swiper-slide">
                                <img src="assets/tw/img/slider/img-slider04.png" class="d-block w-100" alt="...">
                            </div>
                            <div class="swiper-slide">
                                <img src="assets/tw/img/slider/img-slider05.png" class="d-block w-100" alt="...">
                            </div>
                        </div>
                    </div>

                    <!-- <div class="px-4 px-md-0">
                        <div id="carouselExample" class="carousel slide carousel-dark" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="assets/tw/img/slider/img-slider01.png" class="d-block d-md-none w-100"
                                        alt="...">
                                    <img src="assets/tw/img/slider/img-slider01-desktop.png"
                                        class="d-none d-md-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="assets/tw/img/slider/img-slider02.png" class="d-block d-md-none w-100"
                                        alt="...">
                                    <img src="assets/tw/img/slider/img-slider02-desktop.png"
                                        class="d-none d-md-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="assets/tw/img/slider/img-slider03.png" class="d-block d-md-none w-100"
                                        alt="...">
                                    <img src="assets/tw/img/slider/img-slider03-desktop.png"
                                        class="d-none d-md-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="assets/tw/img/slider/img-slider04.png" class="d-block d-md-none w-100"
                                        alt="...">
                                    <img src="assets/tw/img/slider/img-slider04-desktop.png"
                                        class="d-none d-md-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="assets/tw/img/slider/img-slider05.png" class="d-block d-md-none w-100"
                                        alt="...">
                                    <img src="assets/tw/img/slider/img-slider05-desktop.png"
                                        class="d-none d-md-block w-100" alt="...">
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample"
                                data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExample"
                                data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div> -->

                </div>
            </div>
        </section>

        <section class="tips">
					<div class="container">
						<div class="d-flex justify-content-center mt-4">
							<div style="position: relative; height: 80px;">
								<div class="text-1" style="display: inline-block; border: 2px solid white; border-radius: 15px; padding: 5px 5px 5px 25px; z-index: 1; position: absolute; width: 245px; right: -25px;">
										<span style="font-size: 20px; font-weight: 600;">{{ __('landing.gigi.title_1') }}<br>{{ __('landing.gigi.title_2') }}</span>
								</div>
								<div class="img-1" style="display: inline-block; z-index: 2; position: relative; right: -100px; top: -25px;">
										<img src="{{ asset('assets/teeth-whitening/img/gigi.svg') }}">
								</div>
							</div>
						</div>
						<div class="row">
								<div class="col-md-4">
										<div class="list-benefits">
												<div class="items-benefits">
														<img src="assets/tw/img/icon-tips/ic-tips01.svg" class="img-benefits" alt="">
														<div class="title">
																<p>
																	{{ __('landing.section6.p_1') }}
																</p>
														</div>
												</div>
										</div>
								</div>
								<div class="col-md-4">
										<div class="list-benefits mt-md-4 mt-0">
												<div class="items-benefits">
														<img src="assets/tw/img/icon-tips/ic-tips02.svg" class="img-benefits" alt="">
														<div class="title">
																<p>
																	{{ __('landing.section6.p_2') }}
																</p>
														</div>
												</div>
										</div>
								</div>
								<div class="col-md-4">
										<div class="list-benefits mt-md-4 mt-0">
												<div class="items-benefits">
														<img src="assets/tw/img/icon-tips/ic-tips03.svg" class="img-benefits" alt="">
														<div class="title">
																<p>
																	{{ __('landing.section6.p_3') }}
																</p>
														</div>
												</div>
										</div>
								</div>
						</div>
					</div>
        </section>

        <section class="potential my-4">
            <div class="container">
                <h3 class="title-section">
									{{ __('landing.section7.title') }}
                </h3>
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="row g-3">
                            <a href="https://www.youtube.com/embed/c0W5ssAfIvU?si=_8EqI_mmfMNiLv0f"
                                data-toggle="lightbox" data-gallery="youtubevideos" class="col-md-6 gallery-video">
                                <img src="https://img.youtube.com/vi/c0W5ssAfIvU/hqdefault.jpg" class="thumbnail-yt">
                                <div class="play-button">
                                    <img src="assets/tw/img/circle-play.png" alt="">
                                </div>
                            </a>
                            <a href="https://www.youtube.com/embed/Yxb9zUb7q_k?si=FhbH68ylu7LBoOI2"
                                data-toggle="lightbox" data-gallery="youtubevideos" class="col-md-6 gallery-video">
                                <img src="https://img.youtube.com/vi/Yxb9zUb7q_k/hqdefault.jpg" class="thumbnail-yt">
                                <div class="play-button">
                                    <img src="assets/tw/img/circle-play.png" alt="">
                                </div>
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </section>

        <section class="testimoni">
            <div class="container">
                <h3 class="title-section">
									{{ __('landing.section8.title') }}
                </h3>
                <div class="swiper swiper-article">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="card-slide-testimoni">
                                <div class="text-center">
                                    <img src="assets/tw/img/testi/Testi 1.png" class="img-testimoni" alt="">
                                </div>
                                <p>
                                  "{{ __('landing.section8.testimoni_p_1') }}"
                                </p>
                                <p>
                                    <b>Dimas .A</b> -Bekasi
                                </p>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card-slide-testimoni">
                                <div class="text-center">
                                    <img src="assets/tw/img/testi/Testi 2.png" class="img-testimoni" alt="">
                                </div>
                                <p>
																	"{{ __('landing.section8.testimoni_p_2') }}"
                                </p>
                                <p>
                                    <b>Budi .S</b> -Jakarta
                                </p>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card-slide-testimoni">
                                <div class="text-center">
                                    <img src="assets/tw/img/testi/Testi 3.png" class="img-testimoni" alt="">
                                </div>
                                <p>
																	"{{ __('landing.section8.testimoni_p_3') }}"
                                </p>
                                <p>
                                    <b>Karina .N</b> -Depok
                                </p>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card-slide-testimoni">
                                <div class="text-center">
                                    <img src="assets/tw/img/testi/Testi 4.png" class="img-testimoni" alt="">
                                </div>
                                <p>
																	"{{ __('landing.section8.testimoni_p_4') }}"
                                </p>
                                <p>
                                    <b>Cakra .N</b> -Jakarta
                                </p>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card-slide-testimoni">
                                <div class="text-center">
                                    <img src="assets/tw/img/testi/Testi 5.png" class="img-testimoni" alt="">
                                </div>
                                <p>
																	"{{ __('landing.section8.testimoni_p_5') }}"
                                </p>
                                <p>
                                    <b>Bella .P</b> -Bogor
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="book mb-4" id="book">
            <div class="container">
                <h3 class="title-section"> {{ __('landing.section9.title') }}  </h3>
                <form action="#">
                    <div class="row mb-3 g-3">
                        <div class="col-md-4">
                            <label for="" class="form-label">{{ __('landing.section9.label_name') }}</label>
                            <input type="text" class="form-control" id="name" placeholder="{{ __('landing.section9.label_name') }}">
                        </div>
                        <div class="col-md-4">
                            <label for="" class="form-label">{{ __('landing.section9.label_alamat') }}</label>
                            <input type="text" class="form-control" id="address" placeholder="{{ __('landing.section9.label_alamat') }}">
                        </div>
                        <div class="col-md-4">
                            <label for="" class="form-label">{{ __('landing.section9.label_Layanan') }}</label>
                            <select class="form-select form-control" id="service" aria-label="Default select example">
															<option selected>Teeth Whitening</option>
                            </select>
                        </div>
                    </div>
                    <div class="row g-3 justify-content-center">
                        <div class="col-6 col-md-3">
                            <button type="submit" class="btn btn-whatsapp w-100" id="btn-wa"><i
                                    class="mdi mdi-whatsapp fs-18 me-2"></i>
                                Whatsapp</button>
                        </div>
                        <div class="col-6 col-md-3">
                            <button type="submit" class="btn btn-telegram w-100" id="btn-tele"><i
                                    class="fa-brands fa-telegram fs-18 me-2"></i>
                                Telegram</button>
                        </div>
                    </div>
                </form>
            </div>
        </section>

    </div>

    <div class="btn-float" data-bs-toggle="tooltip" data-bs-placement="left"
        data-bs-title="Consult with Our Medical Team" data-bs-custom-class="custom-tooltip">
        <div class="btn-circle whatsapp">
            <a href="https://api.whatsapp.com/send/?phone=6282211189009&text&type=phone_number&app_absent=0"
                class="text-white">
                <i class="fs-24 fa-brands fa-whatsapp"></i>
            </a>
        </div>
        <div class="btn-circle telegram">
            <a href="https://t.me/unbanking" class="text-white">
                <i class="fs-24 fa-brands fa-telegram"></i>
            </a>
        </div>
    </div>

    <footer class="footer">
        <div class="container">
            <div class="d-flex align-items-center">
                <a href="index.html">
                    <img src="assets/tw/img/logo-white.png" class="logo" alt="">
                </a>
                <img src="assets/tw/img/logo-atensi.png" class="logo-atensi ms-auto" alt="">
            </div>
            <div class="row mt-4">
                <div class="col-md-8 text-white">
                    <h4 class="fs-14">PT Cepat Sehat Indonesia</h4>
                    <p>Jalan Peternakan No. 13, Kel. Tengah, Kec. Kramat jati, Kota Adm. Jakarta Timur, Provinsi DKI
                        Jakarta 13510 <br>
                        sehatcepat.com</p>
                </div>
                <div class="col-md-12">
                    <div class="d-flex align-items-center">
                        <a href="https://api.whatsapp.com/send/?phone=6282211189009&text&type=phone_number&app_absent=0"
                            class="phone text-white fs-14 d-flex align-items-center">
                            <i class="mdi mdi-phone me-2 fs-24"></i> 0822 1118 9009
                        </a>
                        <div class="sosmed list-inline ms-auto">
                            <a href="#" class="list-inline-item text-white">
                                <i class="mdi mdi-web fs-24"></i>
                            </a>
                            <a href="https://www.facebook.com/klinikcepatsehat" class="list-inline-item text-white">
                                <i class="mdi mdi-facebook fs-24"></i>
                            </a>
                            <a href="https://www.instagram.com/sehatcepat.mobi/ " class="list-inline-item text-white">
                                <i class="mdi mdi-instagram fs-24"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            Copyright © 2024 Cepat Sehat. All Rights Reserved.
        </div>
    </footer>

    <script src="assets/tw/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="assets/tw/js/swiper-bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bs5-lightbox@1.8.3/dist/index.bundle.min.js"></script>

    <script>
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

    </script>

</body>

</html>
