<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProgramController;

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

Route::get('/', function () {
    return view('home', [
        'titlePage' => 'Home',
    ]);
});

Route::prefix('category')->group(function () {
    Route::get('/marbel-edu', [ProductController::class, 'marbel_edu']);
    Route::get('/marbel-friends', [ProductController::class, 'marbel_friends']);
    Route::get('/riri', [ProductController::class, 'riri']);
    Route::get('/kolak', [ProductController::class, 'kolak']);
});

Route::prefix('program')->group(function () {
    Route::get('/karir', [ProgramController::class, 'karir']);
    Route::get('/magang', [ProgramController::class, 'magang']);
    Route::get('/kunjungan-industri', [
        ProgramController::class,
        'kunjungan_industri',
    ]);
});

Route::prefix('news')->group(function () {
    Route::get('/', function () {
        return view('news', [
            'titlePage' => 'News',
            'titleTron' => 'Berita',
            'img' => 'jumbotron-news.jpg',
        ]);
    });

    Route::get('/{id}', function ($id) {
        return view('newsBy', [
            'titlePage' => "News $id",
            'idNews' => $id,
        ]);
    });
});

Route::get('/about-us', function () {
    return view('about', [
        'titlePage' => 'About Us',
        'titleTron' => 'About Us',
        'img' => 'jumbotron-about.jpg',
    ]);
});

Route::get('/contact-us', function () {
    return view('contact', [
        'titlePage' => 'Contact Us',
        'titleTron' => 'Kontak Kami',
        'img' => 'jumbotron-about.jpg',
    ]);
});
