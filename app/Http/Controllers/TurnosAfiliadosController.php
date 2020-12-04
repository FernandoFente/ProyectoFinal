<?php

namespace App\Http\Controllers;

use App\Models\TurnosAfiliado;
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
        $turnosAfiliado = TurnosAfiliado::all();

        return view('turnos.turnosAfiliados',
            ['turnosafiliado'=>$turnosAfiliado]
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
        $turno = new TurnosAfiliado();
        $turno->departamento = $request->departamento;
        $turno->turno = $request->turno;
        $turno->horario = $request->horario;

        $turno->save();

        return redirect()->route('turnosafiliados.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TurnosAfiliado  $turnosAfiliados
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, TurnosAfiliado $turnosAfiliados)
    {
        return view('turnos.showTurno', ['turnosafiliado'=>$turnosAfiliados]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TurnosAfiliado  $turnosAfiliados
     * @return \Illuminate\Http\Response
     */
    public function edit(TurnosAfiliado $turnosAfiliados)
    {
        dd($turnosAfiliados);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TurnosAfiliado  $turnosAfiliados
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TurnosAfiliado $turnosAfiliados)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TurnosAfiliado  $turnosAfiliados
     * @return \Illuminate\Http\Response
     */
    public function destroy(TurnosAfiliado $turnosAfiliados)
    {
        //
    }
}
