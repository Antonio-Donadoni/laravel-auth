<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employee;
use App\Location;

class EmployeeController extends Controller
{

  public function index() {

    $emps = Employee::all();
    return view('welcome', compact('emps'));
  }

  public function show($id) {

    $emp = Employee::findOrFail($id);
    $loc = Location::all();
    return view('employeeShow', compact('emp', 'loc'));
  }


}
