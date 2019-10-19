<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Asignatura;
use App\Models\Grupo;

class Asignatura_grupoController extends Controller
{
    public function index()
    {
    	$grupo = Grupo::with('asignaturas')->get();

    	return $grupo;

    	//return csrf_token();
    }

    public function store(Request $request)
    {
    	$grupo = Grupo::find($request->codigo);

    	$grupo->asignaturas()->attach([$request->codigoasignatura]);
    }

    public function update(Request $request,$id)
    {
    	$grupo = Grupo::find($id);
    	$grupo->asignaturas()->sync([$request->codigoasignatura]);
         
    }
}
