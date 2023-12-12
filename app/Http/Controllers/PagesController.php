<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\estudiantes;

class PagesController extends Controller
{
    public function fnIndex(){
        return view('welcome');
    }

    public function fnEstDetalle($id){
        $xDetAlumnos = Estudiantes::findOrFail($id);
        return view('Estudiantes.pagDetalle',compact('xDetAlumnos'));
    }

    public function fnLista(){
        $xAlumnos = estudiantes::all();
        return view('pagLista', compact('xAlumnos'));
    }

    public function fnGaleria($numero=0) {
        $valor = $numero;
        $otro = 25;

        return view('pagGaleria', compact('valor', 'otro'));
    }

    public function fnRegistrar (Request $request){
        $request->validate([
            'codEst' => 'required',
            'nomEst' => 'required',
            'apeEst' => 'required',
            'fnaEst' => 'required',
            'turMat' => 'required',
            'semMat' => 'required',
            'estMat' => 'required',
        ]);
    $nuevoEstudiante = new estudiantes();
    $nuevoEstudiante->codEst = $request->codEst;
    $nuevoEstudiante->nomEst = $request->nomEst;
    $nuevoEstudiante->apeEst = $request->apeEst;
    $nuevoEstudiante->fnaEst = $request->fnaEst;
    $nuevoEstudiante->turMat = $request->turMat;
    $nuevoEstudiante->semMat = $request->semMat;
    $nuevoEstudiante->estMat = $request->estMat;

    $nuevoEstudiante->save();

    return back()->with('mensaje', 'Estudiante registrado con éxito');


    }
    //
}