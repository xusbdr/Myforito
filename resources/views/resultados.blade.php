<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultados del Examen</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <style>
        .list-group-item {
            margin-bottom: 10px;
        }
        .correcta {
            color: green;
        }
        .incorrecta {
            color: red;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center">Resultados del Examen</h1>
        <ul class="list-group">
            @foreach ($preguntas as $pregunta)
                @php
                    $respuesta_correcta_id = $pregunta->respuestas->where('respuesta_correcta', 1)->first()->id;
                    $respuesta_usuario_id = session("respuestas.{$pregunta->id}");
                    $correcta = ($respuesta_usuario_id == $respuesta_correcta_id);
                @endphp
                <li class="list-group-item {{ $correcta ? 'correcta' : 'incorrecta' }}">
                    Pregunta {{ $loop->index + 1 }}: {{ $pregunta->pregunta }}
                    <br>
                    Tu respuesta: {{ $pregunta->respuestas->where('id', $respuesta_usuario_id)->first()->texto }}
                    <br>
                    Respuesta correcta: {{ $pregunta->respuestas->where('id', $respuesta_correcta_id)->first()->texto }}
                </li>
            @endforeach
        </ul>
        <div class="text-center mt-3">
            <a href="{{ route('reiniciar.examen') }}" class="btn btn-success">Reiniciar Examen</a>
        </div>
    </div>
    <!-- Bootstrap JS y dependencias -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.min.js"></script>
</body>
</html>
