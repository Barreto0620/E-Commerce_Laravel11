<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;
use Surfsidemedia\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\Auth;
use App\Models\Address;
use Illuminate\Validation\ValidationException;


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
            'PRODUTO_ID' => 'required|exists:PRODUTO,PRODUTO_ID',
            'qty' => 'required|integer|min:1',
        ]);

        // Buscar o produto no banco de dados
        $produto = Produto::find($request->PRODUTO_ID);

        if (!$produto || !$produto->PRODUTO_ATIVO) {
            return redirect()->back()->with('error', 'Produto não disponível.');
        }

        // Adicionar ao carrinho
        Cart::instance('cart')->add(
            $produto->PRODUTO_ID,
            $produto->PRODUTO_NOME,
            $request->qty,
            $produto->PRODUTO_PRECO
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

    public function checkout()
    {
        if (!Auth::check()) {
            return redirect()->route('login');
        }

        // Buscar o endereço mais recente do usuário
        $address = Address::where('USUARIO_ID', Auth::user()->USUARIO_ID)
            ->orderBy('ENDERECO_ID', 'desc')
            ->first();

        return view('checkout', compact('address'));
    }

    public function process(Request $request)
    {
        // Validação dos campos do formulário
        $validatedData = $request->validate([
            'checkout_payment_method' => 'required|string|in:pix,boleto,entrega,paypal',
            'ENDERECO_NOME' => 'required|string|max:255',
            'ENDERECO_TELEFONE' => 'required|string|max:15',
            'ENDERECO_CEP' => 'required|string|max:10',
            'ENDERECO_ESTADO' => 'required|string|max:100',
            'ENDERECO_CIDADE' => 'required|string|max:100',
            'ENDERECO_LOGRADOURO' => 'required|string|max:255',
            'ENDERECO_NUMERO' => 'required|integer',
        ], [
            'checkout_payment_method.required' => 'Escolha um método de pagamento.',
            'checkout_payment_method.in' => 'O método de pagamento selecionado é inválido.',
            'ENDERECO_NOME.required' => 'O nome do endereço é obrigatório.',
            'ENDERECO_TELEFONE.required' => 'O telefone é obrigatório.',
            'ENDERECO_CEP.required' => 'O CEP é obrigatório.',
            // Mensagens adicionais para validação
        ]);

        // Capturar os dados do pedido
        $paymentMethod = $validatedData['checkout_payment_method'];
        $addressData = $request->only([
            'ENDERECO_NOME',
            'ENDERECO_TELEFONE',
            'ENDERECO_CEP',
            'ENDERECO_ESTADO',
            'ENDERECO_CIDADE',
            'ENDERECO_LOGRADOURO',
            'ENDERECO_NUMERO'
        ]);

        // Gerar o resumo do pedido
        $order = [
            'id' => uniqid('ORDER_'),
            'subtotal' => Cart::instance('cart')->subtotal(),
            'frete' => 'Grátis', // Pode ser ajustado com lógica adicional para cálculo de frete
            'taxa' => Cart::instance('cart')->tax(),
            'total' => Cart::instance('cart')->total(),
            'endereco' => $addressData,
            'metodo_pagamento' => $paymentMethod,
        ];

        // Salvar o pedido na sessão para exibição na página de confirmação
        session(['order' => $order]);

        // Processar o método de pagamento selecionado
        switch ($paymentMethod) {
            case 'pix':
                // Simular lógica para pagamento via Pix
                return redirect()->route('cart.order.confirmation')
                    ->with('success', 'Pix gerado com sucesso. Confira seu QR Code!');
            case 'boleto':
                // Simular geração de boleto
                return redirect()->route('cart.order.confirmation')
                    ->with('success', 'Boleto gerado com sucesso. Verifique seu e-mail.');
            case 'entrega':
                // Lógica para pagamento na entrega
                return redirect()->route('cart.order.confirmation')
                    ->with('success', 'Pedido confirmado. Pagamento na entrega.');
            case 'paypal':
                // Simular integração com o PayPal
                return redirect()->route('cart.order.confirmation')
                    ->with('success', 'Pagamento processado via PayPal.');
            default:
                return redirect()->back()
                    ->with('error', 'Método de pagamento inválido.');
        }
    }

    public function order_confirmation()
    {
        // Verificar se os dados do pedido estão na sessão
        $order = session('order');

        if (!$order) {
            return redirect()->route('cart.index')->withErrors('Nenhum pedido encontrado.');
        }

        // Exibir a página de confirmação com os detalhes do pedido
        return view('order_confirmation', compact('order'));
    }

    public function clearCart()
    {
        // Limpar o carrinho da sessão
        session()->forget('cart');  // Se o carrinho estiver na sessão
        // ou
        // Cart::where('user_id', auth()->id())->delete();  // Se o carrinho estiver no banco de dados

        // Redirecionar para a página de pedidos
        return redirect()->route('user.index');
    }
}
