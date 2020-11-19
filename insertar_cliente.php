<?php

use Illuminate\Database\Capsule\Manager as DB;

echo <<<_INSERTAR
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insercciones del cliente</title>
    <link rel="stylesheet" href="node_modules/bulma/css/bulma.min.css">
    <link rel="stylesheet" href="diseños/registro_usuarios.css">
    <style>
        body{
            background-image: url("Imagenes/paisaje8.png");
            background-size: cover;
        }

        .encabezado{
            background-image: url("Imagenes/paisaje8.png");
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
    <h1 id="titulo">BIENVENIDO A LA PÁGINA DE MI NEGOCIO DE CAFETERIA</h1>
    <br>
_INSERTAR;

require 'vendor/autoload.php';
require 'config/database.php';

DB::table('clientes_cafeteria')->insert([
    'nombre_cliente' => $_POST["nombre"],
    'nombre_de_usuario' => $_POST["usuario"],
    'correo_electronico' => $_POST["correo"],
    'password_cliente' => $_POST["password"],
]);
echo "<h1 class='subtitulos'>Sus Datos Han Sido Guardados Exitosamente</h1><br>
      <p class='subtitulos'>Toca el siguiente botón para ir a la página principal</p><br>
      <button class='button is-dark'><a href='pagprincipal_cafeteria.php'>Página principal de cafeteria</a></button>";

echo <<<_INSERTAR
    <br>
    <br>
    <br>
      
</body>
</html>
_INSERTAR;
?>