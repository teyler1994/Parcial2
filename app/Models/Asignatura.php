<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Asignatura extends Model
{
    protected $table = 'asignaturas';

    protected $fillable = [
        'nombre',
        'credito',
        'estudiante_id',  
    
    ];

         public function comentarios(){

        return $this->morphMany('App\Models\Comentario', 'comentariable');
    }

     
    
     public function estudiante(){

    	return $this->BelongTo('App\Models\Estudiante');
    }

    public function grupos(){
    
        return $this->belongsToMany('App\Models\Grupo');
    }


 }
