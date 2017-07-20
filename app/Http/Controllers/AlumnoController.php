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
    //retornamos a la vista alumnos.index pasando como parametro la tabla y el objeto
    return view('alumnos.index')->with('alumnos', $alumnos);
  }

  public function show($id_alumno)
  {
    //Devuelve el alumno especificado por el id recibido como parámetro
    $alumnos = Alumno::find($id_alumno);
    //retornamos a la vista alumnos.index pasando como parametro la tabla y el objeto
    return view('alumnos.show')->with('alumnos', $alumnos);
  }
}
