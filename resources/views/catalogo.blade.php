@extends('layouts.app')
@section('content')
<main class="pt-90">
    <section class="shop-main container d-flex pt-4 pt-xl-5">
        <div class="shop-sidebar side-sticky bg-body" id="shopFilter">
            <div class="aside-header d-flex d-lg-none align-items-center">
                <h3 class="text-uppercase fs-6 mb-0">Filtrar por</h3>
                <button class="btn-close-lg js-close-aside btn-close-aside ms-auto"></button>
            </div>

            <div class="pt-4 pt-lg-0"></div>

            <div class="accordion" id="categories-list">
                <div class="accordion-item mb-4 pb-3">
                    <h5 class="accordion-header" id="accordion-heading-1">
                        <button class="accordion-button p-0 border-0 fs-5 text-uppercase" type="button"
                            data-bs-toggle="collapse" data-bs-target="#accordion-filter-1" aria-expanded="true"
                            aria-controls="accordion-filter-1">
                            Categorias
                            <svg class="accordion-button__icon type2" viewBox="0 0 10 6"
                                xmlns="http://www.w3.org/2000/svg">
                                <g aria-hidden="true" stroke="none" fill-rule="evenodd">
                                    <path
                                        d="M5.35668 0.159286C5.16235 -0.053094 4.83769 -0.0530941 4.64287 0.159286L0.147611 5.05963C-0.0492049 5.27473 -0.049205 5.62357 0.147611 5.83813C0.344427 6.05323 0.664108 6.05323 0.860924 5.83813L5 1.32706L9.13858 5.83867C9.33589 6.05378 9.65507 6.05378 9.85239 5.83867C10.0492 5.62357 10.0492 5.27473 9.85239 5.06018L5.35668 0.159286Z" />
                                </g>
                            </svg>
                        </button>
                    </h5>
                    <div id="accordion-filter-1" class="accordion-collapse collapse show border-0"
                        aria-labelledby="accordion-heading-1" data-bs-parent="#categories-list">
                        <div class="accordion-body px-0 pb-0 pt-3">
                            <ul class="list list-inline mb-0">
                                <li class="list-item">
                                    <a href="#" class="menu-link py-1">Hardware</a>
                                </li>
                                <li class="list-item">
                                    <a href="#" class="menu-link py-1">Computadores</a>
                                </li>
                                <li class="list-item">
                                    <a href="#" class="menu-link py-1">Games</a>
                                </li>
                                <li class="list-item">
                                    <a href="#" class="menu-link py-1">Periféricos</a>
                                </li>
                                <li class="list-item">
                                    <a href="#" class="menu-link py-1">Smartphones</a>
                                </li>
                                <li class="list-item">
                                    <a href="#" class="menu-link py-1">TV</a>
                                </li>
                                <li class="list-item">
                                    <a href="#" class="menu-link py-1">Projetores</a>
                                </li>
                                <li class="list-item">
                                    <a href="#" class="menu-link py-1">Espaço Gamer</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>


            <div class="accordion" id="color-filters">
                <div class="accordion-item mb-4 pb-3">
                    <h5 class="accordion-header" id="accordion-heading-1">
                        <button class="accordion-button p-0 border-0 fs-5 text-uppercase" type="button"
                            data-bs-toggle="collapse" data-bs-target="#accordion-filter-2" aria-expanded="true"
                            aria-controls="accordion-filter-2">
                            Cores
                            <svg class="accordion-button__icon type2" viewBox="0 0 10 6"
                                xmlns="http://www.w3.org/2000/svg">
                                <g aria-hidden="true" stroke="none" fill-rule="evenodd">
                                    <path
                                        d="M5.35668 0.159286C5.16235 -0.053094 4.83769 -0.0530941 4.64287 0.159286L0.147611 5.05963C-0.0492049 5.27473 -0.049205 5.62357 0.147611 5.83813C0.344427 6.05323 0.664108 6.05323 0.860924 5.83813L5 1.32706L9.13858 5.83867C9.33589 6.05378 9.65507 6.05378 9.85239 5.83867C10.0492 5.62357 10.0492 5.27473 9.85239 5.06018L5.35668 0.159286Z" />
                                </g>
                            </svg>
                        </button>
                    </h5>
                    <div id="accordion-filter-2" class="accordion-collapse collapse show border-0"
                        aria-labelledby="accordion-heading-1" data-bs-parent="#color-filters">
                        <div class="accordion-body px-0 pb-0">
                            <div class="d-flex flex-wrap">
                                <a href="#" class="swatch-color js-filter" style="color: #0a2472"></a>
                                <a href="#" class="swatch-color js-filter" style="color: #d7bb4f"></a>
                                <a href="#" class="swatch-color js-filter" style="color: #282828"></a>
                                <a href="#" class="swatch-color js-filter" style="color: #b1d6e8"></a>
                                <a href="#" class="swatch-color js-filter" style="color: #9c7539"></a>
                                <a href="#" class="swatch-color js-filter" style="color: #d29b48"></a>
                                <a href="#" class="swatch-color js-filter" style="color: #e6ae95"></a>
                                <a href="#" class="swatch-color js-filter" style="color: #d76b67"></a>
                                <a href="#" class="swatch-color swatch_active js-filter"
                                    style="color: #bababa"></a>
                                <a href="#" class="swatch-color js-filter" style="color: #bfdcc4"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            {{-- <div class="accordion" id="size-filters">
          <div class="accordion-item mb-4 pb-3">
            <h5 class="accordion-header" id="accordion-heading-size">
              <button class="accordion-button p-0 border-0 fs-5 text-uppercase" type="button" data-bs-toggle="collapse"
                data-bs-target="#accordion-filter-size" aria-expanded="true" aria-controls="accordion-filter-size">
                Sizes
                <svg class="accordion-button__icon type2" viewBox="0 0 10 6" xmlns="http://www.w3.org/2000/svg">
                  <g aria-hidden="true" stroke="none" fill-rule="evenodd">
                    <path
                      d="M5.35668 0.159286C5.16235 -0.053094 4.83769 -0.0530941 4.64287 0.159286L0.147611 5.05963C-0.0492049 5.27473 -0.049205 5.62357 0.147611 5.83813C0.344427 6.05323 0.664108 6.05323 0.860924 5.83813L5 1.32706L9.13858 5.83867C9.33589 6.05378 9.65507 6.05378 9.85239 5.83867C10.0492 5.62357 10.0492 5.27473 9.85239 5.06018L5.35668 0.159286Z" />
                  </g>
                </svg>
              </button>
            </h5>
            <div id="accordion-filter-size" class="accordion-collapse collapse show border-0"
              aria-labelledby="accordion-heading-size" data-bs-parent="#size-filters">
              <div class="accordion-body px-0 pb-0">
                <div class="d-flex flex-wrap">
                  <a href="#" class="swatch-size btn btn-sm btn-outline-light mb-3 me-3 js-filter">XS</a>
                  <a href="#" class="swatch-size btn btn-sm btn-outline-light mb-3 me-3 js-filter">S</a>
                  <a href="#" class="swatch-size btn btn-sm btn-outline-light mb-3 me-3 js-filter">M</a>
                  <a href="#" class="swatch-size btn btn-sm btn-outline-light mb-3 me-3 js-filter">L</a>
                  <a href="#" class="swatch-size btn btn-sm btn-outline-light mb-3 me-3 js-filter">XL</a>
                  <a href="#" class="swatch-size btn btn-sm btn-outline-light mb-3 me-3 js-filter">XXL</a>
                </div>
              </div>
            </div>
          </div>
        </div> --}}


            <div class="accordion" id="brand-filters">
                <div class="accordion-item mb-4 pb-3">
                    <h5 class="accordion-header" id="accordion-heading-brand">
                        <button class="accordion-button p-0 border-0 fs-5 text-uppercase" type="button"
                            data-bs-toggle="collapse" data-bs-target="#accordion-filter-brand" aria-expanded="true"
                            aria-controls="accordion-filter-brand">
                            Marcas
                            <svg class="accordion-button__icon type2" viewBox="0 0 10 6"
                                xmlns="http://www.w3.org/2000/svg">
                                <g aria-hidden="true" stroke="none" fill-rule="evenodd">
                                    <path
                                        d="M5.35668 0.159286C5.16235 -0.053094 4.83769 -0.0530941 4.64287 0.159286L0.147611 5.05963C-0.0492049 5.27473 -0.049205 5.62357 0.147611 5.83813C0.344427 6.05323 0.664108 6.05323 0.860924 5.83813L5 1.32706L9.13858 5.83867C9.33589 6.05378 9.65507 6.05378 9.85239 5.83867C10.0492 5.62357 10.0492 5.27473 9.85239 5.06018L5.35668 0.159286Z" />
                                </g>
                            </svg>
                        </button>
                    </h5>
                    <div id="accordion-filter-brand" class="accordion-collapse collapse show border-0"
                        aria-labelledby="accordion-heading-brand" data-bs-parent="#brand-filters">
                        <div class="search-field multi-select accordion-body px-0 pb-0">
                            <select class="d-none" multiple name="total-numbers-list">
                                <option value="1">Intel</option>
                                <option value="2">AMD</option>
                                <option value="3">NVIDIA</option>
                                <option value="4">ASUS</option>
                                <option value="5">MSI</option>
                                <option value="5">Corsair</option>
                                <option value="5">Gigabyte</option>
                            </select>
                            <div class="search-field__input-wrapper mb-3">
                                <input type="text" name="search_text"
                                    class="search-field__input form-control form-control-sm border-light border-2"
                                    placeholder="Procure por marcas" />
                            </div>
                            <ul class="multi-select__list list-unstyled">
                                <li
                                    class="search-suggestion__item multi-select__item text-primary js-search-select js-multi-select">
                                    <span class="me-auto">Intel</span>
                                    <span class="text-secondary">2</span>
                                </li>
                                <li
                                    class="search-suggestion__item multi-select__item text-primary js-search-select js-multi-select">
                                    <span class="me-auto">AMD</span>
                                    <span class="text-secondary">7</span>
                                </li>
                                <li
                                    class="search-suggestion__item multi-select__item text-primary js-search-select js-multi-select">
                                    <span class="me-auto">NVIDIA</span>
                                    <span class="text-secondary">10</span>
                                </li>
                                <li
                                    class="search-suggestion__item multi-select__item text-primary js-search-select js-multi-select">
                                    <span class="me-auto">ASUS</span>
                                    <span class="text-secondary">39</span>
                                </li>
                                <li
                                    class="search-suggestion__item multi-select__item text-primary js-search-select js-multi-select">
                                    <span class="me-auto">MSI</span>
                                    <span class="text-secondary">95</span>
                                </li>
                                <li
                                    class="search-suggestion__item multi-select__item text-primary js-search-select js-multi-select">
                                    <span class="me-auto">Corsair</span>
                                    <span class="text-secondary">1092</span>
                                </li>
                                <li
                                    class="search-suggestion__item multi-select__item text-primary js-search-select js-multi-select">
                                    <span class="me-auto">Gigabyte</span>
                                    <span class="text-secondary">48</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>


            <div class="accordion" id="price-filters">
                <div class="accordion-item mb-4">
                    <h5 class="accordion-header mb-2" id="accordion-heading-price">
                        <button class="accordion-button p-0 border-0 fs-5 text-uppercase" type="button"
                            data-bs-toggle="collapse" data-bs-target="#accordion-filter-price" aria-expanded="true"
                            aria-controls="accordion-filter-price">
                            Preço
                            <svg class="accordion-button__icon type2" viewBox="0 0 10 6"
                                xmlns="http://www.w3.org/2000/svg">
                                <g aria-hidden="true" stroke="none" fill-rule="evenodd">
                                    <path
                                        d="M5.35668 0.159286C5.16235 -0.053094 4.83769 -0.0530941 4.64287 0.159286L0.147611 5.05963C-0.0492049 5.27473 -0.049205 5.62357 0.147611 5.83813C0.344427 6.05323 0.664108 6.05323 0.860924 5.83813L5 1.32706L9.13858 5.83867C9.33589 6.05378 9.65507 6.05378 9.85239 5.83867C10.0492 5.62357 10.0492 5.27473 9.85239 5.06018L5.35668 0.159286Z" />
                                </g>
                            </svg>
                        </button>
                    </h5>
                    <div id="accordion-filter-price" class="accordion-collapse collapse show border-0"
                        aria-labelledby="accordion-heading-price" data-bs-parent="#price-filters">
                        <input class="price-range-slider" type="text" name="price_range" value=""
                            data-slider-min="0" data-slider-max="10000" data-slider-step="5"
                            data-slider-value="[250,5000]" data-currency="R$" />
                        <div class="price-range__info d-flex align-items-center mt-2">
                            <div class="me-auto">
                                <span class="text-secondary">Valor Mín: </span>
                                <span class="price-range__min">R$0</span>
                            </div>
                            <div>
                                <span class="text-secondary">Valor Máx: </span>
                                <span class="price-range__max">R$10000</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="shop-list flex-grow-1">
            <div class="swiper-container js-swiper-slider slideshow slideshow_small slideshow_split"
                data-settings='{
            "autoplay": {
              "delay": 5000
            },
            "slidesPerView": 1,
            "effect": "fade",
            "loop": true,
            "pagination": {
              "el": ".slideshow-pagination",
              "type": "bullets",
              "clickable": true
            }
          }'>
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="slide-split h-100 d-block d-md-flex overflow-hidden">
                            <div class="slide-split_text position-relative d-flex align-items-center"
                                style="background-color: #000000;">
                                <div class="slideshow-text container p-3 p-xl-5">
                                    <h2
                                        class="text-uppercase color-white section-title fw-normal mb-3 animate animate_fade animate_btt animate_delay-2">
                                        Atualize o seu <strong>SETUP</strong></h2>
                                    <p class="mb-0 animate animate_fade animate_btt animate_delay-5 color-white">
                                        Desempenho Máximo e Confiabilidade – Tudo o que você Precisa para uma
                                        Experiência de Alto Nível!</h6>
                                </div>
                            </div>
                            <div class="slide-split_media position-relative">
                                <div class="slideshow-bg" style="background-color: #f5e6e0;">
                                    <img loading="lazy" src="{{ asset('assets/images/shop/setup.avif')}}" width="630"
                                        height="450" alt="Setup" class="slideshow-bg__img object-fit-cover" />
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="slide-split h-100 d-block d-md-flex overflow-hidden">
                            <div class="slide-split_text position-relative d-flex align-items-center"
                                style="background-color: #00a5e0;">
                                <div class="slideshow-text container p-3 p-xl-5">
                                    <h2
                                        class="text-uppercase section-title fw-normal mb-3 animate animate_fade animate_btt animate_delay-2">
                                        Turbine seu <strong>Hardware</strong></h2>
                                    <p class="mb-0 animate animate_fade animate_btt animate_delay-5">Invista no Melhor
                                        Sem Complicação – Aproveite Descontos Exclusivos e Parcelamento Facilitado!</h6>
                                </div>
                            </div>
                            <div class="slide-split_media position-relative">
                                <div class="slideshow-bg" style="background-color: #f5e6e0;">
                                    <img loading="lazy" src="{{asset('assets/images/shop/upgrade.jpg')}}" width="630"
                                        height="450" alt="Upgrade" class="slideshow-bg__img object-fit-cover" />
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="slide-split h-100 d-block d-md-flex overflow-hidden">
                            <div class="slide-split_text position-relative d-flex align-items-center"
                                style="background-color: #e2e2e2;">
                                <div class="slideshow-text container p-3 p-xl-5">
                                    <h2
                                        class="text-uppercase section-title fw-normal mb-3 animate animate_fade animate_btt animate_delay-2">
                                        Variedade em <strong>Equipamentos</strong></h2>
                                    <p class="mb-0 animate animate_fade animate_btt animate_delay-5">Dê Vida ao Seu PC
                                        e Transforme-o em uma Máquina de Alto Desempenho – Tudo o que Você Precisa,
                                        Desde Componentes Essenciais até Peças Exclusivas para Criar o Setup Perfeito!
                                        </h6>
                                </div>
                            </div>
                            <div class="slide-split_media position-relative">
                                <div class="slideshow-bg" style="background-color: #f5e6e0;">
                                    <img loading="lazy" src="{{ asset('assets/images/shop/variedade.png')}}" width="630"
                                        height="450" alt="Variedade" class="slideshow-bg__img object-fit-cover" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="container p-3 p-xl-5">
                    <div
                        class="slideshow-pagination d-flex align-items-center position-absolute bottom-0 mb-4 pb-xl-2">
                    </div>

                </div>
            </div>

            <div class="mb-3 pb-2 pb-xl-3"></div>

            <div class="d-flex justify-content-between mb-4 pb-md-2">
                <div class="breadcrumb mb-0 d-none d-md-block flex-grow-1">
                    <a href="{{ route('home.index') }}"
                        class="menu-link menu-link_us-s text-uppercase fw-medium">Início</a>
                    <span class="breadcrumb-separator menu-link fw-medium ps-1 pe-1">/</span>
                    <a href="#" class="menu-link menu-link_us-s text-uppercase fw-medium">Catálogo</a>
                </div>

                <div
                    class="shop-acs d-flex align-items-center justify-content-between justify-content-md-end flex-grow-1">
                    <select class="shop-acs__select form-select w-auto border-0 py-0 order-1 order-md-0"
                        aria-label="Sort Items" name="total-number">
                        <option selected>Padrão</option>
                        <option value="1">Destaques</option>
                        <option value="2">Mais vendidos</option>
                        <option value="3">A-Z</option>
                        <option value="3">Z-A</option>
                        <option value="3">Menor para o Maior</option>
                        <option value="3">Maior para o Menor</option>
                        <option value="3">Antigo para o mais Recente</option>
                        <option value="3">Recente para o mais Antigo</option>

                    </select>

                    <div class="shop-asc__seprator mx-3 bg-light d-none d-md-block order-md-0"></div>

                    <div class="col-size align-items-center order-1 d-none d-lg-flex">
                        <span class="text-uppercase fw-medium me-2">Formato</span>
                        <button class="btn-link fw-medium me-2 js-cols-size" data-target="products-grid"
                            data-cols="2">2</button>
                        <button class="btn-link fw-medium me-2 js-cols-size" data-target="products-grid"
                            data-cols="3">3</button>
                        <button class="btn-link fw-medium js-cols-size" data-target="products-grid"
                            data-cols="4">4</button>
                    </div>

                    <div class="shop-filter d-flex align-items-center order-0 order-md-3 d-lg-none">
                        <button class="btn-link btn-link_f d-flex align-items-center ps-0 js-open-aside"
                            data-aside="shopFilter">
                            <svg class="d-inline-block align-middle me-2" width="14" height="10"
                                viewBox="0 0 14 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <use href="#icon_filter" />
                            </svg>
                            <span class="text-uppercase fw-medium d-inline-block align-middle">Filtrar</span>
                        </button>
                    </div>
                </div>
            </div>
            
            <div class="products-grid row row-cols-2 row-cols-md-3" id="products-grid">
                <!-- Carrossel -->
                @foreach ($produtosCarrossel as $produto)
                <div class="product-card-wrapper">
                    <div class="product-card mb-3 mb-md-4 mb-xxl-5">
                        <div class="pc__img-wrapper">
                            <div class="swiper-container background-img js-swiper-slider"
                                data-settings='{"resizeObserver": true}'>
                                <div class="swiper-wrapper">
                                    @if ($produto->imagens->isNotEmpty())
                                    @foreach ($produto->imagens as $imagem)
                                    <div class="swiper-slide">
                                        <a
                                            href="{{ route('catalogo.details', ['PRODUTO_ID' => $produto->PRODUTO_ID]) }}">
                                            <img loading="lazy"
                                                src="{{ $imagem->IMAGEM_URL }}"
                                                width="330" height="400"
                                                alt="{{ $produto->PRODUTO_NOME }}" class="pc__img">
                                        </a>
                                    </div>
                                    @endforeach
                                    @else
                                    <div class="swiper-slide">
                                        <a
                                            href="{{ route('catalogo.details', ['PRODUTO_ID' => $produto->PRODUTO_ID]) }}">
                                            <img loading="lazy"
                                                src="{{ asset('assets/images/imagem_indisponivel.png') }}"
                                                width="330" height="400"
                                                alt="Imagem indisponível" class="pc__img">
                                        </a>
                                    </div>
                                    @endif
                                </div>
                                <span class="pc__img-prev">
                                    <svg width="7" height="11" viewBox="0 0 7 11" xmlns="http://www.w3.org/2000/svg">
                                        <use href="#icon_prev_sm" />
                                    </svg>
                                </span>
                                <span class="pc__img-next">
                                    <svg width="7" height="11" viewBox="0 0 7 11" xmlns="http://www.w3.org/2000/svg">
                                        <use href="#icon_next_sm" />
                                    </svg>
                                </span>
                            </div>

                            @if(Cart::instance('cart')->content()->where('id', $produto->PRODUTO_ID)->count() > 0)
                                <a href="{{ route('cart.index') }}" class="pc__atc btn anim_appear-bottom btn position-absolute border-0 text-uppercase fw-medium btn-warning mb-3">Ir para o carrinho</a>
                            @else
                            <form name="addtocart-form" method="POST" action="{{ route('cart.add') }}">
                                @csrf
                                <input type="hidden" name="qty" value="1">
                                <input type="hidden" name="PRODUTO_ID" value="{{ $produto->PRODUTO_ID }}">
                                <input type="hidden" name="PRODUTO_NOME" value="{{ $produto->PRODUTO_NOME }}">
                                <input type="hidden" name="PRODUTO_PRECO" value="{{ $produto->PRODUTO_PRECO }}">
                                <button type="submit" class="pc__atc btn anim_appear-bottom btn position-absolute border-0 text-uppercase fw-medium" data-aside="cartDrawer" title="Add To Cart">Comprar</button>
                            </form>
                            @endif
                        </div>

                        <div class="pc__info position-relative">
                            <p class="pc__category">{{ $produto->categoria->CATEGORIA_NOME ?? 'Sem categoria' }}</p>
                            <h6 class="pc__title">
                                <a href="{{ route('catalogo.details', ['PRODUTO_ID' => $produto->PRODUTO_ID]) }}">
                                    {{ $produto->PRODUTO_NOME }}
                                </a>
                            </h6>
                            <div class="product-card__price d-flex">
                                <span class="money price">R$: {{ $produto->PRODUTO_PRECO }}</span>
                            </div>
                            <div class="product-card__review d-flex align-items-center">
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
                        </div>
                    </div>
                </div>
                @endforeach
            </div>


            <nav class="shop-pages d-flex justify-content-between mt-3" aria-label="Page navigation">
                <a href="#" id="prev" class="btn-link d-inline-flex align-items-center">
                    <svg class="me-1" width="7" height="11" viewBox="0 0 7 11" xmlns="http://www.w3.org/2000/svg">
                        <use href="#icon_prev_sm"></use>
                    </svg>
                    <span class="fw-medium">ANTERIOR</span>
                </a>
                <ul class="pagination mb-0">
                    <li class="page-item"><a class="btn-link px-1 mx-2 btn-link_active" data-page="1" href="#">1</a></li>
                    <li class="page-item"><a class="btn-link px-1 mx-2" data-page="2" href="#">2</a></li>
                    <li class="page-item"><a class="btn-link px-1 mx-2" data-page="3" href="#">3</a></li>
                    <li class="page-item"><a class="btn-link px-1 mx-2" data-page="4" href="#">4</a></li>
                </ul>
                <a href="#" id="next" class="btn-link d-inline-flex align-items-center">
                    <span class="fw-medium me-1">PROXIMO</span>
                    <svg width="7" height="11" viewBox="0 0 7 11" xmlns="http://www.w3.org/2000/svg">
                        <use href="#icon_next_sm"></use>
                    </svg>
                </a>
            </nav>
            
        </div>
    </section>
</main>

<style>
    .btn-link_active {
    font-weight: bold;
    color: #007bff; /* Azul padrão Bootstrap */
    text-decoration: underline;
}

</style>

<script>
document.addEventListener('DOMContentLoaded', () => {
    // Lista de produtos simulada
    const products = [
        'Produto 1', 'Produto 2', 'Produto 3', 'Produto 4', 
        'Produto 5', 'Produto 6', 'Produto 7', 'Produto 8',
        'Produto 9', 'Produto 10', 'Produto 11', 'Produto 12'
    ];
    const productsPerPage = 4; // Defina quantos produtos por página
    const productsContainer = document.getElementById('products-container');
    const paginationLinks = document.querySelectorAll('.pagination .btn-link');
    const prevButton = document.getElementById('prev');
    const nextButton = document.getElementById('next');
    let currentPage = 1;

    // Função para renderizar produtos da página atual
    const renderProducts = (page) => {
        productsContainer.innerHTML = ''; // Limpa os produtos antigos
        const start = (page - 1) * productsPerPage;
        const end = start + productsPerPage;
        const productsToRender = products.slice(start, end);

        productsToRender.forEach(product => {
            const productDiv = document.createElement('div');
            productDiv.classList.add('col-3', 'mb-3'); // Estilize como preferir
            productDiv.textContent = product;
            productsContainer.appendChild(productDiv);
        });
    };

    // Atualiza a página ativa
    const updateActivePage = (newPage) => {
        paginationLinks.forEach(link => {
            link.classList.remove('btn-link_active');
            if (parseInt(link.getAttribute('data-page')) === newPage) {
                link.classList.add('btn-link_active');
            }
        });
    };

    // Função para trocar página
    const goToPage = (page) => {
        const totalPages = Math.ceil(products.length / productsPerPage);

        if (page < 1 || page > totalPages) return; // Evita sair dos limites
        currentPage = page;
        updateActivePage(currentPage);
        renderProducts(currentPage);
    };

    // Eventos dos botões de navegação
    prevButton.addEventListener('click', (e) => {
        e.preventDefault();
        goToPage(currentPage - 1);
    });

    nextButton.addEventListener('click', (e) => {
        e.preventDefault();
        goToPage(currentPage + 1);
    });

    // Eventos dos links de paginação
    paginationLinks.forEach(link => {
        link.addEventListener('click', (e) => {
            e.preventDefault();
            const page = parseInt(link.getAttribute('data-page'));
            goToPage(page);
        });
    });

    // Renderiza a página inicial
    renderProducts(currentPage);
});

</script>
@endsection