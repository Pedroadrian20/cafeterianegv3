<?php

echo <<<_PEDIDO
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Realizar pedido</title>
    <link rel="stylesheet" href="node_modules/bulma/css/bulma.min.css">
    <link rel="stylesheet" href="diseños/realizarpedido_cafeteria.css">
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

echo<<<_PEDIDO
    <h1 class="subtitulos">NEGOCIO DE CAFETERIA</h1>
    <br>
    <br>
    <p class="subtitulos">Ingrese los datos que se le piden:</p>
    <br>

    <div class="card card-width='100'" id="CardFormulario">
        <header class="card-header">
          <p class="card-header-title">
            Formulario de pedido:
          </p>
        </header>
        <div class="card-content">
            <div class="content">
                <form action='pedido.php' method='POST'>
                    <label for=categoria>Ingresa la categoria del producto:</label>
                    <input id="categoria" class="input" type="text" name="categoria" placeholder="categoria del producto">
                    <label for=producto>Ingresa el nombre del producto:</label>
                    <input id="producto" class="input" type="text" name="producto" placeholder="nombre del producto">
                    <label for=size>Ingresa el tamaño del producto:</label>
                    <input id="size" class="input" type="text" name="size" placeholder="tamaño del producto">
                    <label for=direccion>Ingresa tu dirección:</label>
                    <input id="direccion" class="input" type="text" name="direccion" placeholder="dirección">
                    <label for=codigopostal>Ingresa tu codigo postal:</label>
                    <input id="codigopostal" class="input" type="text" name="codigopostal" placeholder="código postal">
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
_PEDIDO;

echo <<<_PEDIDO
    <br>
    <br>
    <br>
      
</body>
</html>
_PEDIDO;

?> 