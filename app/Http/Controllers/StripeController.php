<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Stripe\Stripe;
use Stripe\Checkout\Session;



class StripeController extends Controller
{
    /**
     * Start Stripe Checkout and redirect to Stripe payment page.
     */
    public function checkout(): \Illuminate\Http\RedirectResponse
    {
        Stripe::setApiKey(config('services.stripe.secret'));
        $session = Session::create([
            'payment_method_types' => ['card'],
            'line_items' => [[
                'price_data' => [
                    'currency' => 'eur',
                    'product_data' => [
                        'name' => 'Video-Meta',
                        'description' => 'Zahlung für Video-Meta Service',
                        'images' => [
                            'https://bitka.de/images/bitka-preview.jpg',
                        ],
                        'metadata' => [
                            'service' => 'video-meta',
                        ],
                    ],
                    'unit_amount' => 1900,
                ],
                'quantity' => 1,
            ]],
            'mode' => 'payment',
            'success_url' => route('meta.success', ['session_id' => '{CHECKOUT_SESSION_ID}']),
            'cancel_url' => route('meta.cancel'),
        ]);
        return redirect()->away($session->url);
    }

    /**
     * Handle successful payment and redirect with success message.
     */
    public function success(Request $request): \Illuminate\Http\RedirectResponse
    {
        $sessionID = $request->get('session_id');
        if (!$sessionID) {
            return redirect()->route('meta.index')->with('error', 'Zahlung fehlgeschlagen.');
        }
        Stripe::setApiKey(config('services.stripe.secret'));
        $session = Session::retrieve($sessionID);
        return redirect()->route('meta.index')->with([
            'success' => 'Zahlung erfolgreich!',
            'session_id' => $session->id,
        ]);
    }

    /**
     * Handle cancelled payment and redirect with error message.
     */
    public function cancel(): \Illuminate\Http\RedirectResponse
    {
        return redirect()->route('meta.index')->with('error', 'Zahlung abgebrochen.');
    }
}
