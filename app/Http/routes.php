<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

$domain = env('BASE_DOMAIN');

Route::group(['domain' => 'blog.' . $domain], function () {
    Route::get('/', ['as' => 'showBlogPosts', 'uses' => 'BlogPostController@index']);

    Route::group(['middleware' => 'auth'], function () {
        Route::get('new', ['as' => 'createBlogPost', 'uses' => 'BlogPostController@create']);
        Route::post('new', ['as' => 'storeBlogPost', 'uses' => 'BlogPostController@store']);
        Route::get('{slug}/edit', ['as' => 'editBlogPost', 'uses' => 'BlogPostController@edit']);
        Route::put('update/{id}', ['as' => 'updateBlogPost', 'uses' => 'BlogPostController@update']);
        Route::delete('{id}', ['as' => 'destroyBlogPost', 'uses' => 'BlogPostController@destroy']);
    });

    Route::get('{slug}', ['as' => 'showBlogPost', 'uses' => 'BlogPostController@show']);
});

Route::group(['domain' => $domain], function () {
    Route::get('/', ['as' => 'homepage', 'uses' => 'HomeController@index']);

    Route::group(['prefix' => 'auth'], function () {
        // Authentication routes...
        Route::get('login', ['as' => 'login', 'uses' => 'Auth\AuthController@getLogin']);
        Route::post('login', ['as' => 'doLogin', 'uses' => 'Auth\AuthController@postLogin']);
        Route::get('logout', ['as' => 'logout', 'uses' => 'Auth\AuthController@getLogout']);

        // Registration routes...
//        Route::get('register', ['as' => 'register', 'uses' => 'Auth\AuthController@getRegister']);
//        Route::post('register', ['as' => 'doRegister', 'uses' => 'Auth\AuthController@postRegister']);
    });
});
