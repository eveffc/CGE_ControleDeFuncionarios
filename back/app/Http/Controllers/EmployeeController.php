<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;

class EmployeeController extends Controller
{
    public function index(){
        $employees = Employee::all();
        return view('welcome', ['employees' => $employees]);
    }

    // public function create(){
    //     return view('employees.create');
    // }

    public function create() {
        return view('novo.funcionario');
    }

    public function store(Request $request)
    {
    // Valide os dados do formulário, por exemplo:
    $validatedData = $request->validate([
        'nome' => 'required',
        'matricula' => 'required',
        'cargo' => 'required',
        'salario' => 'required',
        'data_promocao' => 'required',
    ]);

    $employee = new Employee;
    $employee->nome = $request->input('nome');
    $employee->matricula = $request->input('matricula');
    $employee->cargo = $request->input('cargo');
    $employee->salario = $request->input('salario');
    $employee->data_promocao = $request->input('data_promocao');
    $employee->save();

    return redirect('/')->with('msg', 'Funcionario adicionado com sucesso!');
    }

    public function destroy($id) {

        Employee::findOrFail($id)->delete();

        return redirect('/')->with('msg', 'Funcionário excluído!');

    }
    }
