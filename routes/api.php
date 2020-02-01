<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::namespace('Api')->group(function () {
    //partner routes
    Route::get('partners', 'PartnerController@index');
    Route::post('partners', 'PartnerController@store');
    Route::patch('partners/{id}', 'PartnerController@update');
    Route::get('partners/{id}', 'PartnerController@show');
    Route::delete('partners/{id}', 'PartnerController@delete');

    //room routes
    Route::get('rooms', 'RoomController@index');
    Route::post('rooms', 'RoomController@store');
    Route::patch('rooms/{id}', 'RoomController@update');
    Route::get('rooms/{id}', 'RoomController@show');
    Route::delete('rooms/{id}', 'RoomController@delete');

    //price routes
    Route::get('prices', 'PriceController@index');
    Route::post('prices', 'PriceController@store');
    Route::patch('prices/{id}', 'PriceController@update');
    Route::get('prices/{id}', 'PriceController@show');
    Route::delete('prices/{id}', 'PriceController@delete');

    //availability routes
    Route::get('availabilities', 'AvailabilityController@index');
    Route::post('availabilities', 'AvailabilityController@store');
    Route::patch('availabilities/{id}', 'AvailabilityController@update');
    Route::get('availabilities/{id}', 'AvailabilityController@show');
    Route::delete('availabilities/{id}', 'AvailabilityController@delete');

    //booking routes
    Route::get('bookings', 'BookingController@index');
    Route::post('bookings', 'BookingController@store');
    Route::patch('bookings/{id}', 'BookingController@update');
    Route::get('bookings/{id}', 'BookingController@show');
    Route::delete('bookings/{id}', 'BookingController@delete');

    //user routes
    Route::get('users', 'UserController@index');
    Route::post('users', 'UserController@store');
    Route::patch('users/{id}', 'UserController@update');
    Route::get('users/{id}', 'UserController@show');
    Route::delete('users/{id}', 'UserController@delete');
});