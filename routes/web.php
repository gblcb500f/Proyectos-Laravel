<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::view('/', 'home')->name('home');
Route::view('/home', 'home')->name('home');
Route::resource('blog','BlogController')->names('projects')->parameters(['blog'=>'blog']);
Route::resource('notas','NotasController');
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/notas/crear', 'NotasController@crear')->middleware('permiso:crear notas');
Route::group(['middleware' => ['permiso:eliminar notas']], function () {
Route::get('notas/{id}/eliminar','NotasController@eliminar')->name('notas.eliminar')->middleware('permiso:eliminar notas');

Route::resource('/files', 'FileController');
Route::get('/files/{id}/imagenes', 'FileController@index');
Route::post('/files/{id}/imagenes', 'FileController@upload');
});