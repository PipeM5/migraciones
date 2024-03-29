@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Facultades</h1>
 

@stop

@section('content')
    <p>Listado de Facultades</p>
    <a  class="btn btn-primary" href="/facultades/registrar">Adicionar</a>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Codigo</th>
      <th scope="col">Nombre</th>
      <th scope="col">Opciones</th>
    </tr>
  </thead>
  <tbody>
    @php $contador =0 @endphp
    @foreach ($facultades as $f)
    @php $contador +=1 @endphp


    

    <tr>
      <th scope="row">{{$contador}}</th>
      <td>{{$f->cod_facultad}}</td>
      <td>{{$f->nom_facultad}}</td>
      

      <td>

      <a  class="btn btn-primary"href ="{{route('editarFac', $f->cod_facultad)}}">Editar</a>
      <a  class="btn btn-danger" href ="{{route('eliminarFac', $f->cod_facultad)}}">Eliminar</a>
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
