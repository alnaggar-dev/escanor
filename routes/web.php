<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaymentController;
use App\Models\Payment;

Route::get('/', function () {
    return view('welcome');
});

// Route to display the submitted payment details using its ID
Route::get('/payment-details/{payment}', [PaymentController::class, 'showPaymentDetails'])->name('payment.show');
