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


Route::resource('posts', 'PostsController');
Route::resource('web', 'WebController');

// Route::get('contact/temp', 'ContactController@temp');

Route::group(array('before' => 'auth'), function(){
    Route::resource('posts', 'PostsController', array('only' => array('create', 'store', 'edit', 'update', 'destroy')));
    Route::resource('web', 'WebController', array('only' => array('create', 'store', 'edit', 'update', 'destroy')));
});



Route::get('login', 'SessionController@create');
Route::get('logout', 'SessionController@destroy');


Route::resource('session', 'SessionController');

Route::get('/', function()
{
    return View::make('index');
});

Route::get('about', function()
{
    return View::make('about');
});

Route::resource('contact', 'ContactController');

Route::get("{id}/delete", array("as" => "posts.destroy.get", "uses" => "PostsController@destroy"));
Route::get("/web/{id}/delete", array("as" => "web.destroy.get", "uses" => "WebController@destroy"));
