<?php

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
    return view('public.en.inicio');
});
// Route::get('/tour/{details?}', function () {
//     return view('public.es.tour_details');
// });

Route::view('en/tour/jewels-of-the-south-belmond-trenes', 'public.en.tours.jewels', ['nombre' => 'JEWELS OF THE SOUTH BELMOND TRENES']);
Route::view('en/tour/multi-active-peru-ii-vinicunca', 'public.en.tours.vinicunca', ['nombre' => 'MULTI ACTIVE PERU II - VINICUNCA']);
Route::view('en/tour/relais-chateaux', 'public.en.tours.relais-chateaux', ['nombre' => 'RELAIS & CHATEAUX']);
Route::view('en/tour/jewels-of-peru', 'public.en.tours.jewels-of-peru', ['nombre' => 'JEWELS OF PERU']);

// Route::view('en/tour/from-the-amazon-to-the-highlands', 'public.en.tours.highlands', ['nombre' => 'MULTI ACTIVE PERU II - VINICUNCA']);

