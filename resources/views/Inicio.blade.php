
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portada</title>

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />

    <style>
        body, html {
            margin: 0;
            padding: 0;
            height: 100%;
            overflow: hidden; /* Evita el desplazamiento vertical */
            display: flex;
            flex-direction: column;
        }



        .image-container {
            flex: 1;
            display: flex;
            align-items: flex-start; /* Alinea la imagen en la parte superior */
            justify-content: center;
            background-color: #000; /* Color de fondo para visualizar mejor la imagen centrada */
            padding-top: 20px; /* Espacio desde la parte superior */
        }



        .image-container img {
            max-width: 100%;
            max-height: 80%;
            object-fit: contain; /* Ajusta el tamaño de la imagen sin distorsionarla */

        }


       .boton {

            font-size: 35px; /* Tamaño de la letra */
            color: white; /* Color del texto */
            background-color: #065; /* Color de fondo */
            border: none; /* Sin borde */

            cursor: pointer; /* Cursor de mano al pasar por encima */
       }


    </style>




</head>


<body>

<button class="boton">
    <a href="{{ $url_base }}/Bienvenido" style="color:white; text-decoration:none;">Entrar</a>
</button>




    <div class="image-container">
        <img src="{{ asset('imagenes/escudo.png') }}" alt="Imagen">
    </div>



</body>
</html>

