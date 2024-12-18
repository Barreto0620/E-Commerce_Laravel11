<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\AuthAdmin;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Models\Produto;
use App\Http\Controllers\Produtos\Carrossel1Controller;
use App\Http\Controllers\CatalogoController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\AdminLoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\SobreController;
use App\Http\Controllers\EcosystemController;
use App\Http\Controllers\ExpressController;
use App\Http\Controllers\DuvidasController;
use App\Http\Controllers\PoliticaController;

Auth::routes();


// Rota para Política de Privacidade e Termos
Route::get('/politica', [PoliticaController::class, 'index'])->name('politica');

// Rota para a página "Sobre"
Route::get('/sobre', [SobreController::class, 'index'])->name('sobre');

// Rota para a página "Ecosystem"
Route::get('/ecosystem', [EcosystemController::class, 'index'])->name('ecosystem');

// Rota para a página "Express"
Route::get('/express', [ExpressController::class, 'index'])->name('express');

// Rota para a página "Dúvidas"
Route::get('/duvidas', [DuvidasController::class, 'index'])->name('duvidas');

// Rota para listar todos os produtos
Route::get('/', [Carrossel1Controller::class, 'index'])->name('home.index');

// Rota para catálogo de produtos
Route::get('/catalogo', [CatalogoController::class, 'index'])->name('catalogo.index');
Route::get('/catalogo/{PRODUTO_ID}', [CatalogoController::class, 'product_details'])->name('catalogo.details');

// Rota para a página "Sobre"
Route::get('/sobre', [SobreController::class, 'index'])->name('sobre');

// Rota para dashboard de usuário autenticado
Route::middleware(['auth'])->group(function () {
    Route::get('/account-dashboard', [UserController::class, 'index'])->name('user.index');
    Route::get('/orders', [CartController::class, 'orders'])->name('user.orders');

});

// Rota para dashboard de administradores com middleware de autenticação
Route::middleware(['auth', AuthAdmin::class])->group(function () {
    Route::get('/admin', [AdminController::class, 'index'])->name('admin.index');
    Route::get('/admin/brands', [AdminController::class, 'brands'])->name('admin.brands');
    Route::get('/admin/brand/add', [AdminController::class, 'add_brand'])->name('admin.brand.add');
    Route::post('/admin/brand/store', [AdminController::class, 'brand_store'])->name('admin.brand.store');
});

// Rota para login de usuários comuns
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// Rotas para login de administradores
Route::prefix('admin')->group(function () {
    Route::get('/login', [AdminLoginController::class, 'showLoginForm'])->name('admin.login');
    Route::post('/login', [AdminLoginController::class, 'login']);
    Route::post('/logout', [AdminLoginController::class, 'logout'])->name('admin.logout');
});

// Redirecionamento para as páginas de dashboard após login
Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/admin/dashboard', function () {
        return view('admin.dashboard');
    })->middleware('auth:admin')->name('admin.dashboard');
});

// Rota para registro de usuários
Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);

// Rota para exibir o carrinho
Route::get('/cart', [CartController::class, 'index'])->name('cart.index');

// Rota para adicionar um item ao carrinho
Route::post('/cart/add', [CartController::class, 'add_to_cart'])->name('cart.add');

// Rota para atualizar as quantidades de itens no carrinho
Route::post('/cart/update', [CartController::class, 'update_cart'])->name('cart.update');

// Rota para remover um item específico do carrinho
Route::get('/cart/remove/{rowId}', [CartController::class, 'remove_from_cart'])->name('cart.remove');

// Rota para limpar todo o carrinho
Route::get('/cart/clear', [CartController::class, 'clear_cart'])->name('cart.clear');
Route::post('/cart/clear', [CartController::class, 'clearCart'])->name('cart.clear');

// Rota para exibir a página de checkout
Route::get('/checkout', [CartController::class, 'checkout'])->name('cart.checkout');

// Rota para processar o checkout
Route::post('/checkout/process', [CartController::class, 'process'])->name('checkout.process');

Route::get('/order-confirmation', [CartController::class, 'order_confirmation'])->name('cart.order.confirmation');

// Rota para exibir os detalhes de um pedido
Route::get('/orders/{order}', [CartController::class, 'show'])->name('orders.show');
