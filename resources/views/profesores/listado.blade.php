@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Profesores</h1>
 

@stop

@section('content')
    <p>Listado de Profesores</p>
    <a  class="btn btn-primary" href="/profesores/registrar">Adicionar</a>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Codigo</th>
      <th scope="col">Nombre</th>
      <th scope="col">Catalogo</th>
      <th scope="col">Opciones</th>
    </tr>
  </thead>
  <tbody>
    @php $contador =0 @endphp
    @foreach ($profesores as $f)
    @php $contador +=1 @endphp


    

    <tr>
      <th scope="row">{{$contador}}</th>
      <td>{{$f->cod_profesor}}</td>
      <td>{{$f->nom_profesor}}</td>
      <td>{{$f->cat_profesor}}</td>
      

      <td>

      <a  class="btn btn-primary">Editar</a>
      <a  class="btn btn-danger" href ="{{route('eliminarProfe', $f->cod_profesor)}}">Eliminar</a>
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
