<h1 class="text-primary">Lista de Alumnos</h1>
 
<table class="table table-bordered" id="tableAlumnos">
  <thead>
    <tr>
        <th class="text-center">Cédula</th>
        <th class="text-center">Nombre</th>
        <th class="text-center">Apellido</th>
        <th class="text-center">Ciudad Domicilio</th>
        <th class="text-center">Teléfono Casa</th>
        <th class="text-center">Teléfono Celular</th>
        <th class="text-center">Correo-E</th>
        <th class="text-center">Acciones</th>
    </tr>
  </thead>
  <tbody>
    @foreach($alumnos as $alumno)
        <tr>
            <td class="text-center">{{ $alumno->cedula}}</td>
            <td class="text-center">{{ $alumno->nombre}}</td>
            <td class="text-center">{{ $alumno->apellido }}</td>
            <td class="text-center">{{ $alumno->ciudad-domicilio}}</td>
            <td class="text-center">{{ $alumno->telefono-casa}}</td>
            <td class="text-center">{{ $alumno->telefono-celular}}</td>
            <td class="text-center">{{ $alumno->email}}</td>
            <td class="text-center">{{ $alumno->isactive}}</td>
            <td>               
              <a href="{{ route('alumnos.show', $alumno->id) }}" class="btn btn-info">Ver</a>
            </td>
        </tr>
    @endforeach
  </tbody>
  <tfoot>
    <tr>
      <th class="text-center">Cédula</th>
      <th class="text-center">Nombre</th>
      <th class="text-center">Apellido</th>
      <th class="text-center">Ciudad Domicilio</th>
      <th class="text-center">Teléfono Casa</th>
      <th class="text-center">Teléfono Celular</th>
      <th class="text-center">Correo-E</th>
      <th class="text-center">Acciones</th>
    </tr>
  </tfoot>
</table>