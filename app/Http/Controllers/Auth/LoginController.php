<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Login; // Modelo de usuário
use App\Models\Admin; // Modelo de administrador
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

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
            return redirect()->route('home.index'); // Redireciona o usuário
        }

        // Verifica se o administrador existe
        $admin = Admin::where('ADM_EMAIL', $credentials['USUARIO_EMAIL'])->first();

        if ($admin && Hash::check($credentials['USUARIO_SENHA'], $admin->ADM_SENHA)) {
            // Autentica o administrador
            Auth::login($admin);
            return redirect()->route('admin.index'); // Redireciona o administrador para a rota 'admin.index'
        }

        // Se não encontrar nenhum, retorna erro
        return back()->withErrors([
            'USUARIO_EMAIL' => 'Credenciais incorretas.',
        ]);
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
