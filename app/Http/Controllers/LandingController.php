<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\View\View;

class LandingController extends Controller
{
	public function ozoneTheraphy(): View {
		return view('pages/ozone-theraphy');
	}

	public function teethWhitening(): View {
		return view('pages/teeth-whitening');
	}

	public function teethWhitenings(): View {
		return view('pages/teeth-whitenings');
	}

	public function ozoneTheraphyJakarata(): View {
		return view('pages/ozone-theraphy-procedure');
	}
}
