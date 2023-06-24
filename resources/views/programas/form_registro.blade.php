@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Registro de programas</h1>


@stop

@section('content')
    <p>registro de programas </p>

    <form action= "{{url('programas/registrar')}}" method="POST"   >
@csrf

    
    <div class="text-center">

</div>
        <div class="mb-3">
            <label for="codigoPrograma" class="form-label">Código</label>
            <input type="text" class="form-control" id="codigoPrograma" name="codigoPrograma" placeholder="Ingrese el código" >
        </div>

        <div class="mb-3">
            <label for="nombrePrograma" class="form-label">Nombre</label>
            <input type="text" class="form-control" id="nombrePrograma" name="nombrePrograma" placeholder="Ingrese el nombre">
        </div>

        <div class="mb-3">
            <label for="facultad" class="form-label">Facultad</label>
            <input type="text" class="form-control" id="facultad" name="facultad" placeholder="Ingrese la facultad">
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
