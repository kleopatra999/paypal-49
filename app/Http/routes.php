<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('paypal', 'paypal@paypal');

Route::resource('/pagar', 'Paypal@checkout');

Route::get('/ejercicio4', function () {
    return view('ejercicio4');
});
Route::get('/plantilla', function () {
    return view('plantilla');
});
