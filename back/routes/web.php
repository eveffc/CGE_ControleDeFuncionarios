<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\StorieController;
use App\Models\Employee;

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

//home
Route::get('/', [EmployeeController::class, 'index']);

//adicionar novo funcionário
Route::get('/novo.funcionario', function () {
    return view('newEmployee');
});
Route::post('/inserir.employee', [EmployeeController::class, 'create']);

//editar funcionário
Route::get('/editar.funcionario', function () {
    return view('EditEmployee');
});

//criar promoção
Route::get('/promocao', function () {
    return view('Promotion');
});
Route::post('/inserir.promocao', [StorieController::class, 'inserirPromocao']);
//histórico do funcionário
Route::get('/funcionario', [StorieController::class, 'index']);




