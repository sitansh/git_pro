<?php

use Illuminate\Support\Facades\Route;


Route::group(['middleware'=>"web"],function(){
Route::get('/','RestoController@index');
Route::get('/list','RestoController@list');
Route::post('/add','RestoController@add');
Route::get('/delete/{id}','RestoController@delete');
Route::get('/edit/{id}','RestoController@edit');
Route::get('edit','RestoController@update');
Route::view('/add','add');
Route::view('/register','register');
Route::post('/register','RestoController@register');
Route::view('login','login');
Route::post('/login','RestoController@login');
});
