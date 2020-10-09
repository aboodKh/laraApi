<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    // also colled action
    function index(){
        return view('employees');
    }
    // index & show are convention names
    function show($id){
        return view('employeeDetails', ["id" => $id ]);
    }
}
