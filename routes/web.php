<?php

use App\Http\Controllers\Client\Auth\LoginController;
use App\Http\Controllers\Client\Auth\RegisterController;
use App\Http\Controllers\Client\CheckoutController;
use App\Http\Controllers\Client\DetailController;
use App\Http\Controllers\Client\HomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('tour/{tour:slug}', [DetailController::class, 'index'])->name('tour');

Route::get('auth/login', [LoginController::class, 'index'])->name('login');
Route::post('auth/login', [LoginController::class, 'login'])->name('login');
Route::get('auth/logout', [LoginController::class, 'logout'])->name('logout')->middleware('auth', 'verified');
Route::get('auth/verify/{token}', [LoginController::class, 'verify'])->name('verifyEmail');

Route::get('auth/register', [RegisterController::class, 'index'])->name('register');
Route::post('auth/register', [RegisterController::class, 'register'])->name('register');
Route::get('auth/verify', [RegisterController::class, 'verify'])->name('verify');

Route::get('checkout', [CheckoutController::class, 'viewCheckout'])->name('checkout')->middleware('auth', 'verified');
Route::post('save-booking', [CheckoutController::class, 'saveBooking'])->name('saveBooking');
Route::get('thank-you', [CheckoutController::class, 'thankYou'])->name('thankYou');
Route::post('/checkout/process', [CheckoutController::class, 'processCheckout'])->name('checkout.process');
