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

                        <div class="row mt-5">
                            <!-- Nome completo -->
                            <div class="col-md-6">
                                <div class="form-floating my-3">
                                    <input type="text" class="form-control" name="ENDERECO_NOME"
                                        value="{{ old('ENDERECO_NOME', $endereco->nome ?? '') }}" required>
                                    <label for="ENDERECO_NOME">Nome Completo *</label>
                                    @error('ENDERECO_NOME')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <!-- Telefone -->
                            <div class="col-md-6">
                                <div class="form-floating my-3">
                                    <input type="text" class="form-control" name="ENDERECO_TELEFONE"
                                        value="{{ old('ENDERECO_TELEFONE', $endereco->telefone ?? '') }}" required>
                                    <label for="ENDERECO_TELEFONE">Número de Telefone *</label>
                                    @error('ENDERECO_TELEFONE')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <!-- CEP -->
                            <div class="col-md-4">
                                <div class="form-floating my-3">
                                    <input type="text" class="form-control" name="ENDERECO_CEP"
                                        value="{{ old('ENDERECO_CEP', $endereco->cep ?? '') }}" required>
                                    <label for="ENDERECO_CEP">CEP *</label>
                                    @error('ENDERECO_CEP')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <!-- Estado -->
                            <div class="col-md-4">
                                <div class="form-floating mt-3 mb-3">
                                    <input type="text" class="form-control" name="ENDERECO_ESTADO"
                                        value="{{ old('ENDERECO_ESTADO', $endereco->estado ?? '') }}" required>
                                    <label for="ENDERECO_ESTADO">Estado *</label>
                                    @error('ENDERECO_ESTADO')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <!-- Cidade -->
                            <div class="col-md-4">
                                <div class="form-floating my-3">
                                    <input type="text" class="form-control" name="ENDERECO_CIDADE"
                                        value="{{ old('ENDERECO_CIDADE', $endereco->cidade ?? '') }}" required>
                                    <label for="ENDERECO_CIDADE">Cidade *</label>
                                    @error('ENDERECO_CIDADE')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <!-- Rua e Número -->
                            <div class="col-md-6">
                                <div class="form-floating my-3">
                                    <input type="text" class="form-control" name="ENDERECO_RUA"
                                        value="{{ old('ENDERECO_RUA', $endereco->rua ?? '') }}" required>
                                    <label for="ENDERECO_RUA">Rua e Número *</label>
                                    @error('ENDERECO_RUA')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <!-- Complemento -->
                            <div class="col-md-6">
                                <div class="form-floating my-3">
                                    <input type="text" class="form-control" name="ENDERECO_COMPLEMENTO"
                                        value="{{ old('ENDERECO_COMPLEMENTO', $endereco->complemento ?? '') }}" required>
                                    <label for="ENDERECO_COMPLEMENTO">Complemento *</label>
                                    @error('ENDERECO_COMPLEMENTO')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <!-- Ponto de Referência -->
                            <div class="col-md-12">
                                <div class="form-floating my-3">
                                    <input type="text" class="form-control" name="ENDERECO_REFERENCIA"
                                        value="{{ old('ENDERECO_REFERENCIA', $endereco->referencia ?? '') }}" required>
                                    <label for="ENDERECO_REFERENCIA">Ponto de Referência *</label>
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
                                                <th>Serviço</th>
                                                <td align="right">R${{Cart::instance('cart')->tax()}}</td>
                                            </tr>
                                            <tr>
                                                <th>TOTAL</th>
                                                <td align="right">R$ {{Cart::instance('cart')->total()}}</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>

                                <div class="checkout__payment-methods">
                                    <div class="form-check">
                                        <input class="form-check-input form-check-input_fill" type="radio"
                                            name="checkout_payment_method" id="checkout_payment_method_1">
                                        <label class="form-check-label" for="checkout_payment_method_1">
                                            Pagamento no Pix
                                            <p class="option-detail">
                                                Realize o pagamento de forma rápida e segura com o <strong>Pix</strong>. Com
                                                apenas alguns cliques, seu pagamento será processado e seu pedido será enviado
                                                assim que os fundos forem confirmados. <strong>Praticidade e agilidade!</strong>
                                            </p>
                                        </label>
                                    </div>

                                    <div class="form-check">
                                        <input class="form-check-input form-check-input_fill" type="radio"
                                            name="checkout_payment_method" id="checkout_payment_method_2">
                                        <label class="form-check-label" for="checkout_payment_method_2">
                                            Pagamento por Boleto
                                            <p class="option-detail">
                                                Prefere pagar à vista? <strong>Com o Boleto Bancário</strong>, você pode gerar o
                                                boleto e pagá-lo no banco de sua preferência. Após a compensação do pagamento,
                                                seu pedido será processado. <strong>Simples e sem pressa!</strong>
                                            </p>
                                        </label>
                                    </div>

                                    <div class="form-check">
                                        <input class="form-check-input form-check-input_fill" type="radio"
                                            name="checkout_payment_method" id="checkout_payment_method_3">
                                        <label class="form-check-label" for="checkout_payment_method_3">
                                            Pagamento na Entrega
                                            <p class="option-detail">
                                                Se você prefere pagar quando o pedido chegar até você, <strong>opte pelo
                                                    pagamento na entrega</strong>. Sem burocracia, você paga diretamente ao
                                                entregador no momento da entrega. <strong>Flexibilidade e conforto!</strong>
                                            </p>
                                        </label>
                                    </div>

                                    <div class="form-check">
                                        <input class="form-check-input form-check-input_fill" type="radio"
                                            name="checkout_payment_method" id="checkout_payment_method_4">
                                        <label class="form-check-label" for="checkout_payment_method_4">
                                            PayPal
                                            <p class="option-detail">
                                                Utilize o <strong>PayPal</strong> para uma transação segura e protegida. Conecte
                                                sua conta do PayPal e finalize o pagamento em poucos minutos, sem sair do site.
                                                <strong>Pagamento global e garantido!</strong>
                                            </p>
                                        </label>
                                    </div>


                                    <div class="policy-text">
                                        Seus dados pessoais serão usados para processar seu pedido, apoiar sua experiência
                                        durante a navegação no site e para outros fins descritos em nossa <a href="terms.html"
                                            target="_blank">política de privacidade</a>.
                                    </div>
                                </div>

                                <button type="submit" class="btn btn-primary">FINALIZAR PEDIDO</button>
                            </div>
                        </div>
                    </div>
                </form>

            </section>
        </main>
    @endsection
