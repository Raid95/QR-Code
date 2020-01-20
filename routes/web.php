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
    return view('welcome');
});

Route::resource('user','GenerateUser')->except('show');
Route::get('user/{id}', 'GenerateUser@show')->name('user.show');
/*
Route::get('/qrcode/text', function () {
    return QrCode::size(300)->generate('A basic example of QR code!');
});

Route::get('/qrcode', function() {
    return QrCode::size(500)-> email('info@tutsmake.com', 'Welcome to Tutsmake!', 'This is !.');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
*/

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
