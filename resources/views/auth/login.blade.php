@extends('layouts.app')

@section('content')

<main class="pt-90">
    <div class="mb-4 pb-4"></div>
    <section class="login-register container">
        <ul class="nav nav-tabs mb-5" id="login_register" role="tablist">
            <li class="nav-item" role="presentation">
                <a class="nav-link nav-link_underscore active" id="login-tab" data-bs-toggle="tab" href="#tab-item-login"
                    role="tab" aria-controls="tab-item-login" aria-selected="true">Login</a>
            </li>
        </ul>
        <div class="tab-content pt-2" id="login_register_tab_content">
            <div class="tab-pane fade show active" id="tab-item-login" role="tabpanel" aria-labelledby="login-tab">
                <div class="login-form">
                    <form method="POST" action="{{ route('login') }}" name="login-form" class="needs-validation" novalidate="">
                        @csrf
                        <div class="form-floating mb-3">
                            <input class="form-control form-control_gray @error('USUARIO_EMAIL') is-invalid @enderror" 
                                   name="USUARIO_EMAIL" 
                                   value="{{ old('USUARIO_EMAIL') }}" 
                                   required="" 
                                   autocomplete="email" 
                                   autofocus="">
                            <label for="email">Email *</label>
                        </div>

                        <div class="pb-3"></div>

                        <div class="form-floating mb-3">
                            <input id="password" type="password" 
                                   class="form-control form-control_gray @error('USUARIO_SENHA') is-invalid @enderror" 
                                   name="USUARIO_SENHA" 
                                   required="" 
                                   autocomplete="current-password">
                            <label for="customerPasswodInput">Senha *</label>
                        </div>

                        <button class="btn btn-primary w-100 text-uppercase" type="submit">LogIn</button>

                        <div class="customer-option mt-4 text-center">
                            <span class="text-secondary">Não tem conta?</span>
                            <a href="{{ route('register') }}" class="btn-text js-show-register">Crie uma conta</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</main>

@endsection
