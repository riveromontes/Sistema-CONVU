<h1>
  Alumno {{$alumnos->nombre." ".$alumnos->apellido}}
</h1>
 
<p>Id alumno: {{ $alumnos->id}}</p>
<p>Cédula Alumno: {{ $alumnos->cedula}}</p>
<p>Nombre Alumno: {{ $alumnos->nombre }}</p>
<p>Apellido Alumno: {{ $alumnos->apellido}}</p>
<p>Ciudad de Domicilio: {{ $alumnos->ciudad_domicilio}}</p>
<p>Teléfono-Casa: {{ $alumnos->telefono_casa}}</p>
<p>Teléfono-Celular: {{ $alumnos->telefono_celular}}</p>
<p>Correo Electónico: {{ $alumnos->email}}</p>
<hr>
 
<a href="{{ route('alumnos.index') }}">Volver al índice</a>
<a href="{{ route('alumnos.show', $alumnos->id) }}">Recargar</a>