<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="{{ url('/index.css') }}" />
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <title>Armonia</title>
</head>
<body>
    
    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>                        
            </button>
        </div>

        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav">
                <li class="active"><a href="<?php echo route('rutaInicio')?>">Inicio</a></li>
                <li class="dropdown">
                  <a class="dropdown-toggle" data-toggle="dropdown" href="#">Administracion
                  <span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="<?php echo route('rutaAdminInstru')?>">Instrumentos</a></li>
                    <li><a href="<?php echo route('rutaAdminCompo')?>">Componentes</a></li>
                  </ul>
                </li>

                <li class="dropdown">
                  <a class="dropdown-toggle" data-toggle="dropdown" href="#">Reportes
                  <span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="<?php echo route('rutaInventario')?>">Instrumentos</a></li>
                    <li><a href="<?php echo route('rutaReportes')?>">Componentes</a></li>
                  </ul>
                </li>

                <li class="dropdown">
                  <a class="dropdown-toggle" data-toggle="dropdown" href="#">Vender
                  <span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="<?php echo route('rutaVentasInstru')?>">Instrumentos</a></li>
                    <li><a href="<?php echo route('rutaVentasCompo')?>">Componentes</a></li>
                  </ul>
                </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#"><span class="glyphicon glyphicon-user"></span> Iniciar sesión</a></li>
                <li><a href="#"><span class="glyphicon glyphicon-shopping-cart"></span> Carrito</a></li>
            </ul>
        </div>
        </div>
    </nav>

    

@yield('contenido')
<footer class="page-footer font-small pt-4">
  <div class="footer-copyright text-center py-3">© 2020 Copyright:
    <a href="https://google.com/">Armonia Azteca</a>
  </div>
</footer>
</body>

</html>