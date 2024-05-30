<?php

use App\Http\Controllers\BNIController;
use App\Http\Controllers\ErcellController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\LanguageController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//   return view('welcome');
// });

// route::get('/lang/{locale}', [LanguageController::class, 'lang'])->name('lang');

// Route::get('/ozone-theraphy', [LandingController::class, 'ozoneTheraphy'])->name('ozone');
// Route::get('/ozone-theraphy-procedure', [LandingController::class, 'ozoneTheraphyJakarata'])->name('ozone-jakarta');
// Route::get('/teeth-whitening', [LandingController::class, 'teethWhitening'])->name('tw');
// Route::get('/teeth-whitenings', [LandingController::class, 'teethWhitenings'])->name('tw');

// Route::get('/landing1', [LandingController::class, 'landing1'])->name('landing1');
// Route::get('/landing2', [LandingController::class, 'landing2'])->name('landing2');
// Route::get('/landing3', [LandingController::class, 'landing3'])->name('landing3');
// Route::post('/submit', [BNIController::class, 'submit'])->name('submit');

// Route::prefix('ercell')->group(function () {
	Route::get('/', [ErcellController::class, 'index'])->name('index_ercell');
	Route::get('/serum', [ErcellController::class, 'serum'])->name('serum_ercell');
	Route::get('/face-cream', [ErcellController::class, 'face_cream'])->name('face_cream_ercell');
	Route::get('/face-wash', [ErcellController::class, 'face_wash'])->name('face_wash_ercell');
	Route::get('/face-lotion', [ErcellController::class, 'face_lotion'])->name('face_lotion_ercell');
	Route::get('/body-lotion', [ErcellController::class, 'body_lotion'])->name('body_lotion_ercell');
	Route::get('/micelar-water-face-mist', [ErcellController::class, 'face_water_face_mist'])->name('micelar_ercell');
// });
