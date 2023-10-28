<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Storie;
use App\Models\Employee;

class StorieController extends Controller
{
    public function index(){
        $stories = Storie::all();
        $employees = Employee::all();
        return view('showEmployee', ['stories' => $stories]);
    }
    public function create(){
        return view('stories.create');
        return view('employees.create');
    }
}
