@extends("layouts/layoutHome")

@section("botones")

    <input type="text" name="apellido" id="apellidoUsuario" placeholder="Apellido">

    <input type="password" name="contraseña" id="contraseña" placeholder="Contraseña">

    <a class="btn btn-outline-light" href="homeApp" role="button">Ingresar</a>

    <a class="btn btn-outline-light" href="register" role="button">Registrarse</a>

@endsection
@section("section")
    <section class="container bg-primary mt-4">
        <div class="row">
            <div class="col-sm-12 mt-3 mb-3 text-success">
                <h3 class="text-center">Categorias de Planes</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-2">

            </div>

            <div class="col-sm-8 d-flex centrado mb-5">
                <table>
                    <tr>
                        <th>Plan de salud</th>
                        <th>Alcance</th>
                        <th>Cuota por mes</th>
                    </tr>
                    <tr>
                        <td>Bronce</td>
                        <td>Atención medica</td>
                        <td>$3.500-</td>
                    </tr>
                    <tr>
                        <td>Plata</td>
                        <td>+ Odontologia</td>
                        <td>$4.250-</td>
                    </tr>
                    <tr>
                        <td>Oro</td>
                        <td>+ cirujias, internaciones y operaciones</td>
                        <td>$5.000-</td>
                    </tr>
                    <tr>
                        <td>Platino</td>
                        <td>Todos los servicios</td>
                        <td>$6.000-</td>
                    </tr>
                </table>
            </div>

            <div class="col-sm-2">

            </div>
        </div>
    </section>
@endsection






















    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>