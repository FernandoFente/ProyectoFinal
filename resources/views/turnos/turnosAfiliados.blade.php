@extends('layouts/layoutApp')

@section('titulo')
    Gestion de Turnos
@endsection

@section('contenido')
        
<h3 class="text-center mt-5">Solicitud de Turno<a href="{{route('TurnosAfiliados.create')}}" class="btn btn-success ml-md-5">Sacar un turno</a></h3>
            

        <h3 class="text-center mt-5">Sus turnos reservados</h3>
        <div class="d-flex justify-content-center">
            <table class="text-center border border-dark bg-primary">
                <tr class="border border-dark">
                    <th>Departamento</th>
                    <th>Fecha</th>
                    <th>cancelar turno</th>
                </tr>
                <tr>
                    <td>asdasdasd</td>
                    <td>11/11/1111</td>
                    <td>
                        <a href="" class="text-center d-flex align-items-center text-celeste">
                            <svg width="1.5em" height="1.5em" viewBox="0 0 16 16" class="bi bi-trash" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                                <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4L4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                            </svg>
                        </a>
                    </td>
                </tr>
            </table>
        </div>
   
@endsection