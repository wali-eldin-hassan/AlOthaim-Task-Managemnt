<?php

use Illuminate\Support\Facades\App;
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

Route::get('language/{language}', function ($language) {
    Session()->put('locale', $language);
    App::setlocale($language);
    return back();
})->name('language');

Route::get('/', function () {
    return view('pages.dashboard');
})->name('dashboard');

Route::get('/404', function () {
    return view('pages.404');
})->name('404');


Route::get('/profile', function () {
    return view('pages.profile');
})->name('profile');

Route::get('/tasks', function () {
    return view('pages.tasks');
})->name('tasks');


Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::get('/register', function () {
    return view('auth.register');
})->name('register');





