<?php

Route::view('login', "office::login")->name('office.login');
Route::post('login', "LoginController")->name('office.login.submit');

Route::group(['middleware'=> 'auth'], function(){
    Route::view('employees/create', 'office::employee.create')->name('employee.create');
    Route::post('employees', 'Employee\CreateEmployeeController')->name('employee.store');
    Route::get('employees', 'Employee\EmployeeListingController')->name('employee.listing');
});
