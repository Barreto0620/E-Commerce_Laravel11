<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EcosystemController extends Controller
{
    // Método para exibir a página "Ecosystem"
    public function index()
    {
        return view('ecosystem');
    }
}
