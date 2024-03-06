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

	public function landing1(): View {
		return view('pages/bni/step-1');
	}

	public function landing2(): View {
		return view('pages/bni/step-2');
	}

	public function landing3(): View {
		return view('pages/bni/step-3');
	}
}
