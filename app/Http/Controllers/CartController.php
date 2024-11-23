<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Surfsidemedia\Shoppingcart\Facades\Cart;

class CartController extends Controller
{
    // Exibir a página do carrinho
    public function index()
    {
        $items = Cart::instance('cart')->content();
        return view('cart', compact('items'));
    }

    // Adicionar um item ao carrinho
    public function add_to_cart(Request $request)
{
    // Validação básica dos dados recebidos
    $request->validate([
        'id' => 'required',
        'name' => 'required',
        'qty' => 'required|integer|min:1',
        'price' => 'required|numeric|min:0'
    ]);

    // Adicionar ao carrinho
    Cart::instance('cart')->add(
        $request->PRODUTO_ID, // Alterado de 'id' para 'PRODUTO_ID'
        $request->PRODUTO_NOME,
        $request->qty,
        $request->PRODUTO_PRECO
    )->associate('App\Models\Produto');    

    return redirect()->route('cart.index')->with('success', 'Produto adicionado ao carrinho com sucesso!');
}


    // Atualizar a quantidade dos itens no carrinho
    public function update_cart(Request $request)
    {
        // Validação dos dados
        $request->validate([
            'quantities' => 'required|array',
            'quantities.*' => 'required|integer|min:1',
        ]);

        // Atualizar as quantidades no carrinho
        foreach ($request->quantities as $rowId => $quantity) {
            Cart::instance('cart')->update($rowId, $quantity);
        }

        return redirect()->back()->with('success', 'Carrinho atualizado com sucesso!');
    }

    // Remover um item do carrinho
    public function remove_from_cart($rowId)
    {
        Cart::instance('cart')->remove($rowId);
        return redirect()->back()->with('success', 'Produto removido do carrinho!');
    }

    // Limpar o carrinho inteiro
    public function clear_cart()
    {
        Cart::instance('cart')->destroy();
        return redirect()->back()->with('success', 'Carrinho limpo com sucesso!');
    }
}
