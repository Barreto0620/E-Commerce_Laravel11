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
        $orders = Pedido::where('user_id',Auth::user()->id)->orderBy('created_at', 'DESC')->paginate(10);

        return view('user.orders', compact('orders'));
    }
}
