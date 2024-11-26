<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DuvidasController extends Controller
{
    // Método para exibir a página "Dúvidas"
    public function index()
    {
        return view('duvidas');
    }
}
