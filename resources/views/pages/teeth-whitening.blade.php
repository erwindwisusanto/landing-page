<x-tw-layout>
	<div class="conent">

		<section class="banner-pages homepage">
			<div class="container">
				<div class="text">
					<h3>
						{{ __('landing.banner.h3') }}
					</h3>
					<p>
						{{ __('landing.banner.p') }}
					</p>
					<a href="#book" class="btn btn-warning fs-14"> {{ __('landing.banner.button') }} </a>
				</div>
			</div>
		</section>

		<section class="saygood bg-white my-1 my-md-2">
			<div class="container px-md-5 px-3">
				<div class="col-6 offset-6" style="text-align: right;">
					<h5 class="txt-section-2">{{ __('landing.section2.title') }}</h5>
				</div>
			</div>
		</section>

		<div class="row g-0">
			<div class="col-md-12">
				<section class="kelebihan">
					<div class="container">
						<h3 class="title-section" style="text-align: left;">
							{{ __('landing.section3.h3') }}
						</h3>
						<div class="row">
								<div class="col-md-4">
										<div class="list-benefits">
												<div class="items-benefits">
														<img src="{{ asset('assets/teeth-whitening/img/icon-why/ic-why01.svg') }}" class="img-benefits" alt="">
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
														<img src="{{ asset('assets/teeth-whitening/img/icon-why/ic-why02.svg') }}" class="img-benefits" alt="">
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
														<img src="{{ asset('assets/teeth-whitening/img/icon-why/ic-why03.svg') }}" class="img-benefits" alt="">
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

		<section class="our-teeth bg-white py-4">
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
							<img src="{{ asset('assets/teeth-whitening/img/img-ourteeth01.png') }}" class="w-100" alt="">
					</div>
			</div>
			<div class="row g-0 align-items-center">
					<div class="col-6">
							<img src="{{ asset('assets/teeth-whitening/img/img-ourteeth03.png') }}" class="w-100" alt="">
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
							<img src="{{ asset('assets/teeth-whitening/img/img-ourteeth02.png') }}" class="w-100" alt="">
					</div>
			</div>
		</section>

		<section class="bg-white" id="carousel">
			<div class="container px-4">
				<div class="title-section">
					{{ __('landing.section5.title') }} <br> {{ __('landing.section5.title_2') }}
				</div>
			</div>
			<div class="swiper swiper-article">
				<div class="swiper-wrapper">
						<div class="swiper-slide">
								<img src="{{ asset('assets/teeth-whitening/img/slider/img-slider01.png') }}" class="d-block w-100" alt="...">
						</div>
						<div class="swiper-slide">
								<img src="{{ asset('assets/teeth-whitening/img/slider/img-slider02.png') }}" class="d-block w-100" alt="...">
						</div>
						<div class="swiper-slide">
								<img src="{{ asset('assets/teeth-whitening/img/slider/img-slider03.png') }}" class="d-block w-100" alt="...">
						</div>
						<div class="swiper-slide">
								<img src="{{ asset('assets/teeth-whitening/img/slider/img-slider04.png') }}" class="d-block w-100" alt="...">
						</div>
						<div class="swiper-slide">
								<img src="{{ asset('assets/teeth-whitening/img/slider/img-slider05.png') }}" class="d-block w-100" alt="...">
						</div>
				</div>
			</div>
		</section>

		<section class="img-providing bg-white">
			<div class="container px-md-5 px-3">
				<div class="col-7 offset-5" style="text-align: right;">
					<h5 class="title-section" style="text-align: right">{{ __('landing.imgproviding.title') }}</h5>
				</div>
			</div>
		</section>

		<section class="tips">
			<div class="container">
					<div class="row d-block justify-content-center">
						<div style="position: relative; height: 80px;">
							<div class="text-1" style="display: inline-block;
																				border: 2px solid white; border-radius: 15px;
																				padding: 5px 5px 5px 25px; z-index: 1; position: absolute;
																				width: 245px;">
									<span style="font-size: 20px; font-weight: 600;">{{ __('landing.gigi.title_1') }}<br>{{ __('landing.gigi.title_2') }}</span>
							</div>
							<div class="img-1" style="display: inline-block; z-index: 2; position: relative; right: -195px; top: -25px;">
									<img src="{{ asset('assets/teeth-whitening/img/gigi.svg') }}">
							</div>
						</div>
					</div>
					<div class="row">
							<div class="col-md-4">
									<div class="list-benefits">
											<div class="items-benefits">
													<img src="{{ asset('assets/teeth-whitening/img/icon-tips/ic-tips01.svg') }}" class="img-benefits" alt="">
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
													<img src="{{ asset('assets/teeth-whitening/img/icon-tips/ic-tips02.svg') }}" class="img-benefits" alt="">
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
													<img src="{{ asset('assets/teeth-whitening/img/icon-tips/ic-tips03.svg') }}" class="img-benefits" alt="">
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

		<section class="potential py-4 bg-white">
			<div class="container">
					<h3 class="title-section">
						{{ __('landing.section7.title') }}
					</h3>
					<div class="row justify-content-center">
							<div class="col-md-8">
									<div class="row g-3">
											<a href="https://www.youtube.com/embed/c0W5ssAfIvU?si=_8EqI_mmfMNiLv0f"
													data-toggle="lightbox" data-gallery="youtubevideos" class="col-md-12 gallery-video">
													<img src="https://img.youtube.com/vi/c0W5ssAfIvU/hqdefault.jpg" class="thumbnail-yt">
													<div class="play-button">
															<img src="{{ asset('assets/teeth-whitening/img/circle-play.png') }}" alt="">
													</div>
											</a>
											<a href="https://www.youtube.com/embed/Yxb9zUb7q_k?si=FhbH68ylu7LBoOI2"
													data-toggle="lightbox" data-gallery="youtubevideos" class="col-md-12 gallery-video">
													<img src="https://img.youtube.com/vi/Yxb9zUb7q_k/hqdefault.jpg" class="thumbnail-yt">
													<div class="play-button">
															<img src="{{ asset('assets/teeth-whitening/img/circle-play.png') }}" alt="">
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
															<img src="{{ asset('assets/teeth-whitening/img/testi/Testi 1.png') }}" class="img-testimoni" alt="">
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
															<img src="{{ asset('assets/teeth-whitening/img/testi/Testi 2.png') }}" class="img-testimoni" alt="">
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
															<img src="{{ asset('assets/teeth-whitening/img/testi/Testi 3.png') }}" class="img-testimoni" alt="">
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
															<img src="{{ asset('assets/teeth-whitening/img/testi/Testi 4.png') }}" class="img-testimoni" alt="">
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
															<img src="{{ asset('assets/teeth-whitening/img/testi/Testi 5.png') }}" class="img-testimoni" alt="">
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

		<section class="book py-4 bg-white" id="book">
			<div class="container">
					<h3 class="title-section"> {{ __('landing.section9.title') }} </h3>
					<form action="#">
							<div class="row mb-4 g-3">
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

		<div class="btn-float" data-bs-toggle="tooltip" data-bs-placement="left"
        data-bs-title="Consult with Our Medical Team" data-bs-custom-class="custom-tooltip">
        <div class="btn-circle whatsapp">
            <a href="https://api.whatsapp.com/send/?phone=6285212500030&text&type=phone_number&app_absent=0"
                class="text-white">
                <i class="fs-24 fa-brands fa-whatsapp"></i>
            </a>
        </div>
        <div class="btn-circle telegram">
            <a href="https://t.me/cepat_sehat" class="text-white">
                <i class="fs-24 fa-brands fa-telegram"></i>
            </a>
        </div>
    </div>
	</div>

	<input type="hidden" id="lang" name="lang" value="{{ strtoupper(app()->getLocale()) }}">
	<input type="hidden" id="landing-page" name="landing-page" value="teeth-whitening">

</x-tw-layout>
<script src="{{ asset('assets/global/js/landing.js') }}"
				type="text/javascript"></script>
