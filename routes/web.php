<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StripeController;

Route::view('/', 'pages.home')->name('home');
Route::view('/ueber-uns', 'pages.ueber-uns')->name('ueber-uns');

Route::view('/leistungen', 'pages.leistungen')->name('leistungen');
Route::view('/leistungen/webseiten', 'pages.webseiten')->name('webseiten');
Route::view('/leistungen/onlineshops', 'pages.onlineshops')->name('onlineshops');
Route::view('/leistungen/programmierung', 'pages.programmierung')->name('programmierung');
Route::view('/leistungen/beratung', 'pages.beratung')->name('beratung');

Route::view('/rechner/webseiten', 'webseiten.index')->name('webseiten.rechner');

Route::view('/kontakt', 'pages.kontakt')->name('kontakt');
Route::view('/links', 'pages.links')->name('links');


#Route::view('/video-meta', 'meta.index')->name('meta.index');

#Route::post('/checkout', [StripeController::class, 'checkout'])->name('meta.checkout');
#Route::get('/video-meta/success', [StripeController::class, 'success'])->name('meta.success');
#Route::get('/cancel', [StripeController::class, 'cancel'])->name('meta.cancel');


# Rechtliches
Route::view('/impressum', 'pages.impressum')->name('impressum');
Route::view('/datenschutz', 'pages.datenschutz')->name('datenschutz');
Route::view('/agb', 'pages.agb')->name('agb');