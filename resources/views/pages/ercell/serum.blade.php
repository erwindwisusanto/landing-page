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
				{{-- <div class="btn-group ms-auto">
					<button type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown"
						aria-expanded="false">
						<i class="mdi mdi-earth me-2"></i> IND
					</button>
					<ul class="dropdown-menu dropdown-menu-end">
						<li><button class="dropdown-item" type="button">English</button></li>
						<li><button class="dropdown-item" type="button">Indonesia</button></li>
					</ul>
				</div> --}}
			</div>
		</div>
	</nav>
	<div class="content">
		<section class="banner-pages page serum">
			<div class="container">
				<div class="text">
					<h3 class="text-primary">
						Serum Botani <span class="text-dark"> yang Mencerahkan Kulit Anda </span>
					</h3>
					<p class="desc">
						Dengan kekuatan bahan-bahan alami, serum kami memberikan nutrisi terbaik untuk kulit Anda. Tidak
						hanya melembutkan, tetapi juga memberikan kilau alami dan meningkatkan kelembapan.
					</p>
				</div>
			</div>
			{{-- <img src="{{ asset('assets/ercell/assets/img/BPOM.png') }}" alt="Rounded Image" class="top-right-image"> --}}
		</section>

		<section class="product-list">
			<div class="">
				<div class="row align-content-stretch g-0 gy-md-3">
					<div class="col-md-6">
						<div class="card-product row align-content-stretch g-0">
							<div class="col-7">
								<div class="detail bg-soft">
									<h5 class="name">
										Ultimate Acne Brightening Serum
									</h5>
									<div class="py-5 pt-3" style="border-top: 3px solid #F7931D; position: relative;">
										<span class="price"><strong>Rp. 42.500</strong></span>
									</div>
									<ul>
										<li>
											Serum wajah untuk mengatasi jerawat pada kulit wajah.
										</li>
										<li>
											Membuat wajah tampak lebih cerah dengan warna yang merata.
										</li>
									</ul>
									<p>
										<b>Komposisi :</b> Niacinamide, Carica extract, Salicylic Acid, Dipotassium
										glycyrrhizate, Panthenol, etc.
									</p>
									<a href="#book" class="btn btn-whatsapp w-100 px-2 fs-14">
										<i class="mdi mdi-whatsapp me-2"></i> Pesan Sekarang
									</a>
								</div>
							</div>
							<div class="col-5">
								<div class="image">
									<div class="text-center">
										<img src="{{ asset('assets/ercell/assets/img/product/product-ultimateAcne.png') }}" alt="" class="img-product">
									</div>
									<div class="d-flex align-items-end justify-content-between">
										<img src="{{ asset('assets/ercell/assets/img/product/qrCode.png') }}" class="code" alt="">
										<span class="status">
											20 ml
										</span>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="card-product row align-content-stretch g-0">
							<div class="col-7">
								<div class="detail bg-soft-mobile">
									<h5 class="name">
										DNA Anti Aging Serum
									</h5>
									<div class="py-5 pt-3" style="border-top: 3px solid #F7931D; position: relative;">
										<span class="price"><strong>Rp. 65.000</strong></span>
									</div>
									<ul>
										<li>
											Kandungan Fish Collagen & DNA Salmon
										</li>
										<li>
											Mencegah tanda-tanda penuaan dini <b> (anti aging) </b>
										</li>
										<li>
											Membantu menyamarkan kerutan pada kulit serta membuat kulit menjadi lebih
											kencang <b> (anti wrinkle) </b>
										</li>
									</ul>
									<p>
										<b>Komposisi :</b> Citrus unshiu extract, Aminoethykphosphinic acid, Soluble
										Collagen, Sodium DNA, Crithmum Maritimum Extract, Acetyl hexapeptide-8, etc.
									</p>
									<a href="#book" class="btn btn-whatsapp w-100 px-2 fs-14">
										<i class="mdi mdi-whatsapp me-2"></i> Pesan Sekarang
									</a>
								</div>
							</div>
							<div class="col-5">
								<div class="image bg-soft-mobile">
									<div class="text-center">
										<img src="{{ asset('assets/ercell/assets/img/product/product-dnaAnti.png') }}" alt="" class="img-product">
									</div>
									<div class="d-flex align-items-end justify-content-between">
										<img src="{{ asset('assets/ercell/assets/img/product/qrCode.png') }}" class="code" alt="">
										<span class="status">
											20 ml
										</span>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="card-product row align-content-stretch g-0">
							<div class="col-7">
								<div class="detail bg-soft">
									<h5 class="name">
										Serum 3 in 1
									</h5>
									<div class="py-5 pt-3" style="border-top: 3px solid #F7931D; position: relative;">
										<span class="price"><strong>Rp. 183.000</strong></span>
									</div>
									<ul>
										<li>
											Membuat kulit lebih cerah & glowing <b> (Brightening) </b>
										</li>
										<li>
											Mencegah tanda-tanda penuaan dini <b> (Anti Aging) </b>
										</li>
										<li>
											Membantu menyamarkan kerutan pada kulit serta membuat kulit menjadi lebih
											kencang <b> (Anti Wrinkle) </b>
										</li>
									</ul>
									<p>
										<b>Komposisi :</b> Base gel, Hyaluronic, Licorice, Niacin, Liftonin, Tranex,
										Arbutin, Glutation, Citric Acid, Butylene Glycol, Saphora Root Extract, Saururus
										Chinensis Extract.
									</p>
									<a href="#book" class="btn btn-whatsapp w-100 px-2 fs-14">
										<i class="mdi mdi-whatsapp me-2"></i> Pesan Sekarang
									</a>
								</div>
							</div>
							<div class="col-5">
								<div class="image">
									<div class="text-center">
										<img src="{{ asset('assets/ercell/assets/img/product/product-serum3in1.png') }}" alt="" class="img-product">
									</div>
									<div class="d-flex align-items-end justify-content-between">
										<img src="{{ asset('assets/ercell/assets/img/product/qrCode.png') }}" class="code" alt="">
										<span class="status">
											20 ml
										</span>
									</div>
								</div>
							</div>
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
							<input type="text" class="form-control" id="nama" id="nama" placeholder="Masukkan nama">
						</div>
						<div class="col-md-4">
							<label for="" class="form-label">Alamat</label>
							<input type="text" class="form-control" name="alamat" id="alamat" placeholder="Masukkan alamat">
						</div>
						<div class="col-md-4">
							<label for="" class="form-label">Nomor Whatsapp</label>
							<input type="text" class="form-control" name="wa" id="wa" placeholder="Masukkan nomor whatsapp">
						</div>
						<div class="col-md-12">
							<label for="" class="form-label">Keluhan</label>
							<textarea class="form-control" name="keluhan" id="keluhan" rows="4" placeholder="Tulis keluhan disini ..."></textarea>
						</div>
					</div>
					<div class="row g-3 justify-content-center">
						<div class="col-md-12">
							<button type="submit" class="btn btn-whatsapp w-100" id="btn-wa"><i class="mdi mdi-whatsapp fs-18 me-2"></i>
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
			<a href="https://t.me/cepat_sehat" class="text-white">
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
							{{-- <a href="{{ route('index_ercell') }}" class="list-inline-item text-white">
								<i class="mdi mdi-web fs-24"></i>
							</a> --}}
							<a class="list-inline-item text-white">
								<i class="mdi mdi-facebook fs-24"></i>
							</a>
							<a class="list-inline-item text-white">
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

		$('#btn-wa').click(()=> {
			let name = $('#nama').val();
			let alamat = $('#alamat').val();
			let wa = $('#wa').val();
			let keluhan = $('#keluhan').val();
			let formatMessage = `Hallo ERCell, saya ingin konsultasi\n\nNama: ${name}\nAlamat: ${alamat}\nWa: ${wa}\nKeluhan: ${keluhan}`;

			if (name.length < 3 || alamat.length < 3 || wa.length < 3 || keluhan.length < 3) {
				alert('please fill form with correctly');
				return;
			}

			window.open(`https://api.whatsapp.com/send/?phone=6285212500030&text=${encodeURIComponent(formatMessage)}`);
		});

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
