<x-guest-layout>
	<x-ozone.nav/>
	<div class="content">
		<div class="hero-banner-2">
			<div class="container">
				<div class="text">
					<h3 class="txt-white fw-6">{{ __('ozone.ozoneProcedure.title') }}</h3>
					<p class="txt-white fs-14">{{ __('ozone.ozoneProcedure.desc') }}</p>
					<a href="#book" class="btn btn-warning fs-14"> {{ __('ozone.banner.button') }} </a>
				</div>
			</div>
		</div>
		<section class="py-4 bg-light-blue">
			<div class="container px-4">
				<h3 class="title-section" style="text-align: center; color: var(--txt-green-dark);">
					{{ __('ozone.ozoneProcedure.title_section_2') }}
				</h3>
				<div class="d-block mx-auto">
					<img src="{{ asset('assets/ozone/img/group-procedure.svg') }}"
						class="img-fluid"
						alt="Modern Facilities"
						width="100%">
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
	<x-ozone.footer/>
</x-guest-layout>
<script src="{{ asset('assets/global/js/landing.js') }}"
				type="text/javascript"></script>
