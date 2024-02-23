<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class LandingController extends Controller
{
	public function ozoneTheraphy(): View
	{
		return view('pages/ozone-theraphy');
	}
}
