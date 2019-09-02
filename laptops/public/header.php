<!DOCTYPE html>
<html lang="en">

<head>
    <title> Laptops</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-latest.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
        integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
        crossorigin="anonymous"></script>

    <script type="text/javascript" src="public/js/externo.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
        integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="public/css/estilos.css" type="text/css" />

    
</head>


<body id="paginaPrincipal" data-spy="scroll" data-target=".navbar" data-offset="60">
    <header>
        <nav class="navbar navbar-default navbar-fixed-top">
            <!--sera un contenedor de 12 columnas-->
            <div class="container">
                <div class="col-sm-2">
                    <a href="?controlador=Default">
                        <img src="public/img/logo.png" width="110" height="60">
                    </a>
                </div>
                <div class="navbar-header">
                    <!--modo de visualizacion vertical-->
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div class="collapse navbar-collapse text-center" id="myNavbar">
                    <!--modo de visualizacion horizontal-->
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="?controlador=Default" >Inicio</a></li>  
                        <li><a href="#bienvenido">Productos</a></li>
                        <li><a href="?controlador=Articulo&accion=cargarCategorias#admin">Registrar</a></li>                        
                    </ul>
                </div>
            </div>
        </nav>
    </header>

        <section id="contenido">
            <section id="principal">
