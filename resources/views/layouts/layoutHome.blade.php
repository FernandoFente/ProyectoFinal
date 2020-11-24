<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Obra Social del Oeste</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/estilos.css">
</head>
<body>
    
    <header class="container">
        <div class="row bg-primary">

            <div class="col-sm-3 centrado p-2">
                <img src="./img/foto.jpg" alt="foto del sitio" class="img-fluid">
            </div>

            <div class="col-sm-4 d-flex centrado text-success">
                <h1>OSdelO</h1>
            </div>

            <div class="col-sm-5 d-flex centrado p-2">
                
                @yield("botones")

            </div>

        </div>
        <div class="row">
            <nav class="col-sm-12 mt-4 d-flex centrado">
                <a href="/">Home</a>
                <a href="#">Sedes</a>
                <a href="#">Detalles Categorias</a>
                <a href="#">Acerca de Nostros</a>
                <a href="#">Contactanos</a>
            </nav>
        </div>
    </header>
        
    @yield('section');
    
    <footer>
        
    </footer>
</body>
</html>