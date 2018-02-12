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

Route::namespace('Main')->group(function () {
    Route::get('/', "MainController@index");
});

Route::namespace('Work')->group(function () {
    Route::get('/my-work',"WorkController@showWork");

});

Route::namespace('Fo')->group(function () {

    Route::get('/blog',"BlogController@welcomeblog");

    Route::get('/blog/{slug}',"BlogController@showCat");

    Route::get('/blog/category/{slug}',"BlogController@show");


    Route::get('/cv', function () {
        return view('cv');
    });




});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::post('/article', 'HomeController@store')->name('article');
Route::get('/posts/create', 'HomeController@createArticle');

Route::post('/posts/store', 'HomeController@store');
Route::get('/posts/{id}', 'HomeController@view');
Route::post('posts/{id}/update', 'HomePostController@update');

