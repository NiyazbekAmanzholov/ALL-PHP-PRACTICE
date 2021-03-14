<?php


Route::get('/', 'indexController@index');
Route::post('/send', 'messageController@send');

Auth::routes();

Route::middleware(['auth', 'admin'])->group(function() {

Route::get('/admin', 'adminController@index');
Route::get('/admin/page/add/portfolio', 'adminController@page');
Route::get('/admin/add/portfolio', 'adminController@add');
Route::post('/admin/add/portfolio/create', 'adminController@create');
Route::get('/admin/page/edit/portfolio/{id}', 'adminController@editPage');
Route::post('/admin/page/update/portfolio/{id}', 'adminController@update');

});
