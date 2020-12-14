<?php

namespace App\Http\Controllers;

use App\Models\Afiliado;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Auth;

class AfiliadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        $afiliado = Afiliado::where('user_id',$user->id)->get();

        return view('afiliados.perfil',
            ['afiliado'=>$afiliado, 'user'=>$user]
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
        $afiliado = Afiliado::where('user_id', $user->id)->get();

        return view('afiliados.create', ['user'=>$user, 'afiliado'=>$afiliado ]
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
        $afiliado = new Afiliado();
        $afiliado->apellido = $request->apellido;
        $afiliado->cuil = $request->cuil;
        $afiliado->edad = $request->edad;
        $afiliado->plan = $request->plan;

        $user = Auth::user();
        $afiliado->user()->associate($user);

        $afiliado->save();

        return redirect()->route('afiliado.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Afiliado  $afiliado
     * @return \Illuminate\Http\Response
     */
    public function show(Afiliado $afiliado)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Afiliado  $afiliado
     * @return \Illuminate\Http\Response
     */
    public function edit(Afiliado $afiliado)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Afiliado  $afiliado
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Afiliado $afiliado)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Afiliado  $afiliado
     * @return \Illuminate\Http\Response
     */
    public function destroy(Afiliado $afiliado)
    {
        //
    }
}
