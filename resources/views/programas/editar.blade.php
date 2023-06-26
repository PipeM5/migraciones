@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Editar programa</h1>


@stop

@section('content')
    <p>Editar programa </p>

    <form action= "{{route('editandoPro',['id' => $programa->cod_programa])}}" method="POST"   >
@csrf

    
    <div class="text-center">


              


        <div class="mb-3">
            <label for="codigoPrograma" class="form-label">Código</label>
            <input type="text" class="form-control" id="codigoPrograma" name="codigoPrograma" value="{{$programa->cod_programa}}" >
        </div>

        <div class="mb-3">
            <label for="nombrePrograma" class="form-label">Nombre</label>
            <input type="text" class="form-control" id="nombrePrograma" name="nombrePrograma" value="{{$programa->nom_programa}}">
        </div>

        <div class="mb-3">
            <label for="facultad" class="form-label">Facultad</label>
            <input type="text" class="form-control" id="facultad" name="facultad" value="{{$programa->facultad}}">
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
