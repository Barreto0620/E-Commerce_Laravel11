@extends('layouts.app')

@section('content')
<style>
    .pt-90 {
        padding-top: 90px !important;
    }
</style>
<main class="pt-90">
    <div class="mb-4 pb-4"></div>
    <section class="shop-checkout container">
        <h2 class="page-title">Endereço de Entrega</h2>
        <div class="checkout-steps">
            <a href="{{ route('cart.index') }}" class="checkout-steps__item active">
                <span class="checkout-steps__item-number">01</span>
                <span class="checkout-steps__item-title">
                    <span>Carrinho de compras</span>
                    <em>Gerencie sua lista de itens</em>
                </span>
            </a>
            <a href="javascript:void(0)" class="checkout-steps__item active">
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
                    <em>Confirmação do pedido</em>
                </span>
            </a>
        </div>


        <form name="checkout-form" method="POST" action="{{ route('checkout.process') }}">
            @csrf <!-- Token de proteção CSRF -->
            <div class="checkout-form">
                <div class="billing-info__wrapper">
                    <div class="row">
                        <div class="col-12">
                            <h4>Detalhes de Envio</h4>
                        </div>
                    </div>

                    <div class="row">
                        <!-- Nome do Endereço -->
                        <div class="col-md-6">
                            <div class="form-floating my-3">
                                <input type="text" class="form-control" name="ENDERECO_NOME" value="{{ old('ENDERECO_NOME', $address->ENDERECO_NOME ?? '') }}" required>
                                <label for="ENDERECO_NOME">Nome do Endereço *</label>
                                @error('ENDERECO_NOME')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <!-- Telefone (não mencionado no controller, mas pode ser adicionado se necessário) -->
                        <div class="col-md-6">
                            <div class="form-floating my-3">
                                <input type="text" class="form-control" name="ENDERECO_TELEFONE" value="{{ old('ENDERECO_TELEFONE', $address->ENDERECO_TELEFONE ?? '') }}" required>
                                <label for="ENDERECO_TELEFONE">Número de Telefone *</label>
                                @error('ENDERECO_TELEFONE')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <!-- CEP -->
                        <div class="col-md-4">
                            <div class="form-floating my-3">
                                <input type="text" class="form-control" name="ENDERECO_CEP" value="{{ old('ENDERECO_CEP', $address->ENDERECO_CEP ?? '') }}" required>
                                <label for="ENDERECO_CEP">CEP *</label>
                                @error('ENDERECO_CEP')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <!-- Estado -->
                        <div class="col-md-4">
                            <div class="form-floating mt-3 mb-3">
                                <input type="text" class="form-control" name="ENDERECO_ESTADO" value="{{ old('ENDERECO_ESTADO', $address->ENDERECO_ESTADO ?? '') }}" required>
                                <label for="ENDERECO_ESTADO">Estado *</label>
                                @error('ENDERECO_ESTADO')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <!-- Cidade -->
                        <div class="col-md-4">
                            <div class="form-floating my-3">
                                <input type="text" class="form-control" name="ENDERECO_CIDADE" value="{{ old('ENDERECO_CIDADE', $address->ENDERECO_CIDADE ?? '') }}" required>
                                <label for="ENDERECO_CIDADE">Cidade *</label>
                                @error('ENDERECO_CIDADE')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <!-- Logradouro e Número -->
                        <div class="col-md-6">
                            <div class="form-floating my-3">
                                <input type="text" class="form-control" name="ENDERECO_LOGRADOURO" value="{{ old('ENDERECO_LOGRADOURO', $address->ENDERECO_LOGRADOURO ?? '') }}" required>
                                <label for="ENDERECO_LOGRADOURO">Logradouro *</label>
                                @error('ENDERECO_LOGRADOURO')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-floating my-3">
                                <input type="number" class="form-control" name="ENDERECO_NUMERO" value="{{ old('ENDERECO_NUMERO', $address->ENDERECO_NUMERO ?? '') }}" required>
                                <label for="ENDERECO_NUMERO">Número *</label>
                                @error('ENDERECO_NUMERO')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <!-- Complemento -->
                        <div class="col-md-6">
                            <div class="form-floating my-3">
                                <input type="text" class="form-control" name="ENDERECO_COMPLEMENTO" value="{{ old('ENDERECO_COMPLEMENTO', $address->ENDERECO_COMPLEMENTO ?? '') }}">
                                <label for="ENDERECO_COMPLEMENTO">Complemento</label>
                                @error('ENDERECO_COMPLEMENTO')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <!-- Ponto de Referência -->
                        <div class="col-md-12">
                            <div class="form-floating my-3">
                                <input type="text" class="form-control" name="ENDERECO_REFERENCIA" value="{{ old('ENDERECO_REFERENCIA', $address->ENDERECO_REFERENCIA ?? '') }}">
                                <label for="ENDERECO_REFERENCIA">Ponto de Referência</label>
                                @error('ENDERECO_REFERENCIA')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>
                <div class="checkout__totals-wrapper">
                    <div class="sticky-content">
                        <div class="checkout__totals">
                            <h3>Seu Pedido</h3>
                            {{-- <table class="checkout-cart-items">
                                        <thead>
                                            <tr>
                                                <th>PRODUTO</th>
                                                <th align="right">SUBTOTAL</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                          @foreach (Cart::instance('cart') as $item)
                                            <tr>
                                                <td>
                                                    {{$item->name}} x {{$item->rowId}}
                            </td>
                            <td align="right">
                                R$ {{$item->subtotal}}
                            </td>
                            </tr>
                            @endforeach
                            </tbody>
                            </table> --}}
                            <table class="checkout-totals">
                                <tbody>
                                    <tr>
                                        <th>SUBTOTAL</th>
                                        <td align="right">R$ {{Cart::instance('cart')->subtotal()}}</td>
                                    </tr>
                                    <tr>
                                        <th>FRETE</th>
                                        <td align="right">Frete grátis</td>
                                    </tr>
                                    <tr>
                                        <th>SERVIÇO</th>
                                        <td align="right">R${{Cart::instance('cart')->tax()}}</td>
                                    </tr>
                                    <tr>
                                        <th>TOTAL</th>
                                        <td align="right" style="font-weight: bold; color: #E53935;">R${{Cart::instance('cart')->total()}}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <div class="checkout__payment-methods">
                            <h4>Formas de Pagamento</h4>

                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="checkout_payment_method" id="pix" value="pix" required>
                                <label class="form-check-label" for="pix">
                                    Pagamento no Pix
                                    <p class="option-detail">
                                        Realize o pagamento de forma rápida e segura com o <strong>Pix</strong>. Escaneie o QR Code e finalize sua compra em minutos.
                                    </p>
                                </label>
                            </div>

                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="checkout_payment_method" id="boleto" value="boleto" required>
                                <label class="form-check-label" for="boleto">
                                    Pagamento por Boleto
                                    <p class="option-detail">
                                        Prefere pagar por boleto? Gere o boleto e efetue o pagamento em qualquer banco ou app bancário.
                                    </p>
                                </label>
                            </div>

                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="checkout_payment_method" id="paypal" value="paypal" required>
                                <label class="form-check-label" for="paypal">
                                    Pagamento via PayPal
                                    <p class="option-detail">
                                        Conecte sua conta do <strong>PayPal</strong> e pague com segurança. Prático e confiável!
                                    </p>
                                </label>
                            </div>
                        </div>

                        <div id="payment-details" class="mt-3 mb-3"></div>
                        
                        <button type="submit" class="btn btn-primary">FINALIZAR PEDIDO</button>

                        <div class="policy-text mt-4">
                            Seus dados pessoais serão usados para processar seu pedido, apoiar sua experiência
                            durante a navegação no site e para outros fins descritos em nossa
                            <a href="{{ route('politica') }}" target="_blank">política de privacidade</a>.
                        </div>

                        <script>
                            document.addEventListener('DOMContentLoaded', function() {
                                const paymentMethods = document.querySelectorAll('input[name="checkout_payment_method"]');
                                const paymentDetails = document.getElementById('payment-details');

                                paymentMethods.forEach(method => {
                                    method.addEventListener('change', function() {
                                        paymentDetails.innerHTML = ''; // Limpa os detalhes anteriores

                                        if (this.value === 'pix') {
                                            paymentDetails.innerHTML = `
                        <h5>Pagamento via Pix</h5>
                        <p>Escaneie o QR Code abaixo para realizar o pagamento.</p>
                        <img src="{{ asset('assets/images/qrcode-pix.png') }}" alt="QR Code do Pix" style="max-width: 200px;">
                    `;
                                        } else if (this.value === 'boleto') {
                                            paymentDetails.innerHTML = `
                        <h5>Pagamento por Boleto</h5>
                        <p>O boleto será gerado e enviado para seu e-mail. Após a confirmação do pagamento, processaremos seu pedido.</p>
                    `;
                                        } else if (this.value === 'paypal') {
                                            paymentDetails.innerHTML = `
                        <h5>Pagamento via PayPal</h5>
                        <p>Conecte sua conta PayPal e finalize a transação com segurança.</p>
                        <img src="{{ asset('assets/images/qrcode-pix.png') }}" alt="Logo PayPal" style="max-width: 200px;">
                    `;
                                        }
                                    });
                                });
                            });
                        </script>
    </section>
</main>
@endsection