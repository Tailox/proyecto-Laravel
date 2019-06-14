<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{

/* 

Esta propiedad sirve para indicar a este modelo que va a trabjar spbre la tabla users

*/ 

    protected $table = 'users';

    protected static function listarUsuarioModel()
    {

         return self::all();


    }
}
