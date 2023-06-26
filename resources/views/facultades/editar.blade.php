@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Editar facultad</h1>


@stop

@section('content')
    <p>Editar facultad </p>

    <form action= "{{route('editandoFac',['id' => $facultad->cod_facultad])}}" method="POST"   >
@csrf

    
    <div class="text-center">


        <div class="mb-3">
            <label for="codigoFacultad" class="form-label">Código</label>
            <input type="text" class="form-control" id="codigoFacultad" name="codigoFacultad" value="{{$facultad->cod_facultad}}" >
        </div>

        <div class="mb-3">
            <label for="nombreFacultad" class="form-label">Nombre</label>
            <input type="text" class="form-control" id="nombreFacultad" name="nombreFacultad" value="{{$facultad->nom_facultad}}">
        </div>
        
       
        <button type="submit" class="btn btn-success">Editar</button>
   


</div>
<br>





</form>   

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
