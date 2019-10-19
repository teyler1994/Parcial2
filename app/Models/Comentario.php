<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comentario extends Model
{
     protected $table = 'comentarios';

    protected $fillable = [
       
        'mensajes'
        
    ];

    public function comentariable()
    {
        return $this->morphTo();
    }

}
