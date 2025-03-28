<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>



        <!-- Bootstrap CSS v5.2.1 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />



</head>




<body>



     @include("plantillas.navegacion")




     @include("plantillas.examen")
     @yield("infogeneral")






    <!-- se puede escribir directamnte aqui para que se muestre en todos igual desde la lalmada  -->
    @include("plantillas.pie")
    @yield("pie")















     <!-- Bootstrap JavaScript -->
     <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ENjdO4Dr2bkBIFxQpeo5sa8gEN9VJ5oDXscrMYyDsvB1zNkPBWi9tWQX13ga0u5i"
    crossorigin="anonymous">
    </script>


</body>
</html>
