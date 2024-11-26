<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PoliticaController extends Controller
{
    public function index()
    {
        return view('politica'); // Renderiza a view de Política de Privacidade e Termos
    }
}
