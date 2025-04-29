<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('');
});


Route::controller(App\Http\Controllers\HomeController::class)->group(function () {
    Route::get('/', 'index')->name('home');
    Route::get('/about', 'about')->name('about');
    Route::get('/contact', 'contact')->name('contact');
    Route::get('/electrical-electronics', 'services')->name('services');
    Route::get('/engineering', 'service2')->name('service2');
    Route::get('/motor-rewinding', 'service3')->name('service3');
    Route::get('/our_clients', 'ourClients')->name('our_clients');

});
