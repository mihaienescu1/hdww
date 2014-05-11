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

Route::get('/user/login', "UserController@login");

Route::get('/user/register/{network?}', "UserController@register");
Route::post('/user/register', "UserController@store");


Route::get('/user/profile', "UserController@profile");
Route::get('/user/logout', "UserController@logout");

Route::get('/pullInfo/{network}', "UserController@pullInfo");

Route::get('/about', "SiteController@about");
Route::resource('/companies', "CompaniesController");

