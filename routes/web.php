<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::controller(HomeController::class)->group(function () {
    Route::get('/', 'index')->name('home');
    Route::get('/about-us', 'about')->name('about');

    Route::get('/services', 'services')->name('services.index');
    Route::get('/services/{service:slug}', 'showService')->name('services.show');
    Route::post('/services/request', 'storeServiceRequest')->name('services.request');

    Route::get('/productions', 'productions')->name('productions.index');
    Route::get('/products/{product:slug}', 'showProduct')->name('products.show');
    Route::get('/transformations/{transformation:slug}', 'showTransformation')->name('transformations.show');

    Route::get('/blogs', 'blogs')->name('blogs.index');
    Route::get('/blogs/category/{category:slug}', 'blogsByCategory')->name('blogs.category');
    Route::get('/blogs/{post:slug}', 'showBlog')->name('blogs.show');

    Route::get('/contact-us', 'contact')->name('contact');
    Route::post('/contact-us/send', 'storeContact')->name('contact.store');
});


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
