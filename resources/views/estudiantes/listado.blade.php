@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Estudiantes</h1>
 

@stop

@section('content')
    <p>Listado de Estudiantes</p>
    <a  class="btn btn-primary" href="/estudiantes/registrar">Adicionar</a>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Codigo</th>
      <th scope="col">Nombre</th>
      <th scope="col">Edad</th>
      <th scope="col">Fecha Nacimiento</th>
      <th scope="col">Sexo</th>
      <th scope="col">Ciudad</th>
      <th scope="col">Barrio</th>
      <th scope="col">Programa</th>
      <th scope="col">Opciones</th>
    </tr>
  </thead>
  <tbody>
    @php $contador =0 @endphp
    @foreach ($estudiantes as $f)
    @php $contador +=1 @endphp


    

    <tr>
      <th scope="row">{{$contador}}</th>
      <td>{{$f->cod_estudiante}}</td>
      <td>{{$f->nom_estudiante}}</td>
      <td>{{$f->edad_estudiante}}</td>
      <td>{{$f->fech_estudiante}}</td>
      <td>{{$f->sex_estudiante}}</td>
      <td>{{$f->ciudad}}</td>
      <td>{{$f->barrio}}</td>
      <td>{{$f->programa}}</td>
      

     
      <td>

      <a  class="btn btn-primary">Editar</a>
      <a  class="btn btn-danger" href ="{{route('eliminarEst', $f->cod_estudiante)}}">Eliminar</a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>


@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
