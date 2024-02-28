<?php

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
Route::get('/teeth-whitening', [LandingController::class, 'teethWhitening'])->name('tw');
