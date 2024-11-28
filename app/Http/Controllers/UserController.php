<?php

namespace App\Http\Controllers;

use App\Models\Pedido;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return view('user.index');
    }

    public function orders()
    {
        // Busca os pedidos do usuário autenticado
        $orders = Pedido::where('USUARIO_ID', Auth::user()->id)
            ->orderBy('created_at', 'DESC')
            ->paginate(10);  // Pagina os resultados em 10 pedidos por página

        // Retorna a view 'user.orders' com os dados dos pedidos
        return view('user.orders', compact('orders'));
    }
}
