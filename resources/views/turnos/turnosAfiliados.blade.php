@extends('layouts/layoutApp')

@section('titulo')
    Gestion de Turnos
@endsection

@section('contenido')
        
<h3 class="text-center mt-5">Solicitud de Turno<a href="{{route('turnosafiliados.create')}}" class="btn btn-success ml-md-5">Sacar un turno</a></h3>
            

        <h3 class="text-center mt-5">Sus turnos reservados</h3>
        <div class="d-flex justify-content-center">
            <table class="table table-striped table-hover bg-primary">

                <thead>
                    <tr>
                        <th>Departamento</th>
                        <th>Fecha</th>
                        <th>horario</th>
                        <th></th>
                    </tr>
                </thead>

                <tbody>
                    @forelse ($turnosafiliado as $turnoAfiliado)
                        
                    <tr>
                        <td>{{$turnoAfiliado->departamento}}</td>
                        <td>{{$turnoAfiliado->turno}}</td>
                        <td>{{$turnoAfiliado->horario}}</td>
                        <td>
                        <a href="{{--{{route('turnosafiliados.show',['turnosafiliado'=>$turnosafiliado->id])}}--}}" class="text-celeste">
                                Cancelar Turno
                            </a>
                        </td>
                    </tr>

                    @empty

                    @endforelse

                </tbody>

            </table>
        </div>
   
@endsection