<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', "SiteController@index");

Route::get('/user/signIn', "UserController@signIn");
Route::get('/user/signUp', "UserController@signUp");
Route::get('/user/profile', "UserController@profile");
Route::get('/user/signOut', "UserController@signOut");

Route::resource('/companies', "CompaniesController");