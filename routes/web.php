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

Route::get('/', function () {
	return view('welcome');
});
//Rotas dos imóveis
Route::prefix('api/imoveis')->group(function(){
	Route::get('/','ImovelController@index')->name('imoveis.index');
	//Route::get('/{id}','ImovelController@show')->name('imovel.show');
	Route::post('/{consulta}','ImovelController@findImovel')->name('imoveis.findImovel');
	Route::post('/','ImovelController@store')->name('imovel.store');
	Route::put('/{id}','ImovelController@update')->name('imovel.update');
	Route::delete('/{id}','ImovelController@destroy')->name('imovel.destroy');
});

//Rotas dos interessados
Route::prefix('api/interessados')->group(function(){
	Route::get('/','InteressadoController@index')->name('interessado.index');
	Route::get('/{id}','InteressadoController@show')->name('interessado.show');
	Route::post('/{consulta}','InteressadoController@findInteressado')->name('imoveis.findInteressado');
	Route::post('/','InteressadoController@store')->name('interessado.store');
	Route::put('/{id}','InteressadoController@update')->name('interessado.update');
	Route::delete('/{id}','InteressadoController@destroy')->name('interessado.destroy');
});

Route::prefix('api/imovel_interessado')->group(function(){
	Route::get('/','Imovel_InteressadoController@index')->name('imovel_interessado.index');
	Route::get('/{id}','Imovel_InteressadoController@show')->name('imovel_interessado.show');
	Route::post('/','Imovel_InteressadoController@store')->name('imovel_interessado.store');
	Route::put('/{id}','Imovel_InteressadoController@update')->name('imovel_interessado.update');
	Route::delete('/{id}','Imovel_InteressadoController@destroy')->name('imovel_interessado.destroy');
});
