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
 


Auth::routes(); 

Route::get('/home', 'HomeController@index')->name('home');

Route::middleware(['auth'])->prefix('admin')->group(function () {
    Route::get('/dashboard', 'Backend\DashboardController@index')->name('dashboard');
    Route::resource('user','Backend\UserController');
    Route::resource('setting', 'Backend\SettingController');

});
