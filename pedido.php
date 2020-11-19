<?php

use Illuminate\Database\Capsule\Manager as DB;

echo <<<_PEDIDO
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insercciones de pedido</title>
    <link rel="stylesheet" href="node_modules/bulma/css/bulma.min.css">
    <link rel="stylesheet" href="diseños/pedido.css">
    <style>
        body{
            background-image: url("Imagenes/paisaje8.png");
            background-size: cover;
        }

        .encabezado{
            background-image: url("Imagenes/paisaje8.png");
            background-size: cover;
        }

        .subtitulo{
            background-image: url("Imagenes/paisajeuwu.png");
            background-size: cover;
            font-size: 20px;
            font-family: cursive;
            text-align: center;
            color: black;
            border: white;
        }

        #CardFormulario{
            background-image: url("Imagenes/paisajeuwu.png");
            background-size: cover;
        }
    </style>
</head>
<body>
    <header class="encabezado">
        <div class="columns">
            <div class="column">
                <figure class="image is-128x128">
                    <img class="is-rounded" src="Imagenes/logocafeteria.png">
                </figure>
            </div>
            <div class="column" id="titulohead">
              NEGOCIO DE CAFETERIA
            </div>
            <div class="column">
              </div>
        </div>
    </header>
    
    <br>
    <h1 id="titulo">BIENVENIDO A LA PÁGINA PRINCIPAL DE MI NEGOCIO DE CAFETERIA</h1>
    <br>
_PEDIDO;

require 'vendor/autoload.php';
require 'config/database.php';

DB::table('ticket_compra')->insert([
    'categoria_producto' => $_POST["categoria"],
    'nombre_producto' => $_POST["producto"],
    'size_producto' => $_POST["size"],
    'direccion_cliente' => $_POST["direccion"],
    'codigo_postal' => $_POST["codigopostal"],
]);
echo "<h1 class='subtitulos'>Los datos del pedido han sido guardados exitosamente</h1><br>
      <p class='subtitulos'>Toca el siguiente botón para regresar a la página principal</p><br>
      <button class='button is-dark'><a href='pagprincipal_cafeteria.php'>página principal</a></button>";

echo <<<_PEDIDO
    <br>
    <br>
    <br>
      
</body>
</html>
_PEDIDO;
?>