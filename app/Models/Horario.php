<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Horario extends Model
{
     protected $table = 'horarios';

    protected $fillable = [
        'dia',
        'hora_inicio',
        'hora_fin',
        'asignatura_id',
        'aula_id',
    ];

     public function estudiante(){

    	return $this->BelongTo('App\Models\Estudiante');
}


}
