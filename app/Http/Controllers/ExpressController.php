<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExpressController extends Controller
{
    // Método para exibir a página "Express"
    public function index()
    {
        return view('express');
    }
}
