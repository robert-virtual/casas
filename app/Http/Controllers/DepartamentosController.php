<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DepartamentosController extends Controller
{
    //
    public $depas = [
        "Atlántida",
        "Colón",
        "Comayagua",
        "Copán",
        "Cortés",
        "Choluteca",
        "El Paraíso",
        "Francisco Morazán",
        "Gracias a Dios",
        "Intibucá",
        "Islas de la Bahía",
        "La Paz",
        "Lempira",
        "Ocotepeque",
        "Olancho",
        "Santa Bárbara",
        "Departamento de Valle",
        "Departamento de Yoro"
    ];
    public function getIndex()
    {
        # code...
        return view('inicio',[
            "depas"=>$this->depas
        ]);
    }
    public function getDepa($id)
    {
        # code...
        $depa = $this->depas[$id];
        return view('depa',[
            "depas"=>$this->depas,
            "depa"=>$depa
        ]);
    }
}
