<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\bookController;
use App\Http\Controllers\PengarangController;

Route::get('/', function () {
    return view('index');
})->name('index');

Route::get('ndlqnwdlkqnwdlkqwf', function () {
    return view('about');
})->name('about');

Route::get('ndwqlkndlkqwdqwdqq', function () {
    return view('contact');
})->name('contact');

Route::get('liokowqmjodqmdqnk', function () {
    return view('post');
})->name('post');


Route::prefix('admin')->group(function() {
    Route::get('/', function () {
        return view('admin.index');
    });
     Route::get('/hwdqlihdqlwhdqlwdqwdq', function () {
        return view('admin.index2');
    })->name('index2');
});

    Route::resource('pengarang', PengarangController::class);
    Route::resource('book', bookController::class);
