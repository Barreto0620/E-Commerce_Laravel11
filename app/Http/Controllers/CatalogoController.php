<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use App\Models\Categoria; // Adiciona o modelo Categoria
use Illuminate\Http\Request;

class CatalogoController extends Controller
{
    public function index()
    {
        // Primeiro Carrossel
        $produto_id = 209; // 1° Item do carrossel
        $produto_id1 = 207; // 2° Item do carrossel
        $produto_id2 = 206; // 3° Item do carrossel
        $produto_id3 = 209; // 4° Item do carrossel
        $produto_id4 = 207; // 5° Item do carrossel
        $produto_id5 = 206; // 6° Item do carrossel
        $produto_id6 = 209; // 7° Item do carrossel
        $produto_id7 = 207; // 8° Item do carrossel

        // Vitrine Debaixo
        $produto_id8 = 206; // 1° Item da vitrine
        $produto_id9 = 209; // 2° da vitrine
        $produto_id10 = 209; // 3° da vitrine
        $produto_id11 = 207; // 4° da vitrine
        $produto_id12 = 206; // 5° da vitrine
        $produto_id13 = 209; // 6° da vitrine
        $produto_id14 = 207; // 7° da vitrine
        $produto_id15 = 206; // 8° da vitrine

        // Puxa os produtos e a imagem do banco de dados pelo id, junto com o nome da categoria
        $produto = Produto::with(['imagens', 'categoria'])->find($produto_id);
        $produto1 = Produto::with(['imagens', 'categoria'])->find($produto_id1);
        $produto2 = Produto::with(['imagens', 'categoria'])->find($produto_id2);
        $produto3 = Produto::with(['imagens', 'categoria'])->find($produto_id3);
        $produto4 = Produto::with(['imagens', 'categoria'])->find($produto_id4);
        $produto5 = Produto::with(['imagens', 'categoria'])->find($produto_id5);
        $produto6 = Produto::with(['imagens', 'categoria'])->find($produto_id6);
        $produto7 = Produto::with(['imagens', 'categoria'])->find($produto_id7);
        $produto8 = Produto::with(['imagens', 'categoria'])->find($produto_id8);
        $produto9 = Produto::with(['imagens', 'categoria'])->find($produto_id9);
        $produto10 = Produto::with(['imagens', 'categoria'])->find($produto_id10);
        $produto11 = Produto::with(['imagens', 'categoria'])->find($produto_id11);
        $produto12 = Produto::with(['imagens', 'categoria'])->find($produto_id12);
        $produto13 = Produto::with(['imagens', 'categoria'])->find($produto_id13);
        $produto14 = Produto::with(['imagens', 'categoria'])->find($produto_id14);
        $produto15 = Produto::with(['imagens', 'categoria'])->find($produto_id15);

        // Passando as variáveis para a view
        return view('catalogo', compact(
            'produto',
            'produto1',
            'produto2',
            'produto3',
            'produto4',
            'produto5',
            'produto6',
            'produto7',
            'produto8',
            'produto9',
            'produto10',
            'produto11',
            'produto12',
            'produto13',
            'produto14',
            'produto15'
        ));
    }

    public function product_details($PRODUTO_ID)
{
    // Carregar o produto com as imagens relacionadas
    $product = Produto::with('imagens')->where('PRODUTO_ID', $PRODUTO_ID)->first();

    return view('details', compact('product'));
}

}
