<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Estudiante;
use Illuminate\Http\Request;

class EstudianteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $estudiantes = DB::table('estudiantes')->get();
        return view('estudiante.index', ['estudiantes' => $estudiantes]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $grupos = DB::table('grupos')->get();
        return view('estudiante.create', ['grupos' => $grupos]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre_estudiante' => 'required',
            'apellidos' => 'required',
            'edad' => 'required',
            'correo_electronico' => 'required',
            'telefono' => 'required',
            'grupo_id' => 'required',
        ]);
        Estudiante::create($request->all());
        return redirect()->route('estudiante.index')->with('success','Estudiante creado correctamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Estudiante  $estudiante
     * @return \Illuminate\Http\Response
     */
    public function show(Estudiante $estudiante)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Estudiante  $estudiante
     * @return \Illuminate\Http\Response
     */
    public function edit(Estudiante $estudiante)
    {
        $grupos = DB::table('grupos')->get();
        return view('estudiante.edit',compact('estudiante'), ['grupos'=>$grupos]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Estudiante  $estudiante
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Estudiante $estudiante)
    {
        $request->validate([
            'nombre_estudiante' => 'required',
            'apellidos' => 'required',
            'edad' => 'required',
            'correo_electronico' => 'required',
            'telefono' => 'required',
            'grupo_id' => 'required',
        ]);

        $estudiante->update($request->all());
        return redirect()->route('estudiante.index')->with('success','Estudiante creado correctamente.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Estudiante  $estudiante
     * @return \Illuminate\Http\Response
     */
    public function destroy(Estudiante $estudiante)
    {
        $estudiante->delete();
        return redirect()->route('estudiante.index')->with('success','Estudiante eliminado correctamente');
    }
}
