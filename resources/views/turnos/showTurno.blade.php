<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Cancelar Turno</title>

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <link rel="stylesheet" href="./css/estilosApp.css">

    </head>
    <body>
        <body>
            <div class="container">
                <div class="row">
                    <h2 class="col-sm-12 bg-primary text-center">
                        Solicite su turno
                    </h2>
                </div>
                <div class="row border border-dark">
        
                    <div class="col-sm-8 ">
                        <h3 class="mt-5 text-center">Solicitud de Turno</h3>
        
                    <form action="{{ route('TurnosAfiliados.destroy', ['TurnosAfiliado'=>$TurnosAfiliado->id])}}" method="post">
                            @csrf
                            @method("DELETE")
                            <fieldset disabled="disabled">
                            
                            <div class="form-group">
                                <label for="departamento">Departamento:</label>
                                <input type="text" name="departamento" id="departamento" class="form-contro @error('departamento') is-invalid @enderror"
                                placeholder="departameto" required="required" maxlength="100" 
                                value="{{ $TurnosAfiliado->departamento }}">
                            </div>

                            <div class="form-group">
                                <label for="turno">Fecha:</label>
                                <input type="date" name="turno" class="form-control" id="turno"
                                placeholder="Fecha del turno" required="required" 
                                value="{{ $TurnosAfiliado->turno }}">
                            </div>

                            <div class="form-group">
                                <label for="horario">Horario:</label>
                                <input type="time" name="horario" class="form-control" id="horario"
                                placeholder="Horario del turno" required="required" 
                                value="{{ $TurnosAfiliado->horario }}">
                            </div>

                            </fieldset>
                            
                            <div>
                                <button type="submit" class="btn btn-warning">Eliminar</button>
        
                                <a href={{ route('TurnosAfiliados.index')}} class="btn btn-danger">Cancelar</a>
                            </div>
                        </form>
                    </div>
        
                </div>
        
            </div>
            
        </body>

</html>