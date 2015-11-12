<?php

namespace Ensayo\Http\Controllers;

use Illuminate\Http\Request;
use Ensayo\Http\Requests;
use Ensayo\Http\Controllers\Controller;

class MiControladorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return "hola que tal chaval soy tu contralador";
    }
    public function nombre($nombre)
    {
        return "hola mi nombre es: ".$nombre;
    }
   public function datos($nombre,$apellido)
    {
        return "hola mi nombre es: ".$nombre." y mi apellido:".$apellido;
    }
}
