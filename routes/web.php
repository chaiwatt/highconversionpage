<?php

use App\Models\SubDomain;
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

// Route::get('/', function () {
//     $subdomains = SubDomain::all();
//     return view('welcome',[
//         'subdomains' => $subdomains
//     ]);
// });

// Route::get('/getmediatb', [HomeController::class, 'getmediatb'])->name('getmediatb');

Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('/{url}', [HomeController::class, 'salepage'])->name('salepage')->middleware('checksalepageurl');
Route::get('redirect', [PaymentController::class, 'redirect'])->name('redirect');

Route::post('getCharge', [PaymentController::class, 'getCharge'])->name('getCharge');
Route::post('getPrompayPaymentStatus', [PaymentController::class, 'getPrompayPaymentStatus'])->name('getPrompayPaymentStatus');

Auth::routes();



// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


