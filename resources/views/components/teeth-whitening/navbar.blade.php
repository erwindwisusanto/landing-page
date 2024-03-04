<nav class="nav nav-top fixed-top">
	<div class="container">
			<div class="d-flex align-items-center">
					<a href="index.html" class="nav-brand">
						<img src="{{ asset('assets/teeth-whitening/img/logo.png') }}" alt="">
					</a>
					<div class="btn-group ms-auto">
						<button type="button" class="btn btn-secondary dropdown-toggle lang" data-bs-toggle="dropdown"
								aria-expanded="false">
								<i class="mdi mdi-earth me-2"></i> {{ strtoupper(app()->getLocale()) }}
						</button>
						<ul class="dropdown-menu dropdown-menu-end">
								<li><a class="dropdown-item" type="button" href="lang/en"><img src="{{ asset('assets/global/flag/EN Flag_new.png') }}" alt="" width="20">&nbsp;English</a></li>
								<li><a class="dropdown-item" type="button" href="lang/id"><img src="{{ asset('assets/global/flag/ID Flag_new.png') }}" alt="" width="20">&nbsp;Indonesia</a></li>
						</ul>
					</div>
			</div>
	</div>
</nav>
