@extends('index')

@section('content')

    <div class="slideshow-full">
        <div class="module sohomepage-slider ">
            <div class="yt-content-slider" data-rtl="yes" data-autoplay="no" data-autoheight="no" data-delay="4"
                data-speed="0.6" data-margin="0" data-items_column00="1" data-items_column0="1" data-items_column1="1"
                data-items_column2="1" data-items_column3="1" data-items_column4="1" data-arrows="yes" data-pagination="no"
                data-lazyload="yes" data-loop="no" data-hoverpause="yes">
                <div class="yt-content-slide">
                    <a href="#"><img src="/image/slider.jpg" alt="slider1"
                            class="img-responsive"></a>
                </div>
                <div class="yt-content-slide">
                    <a href="#"><img src="/image/slider.jpg" alt="slider2"
                            class="img-responsive"></a>
                </div>
                <div class="yt-content-slide">
                    <a href="#"><img src="/image/slider.jpg" alt="slider3"
                            class="img-responsive"></a>
                </div>
            </div>

            <div class="loadeding"></div>
        </div>
    </div>
    <!-- Policy -->
    <div class="block-services container">
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 col-margin1">
                <div class="icon-service">
                    <div class="icon"><i class="pe-7s-car">&nbsp;</i></div>
                    <div class="text">
                        <h6>Ventaja 1</h6>
                        <p class="no-margin">Lorem ipsum dolor sit amet</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 col-margin1">
                <div class="icon-service">
                    <div class="icon"><i class="pe-7s-refresh-2">&nbsp;</i></div>
                    <div class="text">
                        <h6>Ventaja 2</h6>
                        <p class="no-margin">Lorem ipsum dolor sit amet</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 col-margin">
                <div class="icon-service">
                    <div class="icon"><i class="pe-7s-door-lock">&nbsp;</i></div>
                    <div class="text">
                        <h6>Ventaja 3</h6>
                        <p class="no-margin">Lorem ipsum dolor sit amet</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="icon-service">
                    <div class="icon"><i class="pe-7s-users">&nbsp;</i></div>
                    <div class="text">
                        <h6>Ventaja 4</h6>
                        <p class="no-margin">Lorem ipsum dolor sit amet</p>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="custom-cates">
        <div class="yt-content-slider contentslider" data-rtl="no" data-loop="yes" data-autoplay="no" data-autoheight="yes"
            data-autowidth="no" data-delay="4" data-speed="0.6" data-margin="0" data-items_column00="5"
            data-items_column0="5" data-items_column1="4" data-items_column2="3" data-items_column3="2"
            data-items_column4="1" data-arrows="no" data-pagination="no" data-lazyload="yes" data-hoverpause="yes">

            @foreach ($categorias as $c)
            <div class="item">
                <a href="#" class="img">
                    <img src="/image/categorias.jpg" alt="banner">
                </a>
                <div class="cont">
                    <h2>{{ $c->Clase }}</h2>
                    <span> {{ $c->TotalProductos }} productos</span>
                </div>
                <div class="lnk"><a href="{{ route('categoria', $c->IdClase) }}">Ver más</a></div>
            </div>

            @endforeach
        </div>
    </div>

    <div class="content-main-w" style="padding-top: 100px;">
        <div class="container">

            <div class="module extra-layout6">
                <div class="pre_text">Titulo</div>
                <h3 class="modtitle"><span>Subtitulo</span></h3>
                <div class="modcontent">
                    <div class="so-extraslider">
                        <div class="extraslider-inner products-list">
                            <div class="item">
                                <div class="product-layout product-grid style1 nitem item-1">
                                    <div class="product-item-container item--static">
                                        <div class="left-block">
                                            <div class="product-image-container second_img">
                                                <a href="#" target="_self" title="Volup tatem accu">
                                                    <img src="http://www.abasleal.com/imagenes_productos/259822.jpg" class="img-1 img-responsive" alt="image1">
                                                    <img src="http://www.abasleal.com/imagenes_productos/259822.jpg" class="img-2 img-responsive" alt="image2">
                                                </a>
                                            </div>
                                            {{-- <span class="label-product label-new">New </span> --}}
                                            <!--quickview-->
                                            {{-- <div class="so-quickview">
                                              <a class="iframe-link btn-button quickview quickview_handler visible-lg" href="quickview.html" title="Quick view" data-fancybox-type="iframe"><i class="fa fa-search"></i><span>Quick view</span></a>
                                            </div> --}}
                                            <!--end quickview-->
                                        </div>
                                        <div class="right-block">
                                            <div class="button-group cartinfo--static">

                                                {{-- <button type="button" class="wishlist btn-button" title="Add to Wish List" onclick="wishlist.add('60');"><i class="fa fa-heart"></i></button> --}}
                                                <button type="button" class="addToCart" title="Add to cart" onclick="cart.add('60 ');">
                                                    <span>Agregar al carrito </span>
                                                </button>
                                                {{-- <button type="button" class="compare btn-button" title="Compare this Product " onclick="compare.add('60');"><i class="fa fa-refresh"></i></button> --}}
                                            </div>
                                            <h4><a href="#" title="Volup tatem accu" style="font-weight: 600;">Volup tatem accu</a></h4>
                                            {{-- <div class="rating">    <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                            </div> --}}
                                            <div class="price">
                                              <span class="price" style="color:red;">$48.00</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-layout product-grid style1 nitem item-2">
                                    <div class="product-item-container item--static">
                                        <div class="left-block">
                                            <div class="product-image-container second_img">
                                                <a href="#" target="_self" title="Volup tatem accu">
                                                    <img src="http://www.abasleal.com/imagenes_productos/259822.jpg" class="img-1 img-responsive" alt="image1">
                                                    <img src="http://www.abasleal.com/imagenes_productos/259822.jpg" class="img-2 img-responsive" alt="image2">
                                                </a>
                                            </div>
                                            {{-- <span class="label-product label-new">New </span> --}}
                                            <!--quickview-->
                                            {{-- <div class="so-quickview">
                                              <a class="iframe-link btn-button quickview quickview_handler visible-lg" href="quickview.html" title="Quick view" data-fancybox-type="iframe"><i class="fa fa-search"></i><span>Quick view</span></a>
                                            </div> --}}
                                            <!--end quickview-->
                                        </div>
                                        <div class="right-block">
                                            <div class="button-group cartinfo--static">

                                                {{-- <button type="button" class="wishlist btn-button" title="Add to Wish List" onclick="wishlist.add('60');"><i class="fa fa-heart"></i></button> --}}
                                                <button type="button" class="addToCart" title="Add to cart" onclick="cart.add('60 ');">
                                                    <span>Agregar al carrito </span>
                                                </button>
                                                {{-- <button type="button" class="compare btn-button" title="Compare this Product " onclick="compare.add('60');"><i class="fa fa-refresh"></i></button> --}}
                                            </div>
                                            <h4><a href="#" title="Volup tatem accu" style="font-weight: 600;">Volup tatem accu</a></h4>
                                            {{-- <div class="rating">    <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                            </div> --}}
                                            <div class="price">
                                              <span class="price" style="color:red;">$48.00</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-layout product-grid style1 special-item item-3">
                                    <div class="product-item-container item--static">
                                        <div class="left-block">
                                            <div class="product-image-container second_img">
                                                <a href="#" target="_self" title="Stickrum bresao">
                                                    <img src="http://www.abasleal.com/imagenes_productos/259822.jpg" class="img-1 img-responsive" alt="image1">
                                                    <img src="http://www.abasleal.com/imagenes_productos/259822.jpg" class="img-2 img-responsive" alt="image2">
                                                </a>
                                            </div>
                                            {{-- <span class="label-product label-sale">-11%</span> --}}
                                            <!--quickview-->

                                            <!--end quickview-->
                                        </div>
                                        <div class="right-block">
                                            <div class="button-group cartinfo--static">

                                                {{-- <button type="button" class="wishlist btn-button" title="Add to Wish List" onclick="wishlist.add('60');"><i class="fa fa-heart"></i></button> --}}
                                                <button type="button" class="addToCart" title="Add to cart" onclick="cart.add('60 ');">
                                                    <span>Add to cart </span>
                                                </button>
                                                {{-- <button type="button" class="compare btn-button" title="Compare this Product " onclick="compare.add('60');"><i class="fa fa-refresh"></i></button> --}}
                                            </div>
                                            <h4><a href="#" title="Stickrum bresao" target="_self">Stickrum bresao</a></h4>
                                            {{-- <div class="rating">    <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                            </div> --}}
                                            <div class="price">
                                                <span class="price-new">$85.00</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-layout product-grid style1 nitem item-4">
                                    <div class="product-item-container item--static">
                                        <div class="left-block">
                                            <div class="product-image-container second_img">
                                                <a href="#" target="_self" title="Volup tatem accu">
                                                    <img src="http://www.abasleal.com/imagenes_productos/259822.jpg" class="img-1 img-responsive" alt="image1">
                                                    <img src="http://www.abasleal.com/imagenes_productos/259822.jpg" class="img-2 img-responsive" alt="image2">
                                                </a>
                                            </div>
                                            {{-- <span class="label-product label-new">New </span> --}}
                                            <!--quickview-->
                                            {{-- <div class="so-quickview">
                                              <a class="iframe-link btn-button quickview quickview_handler visible-lg" href="quickview.html" title="Quick view" data-fancybox-type="iframe"><i class="fa fa-search"></i><span>Quick view</span></a>
                                            </div> --}}
                                            <!--end quickview-->
                                        </div>
                                        <div class="right-block">
                                            <div class="button-group cartinfo--static">

                                                {{-- <button type="button" class="wishlist btn-button" title="Add to Wish List" onclick="wishlist.add('60');"><i class="fa fa-heart"></i></button> --}}
                                                <button type="button" class="addToCart" title="Add to cart" onclick="cart.add('60 ');">
                                                    <span>Agregar al carrito </span>
                                                </button>
                                                {{-- <button type="button" class="compare btn-button" title="Compare this Product " onclick="compare.add('60');"><i class="fa fa-refresh"></i></button> --}}
                                            </div>
                                            <h4><a href="#" title="Volup tatem accu" style="font-weight: 600;">Volup tatem accu</a></h4>
                                            {{-- <div class="rating">    <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                            </div> --}}
                                            <div class="price">
                                              <span class="price" style="color:red;">$48.00</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-layout product-grid style1 nitem item-5">
                                    <div class="product-item-container item--static">
                                        <div class="left-block">
                                            <div class="product-image-container second_img">
                                                <a href="#" target="_self" title="Volup tatem accu">
                                                    <img src="http://www.abasleal.com/imagenes_productos/259822.jpg" class="img-1 img-responsive" alt="image1">
                                                    <img src="http://www.abasleal.com/imagenes_productos/259822.jpg" class="img-2 img-responsive" alt="image2">
                                                </a>
                                            </div>
                                            {{-- <span class="label-product label-new">New </span> --}}
                                            <!--quickview-->
                                            {{-- <div class="so-quickview">
                                              <a class="iframe-link btn-button quickview quickview_handler visible-lg" href="quickview.html" title="Quick view" data-fancybox-type="iframe"><i class="fa fa-search"></i><span>Quick view</span></a>
                                            </div> --}}
                                            <!--end quickview-->
                                        </div>
                                        <div class="right-block">
                                            <div class="button-group cartinfo--static">

                                                {{-- <button type="button" class="wishlist btn-button" title="Add to Wish List" onclick="wishlist.add('60');"><i class="fa fa-heart"></i></button> --}}
                                                <button type="button" class="addToCart" title="Add to cart" onclick="cart.add('60 ');">
                                                    <span>Agregar al carrito </span>
                                                </button>
                                                {{-- <button type="button" class="compare btn-button" title="Compare this Product " onclick="compare.add('60');"><i class="fa fa-refresh"></i></button> --}}
                                            </div>
                                            <h4><a href="#" title="Volup tatem accu" style="font-weight: 600;">Volup tatem accu</a></h4>
                                            {{-- <div class="rating">    <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                            </div> --}}
                                            <div class="price">
                                              <span class="price" style="color:red;">$48.00</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row-deals row-color">
            <div class="module deals-layout6 container">
                <h3 class="modtitle2"><span>Oferta del día</span></h3>
                <div class="modcontent">
                    <div id="so_deal_61" class="so-deal">
                        <div class="products-list yt-content-slider extraslider-inner" data-rtl="yes" data-pagination="no" data-arrows="yes" data-autoplay="no" data-delay="4" data-speed="0.6" data-margin="30" data-items_column00="1" data-items_column0="1" data-items_column1="1" data-items_column2="1" data-items_column3="1" data-items_column4="1" data-lazyload="yes" data-loop="no" data-buttonpage="top">
                            @forelse ($oferta as $o)


                            {{-- <div class="item product-layout">
                                <div class="product-thumb transition product-item-container">
                                    <div class="col-lg-6 col-md-5 col-sm-6 col-xs-12 col-left">
                                        <div class="left-block">
                                            <div class="product-image-container second_img">
                                                <a href="#" target="_self" title="Sunt in culpa">
                                                    <img src="http://www.abasleal.com/imagenes_productos/KP0800.jpg" class="img-1 img-responsive" alt="image1">
                                                    <img src="http://www.abasleal.com/imagenes_productos/KP0800.jpg" class="img-2 img-responsive" alt="image2">
                                                </a>
                                            </div>
                                            <div class="so-quickview">
                                              <a class="iframe-link btn-button quickview quickview_handler visible-lg" href="quickview.html" title="Quick view" data-fancybox-type="iframe"><i class="fa fa-search"></i><span>Quick view</span></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-7 col-sm-6 col-xs-12 col-right">
                                        <div class="right-block">
                                            <h4><a href="#" title="Sunt in culpa" target="_self">{{ $o->nombre }} - Codigo: {{ $o->codigo }}</a></h4>

                                            <div class="price">
                                                <span class="price-new">{{ $o->precio }}</span>
                                            </div>
                                            <p>{{ $o->descripcionCorta }}</p>

                                            <div class="button-group" style="padding-top: 50px;">
                                                <button type="button" class="addToCart" title="Add to cart" onclick="cart.add('60 ');">
                                                    <span>Agregar al carrito </span>
                                                </button>

                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div> --}}

                            @empty

                            @endforelse
                            {{-- <div class="item product-layout">
                                <div class="product-thumb transition product-item-container">
                                    <div class="col-lg-6 col-md-5 col-sm-6 col-xs-12 col-left">
                                        <div class="left-block">
                                            <div class="product-image-container second_img">
                                                <a href="#" target="_self" title="Sunt in culpa">
                                                    <img src="http://www.abasleal.com/imagenes_productos/KP0800.jpg" class="img-1 img-responsive" alt="image1">
                                                    <img src="http://www.abasleal.com/imagenes_productos/KP0800.jpg" class="img-2 img-responsive" alt="image2">
                                                </a>
                                            </div>
                                            <div class="so-quickview">
                                              <a class="iframe-link btn-button quickview quickview_handler visible-lg" href="quickview.html" title="Quick view" data-fancybox-type="iframe"><i class="fa fa-search"></i><span>Quick view</span></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-7 col-sm-6 col-xs-12 col-right">
                                        <div class="right-block">
                                            <h4><a href="#" title="Sunt in culpa" target="_self">Sunt in culpa back wheel</a></h4>

                                            <div class="price">
                                                <span class="price-new">$50.00</span>
                                            </div>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, ..</p>

                                            <div class="button-group" style="padding-top: 50px;">
                                                <button type="button" class="addToCart" title="Add to cart" onclick="cart.add('60 ');">
                                                    <span>Agregar al carrito</span>
                                                </button>

                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>



    </div>

@endsection

@push('css')
<link href="css/themecss/so_searchpro.css" rel="stylesheet">
<link href="css/themecss/so_megamenu.css" rel="stylesheet">
<link href="css/themecss/so_advanced_search.css" rel="stylesheet">
<link href="css/themecss/so-listing-tabs.css" rel="stylesheet">
<link href="css/themecss/so-categories.css" rel="stylesheet">
<link href="css/themecss/so-newletter-popup.css" rel="stylesheet">
<link href="css/themecss/so-latest-blog.css" rel="stylesheet">

<link href="/css/footer/footer6.css" rel="stylesheet">
    <link href="/css/header/header6.css" rel="stylesheet">
    <link id="color_scheme" href="/css/home6.css" rel="stylesheet">
@endpush

@push('js')

<script type="text/javascript" src="js/themejs/application.js"></script>
<script type="text/javascript" src="js/themejs/homepage.js"></script>
<script type="text/javascript" src="js/themejs/toppanel.js"></script>
<script type="text/javascript" src="js/themejs/so_megamenu.js"></script>
<script type="text/javascript" src="js/themejs/addtocart.js"></script>

<!-- <script type="text/javascript" src="/js/themejs/cpanel.js"></script> -->
@endpush
