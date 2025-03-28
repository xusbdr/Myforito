<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Micontrolador extends Controller
{
    public function Bienvenido() {
        return view('Bienvenido');
    }

    public function crear() {
        return view('crear');
    }

    public function mostrar() {
        return view('mostrar');
    }

    public function articulos() {
        return view('articulos');
    }

    public function contacto() {
        return view('contacto');
    }

    public function galeria() {
        $alumnos = ["ana", "sara", "antonio", "manuel"];
        return view('galeria', compact('alumnos'));
    }

    public function inicio() {
        $url_base = url('/');
        return view('Inicio', compact('url_base'));
    }

    public function test() {
        $url_base = url('/');
        return view('test', compact('url_base'));
    }


}
