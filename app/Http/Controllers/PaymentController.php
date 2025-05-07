<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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

        // For now, we'll just return the validated data.
        // In a real application, you would process this data,
        // e.g., store it in a database or interact with a payment gateway.
        return response()->json($validatedData);
    }
}
