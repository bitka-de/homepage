@extends('layouts.base')

@section('title', 'Checkout')
@section('content')
<div class="container mx-auto px-4 py-12 max-w-lg">
    <h1 class="text-2xl font-bold mb-6">Stripe Checkout</h1>
    <form action="{{ route('stripe.pay') }}" method="POST" class="bg-white rounded shadow p-6">
        @csrf
        <div class="mb-4">
            <label for="amount" class="block text-sm font-medium text-gray-700 mb-1">Betrag (EUR)</label>
            <input type="number" name="amount" id="amount" min="1" step="0.01" required class="w-full px-3 py-2 rounded border border-gray-300 focus:outline-none focus:ring focus:border-one" />
        </div>
        <button type="submit" class="bg-one text-gray-900 font-bold px-4 py-2 rounded hover:bg-two transition">Jetzt bezahlen</button>
    </form>
</div>
@endsection
