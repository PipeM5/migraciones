@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Registro de estudiantes</h1>


@stop

@section('content')
    <p>registro de estudiantes </p>

    <form action= "{{url('estudiantes/registrar')}}" method="POST"   >
@csrf

    
    <div class="text-center">

</div>
        <div class="mb-3">
            <label for="codigoEstudiante" class="form-label">Código</label>
            <input type="text" class="form-control" id="codigoEstudiante" name="codigoEstudiante" placeholder="Ingrese el código" >
        </div>

        <div class="mb-3">
            <label for="nombreEstudiante" class="form-label">Nombre</label>
            <input type="text" class="form-control" id="nombreEstudiante" name="nombreEstudiante" placeholder="Ingrese el nombre">
        </div>

        <div class="mb-3">
            <label for="edadEstudiante" class="form-label">Edad</label>
            <input type="number" class="form-control" id="edadEstudiante" name="edadEstudiante" placeholder="Ingrese la edad">
        </div>

        <div class="mb-3">
            <label for="fechaEstudiante" class="form-label">Fecha Nacimiento</label>
            <input type="date" class="form-control" id="fechaEstudiante" name="fechaEstudiante" placeholder="Ingrese la fecha de nacimiento" >
        </div>

        

        <div class="mb-3">
            <label for="sexoEstudiante" class="form-label">Sexo</label>
            <input type="text" class="form-control" id="sexoEstudiante" name="sexoEstudiante" placeholder="Ingrese el sexo (M)MASCULINO o (F)FEMENINO">
        </div>


        <div class="mb-3">
            <label for="ciudadEstudiante" class="form-label">Ciudad</label>
            <input type="text" class="form-control" id="ciudadEstudiante" name="ciudadEstudiante" placeholder="Ingrese la ciudad">
        </div>
        <div class="mb-3">
            <label for="barrioEstudiante" class="form-label">Barrio</label>
            <input type="text" class="form-control" id="barrioEstudiante" name="barrioEstudiante" placeholder="Ingrese el barrio" >
        </div>

        <div class="mb-3">
            <label for="programaEstudiante" class="form-label">Programa</label>
            <input type="text" class="form-control" id="programaEstudiante" name="programaEstudiante" placeholder="Ingrese el programa">
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
