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
//Route::resource('events', "EventController");
Route::get('events/{event}/register', "Event\RegistrationPageController")->name('register');
Route::post('events/{event}/participant',"Event\AddParticipantController")
		->name('events.participant.add');
Route::get('events/{participant}/welcome', "Event\WelcomeController")->name('event.welcome');

Route::group(["prefix"=>'events'], function(){
    
    Route::get('/',"EventController@index")->name('events.index');
    Route::get('/create', "EventController@create")->name('events.create');
    Route::post('/', "EventController@store")->name('events.store');	
	Route::get('/{event}/detail',"ShowDetail")->name('event.details');
	
});



Route::view('/co-working', "co-working")->name('co-working');
Route::view('/guest',"guest")->name('guest');

Route::post('/co-working',"CoWorking\Attendance")->name('co-working.attendance');
Route::get('/co-working/welcome/{user}',"CoWorking\Welcome")->name('co-working.welcome');
Route::view('/co-working/sign-in',"co-working.sign-in")->name('co-working.sign-in');

Route::post('/guest',"Guest\Attendance")->name('guest.attendance');
Route::get('/guest/{user}/welcome',"Guest\Welcome")->name('guest.welcome');

