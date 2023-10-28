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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/novo_funcionario', function () {
    return view('new');
});
Route::get('/editar_funcionario', function () {
    return view('EditEmployee');
});
Route::get('/promocao', function () {
    return view('Promotion');
});
Route::get('/funcionario', function () {
    return view('ShowEmployee');
});


