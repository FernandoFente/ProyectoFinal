<?php

namespace App\Http\Controllers;

use App\Models\TurnosAfiliados;
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
        $turnosAfiliado = TurnosAfiliados::all();

        return view('turnos.turnosAfiliados',
            ['TurnosAfiliado'=>$turnosAfiliado]
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
        $turno = new TurnosAfiliados();
        $turno->departamento = $request->departamento;
        $turno->turno = $request->turno;
        $turno->horario = $request->horario;

        $turno->save();

        return redirect()->route('TurnosAfiliados.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TurnosAfiliados  $turnosAfiliados
     * @return \Illuminate\Http\Response
     */
    public function show(TurnosAfiliados $turnosAfiliados)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TurnosAfiliados  $turnosAfiliados
     * @return \Illuminate\Http\Response
     */
    public function edit(TurnosAfiliados $turnosAfiliados)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TurnosAfiliados  $turnosAfiliados
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TurnosAfiliados $turnosAfiliados)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TurnosAfiliados  $turnosAfiliados
     * @return \Illuminate\Http\Response
     */
    public function destroy(TurnosAfiliados $turnosAfiliados)
    {
        //
    }
}
