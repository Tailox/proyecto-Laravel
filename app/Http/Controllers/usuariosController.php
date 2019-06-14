<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Usuario;

class usuariosController extends Controller
{


    protected static function listarUsuarios()
    {
 

    $objUsu = Usuario::listarUsuarioModel();
    
    return $objUsu;

    }
}
