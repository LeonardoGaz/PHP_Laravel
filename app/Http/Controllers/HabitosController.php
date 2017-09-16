<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HabitosController extends Controller
{
    public function index(){
        $nome = "LeonardoGaz";
        return view('habitos', ['nome' => $nome]);
        //return "Olá".
        // "<br>".
        //     "Sou o Index do Controlador de Hábitos";
    }
}
