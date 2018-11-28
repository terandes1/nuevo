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
Route::get('/en', function () {
    return view('public.en.inicio');
});
// Route::get('/tour/{details?}', function () {
//     return view('public.es.tour_details');
// });

Route::view('en/tour/jewels-of-the-south-belmond-trenes', 'public.en.tours.jewels', ['nombre' => 'JEWELS OF THE SOUTH BELMOND TRENES']);
Route::view('en/tour/multi-active-peru-ii-vinicunca', 'public.en.tours.vinicunca', ['nombre' => 'MULTI ACTIVE PERU II - VINICUNCA']);
Route::view('en/tour/relais-chateaux', 'public.en.tours.relais-chateaux', ['nombre' => 'RELAIS & CHATEAUX']);
Route::view('en/tour/jewels-of-cusco', 'public.en.tours.jewels-of-cusco', ['nombre' => 'JEWELS OF CUSCO']);
Route::view('en/tour/through-the-flavors-of-peru', 'public.en.tours.through-the-flavors-of-peru', ['nombre' => 'THROUGH THE FLAVORS OF PERU']);
Route::view('en/tour/wonders-of-peru-in-family', 'public.en.tours.wonders-of-peru-in-family', ['nombre' => 'WONDERS OF PERU IN FAMILY']);
Route::view('en/tour/from-the-amazon-to-the-highlands', 'public.en.tours.from-the-amazon-to-the-highlands', ['nombre' => 'FROM THE AMAZON TO THE HIGHLANDS']);
Route::view('en/tour/through-the-ancient-trails', 'public.en.tours.through-the-ancient-trails', ['nombre' => 'THROUGH THE ANCIENT TRAILS']);
Route::view('en/tour/multi-active-peru', 'public.en.tours.multi-active-peru', ['nombre' => 'MULTI ACTIVE PERU']);
Route::view('en/tour/hiking-through-the-andes-mountains', 'public.en.tours.hiking-through-the-andes-mountains', ['nombre' => 'HIKING THROUGH THE ANDES MOUNTAINS TO MACHUPICCHU']);
Route::view('en/tour/luxury-amazon-adventure', 'public.en.tours.luxury-amazon-adventure', ['nombre' => 'LUXURY AMAZON ADVENTURE']);

Route::resource('contacto-informacion','contactoController');
Route::post('contacto/','contactoController@contacto')->name('contacto');

// Route::view('en/tour/from-the-amazon-to-the-highlands', 'public.en.tours.highlands', ['nombre' => 'MULTI ACTIVE PERU II - VINICUNCA']);

