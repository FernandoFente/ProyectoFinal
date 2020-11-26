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

            <div class="col-sm-8 d-flex centrado text-success">
                <h1>OSdelO</h1>
            </div>

            <div class="col-sm-4 d-flex centrado p-2">
                
                @yield("botones")

            </div>

        </div>

        @yield('nav')
        
    </header>
        
    @yield('section')
    
    <footer>
        
    </footer>
</body>
</html>