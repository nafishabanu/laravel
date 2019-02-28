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

/***
 *
 *
 *
 *
 * Front end
 *
 *
 */
Route::get('/', function () {
    return view('front.pages.index');
});

/**
 *
 *
 * Back End
 *
 *
 */

Route::get('/admin', function () {
    return view('back.dashboard');
    // return view('back.layouts.master');
});
Route::prefix('admin')->group(function () {
    // Route::resource('post', 'PostController');
    // Route::resource('category', 'CategoryController');

    Route::resources([
        'post' => 'PostController',
        'category' => 'CategoryController',
    ]);

// Route::get('posts', 'PostController@index')->name('post.index');
    // Route::get('posts/create', 'PostController@create')->name('post.create');
    // Route::post('posts/store', 'PostController@store')->name('post.store');
    // Route::get('posts/{post}/edit', 'PostController@edit')->name('post.edit');
    // Route::put('posts/{post}', 'PostController@update')->name('post.update');
    // Route::delete('posts/{post}', 'PostController@destroy')->name('post.destroy');
});
