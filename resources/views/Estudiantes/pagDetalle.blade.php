@extends('pagPlantilla')

@section('titulo')
   <h1 class="display-4"> Pagina Lista </h1>
@endsection

@section('seccion')
   <h3> Detalle Estudiantes </h1>

   <p> Id:                      {{ $xDetAlumnos->id}} </p>
   <p> Codigo:                  {{ $xDetAlumnos->codEst}} </p>
   <p> Apellidos y Nombres:     {{ $xDetAlumnos->apeEst}}, {{$xDetAlumnos->nomEst}} </p>
   <p> Fecha de nacimiento:     {{ $xDetAlumnos->fnaEst}} </p>
   <p> Turno:                   {{ $xDetAlumnos->turnEst}} </p>
   <p> Semestre:                {{ $xDetAlumnos->semEst}} </p>
   <p> Estado de matricula:     {{ $xDetAlumnos->estEst}} </p>


@endsection