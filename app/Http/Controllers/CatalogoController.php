<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use Illuminate\Http\Request;

class CatalogoController extends Controller
{
    /**
     * Exibe o catálogo completo de forma dinâmica.
     */
    public function index()
    {
        // Carregar todos os produtos com as relações necessárias
        $produtos = Produto::with(['imagens', 'categoria'])->get();

        // Dividir os produtos entre carrossel e vitrine (exemplo: 12 no carrossel, o restante na vitrine)
        $produtosCarrossel = $produtos->take(12); // Pegue os primeiros 12 produtos
        $produtosVitrine = $produtos->skip(12);  // O restante será usado na vitrine

        // Passar os dados para a view
        return view('catalogo', compact('produtosCarrossel', 'produtosVitrine'));
    }

    /**
     * Exibe os detalhes de um produto específico.
     */
    public function product_details($id)
    {
        $produto = Produto::with(['imagens', 'categoria'])->findOrFail($id);
    
        $produtosRelacionados = Produto::with(['imagens', 'categoria'])
            ->where('PRODUTO_ID', '!=', $produto->PRODUTO_ID)
            ->take(12)
            ->get();
    
        return view('details', compact('produto', 'produtosRelacionados'));
    }
    
}
