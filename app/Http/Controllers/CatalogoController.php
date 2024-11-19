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

        // Dividir os produtos entre carrossel e vitrine (exemplo: 9 no carrossel, o restante na vitrine)
        $produtosCarrossel = $produtos->take(9); // Pegue os primeiros 9 produtos
        $produtosVitrine = $produtos->skip(9);  // O restante será usado na vitrine

        // Passar os dados para a view
        return view('catalogo', compact('produtosCarrossel', 'produtosVitrine'));
    }

    /**
     * Exibe os detalhes de um produto específico.
     */
    public function product_details($id)
    {
        // Obter um produto específico
        $produto = Produto::with(['imagens', 'categoria'])->findOrFail($id);

        // Carregar produtos relacionados, excluindo o produto atual
        $produtosRelacionados = Produto::with(['imagens', 'categoria'])
            ->where('PRODUTO_ID', '!=', $produto->PRODUTO_ID) // Exclui o produto atual
            ->take(9) // Limita a 9 produtos
            ->get();

        // Passar o produto e os produtos relacionados para a view
        return view('details', compact('produto', 'produtosRelacionados'));
    }
}
