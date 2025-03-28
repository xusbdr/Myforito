<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Examen Tipo Test</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center">Examen Tipo Test</h1>
        <form method="post" action="procesar_examen.php">
            <?php
            // Configuración de la conexión a la base de datos
            $servername = "127.0.0.1";
            $username = "root";
            $password = "123456";
            $dbname = "opositor";

            // Crear conexión
            $conn = new mysqli($servername, $username, $password, $dbname);

            // Verificar la conexión
            if ($conn->connect_error) {
                die("Conexión fallida: " . $conn->connect_error);
            }

            // Establecer la codificación de caracteres
            $conn->set_charset('utf8');

            // Consulta SQL para obtener 20 preguntas aleatorias
            $sql = "SELECT * FROM preguntas ORDER BY RAND() LIMIT 20";
            $result = $conn->query($sql);

            // Variable para contar el número de pregunta
            $numero_pregunta = 1;

            // Comprobar si se encontraron resultados
            if ($result->num_rows > 0) {
                // Generar el formulario con las preguntas y respuestas obtenidas de la base de datos
                while ($row = $result->fetch_assoc()) {
                    echo '<div class="card mb-3">';
                    echo '<div class="card-header">Pregunta ' . $numero_pregunta . ': ' . htmlspecialchars($row['pregunta'], ENT_QUOTES | ENT_HTML5, 'UTF-8') . '</div>';
                    echo '<div class="card-body">';

                    // Mostrar las respuestas como opciones de radio
                    $opciones = array('a', 'b', 'c', 'd');
                    foreach ($opciones as $opcion) {
                        $columna_opcion = 'opcion_' . $opcion;
                        if (!empty($row[$columna_opcion])) {
                            echo '<div class="form-check">';
                            echo '<input class="form-check-input" type="radio" name="respuesta[' . $numero_pregunta . ']" value="' . $opcion . '" id="respuesta' . $numero_pregunta . $opcion . '">';
                            echo '<label class="form-check-label" for="respuesta' . $numero_pregunta . $opcion . '">' . htmlspecialchars($row[$columna_opcion], ENT_QUOTES | ENT_HTML5, 'UTF-8') . '</label>';
                            echo '</div>';
                        }
                    }

                    echo '</div>';
                    echo '</div>';

                    // Incrementar el número de pregunta
                    $numero_pregunta++;
                }
            } else {
                echo "No se encontraron preguntas.";
            }

            // Cerrar conexión a la base de datos
            $conn->close();
            ?>
            <div class="text-center">
                <button type="submit" class="btn btn-primary">Finalizar</button>
            </div>
        </form>
    </div>
    <!-- Bootstrap JS y dependencias -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.min.js"></script>
</body>
</html>
