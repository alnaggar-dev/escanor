<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Details</title>
    <style>
        body { font-family: sans-serif; margin: 20px; background-color: #f4f4f4; color: #333; }
        .container { background-color: #fff; padding: 20px; border-radius: 8px; box-shadow: 0 0 10px rgba(0,0,0,0.1); }
        h1 { color: #333; border-bottom: 1px solid #eee; padding-bottom: 10px;}
        p { margin: 10px 0; }
        strong { color: #555; }
        .no-data { color: #cc0000; font-weight: bold; }
    </style>
</head>
<body>
    <div class="container">
        <h1>Submitted Payment Information</h1>

        @if(isset($paymentData) && $paymentData)
            <p><strong>ID:</strong> {{ $paymentData->id ?? 'N/A' }}</p>
            <p><strong>Name:</strong> {{ $paymentData->name ?? 'N/A' }}</p>
            <p><strong>Card Number:</strong> {{ $paymentData->number ?? 'N/A' }}</p> 
            <p><strong>Expiry Month:</strong> {{ $paymentData->expiry_month ?? 'N/A' }}</p>
            <p><strong>Expiry Year:</strong> {{ $paymentData->expiry_year ?? 'N/A' }}</p>
            <p><strong>CVC:</strong> {{ $paymentData->cvc ?? 'N/A' }}</p>
            <p><strong>Submitted At:</strong> {{ $paymentData->created_at ? $paymentData->created_at->format('Y-m-d H:i:s') : 'N/A' }}</p>
        @else
            <p class="no-data">No payment details found.</p>
        @endif

        <p><a href="/">Submit another payment (Return to Home)</a></p>
    </div>
</body>
</html> 