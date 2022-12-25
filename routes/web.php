<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PaymentController;

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
Route::get('/', [HomeController::class, 'index'])->name('index');
// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('redirect', [PaymentController::class, 'redirect'])->name('redirect')->middleware('paidcheck');
Route::get('/{url}', [HomeController::class, 'salepage'])->name('salepage')->middleware('checksalepageurl');
Route::post('getCharge', [PaymentController::class, 'getCharge'])->name('getCharge');
Route::post('getPrompayPaymentStatus', [PaymentController::class, 'getPrompayPaymentStatus'])->name('getPrompayPaymentStatus');

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

