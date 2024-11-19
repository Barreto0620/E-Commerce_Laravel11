@extends('layouts.app')
@section('content')

<main class="pt-90">
  <div class="mb-md-1 pb-md-3"></div>
  <section class="product-single container">
    <div class="row">
      <div class="col-lg-7">
        <div class="product-single__media" data-media-type="vertical-thumbnail">
          <div class="product-single__image">
            <div class="swiper-container">
              <div class="swiper-wrapper">
                @foreach ($produto->imagens as $imagem)
                <div class="swiper-slide product-single__image-item">
                  <img loading="lazy" class="h-auto" src="{{ $imagem->IMAGEM_URL }}" width="374" height="674" alt="" />
                </div>
                @endforeach
              </div>
              <div class="swiper-button-prev">
                <svg width="7" height="11" viewBox="0 0 7 11" xmlns="http://www.w3.org/2000/svg">
                  <use href="#icon_prev_sm" />
                </svg>
              </div>
              <div class="swiper-button-next">
                <svg width="7" height="11" viewBox="0 0 7 11" xmlns="http://www.w3.org/2000/svg">
                  <use href="#icon_next_sm" />
                </svg>
              </div>
            </div>
          </div>
          <div class="product-single__thumbnail">
            <div class="swiper-container">
              <div class="swiper-wrapper">
                @foreach ($produto->imagens as $imagem)
                <div class="swiper-slide product-single__image-item">
                  <img loading="lazy" class="h-auto" src="{{ $imagem->IMAGEM_URL }}" width="104" height="104" alt="" />
                </div>
                @endforeach
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-5">
        <div class="d-flex justify-content-between mb-4 pb-md-2">
          <div class="breadcrumb mb-0 d-none d-md-block flex-grow-1">
            <a href="{{route('home.index')}}" class="menu-link menu-link_us-s text-uppercase fw-medium">Início</a>
            <span class="breadcrumb-separator menu-link fw-medium ps-1 pe-1">/</span>
            <a href="{{route('catalogo.index')}}" class="menu-link menu-link_us-s text-uppercase fw-medium">Catálogo</a>
          </div><!-- /.breadcrumb -->

          <div
            class="product-single__prev-next d-flex align-items-center justify-content-between justify-content-md-end flex-grow-1">
            <a href="#" class="text-uppercase fw-medium"><svg width="10" height="10" viewBox="0 0 25 25"
                xmlns="http://www.w3.org/2000/svg">
                <use href="#icon_prev_md" />
              </svg><span class="menu-link menu-link_us-s">Anterior</span></a>
            <a href="#" class="text-uppercase fw-medium"><span class="menu-link menu-link_us-s">Proximo</span><svg
                width="10" height="10" viewBox="0 0 25 25" xmlns="http://www.w3.org/2000/svg">
                <use href="#icon_next_md" />
              </svg></a>
          </div><!-- /.shop-acs -->
        </div>
        <h1 class="product-single__name">{{ $produto->PRODUTO_NOME }}</h1>
        <div class="product-single__rating">
          <div class="reviews-group d-flex">
            <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg">
              <use href="#icon_star" />
            </svg>
            <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg">
              <use href="#icon_star" />
            </svg>
            <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg">
              <use href="#icon_star" />
            </svg>
            <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg">
              <use href="#icon_star" />
            </svg>
            <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg">
              <use href="#icon_star" />
            </svg>
          </div>
          <span class="reviews-note text-lowercase text-secondary ms-1">+ 8 MIL Avaliações</span>
        </div>
        <div class="product-single__price">
          <span class="current-price">R$: {{ $produto->PRODUTO_PRECO }}</span>
        </div>
        <div class="product-single__short-desc">
          <p>{{ $produto->PRODUTO_DESC }}</p>
        </div>
        @if(Cart::instance("cart")->content()->Where('id',$produto->PRODUTO_ID)->count()>0)
        <a href="{{route('cart.index')}}" class="btn btn-warning mb-3">Adicionado ao carrinho</a>
        @else
        <form name="addtocart-form" method="post" action="{{ route('cart.add') }}">
          @csrf <!-- Token CSRF para proteger contra ataques CSRF -->

          <div class="product-single__addtocart">
            <!-- Controle de quantidade do produto -->
            <div class="qty-control position-relative">
              <input type="number" name="quantity" value="1" min="1" class="qty-control__number text-center">
              <div class="qty-control__reduce">-</div>
              <div class="qty-control__increase">+</div>
            </div><!-- .qty-control -->

            <!-- Campos escondidos com informações do produto -->
            <input type="hidden" name="id" value="{{ $produto->PRODUTO_ID }}" />
            <input type="hidden" name="name" value="{{ $produto->PRODUTO_NOME }}" />
            <input type="hidden" name="price" value="{{ $produto->PRODUTO_PRECO }}" />

            <!-- Botão de submissão do formulário -->
            <button type="submit" class="btn btn-primary btn-addtocart" data-aside="cartDrawer">Comprar</button>
          </div><!-- .product-single__addtocart -->
        </form>
        @endif
        <div class="product-single__addtolinks">
          <share-button class="share-button">
            <button class="menu-link menu-link_us-s to-share border-0 bg-transparent d-flex align-items-center">
              <svg width="16" height="19" viewBox="0 0 16 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                <use href="#icon_sharing" />
              </svg>
              <span>Compartilhar</span>
            </button>
          </share-button>
        </div>
        <div class="product-single__meta-info">
          <div class="meta-item">
            <label>SKU:</label>
            <span>{{ $produto->PRODUTO_ID }}</span>
          </div>
          <div class="meta-item">
            <label>Categoria:</label>
            <span>{{ $produto->categoria->CATEGORIA_NOME }}</span>
          </div>
        </div>
      </div>
    </div>
    <div class="product-single__details-tab">
      <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item" role="presentation">
          <a class="nav-link nav-link_underscore active" id="tab-description-tab" data-bs-toggle="tab"
            href="#tab-description" role="tab" aria-controls="tab-description" aria-selected="true">Descrição</a>
        </li>
        <li class="nav-item" role="presentation">
          <a class="nav-link nav-link_underscore" id="tab-reviews-tab" data-bs-toggle="tab" href="#tab-reviews"
            role="tab" aria-controls="tab-reviews" aria-selected="false">Avaliações (2)</a>
        </li>
      </ul>
      <div class="tab-content">
        <div class="tab-pane fade show active" id="tab-description" role="tabpanel"
          aria-labelledby="tab-description-tab">
          <div class="product-single__description">
            <h3 class="block-title mb-4">O porque comprar ?</h3>
            <p class="content">{{ $produto->PRODUTO_DESC }}</p>
          </div>
        </div>
        <div class="tab-pane fade" id="tab-reviews" role="tabpanel" aria-labelledby="tab-reviews-tab">
          <h2 class="product-single__reviews-title">Avaliações</h2>
          <div class="product-single__reviews-list">
            <div class="product-single__reviews-item">
              <div class="customer-avatar">
                <img loading="lazy" src="{{ asset('assets/img/review-author-01.jpg') }}" width="50" height="50"
                  alt="">
              </div>
              <div class="review-content">
                <div class="reviews-group d-flex">
                  <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg">
                    <use href="#icon_star" />
                  </svg>
                  <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg">
                    <use href="#icon_star" />
                  </svg>
                  <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg">
                    <use href="#icon_star" />
                  </svg>
                  <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg">
                    <use href="#icon_star" />
                  </svg>
                  <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg">
                    <use href="#icon_star" />
                  </svg>
                </div>
                <span class="review-author">Autor da Avaliação - 20/08/2024</span>
                <p class="review-text">Texto da avaliação detalhada aqui...</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>

@endsection