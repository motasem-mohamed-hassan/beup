<?php

use Illuminate\Support\Facades\Route;

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
Route::prefix(LaravelLocalization::setLocale())->middleware(['localeSessionRedirect', 'localizationRedirect', 'localeViewPath'])->group(function(){

    Route::namespace('Front')->group(function(){
        Route::get('/', 'HomeController@index')->name('home');
        Route::get('/category/{id}','CategoryController@show')->name('category');

    });
});
Route::prefix('/dashboard')->middleware('auth')->namespace('Dashboard')->as('dashboard.')->group(function(){
    Route::get('/', 'DHomeController@index')->name('home');
    Route::get('/categories', 'DCategoriesController@index')->name('categories.index');
    Route::post('/categories', 'DCategoriesController@store')->name('categories.store');
    Route::post('/categories/update', 'DCategoriesController@update')->name('categories.update');
    Route::delete('/categories/delete', 'DCategoriesController@delete')->name('categories.delete');

    Route::get('/posts', 'DPostController@index')->name('posts.index');
    Route::get('/post/create/{id}', 'DPostController@create')->name('post.create');
    Route::post('/post/create', 'DPostController@store')->name('post.store');
    Route::get('/post/{id}', 'DPostController@show')->name('post.show');
    Route::put('/post/update/{id}', 'DPostController@update')->name('post.update');
    Route::delete('/post/delete/{id}', 'DPostController@delete')->name('post.delete');

    Route::get('/teams', 'DTeamController@index')->name('teams.index');

});


Auth::routes();


