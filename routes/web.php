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
    return view('home');
});


Route::get('/', [
    'as' => 'home',
    'uses' => 'HomeController@getHome'
    ]);

Route::get('admin/login', [
    'as' => 'login',
    'uses' => 'HomeController@goLogin'
    ]);

Route::post('admin/dashboard', [
    'as' => 'loginPost',
    'uses' => 'ControlController@getLogein'
    ]);

Route::get('logout/user', [
    'as' => 'logout',
    'uses' => 'HomeController@getLogout'
    ]);


//----------------------------------------------

Route::get('show/category', [
    'as' => 'show.category',
    'uses' => 'CategoryController@show'
    ]);

Route::get('create/category', [
    'as' => 'create.category',
    'uses' => 'CategoryController@create'
    ]);

Route::get('delete/category/{id?}', [
    'as' => 'delete.category',
    'uses' => 'CategoryController@delete'
    ]);



//--------------------------------------------

Route::get('show/activity', [
    'as' => 'show.activity',
    'uses' => 'ActivityController@show'
    ]);

Route::get('create/activity', [
    'as' => 'create.activity',
    'uses' => 'ActivityController@create'
    ]);

Route::get('delete/activity/{id?}', [
    'as' => 'delete.activity',
    'uses' => 'ActivityController@delete'
    ]);


//--------------------------------------------

Route::get('show/event', [
    'as' => 'show.event',
    'uses' => 'EventController@show'
    ]);

Route::post('create/event', [
    'as' => 'create.event',
    'uses' => 'EventController@create'
    ]);

Route::get('delete/event/{id?}', [
    'as' => 'delete.event',
    'uses' => 'EventController@delete'
    ]);