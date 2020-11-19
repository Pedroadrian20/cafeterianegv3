<?php

echo <<<_REGISTROS
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de usuarios</title>
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
    <h1 id="titulo">BIENVENIDO A LA PÁGINA DE REGISTROS DE CAFETERIA</h1>
    <br>
_REGISTROS;

echo<<<_REGISTROS
    <h1 class="subtitulos">NEGOCIO DE CAFETERIA</h1>
    <br>

    <p class="subtitulos">Ingrese su nombre de usuario y contraseña:</p>
    <br>

    <div class="card card-width='100'" id="CardFormulario">
        <header class="card-header">
          <p class="card-header-title">
            Formulario de identificacion de usuarios:
          </p>
        </header>
        <div class="card-content">
            <div class="content">
                <form action='verificacion_cafeteria.php' method='POST'>
                    <label for=usuario>Ingresa un nombre de usuario:</label>
                    <input id="usuario" class="input" type="text" name="usuario" placeholder="usuario">
                    <label for=password>Ingresa tu contraseña proporcionada:</label>
                    <input id="password" class="input" type="password" name="password" placeholder="contraseña"><br>
                    <div>
                        <button class="button is-dark" id="boton" type="submit">Registrarse</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <br>
    <br>
    <br>
_REGISTROS;

echo <<<_REGISTROS
    <br>
    <br>
    <br>
      
</body>
</html>
_REGISTROS;
?>