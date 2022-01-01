<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

//Test Routes
Route::get('test', function (){
  return view('layouts.app');
});



//Auth Routes
Auth::routes();

//Custom Routes//
// FrontendController Routes
Route::get('/', 'FrontendController@index')->name('index');
Route::get('add.property', 'FrontendController@addproperty')->name('add.property');

// DashboardController Routes
Route::get('dashboard', 'DashboardController@index')->name('dashboard');

// RoleController Routes
Route::resource('role', 'RoleController');

// UserController Routes
Route::resource('user', 'UserController');

Route::middleware(['auth'])->group(function () {
    // ProfileController Routes
    Route::resource('profile', 'ProfileController');
    Route::post('password/update', 'ProfileController@passwordupdate')->name('profile.password.update');
    Route::post('avatar/update', 'ProfileController@avatarupdate')->name('profile.avatar.update');

    // SettingController Routes
    Route::get('setting/general', 'SettingController@general')->name('setting.general');
    Route::post('setting/general', 'SettingController@generalupdate')->name('setting.general.update');
    Route::get('setting/database', 'SettingController@database')->name('setting.database');
    Route::post('setting/database', 'SettingController@databaseupdate')->name('setting.database.update');
    Route::get('setting/email', 'SettingController@email')->name('setting.email');
    Route::post('setting/email', 'SettingController@emailupdate')->name('setting.email.update');
});

Route::view('test', 'test');
Route::view('test1', 'test1');
