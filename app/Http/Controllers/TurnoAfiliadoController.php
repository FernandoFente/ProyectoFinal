<?php

namespace App\Http\Controllers;

use App\Models\TurnoAfiliado;
use App\Models\Afiliado;
use App\Models\User;
use Auth;
use Illuminate\Http\Request;

class TurnoAfiliadoController extends Controller
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
        $user = Auth::user();
        $afiliado = Afiliado::where('user_id', $user->id)->first();

        return view('turnos.createTurno', 
        ['afiliado_id'=>$afiliado->id]
        );
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

        $afiliado = Afiliado::find($request->afiliado_id);
        $turno->afiliado()->associate($afiliado);

        $turno->save();

        return redirect()->route('turnosafiliados.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TurnoAfiliado  $turnosAfiliados
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $TurnoAfiliado = TurnoAfiliado::find($id);
        return view('turnos.showTurno', ['turnosafiliado'=>$TurnoAfiliado]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TurnoAfiliado  $turnosAfiliados
     * @return \Illuminate\Http\Response
     */
    public function edit(TurnoAfiliado $TurnoAfiliado)
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
    public function update(Request $request, TurnoAfiliado $TurnoAfiliado)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TurnoAfiliado  $turnosAfiliados
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $TurnoAfiliado = TurnoAfiliado::find($id);
        $TurnoAfiliado->delete();

        return redirect()->route('turnosafiliados.index');
    }
}
