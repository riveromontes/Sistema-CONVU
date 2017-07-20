<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests; //Declaramos para poder usar la clase Requests
use App\Alumno; //Declaramos para poder usar la clase Alumno

class AlumnoController extends Controller
{
    /**
  * Muestra una lista de los alumnos.
  *
  * @return Response
  */
 
  public function index()
  {
    // Devolverá todas los alumnos
    $alumnos = Alumno::get();
    return view('alumnos.index')->with('alumnos', $alumnos);
  }
}
