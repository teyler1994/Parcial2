<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Estudiante;
use App\Models\Asignatura;

class AsignaturaController extends Controller
{
   public function index()
   {
   	$estudiante = Estudiante::with('asignaturas')->get();
   	return $estudiante;
   }

   public function store(Request $request)
   {
   	$estudiante = new Estudiante;

   	 $estudiante->nombre   = $request->nombreestudiante;
     $estudiante->apellido = $request->apellido;
     $estudiante->telefono = $request->telefono;

     $estudiante->save();
     
     $asignatura = new Asignatura;
    

     $asignatura->nombre = $request->nombre;
     $asignatura->credito = $request->credito;

    

     $estudiante->asignatura()->saveMany([$asignatura]);

   }

   public function update(Request $request,$id)
   {
   	$estudiante = Estudiante::find($id);

     $estudiante->nombre   = $request->nombreestudiante;
     $estudiante->apellido = $request->apellido;
     $estudiante->telefono = $request->telefono;

     $estudiante->update();

     $asignatura = Asignatura::find($request->codigoasignatura);

     $asignatura->nombre = $request->nombre;
     $asignatura->credito = $request->credito;

     $asignatura->update();

   }
}
