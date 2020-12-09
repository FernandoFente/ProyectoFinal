@extends("layouts/layoutHome")

@section("botones")

    <a class="btn btn-outline-light" href="login" role="button">Ingresar</a>

    <a class="btn btn-outline-light" href="register" role="button">Registrarse</a>

@endsection

@section('nav')

    <div class="row">
        <nav class="col-sm-12 mt-4 d-flex centrado">
            <a href="/">Home</a>
            <a href="#">Sedes</a>
            <a href="#">Detalles Categorias</a>
            <a href="#">Acerca de Nostros</a>
            <a href="#">Contactanos</a>
        </nav>
    </div>
    
@endsection

@section("section")
    <section class="container bg-celeste mt-4">
        <div class="row">
            <div class="col-sm-12 mt-3 mb-3 text-primary">
                <h3 class="text-center">Categorias de Planes</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-2">

            </div>

            <div class="col-sm-8 d-flex centrado mb-5">
                <table>
                    <tr>
                        <th class="border border-primary text-primary">Plan de salud</th>
                        <th class="border border-primary text-primary">Alcance</th>
                        <th class="border border-primary text-primary">Cuota por mes</th>
                    </tr>
                    <tr>
                        <td class="border border-primary text-primary">Bronce</td>
                        <td class="border border-primary text-primary">Atención medica</td>
                        <td class="border border-primary text-primary">$3.500-</td>
                    </tr>
                    <tr>
                        <td class="border border-primary text-primary">Plata</td>
                        <td class="border border-primary text-primary">+ Odontologia</td>
                        <td class="border border-primary text-primary">$4.250-</td>
                    </tr>
                    <tr>
                        <td class="border border-primary text-primary">Oro</td>
                        <td class="border border-primary text-primary">+ cirujias, internaciones y operaciones</td>
                        <td class="border border-primary text-primary">$5.000-</td>
                    </tr>
                    <tr>
                        <td class="border border-primary text-primary">Platino</td>
                        <td class="border border-primary text-primary">Todos los servicios</td>
                        <td class="border border-primary text-primary">$6.000-</td>
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