<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use Illuminate\Http\Request;

class CatalogoController extends Controller
{
    public function index()
    {
        $products = Produto::all();
        return view('catalogo', compact('products'));
    }
}
