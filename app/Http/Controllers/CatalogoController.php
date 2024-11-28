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

        // Buscar todos os produtos, exceto o de ID 194

        // Buscar todos os produtos, exceto os de ID 194 e 199
        $produtos = Produto::whereNotIn('PRODUTO_ID', [194, 199])->get();

        // IDs dos produtos que irão para o carrossel
        $produtosCarrossel = $produtos->take(250); // Pegue os primeiros 500 produtos

        // IDs do carrossel
        $idsCarrossel = $produtosCarrossel->pluck('PRODUTO_ID')->toArray();

        // Filtrar os produtos para a vitrine excluindo os IDs do carrossel
        $produtosVitrine = $produtos->whereNotIn('PRODUTO_ID', $idsCarrossel);


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
            ->take(500)
            ->get();

        return view('details', compact('produto', 'produtosRelacionados'));
    }
}
