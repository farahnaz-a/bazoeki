<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MollieController;
use App\Http\Controllers\FrontendController;

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

Route::get('/start-nu', [FrontendController::class, 'startnu'])->name('startnu');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

// MollieController
Route::any('/mollie-payment',[MollieController::class, 'preparePayment'])->name('mollie.payment');
Route::name('webhooks.mollie')->post('webhooks/mollie', [MollieController::class, 'handle']);
Route::get('/payment-success', [MollieController::class, 'paymentSuccess'])->name('payment.success');
// MollieController ENDS
