@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Registro de profesores</h1>


@stop

@section('content')
    <p>registro de profesores </p>

    <form action= "{{url('profesores/registrar')}}" method="POST"   >
@csrf

    
    <div class="text-center">

</div>
        <div class="mb-3">
            <label for="codigoProfesor" class="form-label">Código</label>
            <input type="text" class="form-control" id="codigoProfesor" name="codigoProfesor" placeholder="Ingrese el código" >
        </div>

        <div class="mb-3">
            <label for="nombreProfesor" class="form-label">Nombre</label>
            <input type="text" class="form-control" id="nombreProfesor" name="nombreProfesor" placeholder="Ingrese el nombre">
        </div>

        <div class="mb-3">
            <label for="catalogoProfesor" class="form-label">Catalogo</label>
            <input type="text" class="form-control" id="catalogoProfesor" name="catalogoProfesor" placeholder="Ingrese el catalogo">
        </div>


        <button type="submit" class="btn btn-success">Registrar</button>
   


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
