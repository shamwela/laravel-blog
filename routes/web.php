<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\AuthenticationController;

Route::get('/', [BlogController::class, 'index'])->name('home');
Route::resource('blog', BlogController::class);
Route::view('about', 'about')->name('about');
Route::get('signin', function () {
  return view('signin');
})->name('signin');
Route::post('signin', [AuthenticationController::class, 'signin'])->name('signin');
Route::delete('signout', [AuthenticationController::class, 'signout'])->name('signout');
