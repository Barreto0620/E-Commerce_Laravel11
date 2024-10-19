@extends('layouts.admin')
@section('content')
    
<div class="main-content-inner">
 
<div class="main-content-wrap">
    <div class="tf-section-2 mb-30">
        <div class="flex gap20 flex-wrap-mobile">
            <div class="w-half">

                <div class="wg-chart-default mb-20">
                    <div class="flex items-center justify-between">
                        <div class="flex items-center gap14">
                            <div class="image ic-bg">
                                <i class="icon-shopping-bag"></i>
                            </div>
                            <div>
                                <div class="body-text mb-2">Total de Pedidos</div>
                                <h4>3</h4>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="wg-chart-default mb-20">
                    <div class="flex items-center justify-between">
                        <div class="flex items-center gap14">
                            <div class="image ic-bg">
                                <i class="icon-dollar-sign"></i>
                            </div>
                            <div>
                                <div class="body-text mb-2">Valor total</div>
                                <h4>481.34</h4>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="wg-chart-default mb-20">
                    <div class="flex items-center justify-between">
                        <div class="flex items-center gap14">
                            <div class="image ic-bg">
                                <i class="icon-shopping-bag"></i>
                            </div>
                            <div>
                                <div class="body-text mb-2">Pedidos pendentes</div>
                                <h4>3</h4>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="wg-chart-default">
                    <div class="flex items-center justify-between">
                        <div class="flex items-center gap14">
                            <div class="image ic-bg">
                                <i class="icon-dollar-sign"></i>
                            </div>
                            <div>
                                <div class="body-text mb-2">Valor de pedidos pendentes</div>
                                <h4>481.34</h4>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="w-half">

                <div class="wg-chart-default mb-20">
                    <div class="flex items-center justify-between">
                        <div class="flex items-center gap14">
                            <div class="image ic-bg">
                                <i class="icon-shopping-bag"></i>
                            </div>
                            <div>
                                <div class="body-text mb-2">Pedidos entregues</div>
                                <h4>0</h4>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="wg-chart-default mb-20">
                    <div class="flex items-center justify-between">
                        <div class="flex items-center gap14">
                            <div class="image ic-bg">
                                <i class="icon-dollar-sign"></i>
                            </div>
                            <div>
                                <div class="body-text mb-2">Quantidade de pedidos entregues</div>
                                <h4>0.00</h4>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="wg-chart-default mb-20">
                    <div class="flex items-center justify-between">
                        <div class="flex items-center gap14">
                            <div class="image ic-bg">
                                <i class="icon-shopping-bag"></i>
                            </div>
                            <div>
                                <div class="body-text mb-2">Pedidos Cancelados</div>
                                <h4>0</h4>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="wg-chart-default">
                    <div class="flex items-center justify-between">
                        <div class="flex items-center gap14">
                            <div class="image ic-bg">
                                <i class="icon-dollar-sign"></i>
                            </div>
                            <div>
                                <div class="body-text mb-2">Valor dos pedidos cancelados</div>
                                <h4>0.00</h4>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

        <div class="wg-box">
            <div class="flex items-center justify-between">
                <h5>Receita de Ganhos</h5>
                <div class="dropdown default">
                    <button class="btn btn-secondary dropdown-toggle" type="button"
                        data-bs-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false">
                        <span class="icon-more"><i class="icon-more-horizontal"></i></span>
                    </button>
                    <ul class="dropdown-menu dropdown-menu-end">
                        <li>
                            <a href="{{ asset('javascript:void(0);">Essa Semana</a>
                        </li>
                        <li>
                            <a href="{{ asset('javascript:void(0);">Última Semana</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="flex flex-wrap gap40">
                <div>
                    <div class="mb-2">
                        <div class="block-legend">
                            <div class="dot t1"></div>
                            <div class="text-tiny">Receita</div>
                        </div>
                    </div>
                    <div class="flex items-center gap10">
                        <h4>$37,802</h4>
                        <div class="box-icon-trending up">
                            <i class="icon-trending-up"></i>
                            <div class="body-title number">0.56%</div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="mb-2">
                        <div class="block-legend">
                            <div class="dot t2"></div>
                            <div class="text-tiny">Pedidos</div>
                        </div>
                    </div>
                    <div class="flex items-center gap10">
                        <h4>$28,305</h4>
                        <div class="box-icon-trending up">
                            <i class="icon-trending-up"></i>
                            <div class="body-title number">0.56%</div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="line-chart-8"></div>
        </div>

    </div>
    <div class="tf-section mb-30">

        <div class="wg-box">
            <div class="flex items-center justify-between">
                <h5>Pedidos Recentes</h5>
                <div class="dropdown default">
                    <a class="btn btn-secondary dropdown-toggle" href="{{ asset('#">
                        <span class="view-all">Ver todos</span>
                    </a>
                </div>
            </div>
            <div class="wg-table table-all-user">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th style="width: 80px">Pedido</th>
                                <th>Nome</th>
                                <th class="text-center">Celular</th>
                                <th class="text-center">Subtotal</th>
                                <th class="text-center">Taxa</th>
                                <th class="text-center">Total</th>

                                <th class="text-center">Status</th>
                                <th class="text-center">Data do pedido</th>
                                <th class="text-center">Total Items</th>
                                <th class="text-center">Entrega On</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="text-center">1</td>
                                <td class="text-center">Divyansh Kumar</td>
                                <td class="text-center">1234567891</td>
                                <td class="text-center">$172.00</td>
                                <td class="text-center">$36.12</td>
                                <td class="text-center">$208.12</td>

                                <td class="text-center">ordered</td>
                                <td class="text-center">2024-07-11 00:54:14</td>
                                <td class="text-center">2</td>
                                <td></td>
                                <td class="text-center">
                                    <a href="{{ asset('#">
                                        <div class="list-icon-function view-icon">
                                            <div class="item eye">
                                                <i class="icon-eye"></i>
                                            </div>
                                        </div>
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
</div>

</div>

@endsection