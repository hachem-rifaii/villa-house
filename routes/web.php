<?php

use App\Http\Controllers\Home\agent;
use App\Http\Controllers\Home\Catalog;
use App\Http\Controllers\Home\HomePageController;
use App\Http\Controllers\Home\requestController;
use App\Http\Controllers\Home\TestMapController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('home');
// });
// Route::get('/buy' , function(){
//     return view('pages.buy');
// });
// Route::get('/map' , [TestMapController::class, 'index']);
// Route::get('/show', [requestController::class, 'showForm'])->name('request.show');
// Route::post('/request', [requestController::class, 'store'])->name('request.store');


Route::get('/', [HomePageController::class , 'index'])->name('home');

Route::get('/sell', function () {
    return view('pages.sell');
})->name('sell');

Route::get('/rent', function () {
    return view('pages.rent');
})->name('rent');

Route::get('/offplan', function () {
    return view('pages.ofplan');
})->name('offplan');

Route::get('/catalog', [Catalog::class , 'index'])->name('catalog');

Route::get('/agents', [agent::class , 'index'])->name('agents');

Route::get('/about', function () {
    return view('pages.about');
})->name('about');

Route::get('/contact', function () {
    return view('pages.contact');
})->name('contact');

Route::get('/wishlist', function () {
    return view('pages.wishlist');
})->name('wishlist');

Route::get('/shop', function () {
    return view('shop');
})->name('shop');
Route::get('/productdetails', function () {
    return view('pages.productDetails');
})->name('product.details');
Route::get('/teamdetails', function () {
    return view('pages.teamDetails');
})->name('team.details');
Route::get('/loaction', function () {
    return view('location');
})->name('locations');