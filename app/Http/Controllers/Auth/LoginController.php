<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Login; // Importa o modelo Login
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash; // Importa a fachada Hash

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'USUARIO_EMAIL' => 'required|email',
            'USUARIO_SENHA' => 'required',
        ]);

        $credentials = $request->only('USUARIO_EMAIL', 'USUARIO_SENHA');

        // Verifica se o usuário existe
        $user = Login::where('USUARIO_EMAIL', $credentials['USUARIO_EMAIL'])->first();

        if ($user && Hash::check($credentials['USUARIO_SENHA'], $user->USUARIO_SENHA)) {
            // Autentica o usuário
            Auth::login($user);
            return redirect()->route('home.index');
        }

        return back()->withErrors([
            'email' => 'Credenciais incorretas.',
        ]);
    }

    public function logout()
    {
        Auth::guard('web')->logout();
        return redirect()->route('login');
    }
}
