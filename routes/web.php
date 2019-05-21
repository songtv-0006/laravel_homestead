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

Route::get('/', 'PagesController@home');

Route::get('/help', 'PagesController@help');

Route::get('/about', 'PagesController@about');

Route::get('/contact', 'PagesController@contact');

Route::get('/tickets', 'TicketsController@index');

Route::get('/tickets/{slug?}', 'TicketsController@show');

Route::get('/tickets/{slug?}/edit', 'TicketsController@edit');

Route::post('/tickets/{slug?}/edit', 'TicketsController@update');

Route::post('/tickets/{slug?}/delete', 'TicketsController@destroy');

Route::post('/comment','CommentsController@newComment');

Route::get('/login', function() {
    return 'This is login page';
});