<?php
use Illuminate\Database\Capsule\Manager as DB;

echo <<<_VERIFICACION
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>verificacion de usuarios</title>
    <link rel="stylesheet" href="node_modules/bulma/css/bulma.min.css">
    <link rel="stylesheet" href="diseños/verificacion.css">
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
    <h1 id="titulo">BIENVENIDO A LA PÁGINA DE IDENTIFICACIÓN DE USUARIOS</h1>
    <br>
_VERIFICACION;

require 'vendor/autoload.php';
require 'config/database.php';

$user = DB::table('usuarios_cafeteria')->leftJoin('perfiles', 'usuarios_cafeteria.idperfil', '=', 'perfiles.idperfil')
->where('password_proporcionado', $_POST['password'])->first();

$mensaje = "";

if($user->password_proporcionado == 'administrador_cafeteria'){
    $mensaje = "<h1 class='subtitulos'>Bienvenido: {$user->nombreperfil} {$user->nombre_usuario} :D</h1>
    <br><p class='subtitulos'>Toca el siguiente botón para consultar los tickets</p>
    <br><button class='button is-dark' id='botones'><a href='ticket_consultar.php'>consultar tickets</a></button><br><br><br>";

} else{
    if ($user->password_proporcionado == 'cliente_cafeteria'){
         $mensaje = "<h1 class='subtitulos'>Bienvenido: {$user->nombreperfil} {$user->nombre_usuario} :D</h1>
         <br><p class='subtitulos'>Toque el siguiente boton para realizar tu registro completo</p>
         <br><button class='button is-dark' id='botones'><a href='pagcliente.php'>realizar registro</a></button><br><br><br>";
    }
} 
echo $mensaje;

echo <<<_VERIFICACION
    <br>
    <br>
    <br>
      
</body>
</html>
_VERIFICACION;

?>