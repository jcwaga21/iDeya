<?php

Auth::routes();

Route::group(['middleware' => 'guest'], function() {

    Route::get('/', 'HomeController@index')->name('home');

    Route::view('/co-working', "co-working")->name('co-working');
    Route::view('/guest',"guest")->name('guest');

    Route::post('/co-working',"CoWorking\Attendance")->name('co-working.attendance');
    Route::get('/co-working/welcome/{user}',"CoWorking\Welcome")->name('co-working.welcome');
    Route::view('/co-working/coworking-registration-and-login-form',"co-working.coworking-registration-and-login-form")
        ->name('co-working.coworking-registration-and-login-form');

    Route::post('/guest',"Guest\Attendance")->name('guest.attendance');
    Route::get('/guest/{user}/welcome',"Guest\Welcome")->name('guest.welcome');
});

Route::group(["prefix" => 'events'], function(){
	Route::group(['namespace'=>"Event"], function(){
		Route::get('/{event}/register', "RegistrationPageController")->name('register');
	    Route::post('/{event}/participant',"AddParticipantController")->
	    	name('events.participant.add');
	    Route::get('/{event}/seedetails', "SeeDetails")->name('event.seedetails');
	    Route::get('/{participant}/welcome', "WelcomeController")->name('event.welcome');
	});
});

Route::view('/co-working', "co-working")->name('co-working');
Route::view('/guest',"guest")->name('guest');

Route::post('/co-working',"CoWorking\Attendance")->name('co-working.attendance');
Route::get('/co-working/welcome/{user}',"CoWorking\Welcome")->name('co-working.welcome');
Route::view('/co-working/coworking-registration-and-login-form',"co-working.coworking-registration-and-login-form")->name('co-working.coworking-registration-and-login-form');

Route::post('/guest',"Guest\Attendance")->name('guest.attendance');
Route::get('/guest/{user}/welcome',"Guest\Welcome")->name('guest.welcome');


Route::get('/inventory/create',"Inventory\CreateChairController")->name('inventory.create');
Route::post('/inventory/view-inventory',"Inventory\AddChairController")->name('inventory.chair.add');
Route::get('/inventory',"InventoryController@index")->name('inventory');

// pages that only the admin can access ->private
Route::group([ 'prefix' => 'events', 'middleware' => 'auth'], function(){
	Route::group(['namespace' => "Event"], function() {
		Route::get('/',"EventController@index")->name('events.index');
		Route::get('/create', "EventController@create")->name('events.create');
		Route::post('/', "EventController@store")->name('events.store');
		Route::get('/{event}/detail',"ShowDetail")->name('event.details');
		Route::post('/create/addspeaker', "AddSpeakerController")->
			name('event.speaker');
		Route::get('/create/addspeaker', "AddSpeakerController")->name('event.speaker');
	});
	Route::group(['prefix' => "dashboard", "namespace" => "Dashboard"], function() {
	    Route::view('/',"dashboard.index")->name('dashboard.index');
});

	Route::group(['prefix' => "inventory", "namespace" => "Inventory"], function() {
	    Route::post('/',"AddChairController")->name('inventory.chair.add');
	    Route::get('/create',"CreateChairController")->name('inventory.create');
	});

	Route::group(['prefix'=> "account", "namespace" => "Account"], function (){
	    Route::get('/{user}/change-password',"ChangePassword")->name('account.password.change');
	});

});