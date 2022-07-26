<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\House;
use Illuminate\Http\Request;

class DepartamentosController extends Controller
{
  //
  public function getIndex()
  {
    # code...
    $depas = Department::all();
    session(['depas' => $depas]);
    $houses = House::all();
    return view('inicio', ['houses' => $houses]);
  }
  public function getDepa($id)
  {
    # code...
    $depa = Department::find($id);
    return view('depa', [
      'depa' => $depa
    ]);
  }
}
