<?php

use App\Http\Controllers\BNIController;
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

Route::get('/', function () {
  return view('welcome');
});

route::get('/lang/{locale}', [LanguageController::class, 'lang'])->name('lang');

Route::get('/ozone-theraphy', [LandingController::class, 'ozoneTheraphy'])->name('ozone');
Route::get('/ozone-theraphy-procedure', [LandingController::class, 'ozoneTheraphyJakarata'])->name('ozone-jakarta');
Route::get('/teeth-whitening', [LandingController::class, 'teethWhitening'])->name('tw');
Route::get('/teeth-whitenings', [LandingController::class, 'teethWhitenings'])->name('tw');

Route::get('/landing1', [LandingController::class, 'landing1'])->name('landing1');
Route::get('/landing2', [LandingController::class, 'landing2'])->name('landing2');
Route::get('/landing3', [LandingController::class, 'landing3'])->name('landing3');
Route::post('/submit', [BNIController::class, 'submit'])->name('submit');
