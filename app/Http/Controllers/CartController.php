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
        try {
            // Validação dos dados do endereço
            $validated = $request->validate([
                'ENDERECO_NOME' => 'required|string|max:255',
                'ENDERECO_CEP' => 'required|string|max:10',
                'ENDERECO_ESTADO' => 'required|string|max:50',
                'ENDERECO_CIDADE' => 'required|string|max:50',
                'ENDERECO_LOGRADOURO' => 'required|string|max:255',
                'ENDERECO_NUMERO' => 'required|integer',
                'ENDERECO_COMPLEMENTO' => 'nullable|string|max:255',
            ]);

            // Adicionar ID do usuário ao endereço
            $validated['USUARIO_ID'] = Auth::user()->USUARIO_ID;

            // Atualizar ou criar o endereço
            $address = Address::updateOrCreate(
                [
                    'USUARIO_ID' => Auth::user()->USUARIO_ID,
                    'ENDERECO_NOME' => $validated['ENDERECO_NOME']
                ],
                $validated
            );

            if ($address) {
                return redirect()->route('cart.order.confirmation')
                    ->with('success', 'Endereço salvo com sucesso!');
            } else {
                return redirect()->back()->with('error', 'Falha ao salvar o endereço.');
            }
        } catch (\Exception $e) {
            return redirect()->back()
                ->with('error', 'Erro ao salvar o endereço: ' . $e->getMessage())
                ->withInput();
        }
    }

    public function order_confirmation()
    {
        return view('order_confirmation');
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
