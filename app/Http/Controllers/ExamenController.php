<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Preguntas; // Asegúrate de importar el modelo correspondiente

class ExamenController extends Controller
{
    public function index()
    {
        // Obtener todas las preguntas con sus respuestas relacionadas
        $preguntas = Preguntas::with('respuestas')->get();

        // Retornar la vista 'test' con los datos de las preguntas
        return view('test', compact('preguntas'));
    }
}
