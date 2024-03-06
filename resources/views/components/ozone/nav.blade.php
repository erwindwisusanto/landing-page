<nav class="nav nav-top fixed-top">
	<div class="container">
			<div class="d-flex align-items-center">
					<a href="index.html" class="nav-brand">
							<img src="{{ asset('assets/ozone/img/logo_cepat_sehat.svg') }}" alt="">
					</a>
					<div class="btn-group ms-auto">
							<button type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown"
									aria-expanded="false">
									<i class="mdi mdi-earth me-2"></i> {{ strtoupper(app()->getLocale()) }}
							</button>
							<ul class="dropdown-menu dropdown-menu-end">
								<li><a class="dropdown-item" type="button" href="lang/en">English</a></li>
								<li><a class="dropdown-item" type="button" href="lang/id">Indonesia</a></li>
							</ul>
					</div>
			</div>
	</div>
</nav>
