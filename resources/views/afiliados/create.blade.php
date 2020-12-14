<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Perfil</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/estilosApp.css">

</head>
<body>
    <header class="d-flex justify-content-around bg-celeste mt-3 mb-3 h-15">
        <h3 class="text-center d-flex align-items-center text-celeste">
            Complete su Perfil
        </h3>

        <a href="{{ route('afiliado.index') }}" class="text-center d-flex align-items-center">
             Volver
        </a>
    </header>

    <section class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Completar perfil</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('afiliado.store') }}">
                            @csrf
                            
                            <div class="form-group row">
                            <label for="apellido" class="col-md-4 col-form-label text-md-right">Apellido</label>

                                <div class="col-md-6">
                                    <input type="text" name="apellido" id="apellido" class="form-control">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="cuil" class="col-md-4 col-form-label text-md-right">Cuil</label>

                                <div class="col-md-6">
                                    <input type="number" name="cuil" id="cuil" class="form-control">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="edad" class="col-md-4 col-form-label text-md-right">Edad</label>

                                <div class="col-md-6">
                                    <input type="number" name="edad" id="edad" class="form-control">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="plan" class="col-md-4 col-form-label text-md-right">Plan</label>

                                <div class="col-md-6">
                                    <input type="text" name="plan" id="plan" class="form-control">
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-success">Completar Perfil</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    
                </div>
            </div>
        </div>
    </section>
</body>
</html>