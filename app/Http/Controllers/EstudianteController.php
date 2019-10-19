<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Estudiante;
use App\Models\Horario;


class EstudianteController extends Controller
{
  public function index()
  {
  	$estudiante = Estudiante::with('horario')->get();
  	return $estudiante;
    //return csrf_token(); 

  }  
    public function store(Request $request)

   {
     $estudiante = new Estudiante;

     $estudiante->nombre   = $request->nombre;
     $estudiante->apellido = $request->apellido;
     $estudiante->telefono = $request->telefono;

     $estudiante->save();

     $horario = new Horario;

     $horario->dia         = $request->dia;
     $horario->hora_inicio = $request->hora_inicio;
     $horario->hora_fin    = $request->hora_fin;

     $estudiante->horario()->save($horario);
   }

   public function update(Request $request,$id)
   {
    
    $estudiante = Estudiante::find($id);

     $estudiante->nombre   = $request->nombre;
     $estudiante->apellido = $request->apellido;
     $estudiante->telefono = $request->telefono;

     $estudiante->update();

     $horario['dia']         = $request->dia;
     $horario['hora_inicio'] = $request->hora_inicio;
     $horario['hora_fin']    = $request->hora_fin;


     $estudiante->horario()->update($horario);
   }

}
