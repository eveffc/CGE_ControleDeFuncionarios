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
Route::get('/employees/create', [EmployeeController::class, 'create']);
Route::get('/employees/{id}', [EmployeeController::class, 'show']);
Route::post('/employees', [EmployeeController::class, 'store']);
Route::delete('employees/{id}', [EmployeeController::class, 'destroy']);



//Rotas de páginas
Route::get('/novo.funcionario', function () {
    return view('employees/create');
});
Route::get('/editar.funcionario', function () {
    return view('EditEmployee');
});
Route::get('/promocao', function () {
    return view('Promotion');
});





