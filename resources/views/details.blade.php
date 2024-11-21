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
                    <div class="swiper-slide product-single__image-item">
                        @if ($produto->imagens->isNotEmpty())
                            <img loading="lazy" class="h-auto"
                                src="{{ $produto->imagens->first()->IMAGEM_URL }}" width="374" height="674"
                                alt="Imagem do produto" />
                        @else
                            <img loading="lazy" class="h-auto"
                                src="{{ asset('images/default-placeholder.png') }}" width="374" height="674"
                                alt="Imagem indisponível" />
                        @endif
                    </div>
                    <div class="swiper-slide product-single__image-item">
                        @if ($produto->imagens->isNotEmpty())
                            <img loading="lazy" class="h-auto"
                                src="{{ $produto->imagens->first()->IMAGEM_URL }}" width="674" height="674"
                                alt="Imagem do produto" />
                        @else
                            <img loading="lazy" class="h-auto"
                                src="{{ asset('images/default-placeholder.png') }}" width="674" height="674"
                                alt="Imagem indisponível" />
                        @endif
                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <use href="#icon_zoom" />
                        </svg>
                    </div>
                    <!-- Repita a estrutura para os demais slides -->
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
                            <img loading="lazy" class="h-auto"
                                src="{{ $imagem->IMAGEM_URL }}" width="104" height="104"
                                alt="Thumbnail do produto" />
                        </div>
                    @endforeach
                    @if ($produto->imagens->isEmpty())
                        <div class="swiper-slide product-single__image-item">
                            <img loading="lazy" class="h-auto"
                                src="{{ asset('images/default-placeholder.png') }}" width="104" height="104"
                                alt="Imagem indisponível" />
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>

      <div class="col-lg-5">
        <div class="d-flex justify-content-between mb-4 pb-md-2">
          <div class="breadcrumb mb-0 d-none d-md-block flex-grow-1">
            <a href="{{ route('home.index') }}"
              class="menu-link menu-link_us-s text-uppercase fw-medium">Início</a>
            <span class="breadcrumb-separator menu-link fw-medium ps-1 pe-1">/</span>
            <a href="{{ route('catalogo.index') }}"
              class="menu-link menu-link_us-s text-uppercase fw-medium">Catálogo</a>
          </div><!-- /.breadcrumb -->

          <div
            class="product-single__prev-next d-flex align-items-center justify-content-between justify-content-md-end flex-grow-1">
            <a href="#" class="text-uppercase fw-medium"><svg width="10" height="10"
                viewBox="0 0 25 25" xmlns="http://www.w3.org/2000/svg">
                <use href="#icon_prev_md" />
              </svg><span class="menu-link menu-link_us-s">Anterior</span></a>
            <a href="#" class="text-uppercase fw-medium"><span
                class="menu-link menu-link_us-s">Proximo</span><svg width="10" height="10"
                viewBox="0 0 25 25" xmlns="http://www.w3.org/2000/svg">
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
        <form name="addtocart-form" method="post">
          <div class="product-single__addtocart">
            <div class="qty-control position-relative">
              <input type="number" name="quantity" value="1" min="1"
                class="qty-control__number text-center">
              <div class="qty-control__reduce">-</div>
              <div class="qty-control__increase">+</div>
            </div><!-- .qty-control -->
            <button type="submit" class="btn btn-primary btn-addtocart js-open-aside"
              data-aside="cartDrawer">Comprar</button>
          </div>
        </form>
        <div class="product-single__addtolinks">
          <share-button class="share-button">
            <button
              class="menu-link menu-link_us-s to-share border-0 bg-transparent d-flex align-items-center">
              <svg width="16" height="19" viewBox="0 0 16 19" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <use href="#icon_sharing" />
              </svg>
              <span>Compartilhar</span>
            </button>
            <details id="Details-share-template__main" class="m-1 xl:m-1.5" hidden="">
              <summary class="btn-solid m-1 xl:m-1.5 pt-3.5 pb-3 px-5">+</summary>
              <div id="Article-share-template__main"
                class="share-button__fallback flex items-center absolute top-full left-0 w-full px-2 py-4 bg-container shadow-theme border-t z-10">
                <div class="field grow mr-4">
                  <label class="field__label sr-only" for="url">Link</label>
                  <input type="text" class="field__input w-full" id="url"
                    value="https://uomo-crystal.myshopify.com/blogs/news/go-to-wellness-tips-for-mental-health"
                    placeholder="Link" onclick="this.select();" readonly="">
                </div>
                <button class="share-button__copy no-js-hidden">
                  <svg class="icon icon-clipboard inline-block mr-1" width="11" height="13"
                    fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true"
                    focusable="false" viewBox="0 0 11 13">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                      d="M2 1a1 1 0 011-1h7a1 1 0 011 1v9a1 1 0 01-1 1V1H2zM1 2a1 1 0 00-1 1v9a1 1 0 001 1h7a1 1 0 001-1V3a1 1 0 00-1-1H1zm0 10V3h7v9H1z"
                      fill="currentColor"></path>
                  </svg>
                  <span class="sr-only">Copiar link</span>
                </button>
              </div>
            </details>
          </share-button>
          <script src="js/details-disclosure.html" defer="defer"></script>
          <script src="js/share.html" defer="defer"></script>
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
            href="#tab-description" role="tab" aria-controls="tab-description"
            aria-selected="true">Descrição</a>
        </li>
        <li class="nav-item" role="presentation">
          <a class="nav-link nav-link_underscore" id="tab-reviews-tab" data-bs-toggle="tab"
            href="#tab-reviews" role="tab" aria-controls="tab-reviews"
            aria-selected="false">Avaliações (2)</a>
        </li>
      </ul>
      <div class="tab-content">
        <div class="tab-pane fade show active" id="tab-description" role="tabpanel"
          aria-labelledby="tab-description-tab">
          <div class="product-single__description">
            <h3 class="block-title mb-4">O porque comprar ?</h3>
            <p class="content">{{ $produto->PRODUTO_DESC }}</p>
            <div class="row">
            </div>
          </div>
        </div>
        <div class="tab-pane fade" id="tab-reviews" role="tabpanel" aria-labelledby="tab-reviews-tab">
          <h2 class="product-single__reviews-title">Avaliações</h2>
          <div class="product-single__reviews-list">
            <div class="product-single__reviews-item">
              <div class="customer-avatar">
                <img loading="lazy" src="{{ asset('assets/images/avatar.png') }}"
                  alt="Gabriel Barreto" />
              </div>
              <div class="customer-review">
                <div class="customer-name">
                  <h6>Gabriel Barreto</h6>
                  <div class="reviews-group d-flex">
                    <svg class="review-star" viewBox="0 0 9 9"
                      xmlns="http://www.w3.org/2000/svg">
                      <use href="#icon_star" />
                    </svg>
                    <svg class="review-star" viewBox="0 0 9 9"
                      xmlns="http://www.w3.org/2000/svg">
                      <use href="#icon_star" />
                    </svg>
                    <svg class="review-star" viewBox="0 0 9 9"
                      xmlns="http://www.w3.org/2000/svg">
                      <use href="#icon_star" />
                    </svg>
                    <svg class="review-star" viewBox="0 0 9 9"
                      xmlns="http://www.w3.org/2000/svg">
                      <use href="#icon_star" />
                    </svg>
                    <svg class="review-star" viewBox="0 0 9 9"
                      xmlns="http://www.w3.org/2000/svg">
                      <use href="#icon_star" />
                    </svg>
                  </div>
                </div>
                <div class="review-date">Avaliado em 2024</div>
                <div class="review-text">
                  <p>"Excelente loja para comprar hardware! Produtos de qualidade, preços justos e
                    ótimo atendimento. Entrega rápida e suporte confiável. Recomendo!"</p>
                </div>
              </div>
            </div>
            <div class="product-single__reviews-item">
              <div class="customer-avatar">
                <img loading="lazy" src="{{ asset('assets/images/avatar_1.png') }}"
                  alt="Lucas Ryan" />
              </div>
              <div class="customer-review">
                <div class="customer-name">
                  <h6>Lucas Ryan</h6>
                  <div class="reviews-group d-flex">
                    <svg class="review-star" viewBox="0 0 9 9"
                      xmlns="http://www.w3.org/2000/svg">
                      <use href="#icon_star" />
                    </svg>
                    <svg class="review-star" viewBox="0 0 9 9"
                      xmlns="http://www.w3.org/2000/svg">
                      <use href="#icon_star" />
                    </svg>
                    <svg class="review-star" viewBox="0 0 9 9"
                      xmlns="http://www.w3.org/2000/svg">
                      <use href="#icon_star" />
                    </svg>
                    <svg class="review-star" viewBox="0 0 9 9"
                      xmlns="http://www.w3.org/2000/svg">
                      <use href="#icon_star" />
                    </svg>
                    <svg class="review-star" viewBox="0 0 9 9"
                      xmlns="http://www.w3.org/2000/svg">
                      <use href="#icon_star" />
                    </svg>
                  </div>
                </div>
                <div class="review-date">Avaliado em 2024</div>
                <div class="review-text">
                  <p>"Loja incrível para quem busca hardware de qualidade! Variedade de produtos,
                    preços acessíveis e atendimento excepcional. Totalmente confiável!"</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
  </section>
  <section class="products-carousel container">
    <h2 class="h3 text-uppercase mb-4 pb-xl-2 mb-xl-4">Produtos <strong>Relacionados</strong></h2>

    <div id="related_products" class="position-relative">
      <div class="swiper-container js-swiper-slider"
        data-settings='{
          "autoplay": false,
          "slidesPerView": 4,
          "slidesPerGroup": 4,
          "effect": "none",
          "loop": true,
          "pagination": {
            "el": "#related_products .products-pagination",
            "type": "bullets",
            "clickable": true
          },
          "navigation": {
            "nextEl": "#related_products .products-carousel__next",
            "prevEl": "#related_products .products-carousel__prev"
          },
          "breakpoints": {
            "320": {
              "slidesPerView": 2,
              "slidesPerGroup": 2,
              "spaceBetween": 14
            },
            "768": {
              "slidesPerView": 3,
              "slidesPerGroup": 3,
              "spaceBetween": 24
            },
            "992": {
              "slidesPerView": 4,
              "slidesPerGroup": 4,
              "spaceBetween": 30
            }
          }
        }'>
        <div class="swiper-container">
          <div class="swiper-wrapper">
            @foreach ($produtosRelacionados as $produtoRelacionado)
            <div class="swiper-slide product-card" style="margin-right: 15px;">
              <div class="pc__img-wrapper">
                <a href="{{ route('catalogo.details', ['PRODUTO_ID' => $produtoRelacionado->PRODUTO_ID]) }}">
                  @if ($produtoRelacionado->imagens->isNotEmpty())
                  <img loading="lazy"
                    src="{{ $produtoRelacionado->imagens->first()->IMAGEM_URL }}"
                    width="330" height="400"
                    alt="{{ $produtoRelacionado->PRODUTO_NOME }}"
                    class="pc__img">
                  @else
                  <img loading="lazy"
                    src="{{ asset('images/default-placeholder.png') }}"
                    width="330" height="400"
                    alt="Imagem indisponível"
                    class="pc__img">
                  @endif
                </a>
                <button class="pc__atc btn anim_appear-bottom btn position-absolute border-0 text-uppercase fw-medium js-add-cart js-open-aside"
                  data-aside="cartDrawer" title="Add To Cart">Carrinho</button>
              </div>

              <div class="pc__info position-relative">
                <p class="pc__category">{{ $produtoRelacionado->categoria->CATEGORIA_NOME ?? 'Sem categoria' }}</p>
                <h6 class="pc__title">
                  <a href="{{ route('catalogo.details', ['PRODUTO_ID' => $produtoRelacionado->PRODUTO_ID]) }}">
                    {{ $produtoRelacionado->PRODUTO_NOME }}
                  </a>
                </h6>
                <div class="product-card__price d-flex">
                  <span class="money price">R$: {{ number_format($produtoRelacionado->PRODUTO_PRECO, 2, ',', '.') }}</span>
                </div>
                <button class="pc__btn-wl position-absolute top-0 end-0 bg-transparent border-0 js-add-wishlist"
                  title="Add To Wishlist">
                  <svg width="16" height="16" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <use href="#icon_heart" />
                  </svg>
                </button>
              </div>
            </div>
            @endforeach
          </div>
        </div>


        <div
          class="products-carousel__prev position-absolute top-50 d-flex align-items-center justify-content-center">
          <svg width="25" height="25" viewBox="0 0 25 25" xmlns="http://www.w3.org/2000/svg">
            <use href="#icon_prev_md" />
          </svg>
        </div><!-- /.products-carousel__prev -->
        <div
          class="products-carousel__next position-absolute top-50 d-flex align-items-center justify-content-center">
          <svg width="25" height="25" viewBox="0 0 25 25" xmlns="http://www.w3.org/2000/svg">
            <use href="#icon_next_md" />
          </svg>
        </div><!-- /.products-carousel__next -->

        <div class="products-pagination mt-4 mb-5 d-flex align-items-center justify-content-center"></div>
        <!-- /.products-pagination -->
      </div><!-- /.position-relative -->

  </section><!-- /.products-carousel container -->
</main>
@endsection