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


Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

Route::resource('inventory', "InventoryController");
Route::resource('events', "EventController");
Route::get('events/{event}/detail',"ShowDetail")->name('event.details');

Route::get('events/success', function(){
	return 'successful';
})->name('event.success');

Route::get('events/welcome', function(){
	return 'successful';
})->name('event.welcome');

Route::get('events/{event}/register', "Event\RegistrationPageController")->name('register');

Route::view('/co-working', "co-working")->name('co-working');
Route::view('/guest',"guest")->name('guest');