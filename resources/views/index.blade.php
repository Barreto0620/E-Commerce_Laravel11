@extends('layouts.app')
@section('content')
<main>

<section class="swiper-container js-swiper-slider swiper-number-pagination slideshow" data-settings='{
    "autoplay": {
      "delay": 5000
    },
    "slidesPerView": 1,
    "effect": "fade",
    "loop": true
  }'>
  <div class="swiper-wrapper">
    <div class="swiper-slide">
      <div class="overflow-hidden position-relative h-100">
        <div class="slideshow-character position-absolute bottom-0 pos_right-center">
          <img loading="lazy" src="{{ asset('assets/images/carrossel_01.png') }}" width="542" height="733"
            alt="Oferta do Dia"
            class="slideshow-character__img animate animate_fade animate_btt animate_delay-9 w-auto h-auto" />
          <div class="character_markup type2">
            <p
              class="text-uppercase font-sofia mark-grey-color animate animate_fade animate_btt animate_delay-10 mb-0">
              Oferta do Dia</p>
          </div>
        </div>
        <div class="slideshow-text container position-absolute start-50 top-50 translate-middle">
          <h6 class="text_dash text-uppercase fs-base fw-medium animate animate_fade animate_btt animate_delay-3">
          Oferta do Dia</h6>
          <h2 class="h1 fw-bold animate animate_fade animate_btt animate_delay-5">Monitor Cepheus Fuse</h2>
          <h2 class="h2 fw-normal mb-0 animate animate_fade animate_btt animate_delay-5"><br>"Visão de outro mundo!"<br><br><br></h2>
          <a href="#"
            class="text-uppercase btn-link btn-link_lg default-underline fw-medium animate animate_fade animate_btt animate_delay-7">Aproveitar</a>
        </div>
      </div>
    </div>
    <div class="swiper-slide">
      <div class="overflow-hidden position-relative h-100">
        <div class="slideshow-character position-absolute bottom-0 pos_right-center">
          <img loading="lazy" src="{{ asset('assets/images/carrossel_02.png') }}" width="400" height="690"
            alt="Oferta Halloween"
            class="slideshow-character__img animate animate_fade animate_btt animate_delay-9 w-auto h-auto" />
            <div class="character_markup type2">
            <p
              class="text-uppercase font-sofia mark-grey-color animate animate_fade animate_btt animate_delay-10 mb-0">
              Halloween</p>
          </div>
        </div>
        <div class="slideshow-text container position-absolute start-50 top-50 translate-middle">
          <h6 class="text_dash text-uppercase fs-base fw-medium animate animate_fade animate_btt animate_delay-3">
            Oferta Halloween</h6>
          <h2 class="h1 fw-bold animate animate_fade animate_btt animate_delay-5">Notebook Vaio FE15</h2>
          <h2 class="h2 fw-normal mb-0 animate animate_fade animate_btt animate_delay-5"><br>"Ofertas de arrepiar!"<br><br><br></h2>
          <a href="#"
            class="text-uppercase btn-link btn-link_lg default-underline fw-medium animate animate_fade animate_btt animate_delay-7">Aproveitar</a>
        </div>
      </div>
    </div>

    <div class="swiper-slide">
      <div class="overflow-hidden position-relative h-100">
        <div class="slideshow-character position-absolute bottom-0 pos_right-center">
          <img loading="lazy" src="{{ asset('assets/images/carrossel_03.png') }}" width="400" height="690"
            alt="Oferta Gamer"
            class="slideshow-character__img animate animate_fade animate_rtl animate_delay-10 w-auto h-auto" />
            <div class="character_markup type2">
            <p
              class="text-uppercase font-sofia mark-grey-color animate animate_fade animate_btt animate_delay-10 mb-0">
              Gamer</p>
          </div>
        </div>
        <div class="slideshow-text container position-absolute start-50 top-50 translate-middle">
          <h6 class="text_dash text-uppercase fs-base fw-medium animate animate_fade animate_btt animate_delay-3">
            Somente Aqui</h6>
          <h2 class="h1 fw-bold animate animate_fade animate_btt animate_delay-5">Cadeira Gamer TGT Heron</h2>
          <h2 class="h2 fw-normal mb-0 animate animate_fade animate_btt animate_delay-5"><br>"Eleve o conforto para outro nível!"<br><br><br></h2>
          <a href="#"
            class="text-uppercase btn-link btn-link_lg default-underline fw-medium animate animate_fade animate_btt animate_delay-7">Aproveitar</a>
        </div>
      </div>
    </div>
  </div>

  <div class="container">
    <div
      class="slideshow-pagination slideshow-number-pagination d-flex align-items-center position-absolute bottom-0 mb-5">
    </div>
  </div>
</section>
<div class="container mw-1620 bg-white border-radius-10">
  <div class="mb-3 mb-xl-5 pt-1 pb-4"></div>
  <section class="category-carousel container">
    <h2 class="section-title text-center mb-3 pb-xl-2 mb-xl-4">Categorias</h2>

    <div class="position-relative">
      <div class="swiper-container js-swiper-slider" data-settings='{
          "autoplay": {
            "delay": 5000
          },
          "slidesPerView": 8,
          "slidesPerGroup": 1,
          "effect": "none",
          "loop": true,
          "navigation": {
            "nextEl": ".products-carousel__next-1",
            "prevEl": ".products-carousel__prev-1"
          },
          "breakpoints": {
            "320": {
              "slidesPerView": 2,
              "slidesPerGroup": 2,
              "spaceBetween": 15
            },
            "768": {
              "slidesPerView": 4,
              "slidesPerGroup": 4,
              "spaceBetween": 30
            },
            "992": {
              "slidesPerView": 6,
              "slidesPerGroup": 1,
              "spaceBetween": 45,
              "pagination": false
            },
            "1200": {
              "slidesPerView": 8,
              "slidesPerGroup": 1,
              "spaceBetween": 60,
              "pagination": false
            }
          }
        }'>
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <img loading="lazy" class="w-100 h-auto mb-3" src="{{ asset('assets/images/home/demo3/categoria_01.png') }}" width="124"
              height="124" alt="Categoria Hardware" />
            <div class="text-center">
              <a href="#" class="menu-link fw-medium">Hardware</a>
            </div>
          </div>
          <div class="swiper-slide">
            <img loading="lazy" class="w-100 h-auto mb-3" src="{{ asset('assets/images/home/demo3/categoria_02.png') }}" width="124"
              height="124" alt="Categoria Periféricos" />
            <div class="text-center">
              <a href="#" class="menu-link fw-medium">Periféricos</a>
            </div>
          </div>
          <div class="swiper-slide">
            <img loading="lazy" class="w-100 h-auto mb-3" src="{{ asset('assets/images/home/demo3/categoria_03.png') }}" width="124"
              height="124" alt="Categoria Computadores" />
            <div class="text-center">
              <a href="#" class="menu-link fw-medium">Computadores</a>
            </div>
          </div>
          <div class="swiper-slide">
            <img loading="lazy" class="w-100 h-auto mb-3" src="{{ asset('assets/images/home/demo3/categoria_04.png') }}" width="124"
              height="124" alt="Categoria Games" />
            <div class="text-center">
              <a href="#" class="menu-link fw-medium">Games</a>
            </div>
          </div>
          <div class="swiper-slide">
            <img loading="lazy" class="w-100 h-auto mb-3" src="{{ asset('assets/images/home/demo3/categoria_05.png') }}" width="124"
              height="124" alt="Categoria Smartphones" />
            <div class="text-center">
              <a href="#" class="menu-link fw-medium">Smartphones</a>
            </div>
          </div>
          <div class="swiper-slide">
            <img loading="lazy" class="w-100 h-auto mb-3" src="{{ asset('assets/images/home/demo3/categoria_06.png') }}" width="124"
              height="124" alt="Categoria TV" />
            <div class="text-center">
              <a href="#" class="menu-link fw-medium">TV</a>
            </div>
          </div>
          <div class="swiper-slide">
            <img loading="lazy" class="w-100 h-auto mb-3" src="{{ asset('assets/images/home/demo3/categoria_07.png') }}" width="124"
              height="124" alt="Categoria Projetores" />
            <div class="text-center">
              <a href="#" class="menu-link fw-medium">Projetores</a>
            </div>
          </div>
          <div class="swiper-slide">
            <img loading="lazy" class="w-100 h-auto mb-3" src="{{ asset('assets/images/home/demo3/categoria_08.png') }}" width="124"
              height="124" alt="Categoria Espaço Gamer" />
            <div class="text-center">
              <a href="#" class="menu-link fw-medium">Espaço Gamer</a>
            </div>
          </div>
        </div><!-- /.swiper-wrapper -->
      </div><!-- /.swiper-container js-swiper-slider -->

      <div
        class="products-carousel__prev products-carousel__prev-1 position-absolute top-50 d-flex align-items-center justify-content-center">
        <svg width="25" height="25" viewBox="0 0 25 25" xmlns="http://www.w3.org/2000/svg">
          <use href="#icon_prev_md" />
        </svg>
      </div><!-- /.products-carousel__prev -->
      <div
        class="products-carousel__next products-carousel__next-1 position-absolute top-50 d-flex align-items-center justify-content-center">
        <svg width="25" height="25" viewBox="0 0 25 25" xmlns="http://www.w3.org/2000/svg">
          <use href="#icon_next_md" />
        </svg>
      </div><!-- /.products-carousel__next -->
    </div><!-- /.position-relative -->
  </section>

  <div class="mb-3 mb-xl-5 pt-1 pb-4"></div>

  <section class="hot-deals container">
    <h2 class="section-title text-center mb-3 pb-xl-3 mb-xl-4">Ofertas em Destaque</h2>
    <div class="row">
      <div
        class="col-md-6 col-lg-4 col-xl-20per d-flex align-items-center flex-column justify-content-center py-4 align-items-md-start">
        <h2>Descontos de até</h2>
        <h2 class="fw-bold">60% Off</h2>

        <div class="position-relative d-flex align-items-center text-center pt-xxl-4 js-countdown mb-3"
          data-date="18-3-2024" data-time="06:50">
          <div class="day countdown-unit">
            <span class="countdown-num d-block"></span>
            <span class="countdown-word text-uppercase text-secondary">Dias</span>
          </div>

          <div class="hour countdown-unit">
            <span class="countdown-num d-block"></span>
            <span class="countdown-word text-uppercase text-secondary">Horas</span>
          </div>

          <div class="min countdown-unit">
            <span class="countdown-num d-block"></span>
            <span class="countdown-word text-uppercase text-secondary">Minutos</span>
          </div>

          <div class="sec countdown-unit">
            <span class="countdown-num d-block"></span>
            <span class="countdown-word text-uppercase text-secondary">Segundos</span>
          </div>
        </div>

        <a href="#" class="btn-link default-underline text-uppercase fw-medium mt-3">Ver Mais</a>
      </div>
      <div class="col-md-6 col-lg-8 col-xl-80per">
        <div class="position-relative">
          <div class="swiper-container js-swiper-slider" data-settings='{
              "autoplay": {
                "delay": 5000
              },
              "slidesPerView": 4,
              "slidesPerGroup": 4,
              "effect": "none",
              "loop": false,
              "breakpoints": {
                "320": {
                  "slidesPerView": 2,
                  "slidesPerGroup": 2,
                  "spaceBetween": 14
                },
                "768": {
                  "slidesPerView": 2,
                  "slidesPerGroup": 3,
                  "spaceBetween": 24
                },
                "992": {
                  "slidesPerView": 3,
                  "slidesPerGroup": 1,
                  "spaceBetween": 30,
                  "pagination": false
                },
                "1200": {
                  "slidesPerView": 4,
                  "slidesPerGroup": 1,
                  "spaceBetween": 30,
                  "pagination": false
                }
              }
            }'>
            <div class="swiper-wrapper">
              <div class="swiper-slide product-card product-card_style3">
                <div class="pc__img-wrapper">
                  <a href="details.html">
                    <img loading="lazy" src="{{ $produto->imagens->first()->IMAGEM_URL }}" width="258" height="313"
                      alt="PC Gamer Arquetu" class="pc__img">
                    <img loading="lazy" src="{{ $produto->imagens->skip(1)->first()->IMAGEM_URL }}" width="258" height="313"
                      alt="PC Gamer Arquetu Verso" class="pc__img pc__img-second">
                  </a>
                </div>

                <div class="pc__info position-relative">
                  <h6 class="pc__title"><a href="details.html">{{ $produto->PRODUTO_NOME }}</a></h6>
                  <div class="product-card__price d-flex">
                    <span class="money price text-secondary">R$:{{ $produto->PRODUTO_PRECO }}</span>
                  </div>

                  <div
                    class="anim_appear-bottom position-absolute bottom-0 start-0 d-none d-sm-flex align-items-center bg-body">
                    <button class="btn-link btn-link_lg me-4 text-uppercase fw-medium js-add-cart js-open-aside"
                      data-aside="cartDrawer" title="Add To Cart">Carrinho</button>
                    <button class="btn-link btn-link_lg me-4 text-uppercase fw-medium js-quick-view"
                      data-bs-toggle="modal" data-bs-target="#quickView" title="Quick view">
                      <span class="d-none d-xxl-block">Descrição</span>
                      <span class="d-block d-xxl-none"><svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                          xmlns="http://www.w3.org/2000/svg">
                          <use href="#icon_view" />
                        </svg></span>
                    </button>
                    <button class="pc__btn-wl bg-transparent border-0 js-add-wishlist" title="Add To Wishlist">
                      <svg width="16" height="16" viewBox="0 0 20 20" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <use href="#icon_heart" />
                      </svg>
                    </button>
                  </div>
                </div>
              </div>
              <div class="swiper-slide product-card product-card_style3">
                <div class="pc__img-wrapper">
                  <a href="details.html">
                    <img loading="lazy" src="{{ $produto1->imagens->first()->IMAGEM_URL }}" width="258" height="313"
                      alt="Monitor Gamer Centauri Pulse" class="pc__img">
                    <img loading="lazy" src="{{ $produto1->imagens->skip(1)->first()->IMAGEM_URL }}" width="258" height="313"
                      alt="Monitor Gamer Centauri Pulse Verso" class="pc__img pc__img-second">
                  </a>
                </div>

                <div class="pc__info position-relative">
                  <h6 class="pc__title"><a href="details.html">{{ $produto1->PRODUTO_NOME }}</a></h6>
                  <div class="product-card__price d-flex">
                    <span class="money price text-secondary">R$:{{ $produto1->PRODUTO_PRECO }}</span>
                  </div>

                  <div
                    class="anim_appear-bottom position-absolute bottom-0 start-0 d-none d-sm-flex align-items-center bg-body">
                    <button class="btn-link btn-link_lg me-4 text-uppercase fw-medium js-add-cart js-open-aside"
                      data-aside="cartDrawer" title="Add To Cart">Carrinho</button>
                    <button class="btn-link btn-link_lg me-4 text-uppercase fw-medium js-quick-view"
                      data-bs-toggle="modal" data-bs-target="#quickView" title="Quick view">
                      <span class="d-none d-xxl-block">Descrição</span>
                      <span class="d-block d-xxl-none"><svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                          xmlns="http://www.w3.org/2000/svg">
                          <use href="#icon_view" />
                        </svg></span>
                    </button>
                    <button class="pc__btn-wl bg-transparent border-0 js-add-wishlist" title="Add To Wishlist">
                      <svg width="16" height="16" viewBox="0 0 20 20" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <use href="#icon_heart" />
                      </svg>
                    </button>
                  </div>
                </div>
              </div>
              <div class="swiper-slide product-card product-card_style3">
                <div class="pc__img-wrapper">
                  <a href="details.html">
                    <img loading="lazy" src="{{ $produto2->imagens->first()->IMAGEM_URL }}" width="258" height="313"
                      alt="Water Cooler Gigabyte Aorus" class="pc__img">
                    <img loading="lazy" src="{{ $produto2->imagens->skip(1)->first()->IMAGEM_URL }}" width="258" height="313"
                      alt="Water Cooler Gigabyte Aorus Verso" class="pc__img pc__img-second">
                  </a>
                </div>

                <div class="pc__info position-relative">
                  <h6 class="pc__title"><a href="details.html">{{ $produto2->PRODUTO_NOME }}</a></h6>
                  <div class="product-card__price d-flex">
                    <span class="money price text-secondary">R$:{{ $produto2->PRODUTO_PRECO }}</span>
                  </div>

                  <div
                    class="anim_appear-bottom position-absolute bottom-0 start-0 d-none d-sm-flex align-items-center bg-body">
                    <button class="btn-link btn-link_lg me-4 text-uppercase fw-medium js-add-cart js-open-aside"
                      data-aside="cartDrawer" title="Add To Cart">Carrinho</button>
                    <button class="btn-link btn-link_lg me-4 text-uppercase fw-medium js-quick-view"
                      data-bs-toggle="modal" data-bs-target="#quickView" title="Quick view">
                      <span class="d-none d-xxl-block">Descrição</span>
                      <span class="d-block d-xxl-none"><svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                          xmlns="http://www.w3.org/2000/svg">
                          <use href="#icon_view" />
                        </svg></span>
                    </button>
                    <button class="pc__btn-wl bg-transparent border-0 js-add-wishlist" title="Add To Wishlist">
                      <svg width="16" height="16" viewBox="0 0 20 20" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <use href="#icon_heart" />
                      </svg>
                    </button>
                  </div>
                </div>
              </div>
              <div class="swiper-slide product-card product-card_style3">
                <div class="pc__img-wrapper">
                  <a href="details.html">
                    <img loading="lazy" src="{{ $produto3->imagens->first()->IMAGEM_URL }}" width="258" height="313"
                      alt="Placa de Video Asus GeForce RTX 3060" class="pc__img">
                    <img loading="lazy" src="{{ $produto3->imagens->skip(1)->first()->IMAGEM_URL }}" width="258" height="313"
                      alt="Placa de Video Asus GeForce RTX 3060 Verso" class="pc__img pc__img-second">
                  </a>
                </div>

                <div class="pc__info position-relative">
                  <h6 class="pc__title"><a href="details.html">{{ $produto3->PRODUTO_NOME }}</a></h6>
                  <div class="product-card__price d-flex align-items-center">
                    <span class="money price-old">R$:{{ $produto3->PRODUTO_PRECO }} </span><br>
                    <span class="money price text-secondary">R$:500</span>
                  </div>

                  <div
                    class="anim_appear-bottom position-absolute bottom-0 start-0 d-none d-sm-flex align-items-center bg-body">
                    <button class="btn-link btn-link_lg me-4 text-uppercase fw-medium js-add-cart js-open-aside"
                      data-aside="cartDrawer" title="Add To Cart">Carrinho</button>
                    <button class="btn-link btn-link_lg me-4 text-uppercase fw-medium js-quick-view"
                      data-bs-toggle="modal" data-bs-target="#quickView" title="Quick view">
                      <span class="d-none d-xxl-block">Descrição</span>
                      <span class="d-block d-xxl-none"><svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                          xmlns="http://www.w3.org/2000/svg">
                          <use href="#icon_view" />
                        </svg></span>
                    </button>
                    <button class="pc__btn-wl bg-transparent border-0 js-add-wishlist" title="Add To Wishlist">
                      <svg width="16" height="16" viewBox="0 0 20 20" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <use href="#icon_heart" />
                      </svg>
                    </button>
                  </div>
                </div>
              </div>
              <div class="swiper-slide product-card product-card_style3">
                <div class="pc__img-wrapper">
                  <a href="details.html">
                    <img loading="lazy" src="{{ $produto4->imagens->first()->IMAGEM_URL }}" width="258" height="313"
                      alt="Cadeira Office Zinnia Montreal" class="pc__img">
                    <img loading="lazy" src="{{ $produto4->imagens->skip(1)->first()->IMAGEM_URL }}" width="258" height="313"
                      alt="Cadeira Office Zinnia Montreal Verso" class="pc__img pc__img-second">
                  </a>
                </div>

                <div class="pc__info position-relative">
                  <h6 class="pc__title"><a href="details.html">{{ $produto4->PRODUTO_NOME }}</a></h6>
                  <div class="product-card__price d-flex">
                    <span class="money price text-secondary">R$:{{ $produto4->PRODUTO_PRECO }}</span>
                  </div>

                  <div
                    class="anim_appear-bottom position-absolute bottom-0 start-0 d-none d-sm-flex align-items-center bg-body">
                    <button class="btn-link btn-link_lg me-4 text-uppercase fw-medium js-add-cart js-open-aside"
                      data-aside="cartDrawer" title="Add To Cart">Carrinho</button>
                    <button class="btn-link btn-link_lg me-4 text-uppercase fw-medium js-quick-view"
                      data-bs-toggle="modal" data-bs-target="#quickView" title="Quick view">
                      <span class="d-none d-xxl-block">Descrição</span>
                      <span class="d-block d-xxl-none"><svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                          xmlns="http://www.w3.org/2000/svg">
                          <use href="#icon_view" />
                        </svg></span>
                    </button>
                    <button class="pc__btn-wl bg-transparent border-0 js-add-wishlist" title="Add To Wishlist">
                      <svg width="16" height="16" viewBox="0 0 20 20" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <use href="#icon_heart" />
                      </svg>
                    </button>
                  </div>
                </div>
              </div>
              <div class="swiper-slide product-card product-card_style3">
                <div class="pc__img-wrapper">
                  <a href="details.html">
                    <img loading="lazy" src="{{ $produto5->imagens->first()->IMAGEM_URL }}" width="258" height="313"
                      alt="Headset Gamer Corsair Void RGB Elite" class="pc__img">
                    <img loading="lazy" src="{{ $produto5->imagens->skip(1)->first()->IMAGEM_URL }}" width="258" height="313"
                      alt="Headset Gamer Corsair Void RGB Elite Verso" class="pc__img pc__img-second">
                  </a>
                </div>

                <div class="pc__info position-relative">
                  <h6 class="pc__title"><a href="details.html">{{ $produto5->PRODUTO_NOME }}</a></h6>
                  <div class="product-card__price d-flex">
                    <span class="money price text-secondary">R$:{{ $produto5->PRODUTO_PRECO }}</span>
                  </div>

                  <div
                    class="anim_appear-bottom position-absolute bottom-0 start-0 d-none d-sm-flex align-items-center bg-body">
                    <button class="btn-link btn-link_lg me-4 text-uppercase fw-medium js-add-cart js-open-aside"
                      data-aside="cartDrawer" title="Add To Cart">Carrinho</button>
                    <button class="btn-link btn-link_lg me-4 text-uppercase fw-medium js-quick-view"
                      data-bs-toggle="modal" data-bs-target="#quickView" title="Quick view">
                      <span class="d-none d-xxl-block">Descrição</span>
                      <span class="d-block d-xxl-none"><svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                          xmlns="http://www.w3.org/2000/svg">
                          <use href="#icon_view" />
                        </svg></span>
                    </button>
                    <button class="pc__btn-wl bg-transparent border-0 js-add-wishlist" title="Add To Wishlist">
                      <svg width="16" height="16" viewBox="0 0 20 20" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <use href="#icon_heart" />
                      </svg>
                    </button>
                  </div>
                </div>
              </div>
              <div class="swiper-slide product-card product-card_style3">
                <div class="pc__img-wrapper">
                  <a href="details.html">
                    <img loading="lazy" src="{{ $produto6->imagens->first()->IMAGEM_URL }}" width="258" height="313"
                      alt="Processador AMD Ryzen 7 5700X" class="pc__img">
                    <img loading="lazy" src="{{ $produto6->imagens->skip(1)->first()->IMAGEM_URL }}" width="258" height="313"
                      alt="Processador AMD Ryzen 7 5700X Verso" class="pc__img pc__img-second">
                  </a>
                </div>

                <div class="pc__info position-relative">
                  <h6 class="pc__title"><a href="details.html">{{ $produto6->PRODUTO_NOME }}</a></h6>
                  <div class="product-card__price d-flex">
                    <span class="money price text-secondary">R$:{{ $produto->PRODUTO_PRECO }}</span>
                  </div>

                  <div
                    class="anim_appear-bottom position-absolute bottom-0 start-0 d-none d-sm-flex align-items-center bg-body">
                    <button class="btn-link btn-link_lg me-4 text-uppercase fw-medium js-add-cart js-open-aside"
                      data-aside="cartDrawer" title="Add To Cart">Carrinho</button>
                    <button class="btn-link btn-link_lg me-4 text-uppercase fw-medium js-quick-view"
                      data-bs-toggle="modal" data-bs-target="#quickView" title="Quick view">
                      <span class="d-none d-xxl-block">Descrição</span>
                      <span class="d-block d-xxl-none"><svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                          xmlns="http://www.w3.org/2000/svg">
                          <use href="#icon_view" />
                        </svg></span>
                    </button>
                    <button class="pc__btn-wl bg-transparent border-0 js-add-wishlist" title="Add To Wishlist">
                      <svg width="16" height="16" viewBox="0 0 20 20" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <use href="#icon_heart" />
                      </svg>
                    </button>
                  </div>
                </div>
              </div>
              <div class="swiper-slide product-card product-card_style3">
                <div class="pc__img-wrapper">
                  <a href="details.html">
                    <img loading="lazy" src="{{ $produto7->imagens->first()->IMAGEM_URL }}" width="258" height="313"
                      alt="Teclado Mecanico Gamer Cooler Master SK622" class="pc__img">
                    <img loading="lazy" src="{{ $produto7->imagens->skip(1)->first()->IMAGEM_URL }}" width="258" height="313"
                      alt="Teclado Mecanico Gamer Cooler Master SK622 Verso" class="pc__img pc__img-second">
                  </a>
                </div>

                <div class="pc__info position-relative">
                  <h6 class="pc__title"><a href="details.html">{{ $produto7->PRODUTO_NOME }}</h6>
                  <div class="product-card__price d-flex align-items-center">
                    <span class="money price-old">R$:{{ $produto7->PRODUTO_PRECO }}</span>
                    <span class="money price text-secondary">R$:60</span>
                  </div>

                  <div
                    class="anim_appear-bottom position-absolute bottom-0 start-0 d-none d-sm-flex align-items-center bg-body">
                    <button class="btn-link btn-link_lg me-4 text-uppercase fw-medium js-add-cart js-open-aside"
                      data-aside="cartDrawer" title="Add To Cart">Carrinho</button>
                    <button class="btn-link btn-link_lg me-4 text-uppercase fw-medium js-quick-view"
                      data-bs-toggle="modal" data-bs-target="#quickView" title="Quick view">
                      <span class="d-none d-xxl-block">Descrição</span>
                      <span class="d-block d-xxl-none"><svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                          xmlns="http://www.w3.org/2000/svg">
                          <use href="#icon_view" />
                        </svg></span>
                    </button>
                    <button class="pc__btn-wl bg-transparent border-0 js-add-wishlist" title="Add To Wishlist">
                      <svg width="16" height="16" viewBox="0 0 20 20" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <use href="#icon_heart" />
                      </svg>
                    </button>
                  </div>
                </div>
              </div>
            </div><!-- /.swiper-wrapper -->
          </div><!-- /.swiper-container js-swiper-slider -->
        </div><!-- /.position-relative -->
      </div>
    </div>
  </section>

  <div class="mb-3 mb-xl-5 pt-1 pb-4"></div>

  <section class="category-banner container">
    <div class="row">
      <div class="col-md-6">
        <div class="category-banner__item border-radius-10 mb-5">
          <img loading="lazy" class="h-auto" src="{{ asset('assets/images/home/demo3/servico_01.png') }}" width="690" height="665"
            alt="Serviço de Retirada" />
          <div class="category-banner__item-mark">
            Frete Gratis
          </div>
          <div class="category-banner__item-content">
            <h3 class="mb-0">Serviço de Retirada</h3>
            <a href="#" class="btn-link default-underline text-uppercase fw-medium">Conhecer</a>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="category-banner__item border-radius-10 mb-5">
          <img loading="lazy" class="h-auto" src="{{ asset('assets/images/home/demo3/servico_02.png') }}" width="690" height="665"
            alt="Entrega Expressa" />
          <div class="category-banner__item-mark">
            Frete Gratis
          </div>
          <div class="category-banner__item-content">
            <h3 class="mb-0">Entrega Expressa</h3>
            <a href="#" class="btn-link default-underline text-uppercase fw-medium">Conhecer</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <div class="mb-3 mb-xl-5 pt-1 pb-4"></div>

  <section class="products-grid container">
    <h2 class="section-title text-center mb-3 pb-xl-3 mb-xl-4">Produtos Novos e Lançamentos</h2>

    <div class="row">
      <div class="col-6 col-md-4 col-lg-3">
        <div class="product-card product-card_style3 mb-3 mb-md-4 mb-xxl-5">
          <div class="pc__img-wrapper">
            <a href="details.html">
              <img loading="lazy" src="{{ asset('assets/images/home/demo3/produto_09.png') }}" width="330" height="400"
                alt="Mesa Gamer Mancer Arcane" class="pc__img">
            </a>
          </div>

          <div class="pc__info position-relative">
            <h6 class="pc__title"><a href="details.html">Mesa Gamer Mancer Arcane</a></h6>
            <div class="product-card__price d-flex align-items-center">
              <span class="money price text-secondary">R$ 575,99</span>
            </div>

            <div
              class="anim_appear-bottom position-absolute bottom-0 start-0 d-none d-sm-flex align-items-center bg-body">
              <button class="btn-link btn-link_lg me-4 text-uppercase fw-medium js-add-cart js-open-aside"
                data-aside="cartDrawer" title="Add To Cart">Carrinho</button>
              <button class="btn-link btn-link_lg me-4 text-uppercase fw-medium js-quick-view"
                data-bs-toggle="modal" data-bs-target="#quickView" title="Quick view">
                <span class="d-none d-xxl-block">Descrição</span>
                <span class="d-block d-xxl-none"><svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <use href="#icon_view" />
                  </svg></span>
              </button>
              <button class="pc__btn-wl bg-transparent border-0 js-add-wishlist" title="Add To Wishlist">
                <svg width="16" height="16" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <use href="#icon_heart" />
                </svg>
              </button>
            </div>
          </div>
        </div>
      </div>
      <div class="col-6 col-md-4 col-lg-3">
        <div class="product-card product-card_style3 mb-3 mb-md-4 mb-xxl-5">
          <div class="pc__img-wrapper">
            <a href="details.html">
              <img loading="lazy" src="{{ asset('assets/images/home/demo3/produto_10.png') }}" width="330" height="400"
                alt="SSD Rover, 2TB, M.2 2280" class="pc__img">
            </a>
          </div>

          <div class="pc__info position-relative">
            <h6 class="pc__title"><a href="details.html">SSD Rover, 2TB, M.2 2280</a></h6>
            <div class="product-card__price d-flex align-items-center">
              <span class="money price text-secondary">R$ 924,99</span>
            </div>

            <div
              class="anim_appear-bottom position-absolute bottom-0 start-0 d-none d-sm-flex align-items-center bg-body">
              <button class="btn-link btn-link_lg me-4 text-uppercase fw-medium js-add-cart js-open-aside"
                data-aside="cartDrawer" title="Add To Cart">Carrinho</button>
              <button class="btn-link btn-link_lg me-4 text-uppercase fw-medium js-quick-view"
                data-bs-toggle="modal" data-bs-target="#quickView" title="Quick view">
                <span class="d-none d-xxl-block">Descrição</span>
                <span class="d-block d-xxl-none"><svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <use href="#icon_view" />
                  </svg></span>
              </button>
              <button class="pc__btn-wl bg-transparent border-0 js-add-wishlist" title="Add To Wishlist">
                <svg width="16" height="16" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <use href="#icon_heart" />
                </svg>
              </button>
            </div>
          </div>
        </div>
      </div>
      <div class="col-6 col-md-4 col-lg-3">
        <div class="product-card product-card_style3 mb-3 mb-md-4 mb-xxl-5">
          <div class="pc__img-wrapper">
            <a href="details.html">
              <img loading="lazy" src="{{ asset('assets/images/home/demo3/produto_11.png') }}" width="330" height="400"
                alt="Gabinete Gamer Cooler Master Sneaker X Red" class="pc__img">
            </a>
            <div class="product-label bg-red text-uppercase text-white top-0 left-0 mt-2 mx-2">Novo</div>
          </div>

          <div class="pc__info position-relative">
            <h6 class="pc__title"><a href="details.html">Gabinete Gamer Cooler Master Sneaker X Red</a></h6>
            <div class="product-card__price d-flex align-items-center">
              <span class="money price text-secondary">R$ 7.899,99</span>
            </div>

            <div
              class="anim_appear-bottom position-absolute bottom-0 start-0 d-none d-sm-flex align-items-center bg-body">
              <button class="btn-link btn-link_lg me-4 text-uppercase fw-medium js-add-cart js-open-aside"
                data-aside="cartDrawer" title="Add To Cart">Carrinho</button>
              <button class="btn-link btn-link_lg me-4 text-uppercase fw-medium js-quick-view"
                data-bs-toggle="modal" data-bs-target="#quickView" title="Quick view">
                <span class="d-none d-xxl-block">Descrição</span>
                <span class="d-block d-xxl-none"><svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <use href="#icon_view" />
                  </svg></span>
              </button>
              <button class="pc__btn-wl bg-transparent border-0 js-add-wishlist" title="Add To Wishlist">
                <svg width="16" height="16" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <use href="#icon_heart" />
                </svg>
              </button>
            </div>
          </div>
        </div>
      </div>
      <div class="col-6 col-md-4 col-lg-3">
        <div class="product-card product-card_style3 mb-3 mb-md-4 mb-xxl-5">
          <div class="pc__img-wrapper">
            <a href="details.html">
              <img loading="lazy" src="{{ asset('assets/images/home/demo3/produto_12.png') }}" width="330" height="400"
                alt="Console Sony Playstation 5 Slim" class="pc__img">
            </a>
            <div class="product-label bg-red text-white right-0 top-0 left-auto mt-2 mx-2">-67%</div>
          </div>

          <div class="pc__info position-relative">
            <h6 class="pc__title">Console Sony Playstation 5 Slim</h6>
            <div class="product-card__price d-flex align-items-center">
              <span class="money price-old">R$ 5.882,34</span>
              <span class="money price text-secondary">R$ 3.999,99</span>
            </div>

            <div
              class="anim_appear-bottom position-absolute bottom-0 start-0 d-none d-sm-flex align-items-center bg-body">
              <button class="btn-link btn-link_lg me-4 text-uppercase fw-medium js-add-cart js-open-aside"
                data-aside="cartDrawer" title="Add To Cart">Carrinho</button>
              <button class="btn-link btn-link_lg me-4 text-uppercase fw-medium js-quick-view"
                data-bs-toggle="modal" data-bs-target="#quickView" title="Quick view">
                <span class="d-none d-xxl-block">Descrição</span>
                <span class="d-block d-xxl-none"><svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <use href="#icon_view" />
                  </svg></span>
              </button>
              <button class="pc__btn-wl bg-transparent border-0 js-add-wishlist" title="Add To Wishlist">
                <svg width="16" height="16" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <use href="#icon_heart" />
                </svg>
              </button>
            </div>
          </div>
        </div>
      </div>
      <div class="col-6 col-md-4 col-lg-3">
        <div class="product-card product-card_style3 mb-3 mb-md-4 mb-xxl-5">
          <div class="pc__img-wrapper">
            <a href="details.html">
              <img loading="lazy" src="{{ asset('assets/images/home/demo3/produto_13.png') }}" width="330" height="400"
                alt="PC Gamer Completo Mancer Krampus II" class="pc__img">
            </a>
          </div>
          <div class="product-label bg-red text-white right-0 top-0 left-auto mt-2 mx-2">-42%</div>
          <div class="pc__info position-relative">
            <h6 class="pc__title"><a href="details.html">PC Gamer Completo Mancer Krampus II</a></h6>
            <div class="product-card__price d-flex align-items-center">
              <span class="money price-old">R$ 6.287,13</span>
              <span class="money price text-secondary">R$ 4.499,99</span>
            </div>

            <div
              class="anim_appear-bottom position-absolute bottom-0 start-0 d-none d-sm-flex align-items-center bg-body">
              <button class="btn-link btn-link_lg me-4 text-uppercase fw-medium js-add-cart js-open-aside"
                data-aside="cartDrawer" title="Add To Cart">Carrinho</button>
              <button class="btn-link btn-link_lg me-4 text-uppercase fw-medium js-quick-view"
                data-bs-toggle="modal" data-bs-target="#quickView" title="Quick view">
                <span class="d-none d-xxl-block">Descrição</span>
                <span class="d-block d-xxl-none"><svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <use href="#icon_view" />
                  </svg></span>
              </button>
              <button class="pc__btn-wl bg-transparent border-0 js-add-wishlist" title="Add To Wishlist">
                <svg width="16" height="16" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <use href="#icon_heart" />
                </svg>
              </button>
            </div>
          </div>
        </div>
      </div>
      <div class="col-6 col-md-4 col-lg-3">
        <div class="product-card product-card_style3 mb-3 mb-md-4 mb-xxl-5">
          <div class="pc__img-wrapper">
            <a href="details.html">
              <img loading="lazy" src="{{ asset('assets/images/home/demo3/produto_14.png') }}" width="330" height="400"
                alt="Notebook Gamer Lenovo IdeaPad Gaming" class="pc__img">
            </a>
          </div>
          <div class="product-label bg-red text-white right-0 top-0 left-auto mt-2 mx-2">TOP 3</div>
          <div class="pc__info position-relative">
            <h6 class="pc__title"><a href="details.html">Notebook Gamer Lenovo IdeaPad Gaming</a></h6>
            <div class="product-card__price d-flex align-items-center">
              <span class="money price text-secondary">R$ 4.199,99</span>
            </div>

            <div
              class="anim_appear-bottom position-absolute bottom-0 start-0 d-none d-sm-flex align-items-center bg-body">
              <button class="btn-link btn-link_lg me-4 text-uppercase fw-medium js-add-cart js-open-aside"
                data-aside="cartDrawer" title="Add To Cart">Carrinho</button>
              <button class="btn-link btn-link_lg me-4 text-uppercase fw-medium js-quick-view"
                data-bs-toggle="modal" data-bs-target="#quickView" title="Quick view">
                <span class="d-none d-xxl-block">Descrição</span>
                <span class="d-block d-xxl-none"><svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <use href="#icon_view" />
                  </svg></span>
              </button>
              <button class="pc__btn-wl bg-transparent border-0 js-add-wishlist" title="Add To Wishlist">
                <svg width="16" height="16" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <use href="#icon_heart" />
                </svg>
              </button>
            </div>
          </div>
        </div>
      </div>
      <div class="col-6 col-md-4 col-lg-3">
        <div class="product-card product-card_style3 mb-3 mb-md-4 mb-xxl-5">
          <div class="pc__img-wrapper">
            <a href="details.html">
              <img loading="lazy" src="{{ asset('assets/images/home/demo3/produto_15.png') }}" width="330" height="400"
                alt="Projetor Intelbras PFL6410" class="pc__img">
            </a>
          </div>

          <div class="pc__info position-relative">
            <h6 class="pc__title"><a href="details.html">Projetor Intelbras PFL6410</a></h6>
            <div class="product-card__price d-flex align-items-center">
              <span class="money price text-secondary">R$ 1.899,99</span>
            </div>

            <div
              class="anim_appear-bottom position-absolute bottom-0 start-0 d-none d-sm-flex align-items-center bg-body">
              <button class="btn-link btn-link_lg me-4 text-uppercase fw-medium js-add-cart js-open-aside"
                data-aside="cartDrawer" title="Add To Cart">Carrinho</button>
              <button class="btn-link btn-link_lg me-4 text-uppercase fw-medium js-quick-view"
                data-bs-toggle="modal" data-bs-target="#quickView" title="Quick view">
                <span class="d-none d-xxl-block">Descrição</span>
                <span class="d-block d-xxl-none"><svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <use href="#icon_view" />
                  </svg></span>
              </button>
              <button class="pc__btn-wl bg-transparent border-0 js-add-wishlist" title="Add To Wishlist">
                <svg width="16" height="16" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <use href="#icon_heart" />
                </svg>
              </button>
            </div>
          </div>
        </div>
      </div>
      <div class="col-6 col-md-4 col-lg-3">
        <div class="product-card product-card_style3 mb-3 mb-md-4 mb-xxl-5">
          <div class="pc__img-wrapper">
            <a href="details.html">
              <img loading="lazy" src="{{ asset('assets/images/home/demo3/produto_16.png') }}" width="330" height="400"
                alt="Tablet Samsung S6 Lite" class="pc__img">
            </a>
          </div>

          <div class="pc__info position-relative">
            <h6 class="pc__title"> Tablet Samsung S6 Lite</h6>
            <div class="product-card__price d-flex align-items-center">
              <span class="money price text-secondary">R$ 2.399,99</span>
            </div>

            <div
              class="anim_appear-bottom position-absolute bottom-0 start-0 d-none d-sm-flex align-items-center bg-body">
              <button class="btn-link btn-link_lg me-4 text-uppercase fw-medium js-add-cart js-open-aside"
                data-aside="cartDrawer" title="Add To Cart">Carrinho</button>
              <button class="btn-link btn-link_lg me-4 text-uppercase fw-medium js-quick-view"
                data-bs-toggle="modal" data-bs-target="#quickView" title="Quick view">
                <span class="d-none d-xxl-block">Descrição</span>
                <span class="d-block d-xxl-none"><svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <use href="#icon_view" />
                  </svg></span>
              </button>
              <button class="pc__btn-wl bg-transparent border-0 js-add-wishlist" title="Add To Wishlist">
                <svg width="16" height="16" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <use href="#icon_heart" />
                </svg>
              </button>
            </div>
          </div>
        </div>
      </div>
    </div><!-- /.row -->

    <div class="text-center mt-2">
      <a class="btn-link btn-link_lg default-underline text-uppercase fw-medium" href="#">Ver Todos</a>
    </div>
  </section>
</div>

<div class="mb-3 mb-xl-5 pt-1 pb-4"></div>

</main>
@endsection