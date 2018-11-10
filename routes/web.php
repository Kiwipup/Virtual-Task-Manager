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
    return view('primary-views/homepage');
});

Route::get('/primary-views/homepage', function () {

  return view('primary-views.homepage');

});

Route::get('/primary-views/signup', function () {

  return view('primary-views.signup');

});

Route::get('/primary-views/dashboard', function () {

  return view('primary-views.dashboard');

});

Route::get('/primary-views/groups', function () {

  return view('primary-views.groups');

});

Route::get('/primary-views/reports', function () {

  return view('primary-views.reports');

});

Route::get('/primary-views/accountinfo', function () {

  return view('primary-views.accountinfo');

});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
