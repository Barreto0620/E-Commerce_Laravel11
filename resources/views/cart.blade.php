@extends('layouts.app')

@section('content')
    {{-- <style>
    .cart-totals td{
        text-align: right;
    }
    .cart-total th, .cart-total td{
        color:green;
        font-weight: bold;
        font-size: 21px !important;
    }
</style> --}}
    <main class="pt-90">
        <div class="mb-4 pb-4"></div>
        <section class="shop-checkout container">
            <h2 class="page-title">Carrinho</h2>
            <div class="checkout-steps">
                <a href="javascript:void(0)" class="checkout-steps__item active">
                    <span class="checkout-steps__item-number">01</span>
                    <span class="checkout-steps__item-title">
                        <span>Carrinho de compras</span>
                        <em>Gerencie sua lista de itens
                        </em>
                    </span>
                </a>
                <a href="javascript:void(0)" class="checkout-steps__item">
                    <span class="checkout-steps__item-number">02</span>
                    <span class="checkout-steps__item-title">
                        <span>Envio e finalização da compra</span>
                        <em>Confira sua lista de itens</em>
                    </span>
                </a>
                <a href="javascript:void(0)" class="checkout-steps__item">
                    <span class="checkout-steps__item-number">03</span>
                    <span class="checkout-steps__item-title">
                        <span>Confirmação</span>
                        <em>Confirmação do pedido
                        </em>
                    </span>
                </a>
            </div>
            <div class="shopping-cart">
                @if ($items->count() > 0)
                    <form action="{{ route('cart.update') }}" method="POST">
                        @csrf
                        <div class="cart-table__wrapper">
                            <table class="cart-table">
                                <thead>
                                    <tr>
                                        <th>Produto</th>
                                        <th></th>
                                        <th>Valor</th>
                                        <th>Quantidade</th>
                                        <th>Total</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($items as $item)
                                        <tr>
                                            <!-- Coluna da Imagem -->
                                            <td>
                                                <div class="shopping-cart__product-item">
                                                    <img loading="lazy"
                                                        src="{{ asset('uploads/products/thumbnails/' . $item->options->image) }}"
                                                        width="120" height="120" alt="{{ $item->name }}" />
                                                </div>
                                            </td>
                                            <!-- Detalhes do Produto -->
                                            <td>
                                                <div class="shopping-cart__product-item__detail">
                                                    <h4>{{ $item->name }}</h4>
                                                </div>
                                            </td>
                                            <!-- Preço Unitário -->
                                            <td>
                                                <span class="shopping-cart__product-price">R${{ number_format($item->price, 2, ',', '.') }}</span>
                                            </td>
                                            <!-- Quantidade -->
                                            <td>
                                                <div class="qty-control position-relative">
                                                    <input type="number" name="quantities[{{ $item->rowId }}]"
                                                        value="{{ $item->qty }}" min="1"
                                                        class="qty-control__number text-center">
                                                </div>
                                            </td>
                                            <!-- Subtotal -->
                                            <td>
                                                <span class="shopping-cart__subtotal">R${{ number_format($item->subtotal, 2, ',', '.') }}</span>
                                            </td>
                                            <!-- Botão de Remover -->
                                            <td>
                                                <a href="{{ route('cart.remove', $item->rowId) }}" class="remove-cart">
                                                    <svg width="10" height="10" viewBox="0 0 10 10" fill="#767676"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M0.259435 8.85506L9.11449 0L10 0.885506L1.14494 9.74056L0.259435 8.85506Z" />
                                                        <path
                                                            d="M0.885506 0.0889838L9.74057 8.94404L8.85506 9.82955L0 0.97449L0.885506 0.0889838Z" />
                                                    </svg>
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <!-- Botões do Carrinho -->
                            <div class="cart-table-footer">
                                <input class="btn btn-primary fw-medium position-relative top-0 end-0 px-4" type="submit"
                                    value="Atualizar Carrinho">
                            </div>
                        </div>
                    </form>
                    <!-- Totais -->
                    <div class="shopping-cart__totals-wrapper">
                        <div class="sticky-content">
                            <div class="shopping-cart__totals">
                                <h3>Resumo do Carrinho</h3>
                                <table class="cart-totals">
                                    <tbody>
                                        <tr>
                                            <th>Subtotal</th>
                                            <td>R${{ Cart::instance('cart')->subtotal() }}</td>
                                        </tr>
                                        <tr>
                                            <th>Frete</th>
                                            <td>Grátis</td>
                                        </tr>
                                        <tr>
                                            <th>Imposto</th>
                                            <td>R${{ Cart::instance('cart')->tax() }}</td>
                                        </tr>
                                        <tr class="cart-total">
                                            <th>Total</th>
                                            <td>R${{ Cart::instance('cart')->total() }}</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="button-wrapper container">
                                <a href="#" class="btn btn-primary btn-checkout">Finalizar Compra</a>
                            </div>
                        </div>
                    </div>
                @else
                    <!-- Mensagem de Carrinho Vazio -->
                    <div class="row">
                        <div class="col-md-12 text-center pt-5 pb-5">
                            <p>Não há itens no seu carrinho :C</p>
                            <a href="{{ route('catalogo.index') }}" class="btn btn-info">Ir para o Catálogo</a>
                        </div>
                    </div>
                @endif
            </div>
            

        </section>
    </main>
@endsection
