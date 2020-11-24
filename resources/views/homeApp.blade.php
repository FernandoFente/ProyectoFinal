@extends('layouts/layoutApp')

@section('titulo')
    Bienvenido al gestor de turnos
@endsection

@section('contenido')
    <h3>Aplicacion para sacar turnos</h3>
    <p>A la izquierda de esta sección vera el menu donde indica las acciones que podra ejecutar con nuestra aplicacion.</p>
    <ul>A continuacion detallaremos dichas acciones.
        <ul><h5>Sacar Turnos:</h5>
            <li>
                <p>En esat sección usted podra sacar turnos desde su casa para el departamento que quiera segun su plan de covertura.</p>
            </li>
        </ul>
        <ul><h5>Hostoria Clinica:</h5>
            <li>
                <p>En esta sección usted tendra acceso a su Historia Clinica, y podra descargarla en pdf para llevarla y compartira con quiera.</p>
            </li>
        </ul>
        <ul><h5>Resultados:</h5>
            <li>
                <p>En esta sección usted podra ingresar para recibir los resultados remotamente de sus estudios realizados sin tener que recurrir al establecimiento.</p>
            </li>
        </ul>
        <ul><h5>Chat Online:</h5>
            <li>
                <p>En esta sección usted podra contactarse con nosotros por cualquier duda o asistencia que precise.</p>
            </li>
        </ul>
        <ul><h5>Pago de Cuota:</h5>
            <li>
                <p>En esta seccion usted podra ver como esta su situacion en cuanto a la cuota a pagar, si la adeuda si esta al día, tambien podra abonarla por este medio.</p>
            </li>
        </ul>
    </ul>
@endsection