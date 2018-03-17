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
    Route::get('/mes-realisations',"WorkController@showWork");

});

Route::namespace('Fo')->group(function () {

    Route::get('/blog',"BlogController@welcomeblog")->name('welcomeblog');

    Route::get('/blog/{slug}',"BlogController@show");

    Route::get('/blog/category/{slug}',"BlogController@showCat");


    Route::get('/cv', function () {
        return view('cv');
    });
    Route::get('/contact', function () {
        return view('contact');
    });



});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::post('/article', 'HomeController@store')->name('article');
Route::get('/posts/create', 'HomeController@createArticle');

Route::post('/posts/store', 'HomeController@store');
Route::get('/posts/{id}', 'HomeController@view');
Route::get('/posts/{id}/edit', 'HomeController@edit')->name('edit');
Route::post('posts/{id}/update', 'HomeController@update')->name('update');
Route::delete('/delete/{id}', 'HomeController@remove')->name('remove');

