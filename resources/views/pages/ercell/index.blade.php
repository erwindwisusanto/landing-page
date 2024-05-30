<!DOCTYPE html>
<html>

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>ERCell</title>

	<link rel="stylesheet"
		href="https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/7.2.96/css/materialdesignicons.min.css"
		integrity="sha512-LX0YV/MWBEn2dwXCYgQHrpa9HJkwB+S+bnBpifSOTO1No27TqNMKYoAn6ff2FBh03THAzAiiCwQ+aPX+/Qt/Ow=="
		crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
		integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
		crossorigin="anonymous" referrerpolicy="no-referrer" />


	<link rel="icon" type="image/x-icon" href="https://fe.r3ste.mobi/skin-care/assets/img/favicon.svg">
	<link rel="stylesheet" href="{{ asset('assets/ercell/assets/fontello/css/csehat.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/ercell/assets/bootstrap/css/bootstrap.min.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/ercell/assets/css/style.css') }}">

	<script type="text/javascript">window.hasMobileFirstExtension = true;</script>
</head>

<body>
	<nav class="nav nav-top fixed-top">
		<div class="container">
			<div class="d-flex align-items-center">
				<a href="{{ route('index_ercell') }}" class="nav-brand">
					<img src="{{ asset('assets/ercell/assets/img/logo.png') }}" alt="">
				</a>
				<div class="btn-group ms-auto">
					<button type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown"
						aria-expanded="false">
						<i class="mdi mdi-earth me-2"></i> IND
					</button>
					<ul class="dropdown-menu dropdown-menu-end">
						<li><button class="dropdown-item" type="button">English</button></li>
						<li><button class="dropdown-item" type="button">Indonesia</button></li>
					</ul>
				</div>
			</div>
		</div>
	</nav>
	<div class="content">
		<section class="banner-pages homepage">
			<div class="container">
				<div class="text">
					<h3 class="text-primary">
						<span class="text-dark"> Selamat datang di </span> ERCell
					</h3>
					<p class="desc">
						Solusi perawatan kulit alami yang memadukan keajaiban botani untuk kulit yang lebih sehat dan
						bersinar.
					</p>
					<a href="{{ route('index_ercell') }}book" class="btn btn-whatsapp"> <i
							class="mdi mdi-whatsapp me-2"></i> Konsultasi
						Dokter</a>
				</div>
			</div>
		</section>

		<section class="product">
			<div class="container">
				<p class="desc">
					Diperkaya dengan bahan-bahan alami terpilih yang memberikan nutrisi esensial untuk kulit Anda,
					memadukan
					kekuatan
					tumbuhan pilihan untuk merawat kulit Anda dengan lembut dan efektif.
				</p>
			</div>
		</section>

		<section class="menus">
			<div class="container">
				<div class="title text-center">
					<h3 class="text-black fw-medium">Produk Skin Care Kami</h3>
				</div>
				<div class="row g-0">
					<div class="col-4 border-end border-bottom">
						<a href="{{ route('serum_ercell') }}"
							class="d-flex align-items-center justify-content-center text-black">
							<div class="items-menu">
								<img src="{{ asset('assets/ercell/assets/img/icon/icon-serum.svg') }}" class="icon" alt="">
								<p>
									Serum
								</p>
							</div>
						</a>
					</div>
					<div class="col-4 border-bottom">
						<a href="{{ route('face_cream_ercell') }}"
							class="d-flex align-items-center justify-content-center text-black">
							<div class="items-menu">
								<img src="{{ asset('assets/ercell/assets/img/icon/icon-faceCream.svg') }}" class="icon" alt="">
								<p>
									Face Cream
								</p>
							</div>
						</a>
					</div>
					<div class="col-4 border-bottom border-start">
						<a href="{{ route('face_wash_ercell') }}"
							class="d-flex align-items-center justify-content-center text-black">
							<div class="items-menu">
								<img src="{{ asset('assets/ercell/assets/img/icon/icon-facialWash.svg') }}" class="icon" alt="">
								<p>
									Facial Wash
								</p>
							</div>
						</a>
					</div>
					<div class="col-4 border-end">
						<a href="{{ route('face_lotion_ercell') }}"
							class="d-flex align-items-center justify-content-center text-black">
							<div class="items-menu">
								<img src="{{ asset('assets/ercell/assets/img/icon/icon-faceLotion.svg') }}" class="icon" alt="">
								<p>
									Face Lotion
								</p>
							</div>
						</a>
					</div>
					<div class="col-4">
						<a href="{{ route('body_lotion_ercell') }}"
							class="d-flex align-items-center justify-content-center text-black">
							<div class="items-menu">
								<img src="{{ asset('assets/ercell/assets/img/icon/icon-facialWash.svg') }}" class="icon" alt="">
								<p>
									Body Lotion
								</p>
							</div>
						</a>
					</div>
					<div class="col-4 border-start">
						<a href="{{ route('micelar_ercell') }}"
							class="d-flex align-items-center justify-content-center text-black">
							<div class="items-menu">
								<img src="{{ asset('assets/ercell/assets/img/icon/icon-micellar.svg') }}" class="icon" alt="">
								<p>
									Micellar Water &amp; Face Mist
								</p>
							</div>
						</a>
					</div>
				</div>
			</div>
		</section>

		<section class="problem">
			<p class="desc">
				Apakah kulit kamu mengalami masalah seperti ini ?
			</p>
		</section>

		<section class="testimoni">
			<div class="container">
				<h3 class="title fw-bold text-dark mb-3">
					Testimonial
				</h3>
				<div class="row gy-3 align-content-stretch">
					<div class="col-md-4">
						<div class="card-testi">
							<div class="d-flex align-items-center">
								<img src="{{ asset('assets/ercell/assets/img/avatar/img-ava01.png') }}" class="img-ava" alt="">
								<div class="name">
									<h6 class="fw-bold mb-0">Ahmad Habibi</h6>
									<p class="mb-0 text-primary fs-18">
										<i class="mdi mdi-star"></i>
										<i class="mdi mdi-star"></i>
										<i class="mdi mdi-star"></i>
										<i class="mdi mdi-star"></i>
										<i class="mdi mdi-star"></i>
									</p>
								</div>
							</div>
							<p class="desc mt-3">
								"Saya telah berjuang dengan jerawat selama bertahun-tahun, tetapi Acne Lotion dari
								ERCell telah menjadi penolong. Kulit saya lebih jernih, lebih halus, dan lebih percaya
								diri dari sebelumnya. Terima kasih!"
							</p>
						</div>
					</div>
					<div class="col-md-4">
						<div class="card-testi">
							<div class="d-flex align-items-center">
								<img src="{{ asset('assets/ercell/assets/img/avatar/img-ava02.png') }}" class="img-ava" alt="">
								<div class="name">
									<h6 class="fw-bold mb-0">Ridho Sebastian</h6>
									<p class="mb-0 text-primary fs-18">
										<i class="mdi mdi-star"></i>
										<i class="mdi mdi-star"></i>
										<i class="mdi mdi-star"></i>
										<i class="mdi mdi-star"></i>
										<i class="mdi mdi-star"></i>
									</p>
								</div>
							</div>
							<p class="desc mt-3">
								"Saya tidak bisa percaya betapa cepatnya rangkaian Glutathione Cream dari ERCell telah
								mengubah kulit saya! Bintik gelap dan tekstur yang tidak rata memudar, dan warna kulit
								saya terlihat lebih cerah dan bersinar. Sangat direkomendasikan!"
							</p>
						</div>
					</div>
					<div class="col-md-4">
						<div class="card-testi">
							<div class="d-flex align-items-center">
								<img src="{{ asset('assets/ercell/assets/img/avatar/img-ava02.png') }}" class="img-ava" alt="">
								<div class="name">
									<h6 class="fw-bold mb-0">Sulis Susanti</h6>
									<p class="mb-0 text-primary fs-18">
										<i class="mdi mdi-star"></i>
										<i class="mdi mdi-star"></i>
										<i class="mdi mdi-star"></i>
										<i class="mdi mdi-star"></i>
										<i class="mdi mdi-star"></i>
									</p>
								</div>
							</div>
							<p class="desc mt-3">
								"Saya tidak bisa percaya betapa cepatnya rangkaian Glutathione Cream dari ERCell telah
								mengubah kulit saya! Bintik gelap dan tekstur yang tidak rata memudar, dan warna kulit
								saya terlihat lebih cerah dan bersinar. Sangat direkomendasikan!"
							</p>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section class="book" id="book">
			<div class="container">
				<h3 class="title-section text-black"> Kontak Kami </h3>
				<form action="">
					<div class="row mb-3 g-3">
						<div class="col-md-4">
							<label for="" class="form-label">Nama Lengkap</label>
							<input type="text" class="form-control" id="" placeholder="Masukkan nama">
						</div>
						<div class="col-md-4">
							<label for="" class="form-label">Alamat</label>
							<input type="text" class="form-control" id="" placeholder="Masukkan alamat">
						</div>
						<div class="col-md-4">
							<label for="" class="form-label">Nomor Whatsapp</label>
							<input type="text" class="form-control" id="" placeholder="Masukkan nomor whatsapp">
						</div>
						<div class="col-md-12">
							<label for="" class="form-label">Keluhan</label>
							<textarea class="form-control" name="" id="" rows="4" placeholder="Tulis keluhan disini ..."></textarea>
						</div>
					</div>
					<div class="row g-3 justify-content-center">
						<div class="col-md-12">
							<button type="submit" class="btn btn-whatsapp w-100"><i class="mdi mdi-whatsapp fs-18 me-2"></i>
								Pesan Sekarang</button>
						</div>
					</div>
				</form>
			</div>
		</section>
	</div>

	<div class="btn-float" data-bs-toggle="tooltip" data-bs-placement="left" data-bs-title="Consult with Our Medical Team"
		data-bs-custom-class="custom-tooltip">
		<div class="btn-circle whatsapp">
			<a href="https://api.whatsapp.com/send/?phone=6285212500030&amp;text&amp;type=phone_number&amp;app_absent=0"
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
			<div class="row">
				<div class="col-md-12">
					<div class="d-flex align-items-center">
						<a href="{{ route('index_ercell') }}">
							<img src="{{ asset('assets/ercell/assets/img/logo-white.png') }}" class="logo" alt="">
						</a>
						<div class="sosmed list-inline ms-auto">
							<a href="{{ route('index_ercell') }}" class="list-inline-item text-white">
								<i class="mdi mdi-web fs-24"></i>
							</a>
							<a href="https://www.facebook.com/klinikcepatsehat" class="list-inline-item text-white">
								<i class="mdi mdi-facebook fs-24"></i>
							</a>
							<a href="https://www.instagram.com/sehatcepat.mobi/" class="list-inline-item text-white">
								<i class="mdi mdi-instagram fs-24"></i>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="footer-bottom">
			Copyright © 2024 ERCell. All Rights Reserved.
		</div>
	</footer>

  <script src="{{ asset('assets/ercell/assets/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
	<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
	<script src="{{ asset('assets/ercell/assets/js/swiper-bundle.min.js') }}"></script>

	<script>
		const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]');
		const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(
			tooltipTriggerEl));

		$(document).ready(function () {
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
	</script>
</body>

</html>
