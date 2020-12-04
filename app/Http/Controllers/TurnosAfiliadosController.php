<?php

namespace App\Http\Controllers;

use App\Models\TurnoAfiliado;
use Illuminate\Http\Request;

class TurnosAfiliadosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $TurnoAfiliado = TurnoAfiliado::all();

        return view('turnos.turnosAfiliados',
            ['turnosafiliado'=>$TurnoAfiliado]
        );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('turnos.createTurno');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $turno = new TurnoAfiliado();
        $turno->departamento = $request->departamento;
        $turno->turno = $request->turno;
        $turno->horario = $request->horario;

        $turno->save();

        return redirect()->route('turnosafiliados.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TurnoAfiliado  $turnosAfiliados
     * @return \Illuminate\Http\Response
     */
    public function show(TurnosAfiliado $TurnoAfiliado)
    {
        return view('turnos.showTurno', ['turnosafiliado'=>$TurnoAfiliado]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TurnoAfiliado  $turnosAfiliados
     * @return \Illuminate\Http\Response
     */
    public function edit(TurnosAfiliado $TurnoAfiliado)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TurnoAfiliado  $turnosAfiliados
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TurnosAfiliado $TurnoAfiliado)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TurnoAfiliado  $turnosAfiliados
     * @return \Illuminate\Http\Response
     */
    public function destroy(TurnosAfiliado $TurnoAfiliado)
    {
        //
    }
}
