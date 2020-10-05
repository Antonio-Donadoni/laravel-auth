<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employee;
use App\Location;

class AuthController extends Controller
{
  public function __construct()
  {
      $this->middleware('auth');
  }

  public function destroy($id) {

  $emp = Employee::findOrFail($id);
  $emp -> delete();
  return redirect() -> route ('emp-home');
  }

  public function edit($id) {

  $emp = Employee::findOrFail($id);
  $locs = Location::all();
  return view('employeeEdit', compact('emp', 'locs'));
  }

public function update($id, Request $request) {

  $data = $request -> all();
  $emp = Employee::findOrFail($id);
  $emp -> update($data);
  return redirect() -> route ('emp-home');
  }

public function create() {

  $locs = Location::all();
  return view('employeeForm', compact('locs'));
  }

public function store(Request $request) {

  $data = $request -> all();
  Employee::create($data);
  return redirect() -> route ('emp-home');
  }
}
