@extends('layouts.app')
@section('content')
<main class="pt-90">
  <div class="mb-4 pb-4"></div>
  <section class="my-account container">
    <h2 class="page-title">Minha conta</h2>
    <div class="row">
      <div class="col-lg-3">
        @include('user.account-nav')
      </div>
      <div class="col-lg-9">
        <div class="page-content my-account__dashboard">
          <p>Olá <strong>ALPHA</strong></p>
          <p>No painel da sua conta, você pode visualizar seus <a class="unerline-link" href="{{ route('user.orders') }}">pedidos
              recentes</a>, gerenciar seus
            <a class="unerline-link js-loading-message" href="{{ route('user.index') }}">endereços de entrega</a>
            e
            <a class="unerline-link js-loading-message" href="{{ route('user.index') }}">editar os detalhes de sua conta</a>.
          </p>

        </div>
      </div>
    </div>
  </section>
</main>
@endsection