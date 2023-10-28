<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\StorieController;

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


Route::get('/', [EmployeeController::class, 'index']);

Route::get('/novo.funcionario', function () {
    return view('new');
});
Route::get('/editar.funcionario', function () {
    return view('EditEmployee');
});
Route::get('/promocao', function () {
    return view('Promotion');
});
Route::get('/funcionario', [StorieController::class, 'index']);




