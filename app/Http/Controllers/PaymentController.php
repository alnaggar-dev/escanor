<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Payment;

class PaymentController extends Controller
{
    //
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string',
            'number' => 'required|string',
            'expiry_month' => 'required|string',
            'expiry_year' => 'required|string',
            'cvc' => 'required|string',
        ]);

        // Create a new Payment record
        $payment = Payment::create($validatedData);

        // Redirect to a route that will display the data, passing the new payment's ID
        return redirect()->route('payment.show', ['payment' => $payment->id]);
    }

    public function showPaymentDetails(Payment $payment)
    {
        // The $payment variable is automatically injected by Laravel
        // based on the ID in the route.
        // No need to fetch from session or manually query the database if using route-model binding.

        return view('payment_details', ['paymentData' => $payment]); // Pass the Payment model instance
    }
}
