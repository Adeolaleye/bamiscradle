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

Route::get('whoweare', function () { return view('about');})->name('whoweare');
Route::get('whatweoffer', function () { return view('service'); })->name('whatweoffer');
Route::get('gallery', function () { return view('gallery'); })->name('gallery');
Route::get('contact', function () { return view('reachus'); })->name('contact');
Route::get('enrollnow', function () { return view('enrollment'); })->name('enrollnow');
Route::get('/', 'App\Http\Controllers\HomeController@index')->name('home');
Route::post('contactus', 'App\Http\Controllers\HomeController@contact')->name('contactus');
Route::post('enroll', 'App\Http\Controllers\EnrollController@store')->name('enroll');