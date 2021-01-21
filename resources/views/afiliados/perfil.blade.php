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
    <header class="d-flex justify-content-around bg-primary mt-3 h-15">
        <h3 class="text-center d-flex align-items-center text-celeste">
            Datos de Usuario
        </h3>

        <a href="homeApp" class="text-center d-flex align-items-center text-celeste">
            <svg width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-house-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M8 3.293l6 6V13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5V9.293l6-6zm5-.793V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z"/>
                <path fill-rule="evenodd" d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z"/>
            </svg> Home
        </a>
    </header>

    <section class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Datos de Usuario</div>

                    <div class="card-body">
                        <form>
                            @csrf
                            <fieldset disabled="disabled">

                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right">Email</label>
        
                                <div class="col-md-6">
                                    <input type="text" value="{{$user->email}}" name="email" id="email" class="form-control">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">Nombre</label>
        
                                <div class="col-md-6">
                                    <input type="text" value="{{$user->name}}" name="name" id="name" class="form-control">
                                </div>
                            </div>
                            
                            <div class="form-group row">
                            <label for="apellido" class="col-md-4 col-form-label text-md-right">Apellido</label>

                                <div class="col-md-6">
                                    <input type="text" value="@isset($afiliado){{$afiliado->apellido}}@else{{''}}@endisset" name="apellido" id="apellido" class="form-control">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="cuil" class="col-md-4 col-form-label text-md-right">Cuil</label>

                                <div class="col-md-6">
                                    <input type="number" value="@isset($afiliado){{$afiliado->cuil}}@else{{''}}@endisset" name="cuil" id="cuil" class="form-control">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="edad" class="col-md-4 col-form-label text-md-right">Edad</label>

                                <div class="col-md-6">
                                    <input type="number" value="@isset($afiliado){{$afiliado->edad}}@else{{''}}@endisset" name="edad" id="edad" class="form-control">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="plan" class="col-md-4 col-form-label text-md-right">Plan</label>

                                <div class="col-md-6">
                                    <input type="text" value="@isset($afiliado){{$afiliado->plan}}@else{{''}}@endisset" name="plan" id="plan" class="form-control">
                                </div>
                            </div>

                            </fieldset>

                            <div class="form-group row mb-0">
                                <div class="col-md-12 text-center">
                                    <a href="{{ route('afiliado.edit',['afiliado'=>$afiliado->id]) }}" class="btn btn-success ml-md-5">Editar Perfil</a>
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
