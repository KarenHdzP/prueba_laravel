<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Grupo;
use Illuminate\Http\Request;

class GrupoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $grupos = DB::table('grupos')->get();

        return view('grupo.index', ['grupos' => $grupos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('grupo.create');
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
            'semestre' => 'required',
            'grupo' => 'required',
            'turno' => 'required',
        ]);

        Grupo::create($request->all());
        return redirect()->route('grupo.index')->with('success','Grupo creado correctamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Grupo  $grupo
     * @return \Illuminate\Http\Response
     */
    public function show(Grupo $grupo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Grupo  $grupo
     * @return \Illuminate\Http\Response
     */
    public function edit(Grupo $grupo)
    {
        return view('grupo.edit',compact('grupo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Grupo  $grupo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Grupo $grupo)
    {
        $request->validate([
            'semestre' => 'required',
            'grupo' => 'required',
            'turno' => 'required',
        ]);

        $grupo->update($request->all());
        return redirect()->route('grupo.index')->with('success','Grupo creado correctamente.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Grupo  $grupo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Grupo $grupo)
    {
        $grupo->delete();
        return redirect()->route('grupo.index')->with('success','Grupo eliminado correctamente');
    }
}
