<?php

namespace App\Http\Controllers\Produtos;

use App\Http\Controllers\Controller;
use App\Models\Produto;
use Illuminate\Http\Request;

class Carrossel1Controller extends Controller
{
    public function index()
    {
        $produto_id = 270; // 1° Item do carrossel
        $produto_id1 = 272; // 2° Item do carrossel
        $produto_id2 = 273; // 3° Item do carrossel
        $produto_id3 = 274; // 4° Item do carrossel
        $produto_id4 = 275; // 5° Item do carrossel
        $produto_id5 = 276; // 6° Item do carrossel
        $produto_id6 = 277; // 7° Item do carrossel
        $produto_id7 = 280; // 8° Item do carrossel

        // Vitrine Debaixo
        $produto_id8 = 281; // 1° Item da vitrine
        $produto_id9 = 282; // 2° da vitrine
        $produto_id10 = 283; // 3° da vitrine
        $produto_id11 = 284; // 4° da vitrine
        $produto_id12 = 286; // 5° da vitrine
        $produto_id13 = 285; // 6° da vitrine
        $produto_id14 = 287; // 7° da vitrine
        $produto_id15 = 288; // 8° da vitrine
        

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
