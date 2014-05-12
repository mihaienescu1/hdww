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
Route::post('/user/login', "UserController@loginCheck");

Route::get('/user/register/{network?}', "UserController@register");
Route::get('/user/social-login', "UserController@socialLogin");
Route::post('/user/register', "UserController@store");
Route::post('/user/ratings', "UserController@ratings");


Route::get('/user/profile', "UserController@profile");
Route::get('/user/logout', "UserController@logout");

Route::get('/pullInfo/{network}/action/{action}', "UserController@pullInfo");

Route::get('/about', "SiteController@about");
Route::resource('/companies', "CompaniesController");
Route::get('/api/companies', array('as'=>'api.companies', 'uses'=>'CompaniesController@getDatatable'));
