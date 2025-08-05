<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'pages.home')->name('home');
Route::view('/ueber-uns', 'pages.ueber-uns')->name('ueber-uns');

Route::view('/leistungen', 'pages.leistungen')->name('leistungen');
Route::view('/leistungen/webseiten', 'pages.webseiten')->name('webseiten');
Route::view('/leistungen/onlineshops', 'pages.onlineshops')->name('onlineshops');
Route::view('/leistungen/programmierung', 'pages.programmierung')->name('programmierung');
Route::view('/leistungen/beratung', 'pages.beratung')->name('beratung');

Route::view('/rechner/webseiten', 'webseiten.index')->name('webseiten.rechner');

Route::view('/kontakt', 'pages.kontakt')->name('kontakt');
# Rechtliches
Route::view('/impressum', 'pages.impressum')->name('impressum');
Route::view('/datenschutz', 'pages.datenschutz')->name('datenschutz');
Route::view('/agb', 'pages.agb')->name('agb');