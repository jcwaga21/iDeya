<?php

//Auth::routes();

Route::group(['middleware' => 'guest'], function() {

    Route::get('/', 'HomeController@index')->name('home');

    Route::view('/co-working', "co-working")->name('co-working');
    Route::view('/guest',"guest")->name('guest');

    Route::post('/co-working',"CoWorking\Attendance")->name('co-working.attendance');
    Route::get('/co-working/welcome/{user}',"CoWorking\Welcome")->name('co-working.welcome');
    Route::view('/guest/registration',"guest.registration")
        ->name('registration');

    Route::post('/guest',"Guest\Attendance")->name('guest.attendance');
    Route::get('/guest/{user}/welcome',"Guest\Welcome")->name('guest.welcome');

    Route::group(['prefix'=> "account", "namespace" => "Account"], function (){
        Route::view('/{user}/change-password',"co-working.changepassword")->name('account.password.change');
    });
});


Route::group(["prefix"=>'events'], function(){
	Route::group(['namespace' => "Event"], function(){
		Route::get('/{event}/register', "RegistrationPageController")->name('register');
		Route::post('/{event}/participant',"AddParticipantController")->name('events.participant.add');
		Route::get('/{event}/seedetails', "SeeDetails")->name('event.seedetails');
		Route::get('/{participant}/welcome', "WelcomeController")->name('event.welcome');    
	});
});



// should be grouped with the events above
Route::group(['middleware' => 'auth'], function() {
	Route::group(['namespace' => "Event"], function() {
		Route::get('/',"EventController@index")->name('events.index');
		Route::get('/create', "EventController@create")->name('events.create');
		Route::post('/', "EventController@store")->name('events.store');
	    Route::post('events/{event}/create/addspeaker', "AddSpeakerController")->name('event.speaker');
	    Route::get('events/{event}/create/addspeaker', "AddSpeakerController")->name('speaker');
	});

	Route::group(['prefix' => "dashboard", "namespace" => "Dashboard"], function() {
	    Route::view('/',"dashboard.index")->name('dashboard.index');
	});

	Route::group(['prefix' => "inventory", "namespace" => "Inventory"], function() {
	    Route::post('/',"AddChairController")->name('inventory.chair.add');
	    Route::get('/create',"CreateChairController")->name('inventory.create');
	});
	Route::get('/{event}/detail',"ShowDetail")->name('event.details');
});