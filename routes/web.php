<?php

use Illuminate\Support\Facades\Route;

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
    return view('landing.maintain');
});

Route::get('/home', function () {
    return view('landing/home');
});

Route::get('/login', function () {
    return view('auth.Login');
})->name('login');

Route::get('/registro', function () {
    return view('auth.registro');
})->name('register');

Route::get('/roles', function () {
    return view('auth.roles');
})->name('role');


Route::get('/startups', function () {
    return view('profile.startups');
})->name('startups');

Route::get('/profesionales', function () {
    return view('profile.profesionales');
})->name('professionals');


Route::get('/inversores', function () {
    return view('profile.inversores');
})->name('investors');

Route::get('tablero', function () {
    return view('tablero');
});

Route::get('dashboard', function () {
    return view('dashboard');
});


