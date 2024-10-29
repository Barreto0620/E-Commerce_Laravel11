<?php

namespace App\Http\Controllers\Produtos;

use App\Http\Controllers\Controller;
use App\Models\Produto;
use Illuminate\Http\Request;

class Carrossel1Controller extends Controller
{
    public function index()
    {
        // Primeiro Carrossel
        $produto_id = 201; // 1° Item do carrossel
        $produto_id1 = 201; // 2° Item do carrossel
        $produto_id2 = 201; // 3° Item do carrossel
        $produto_id3 = 201; // 4° Item do carrossel
        $produto_id4 = 201; // 5° Item do carrossel
        $produto_id5 = 201; // 6° Item do carrossel
        $produto_id6 = 201; // 7° Item do carrossel
        $produto_id7 = 201; // 8° Item do carrossel
        
        // Vitrine Debaixo
        $produto_id8 = 189; // 1° Item da vitrine
        $produto_id9 = 189; // 2° da vitrine
        $produto_id10 = 189; // 3° da vitrine
        $produto_id11 = 189; // 4° da vitrine
        $produto_id12 = 189; // 5° da vitrine
        $produto_id13 = 189; // 6° da vitrine
        $produto_id14 = 189; // 7° da vitrine
        $produto_id15 = 189; // 8° da vitrine
        

        // Puxa os produtos e a imagem do banco de dados pelo id
        $produto = Produto::with('imagens')->find($produto_id);
        $produto1 = Produto::with('imagens')->find($produto_id1);
        $produto2 = Produto::with('imagens')->find($produto_id2);
        $produto3 = Produto::with('imagens')->find($produto_id3);
        $produto4 = Produto::with('imagens')->find($produto_id4);
        $produto5 = Produto::with('imagens')->find($produto_id5);
        $produto6 = Produto::with('imagens')->find($produto_id6);
        $produto7 = Produto::with('imagens')->find($produto_id7); 
        $produto8 = Produto::with('imagens')->find($produto_id8);
        $produto9 = Produto::with('imagens')->find($produto_id9);
        $produto10 = Produto::with('imagens')->find($produto_id10);
        $produto11 = Produto::with('imagens')->find($produto_id11);
        $produto12 = Produto::with('imagens')->find($produto_id12);
        $produto13 = Produto::with('imagens')->find($produto_id13);
        $produto14 = Produto::with('imagens')->find($produto_id14);
        $produto15 = Produto::with('imagens')->find($produto_id15); 


        // Passando as variáveis para a view
        return view('index', compact('produto', 'produto1',
         'produto2', 'produto3', 'produto4', 'produto5', 'produto6', 'produto7',
         'produto8', 'produto9', 'produto10', 'produto11', 'produto12', 'produto13',
         'produto14', 'produto15'));
    }
}
