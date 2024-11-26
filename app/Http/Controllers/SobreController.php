<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SobreController extends Controller
{
    // Método para exibir a página "Sobre"
    public function index()
    {
        return view('sobre');
    }
}
