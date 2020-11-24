@extends("layouts/layoutHome")

@section("botones")

    <a class="btn btn-outline-light" href="/" role="button">Volver</a>

@endsection

@section("section")
    <div class="container w-50 bg-success">
        <div class="row mt-3 mb-3">
            <h2 class="col-sm-12 text-center text-light">Formulario de Registro</h2>
        </div>
        <div class="row">

            <div class="col-sm-2"></div>

            <div class="col-sm-8 bg-light d-flex justify-content-center border-rounded border border-dark rounded-pill">
                <form action="#" method="post" class="d-flex flex-column text-success">
                    @csrf

                    <label for="nombre">Nombre:
                        <input type="text" name="nombre" id="nombre" class="m-2 border-bottom border-success">
                    </label>
                    <label for="apellido">Apellido:
                        <input type="text" name="apellido" id="apellido" class="m-2 border-bottom border-success">
                    </label>
                    <label for="cuil">C.U.I.L:
                        <input type="number" name="cuil" id="cuil" class="m-2 border-top border-bottom border-success">
                    </label>
                    <label for="contraseña">Contraseña:
                        <input type="text" name="contraseña" id="contraseña" class="m-2 border-bottom border-success">
                    </label>

                    <button type="submit" class="w-75 ml-5 bg-success text-light m-2">Registrarse</button>
                </form>
            </div>

            <div class="col-sm-2"></div>

        </div>
    </div>
@endsection