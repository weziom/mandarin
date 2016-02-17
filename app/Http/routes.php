<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested*/

/* Home */
Route::get('/', 'HomeController@index');

/* Lessons */
Route::get('lessons', 'LessonsController@index');
Route::get('lessons/{lesson}', 'LessonsController@show');
Route::post('lessons/create', 'LessonsController@create');

/* Contact */
Route::get('contact', 'ContactController@index');

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});
