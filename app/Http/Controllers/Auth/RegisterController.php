<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Login;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest');
    }

    // Exibe o formulário de registro
    public function showRegistrationForm()
    {
        return view('auth.register');
    }

    // Validação dos dados de registro
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'cpf' => ['required', 'string', 'size:11', 'unique:USUARIO,USUARIO_CPF'],
            'USUARIO_EMAIL' => ['required', 'string', 'email', 'max:255', 'unique:USUARIO,USUARIO_EMAIL'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    // Criação do usuário no banco de dados e login após o registro
    public function register(Request $request)
    {
        $this->validator($request->all())->validate();

        $user = Login::create([
            'USUARIO_NOME' => $request->name,
            'USUARIO_CPF' => $request->cpf,
            'USUARIO_EMAIL' => $request->USUARIO_EMAIL,
            'USUARIO_SENHA' => Hash::make($request->password),
        ]);

        // Login automático após o registro
        Auth::login($user);

        // Redireciona para a home após o login
        return redirect()->route('home.index');
    }
}
