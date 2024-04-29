<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class ErcellController extends Controller
{
	public function index(): View {
		return view('pages/ercell/index');
	}

	public function serum(): View {
		return view('pages/ercell/serum');
	}

	public function face_cream(): View {
		return view('pages/ercell/face-cream');
	}

	public function face_wash(): View {
		return view('pages/ercell/facial-wash');
	}

	public function face_lotion(): View {
		return view('pages/ercell/face-lotion');
	}

	public function body_lotion(): View {
		return view('pages/ercell/body-lotion');
	}

	public function face_water_face_mist(): View {
		return view('pages/ercell/micelar-water-face-mist');
	}
}
