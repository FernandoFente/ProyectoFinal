<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Solicitar Turno</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/estilosApp.css">

</head>
<body>
    <div class="container">
        <div class="row">
            <h2 class="col-sm-12 bg-primary text-center">
                Solicite su turno
            </h2>
        </div>
        <div class="row">
            <div class="col-sm-2"></div>

            <div class="col-sm-8 border">
                <h3 class="mt-5 text-center">Solicitud de Turno</h3>

            <form action="{{ route('turnosafiliados.store')}}" method="post" class="text-center d-flex flex-column">
                    @csrf
                    <input type="hidden" name="afiliado_id" value="{{$afiliado_id}}">
                    
                    <label for="departamento">Seleccione Area:</label>
                    <select name="departamento" id="departamento">
                        <option value="">--Seleccione departamento--</option>
                        <option value="clinico">Clinico</option>
                        <option value="pediatra">Pediatra</option>
                        <option value="traumatologo">Traumatologo</option>
                        <option value="dermatologo">Dermatologo</option>
                        <option value="radiologo">Radiologia</option>
                        <option value="dentista">Dentista</option>
                    </select>
                                
                    <label for="turno">Seleccione fecha:</label>
                    <input type="date" name="turno" id="turno">

                    <label for="horario">Horario:</label>
                    <select name="horario" id="horario">
                        <option value="">--Seleccione horario--</option>
                        <option value="8:00">8:00</option>
                        <option value="8:30">8:30</option>
                        <option value="9:00">9:00</option>
                        <option value="9:30">9:30</option>
                        <option value="10:00">10:00</option>
                        <option value="10:30">10:30</option>
                        <option value="11:00">11:00</option>
                        <option value="11:30">11:30</option>
                        <option value="12:00">12:00</option>
                        <option value="12:30">12:30</option>
                        <option value="10:30">13:00</option>
                        <option value="10:30">13:30</option>
                        <option value="14:00">14:00</option>
                    </select>
                    
                    <div>
                        <button type="submit" class="btn btn-success mb-3 mt-3">Reservar Turno</button>

                        <a href={{ route('turnosafiliados.index')}} class="btn btn-danger mb-3 mt-3">Cancelar</a>
                    </div>
                </form>
            </div>

            <div class="col-sm-2"></div>

        </div>

    </div>
    
</body>
</html>

