<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\AuthAdmin;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Produtos\Carrossel1Controller;
use App\Http\Controllers\CatalogoController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\AdminLoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\CartController;

// Autenticação padrão do Laravel
Auth::routes();

// Rotas públicas
Route::get('/', [Carrossel1Controller::class, 'index'])->name('home.index');
Route::get('/catalogo', [CatalogoController::class, 'index'])->name('catalogo.index');

// Ajuste na rota de detalhes do produto para aceitar GET e POST
Route::match(['get', 'post'], '/catalogo/{PRODUTO_ID}', [CatalogoController::class, 'product_details'])->name('catalogo.details');

Route::get('/cart', [CartController::class, 'index'])->name('cart.index');

// Rota para adicionar itens ao carrinho (protegida por autenticação)
Route::middleware(['auth'])->group(function () {
    Route::post('/cart/store', [CartController::class, 'addToCart'])->name('cart.store');

    // Dashboard de usuários
    Route::get('/dashboard', [UserController::class, 'index'])->name('dashboard');

    // Rota para a área do usuário autenticado
    Route::get('/account-dashboard', [UserController::class, 'index'])->name('user.index');
});

// Rotas de administração protegidas por middleware de autenticação e autenticação de administrador
Route::middleware(['auth', AuthAdmin::class])->group(function () {
    Route::prefix('admin')->group(function () {
        // Dashboard do administrador
        Route::get('/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');

        // Rotas relacionadas a marcas
        Route::get('/brands', [AdminController::class, 'brands'])->name('admin.brands');
        Route::get('/brand/add', [AdminController::class, 'add_brand'])->name('admin.brand.add');
        Route::post('/brand/store', [AdminController::class, 'brand_store'])->name('admin.brand.store');

        // Rotas de login e logout de administrador
        Route::get('/login', [AdminLoginController::class, 'showLoginForm'])->name('admin.login');
        Route::post('/login', [AdminLoginController::class, 'login']);
        Route::post('/logout', [AdminLoginController::class, 'logout'])->name('admin.logout');
    });
});

// Rotas de login para usuários
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// Rotas de registro de usuários
Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);
