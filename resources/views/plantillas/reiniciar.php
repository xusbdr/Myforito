<?php
session_start();

// Eliminar todas las variables de sesión relacionadas con el examen
unset($_SESSION['preguntas']);
unset($_SESSION['indice_pregunta']);
unset($_SESSION['respuestas']);
unset($_SESSION['mostrar_resultados']);

// Redirigir de vuelta a la página principal del examen
header("Location: exam.php");
exit;
?>
