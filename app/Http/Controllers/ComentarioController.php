<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comentario;
use App\Models\Estudiante;

class ComentarioController extends Controller
{
    public function index()
    {
       $estudiante = Estudiante::with('comentarios')->get();

       //return csrf_token();

       return $estudiante;

    }

    public function store(Request $request)
   {
    $estudiante = Estudiante::find($request->codigo);

    $comentarios = new Comentario;
    $comentarios2 = new Comentario;

    $comentarios->mensajes = $request->mensaje;
    $comentarios2->mensajes = $request->mensaje2;

   $estudiante->comentarios()->saveMany([$comentarios,$comentarios2]);
   }

   public function update(Request $request,$id)
   {

   $estudiante = Estudiante::find($id);

     $estudiante->nombre   = $request->nombre;
     $estudiante->apellido = $request->apellido;
     $estudiante->telefono = $request->telefono;

     $estudiante->update();

     $comentarios = Comentario::find($request->codigocomentario);

     $comentarios->mensajes = $request->mensajes;

     $comentarios->update();
    }
     
    public function destroy($id)
    {
    $comentarios = Comentario::find($id);
    $comentarios->delete();

   }

}

