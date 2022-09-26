<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'App\Http\Controllers\EnderecoController@index')->name('home');

Route::get('/adicionar', 'App\Http\Controllers\EnderecoController@adicionar')->name('adicionar');

Route::get('/buscar', 'App\Http\Controllers\EnderecoController@buscar')->name('buscar');

Route::post('/salvar', 'App\Http\Controllers\EnderecoController@salvar')->name('salvar');

Route::get('/adicionar_cnpj', 'App\Http\Controllers\CnpjController@adicionar_cnpj')->name('adicionar_cnpj');

Route::get('/buscar_cnpj', 'App\Http\Controllers\CnpjController@buscar_cnpj')->name('buscar_cnpj');

Route::post('/salvar_cnpj', 'App\Http\Controllers\CnpjController@salvar_cnpj')->name('salvar_cnpj');