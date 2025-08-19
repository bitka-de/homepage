<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MetaController extends Controller
{
    public function pay(Request $request)
    {
        // Hier kommt die Zahlungslogik hin (z.B. Stripe, PayPal, etc.)
        // Aktuell nur Dummy-Response
        return response()->json(['status' => 'success', 'message' => 'Zahlung empfangen!']);
    }
}
