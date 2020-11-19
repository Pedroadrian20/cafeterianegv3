<?php

echo <<<_CLIENTE
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de cliente</title>
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
_CLIENTE;

echo<<<_CLIENTE
    <h1 class="subtitulos">NEGOCIO DE CAFETERIA</h1>
    <br>

    <p class="subtitulos">Ingrese los datos que se le piden:</p>
    <br>

    <div class="card card-width='100'" id="CardFormulario">
        <header class="card-header">
          <p class="card-header-title">
            Formulario de registro de cliente:
          </p>
        </header>
        <div class="card-content">
            <div class="content">
                <form action='insertar_cliente.php' method='POST'>
                    <label for=nombre>Ingresa tu nombre completo:</label>
                    <input id="nombre" class="input" type="text" name="nombre" placeholder="nombre completo">
                    <label for=usuario>Ingresa un nombre de usuario:</label>
                    <input id="usuario" class="input" type="text" name="usuario" placeholder="usuario">
                    <label for=correo>Ingresa tu correo electronico:</label>
                    <input id="correo" class="input" type="text" name="correo" placeholder="correo electronico">
                    <label for=password>Ingresa tu contraseña:</label>
                    <input id="password" class="input" type="password" name="password" placeholder="contraseña">
                    <div>
                       <button class="button is-dark" type="submit">Registrar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <br>
    <br>
    <br>
_CLIENTE;

echo <<<_CLIENTE
    <br>
    <br>
    <br>
      
</body>
</html>
_CLIENTE;
?>