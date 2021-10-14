<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;



Route::get('/', 'UsuarioController@index');

Route::get('/cadastrar', 'UsuarioController@frmlogin');
Route::post('/inserir', 'UsuarioController@adicionar');


Route::get('/frm_login', 'UsuarioController@Login');
Route::post('/usuario_executar_login', 'UsuarioController@executarlogin');

// rota do administrador
Route::get('/home', 'ApresentarPaginaInicialController@ApresentacaoPagina');
