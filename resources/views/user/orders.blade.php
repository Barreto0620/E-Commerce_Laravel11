@extends('layouts.app')

@section('content')
    <style>
        .table> :not(caption)>tr>th {
            padding: 0.625rem 1.5rem .625rem !important;
            background-color: #6a6e51 !important;
        }

        .table>tr>td {
            padding: 0.625rem 1.5rem .625rem !important;
        }

        .table-bordered> :not(caption)>tr>th,
        .table-bordered> :not(caption)>tr>td {
            border-width: 1px 1px;
            border-color: #6a6e51;
        }

        .table> :not(caption)>tr>td {
            padding: .8rem 1rem !important;
        }

        .bg-success {
            background-color: #40c710 !important;
        }

        .bg-danger {
            background-color: #f44032 !important;
        }

        .bg-warning {
            background-color: #f5d700 !important;
            color: #000;
        }
    </style>

    <main class="pt-90" style="padding-top: 0px;">
        <div class="mb-4 pb-4"></div>
        <section class="my-account container">
            <h2 class="page-title">Pedidos</h2>
            <div class="row">
                <div class="col-lg-2">
                    @include('user.account-nav')
                </div>

                <div class="col-lg-10">
                    <div class="wg-table table-all-user">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th class="text-center">N° do Pedido</th>
                                        <th class="text-center">Nome</th>
                                        <th class="text-center">Subtotal</th>
                                        <th class="text-center">Taxa</th>
                                        <th class="text-center">Total</th>
                                        <th class="text-center">Status</th>
                                        <th class="text-center">Data do Pedido</th>
                                        <th class="text-center">Método de Pagamento</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @if (session('order'))
                                        <tr>
                                            <td class="text-center">{{ session('order')['id'] }}</td>
                                            <td class="text-center">{{ Auth::user()->USUARIO_NOME }}</td>
                                            <td class="text-center">
                                                ${{ session('order')['subtotal'] }}
                                            </td>
                                            <td class="text-center">
                                                ${{ session('order')['taxa'] }}
                                            </td>
                                            <td class="text-center">
                                                ${{ session('order')['total'] }}
                                            </td>                                            
                                            <td class="text-center">
                                                @if (isset(session('order')['status']) && session('order')['status'] == 'Delivered')
                                                    <span class="bg-success">{{ session('order')['status'] }}</span>
                                                @elseif (isset(session('order')['status']) && session('order')['status'] == 'Pending')
                                                    <span class="bg-warning">{{ session('order')['status'] }}</span>
                                                @elseif (isset(session('order')['status']))
                                                    <span class="bg-danger">{{ session('order')['status'] }}</span>
                                                @else
                                                    <span class="bg-success">PAGO</span>
                                                @endif
                                            </td>
                                            <td class="text-center">{{ now()->format('d/m/Y') }}</td>
                                            <td class="text-center">{{ session('order')['metodo_pagamento'] }}</td>
                                            
                                        </tr>
                                    @else
                                        <tr>
                                            <td colspan="9" class="text-center">Nenhum pedido encontrado.</td>
                                        </tr>
                                    @endif
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="divider"></div>
                    <div class="flex items-center justify-between flex-wrap gap10 wgp-pagination">
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
