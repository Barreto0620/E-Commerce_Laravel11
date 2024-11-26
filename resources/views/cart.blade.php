@extends('layouts.app')

@section('content')
    
    <main class="pt-90">
        <div class="mb-4 pb-4"></div>
        <section class="shop-checkout container">
            <h2 class="page-title">Seu Carrinho</h2>
            <div class="checkout-steps">
                <a href="javascript:void(0)" class="checkout-steps__item active">
                    <span class="checkout-steps__item-number">01</span>
                    <span class="checkout-steps__item-title">
                        <span>Carrinho de compras</span>
                        <em>Gerencie sua lista de itens
                        </em>
                    </span>
                </a>
                <a href="{{route('cart.checkout')}}" class="checkout-steps__item">
                    <span class="checkout-steps__item-number">02</span>
                    <span class="checkout-steps__item-title">
                        <span>Envio e finalização da compra</span>
                        <em>Confira o local de entrega</em>
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
                                                        src="{{ $item->model->imagens->isNotEmpty() ? asset($item->model->imagens->first()->IMAGEM_URL) : asset('assets/images/imagem_indisponivel.png') }}"
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
                                                <span
                                                    class="shopping-cart__product-price">R${{ number_format($item->price, 2, ',', '.') }}</span>
                                            </td>
                                            <!-- Quantidade -->
                                            <td>
                                                <div class="qty-control">
                                                    <button type="button" class="qty-control__btn"
                                                        onclick="changeQuantity('{{ $item->rowId }}', -1)">-</button>
                                                    <input type="number" name="quantities[{{ $item->rowId }}]"
                                                        value="{{ $item->qty }}" min="1"
                                                        class="qty-control__number text-center"
                                                        id="quantity_{{ $item->rowId }}">
                                                    <button type="button" class="qty-control__btn"
                                                        onclick="changeQuantity('{{ $item->rowId }}', 1)">+</button>
                                                </div>
                                            </td>
                                            <!-- Subtotal -->
                                            <td>
                                                <span
                                                    class="shopping-cart__subtotal">R${{ number_format($item->subtotal, 2, ',', '.') }}</span>
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
                                            <th>Serviço</th>
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
                                <a href="{{ route('cart.checkout') }}" class="btn btn-primary btn-checkout">Próxima Validação</a>
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


    <script>
    // Função para alterar a quantidade
    function changeQuantity(rowId, increment) {
        let quantityInput = document.getElementById('quantity_' + rowId);
        let currentQuantity = parseInt(quantityInput.value);
        let newQuantity = currentQuantity + increment;
        if (newQuantity >= 1) {
            quantityInput.value = newQuantity;
        }
    }
</script>

<style>
    .shopping-cart {
        display: flex;
        justify-content: space-between;
        gap: 20px;
        padding: 20px;
        font-family: Arial, sans-serif;
    }

    .cart-table-container {
        flex: 1;
        padding-right: 30px;
    }

    .cart-table {
        width: 100%;
        border-collapse: collapse;
        margin-bottom: 20px;
    }

    .cart-table th, .cart-table td {
        padding: 15px;
        text-align: left;
        vertical-align: middle;
        border-bottom: 1px solid #f0f0f0;
    }

    .cart-table th {
        background-color: #f5f5f5;
    }

    .qty-control {
        display: flex;
        align-items: center;
        gap: 10px;
    }

    .qty-control__btn {
        background-color: #f1f1f1;
        border: 1px solid #ccc;
        padding: 8px 15px;
        font-size: 16px;
        cursor: pointer;
        border-radius: 5px;
        transition: background-color 0.3s;
    }

    .qty-control__btn:hover {
        background-color: #ddd;
    }

    .qty-control__number {
        width: 50px;
        height: 40px;
        text-align: center;
        font-size: 16px;
        border: 1px solid #ccc;
        border-radius: 5px;
    }

    .shopping-cart__product-item img {
        border-radius: 5px;
    }

    .shopping-cart__product-item__detail h4 {
        margin: 0;
        font-size: 18px;
    }

    .shopping-cart__product-price {
        font-size: 16px;
        font-weight: bold;
    }

    .shopping-cart__subtotal {
        font-size: 16px;
        font-weight: bold;
    }

    .cart-table-footer {
        text-align: right;
        margin-top: 20px;
    }

    .cart-totals {
        width: 100%;
        margin-top: 20px;
    }

    .cart-totals th, .cart-totals td {
        padding: 10px;
        text-align: left;
    }

    .cart-total th {
        font-weight: bold;
    }

    .cart-total td {
        font-weight: bold;
        color: #E53935;
    }

    .btn-checkout {
        display: inline-block;
        padding: 12px 25px;
        background-color: #007bff;
        color: white;
        font-weight: bold;
        border-radius: 5px;
        text-decoration: none;
        transition: background-color 0.3s;
    }

    .btn-checkout:hover {
        background-color: #0056b3;
    }

    .cart-table th, .cart-table td {
        padding-top: 20px;
        padding-bottom: 20px;
    }

    .shopping-cart__totals-wrapper {
        width: 30%;
        padding-left: 30px;
        display: flex;
        justify-content: center;
    }

    .sticky-content {
        position: sticky;
        top: 0;
        padding: 20px;
        background: #f9f9f9;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        width: 100%;
    }

    .cart-table-footer, .shopping-cart__totals-wrapper {
        margin-top: 10px;
    }

    .shopping-cart__totals-wrapper {
        display: block;
        width: 100%;
        max-width: 100%;  /* Ajuste para manter o resumo do carrinho bem preenchido */
        margin-left: auto;
        margin-right: auto;
        padding: 30px;
        background-color: #fff;
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .pt-90 {
    padding-top: 0px !important;
    }

</style>
@endsection
