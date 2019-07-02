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
Route::get('events/create', function(){
	return view('event.create');
});

Route::resource('inventory', "InventoryController");
Route::resource('events', "EventController");
Route::get('events/{event}/detail',"ShowDetail")->name('event.details');

Route::view('/co-working', "co-working")->name('co-working');
Route::view('/guest',"guest")->name('guest');