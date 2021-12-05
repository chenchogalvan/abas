@extends('index')

@push('css')
<link href="/css/themecss/so_searchpro.css" rel="stylesheet">
<link href="/css/themecss/so_megamenu.css" rel="stylesheet">
<link href="/css/themecss/so_advanced_search.css" rel="stylesheet">
<link href="/css/themecss/so-listing-tabs.css" rel="stylesheet">
<link href="/css/themecss/so-categories.css" rel="stylesheet">
<link href="/css/themecss/so-newletter-popup.css" rel="stylesheet">
<link href="/css/themecss/so-latest-blog.css" rel="stylesheet">

<link href="/css/footer/footer1.css" rel="stylesheet">
<link href="/css/header/header1.css" rel="stylesheet">
<link id="color_scheme" href="/css/theme.css" rel="stylesheet">
<link href="/css/responsive.css" rel="stylesheet">

<link href="/js/lightslider/lightslider.css" rel="stylesheet">
 <!-- Google web fonts
============================================ -->
<link href='https://fonts.googleapis.com/css?family=Rubik:300,400,400i,500,600,700' rel='stylesheet' type='text/css'>
<style type="text/css">
     body{font-family:'Rubik', sans-serif;}
</style>
@endpush

@push('js')
 <!-- Theme files
    ============================================ -->
    <script type="text/javascript" src="/js/themejs/homepage.js"></script>

    <script type="text/javascript" src="/js/themejs/so_megamenu.js"></script>
    <script type="text/javascript" src="/js/themejs/addtocart.js"></script>
    <script type="text/javascript" src="/js/themejs/application.js"></script>
<!--         -->
@endpush


@section('content')
    <!-- Main Container  -->
    <div class="main-container container">
        <ul class="breadcrumb">
            <li><a href="#"><i class="fa fa-home"></i></a></li>
            <li><a href="#">Categoria</a></li>
            <li><a href="#">Producto</a></li>

        </ul>

        <div class="row">

            <!--Left Part Start -->
        <aside class="col-sm-4 col-md-3 content-aside" id="column-left">
            <div class="module category-style">
                <h3 class="modtitle" style="color:white;">Categorias</h3>
                <div class="modcontent">
                    <div class="box-category">
                        <ul id="cat_accordion" class="list-group">
                            @foreach ($categorias as $cat)
                            <li class=""><a href="{{ route('categoria', $cat->IdClase) }}" class="cutom-parent">{{ $cat->Clase }}</a>  <span class="dcjq-icon"></span></li>
                            @endforeach

                        </ul>
                    </div>


                </div>
            </div>
            <div class="module product-simple">
                <h3 class="modtitle" >
                    <span style="color:white;">Ultimos productos</span>
                </h3>
                <div class="modcontent">
                    <div class="so-extraslider" >
                        <!-- Begin extraslider-inner -->
                        <div class="yt-content-slider extraslider-inner">
                            <div class="item ">

                                @foreach ($up as $up)
                                <div class="product-layout item-inner style1 ">
                                    <div class="item-image">
                                        <div class="item-img-info">
                                            <a href="{{ route('producto', $up->Codigo) }}" target="_self" title="{{ $up->Descripcion }}">
                                                <img src="{{ $up->Imagen }}" alt="{{ $up->Descripcion }}">
                                                </a>
                                        </div>

                                    </div>
                                    <div class="item-info">
                                        <div class="item-title">
                                            <a href="{{ route('producto', $up->Codigo) }}" target="_self" title="{{ $up->Descripcion }}">{{ $up->Descripcion }}</a>
                                        </div>
                                        {{-- <div class="rating">
                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                        </div> --}}
                                        <div class="content_price price">
                                            <span class="price-new product-price">$@convert($up->Precio) </span>&nbsp;&nbsp;


                                        </div>
                                    </div>
                                    <!-- End item-info -->
                                    <!-- End item-wrap-inner -->
                                </div>
                                @endforeach

                                <!-- End item-wrap -->

                            </div>
                        </div>
                        <!--End extraslider-inner -->
                    </div>
                </div>
            </div>
            <div class="module banner-left hidden-xs ">
                <div class="banner-sidebar banners">
                  <div>
                    <a title="Banner Image" href="#">
                      <img src="https://demo.smartaddons.com/templates/html/autoparts/image/catalog/banners/banner-sidebar.jpg" alt="Banner Image">
                    </a>
                  </div>
                </div>
            </div>
        </aside>
        <!--Left Part End -->

            <!--Middle Part Start-->
            <div id="content" class="col-md-9 col-sm-8">

                <div class="product-view row">
                    <div class="left-content-product">

                        <div class="content-product-left class-honizol col-md-5 col-sm-12 col-xs-12">
                            <div class="large-image  ">
                                <img itemprop="image" class="product-image-zoom" src="{{ $p[0]->Imagen }}"  title="{{ $p[0]->Descripcion }}" alt="{{ $p[0]->Descripcion }}">
                            </div>
                            {{-- <a class="thumb-video pull-left" href="https://www.youtube.com/watch?v=HhabgvIIXik"><i class="fa fa-youtube-play"></i></a> --}}

                            {{-- <div id="thumb-slider" class="yt-content-slider full_slider owl-drag" data-rtl="yes" data-autoplay="no" data-autoheight="no" data-delay="4" data-speed="0.6" data-margin="10" data-items_column00="4" data-items_column0="4" data-items_column1="3" data-items_column2="4"  data-items_column3="1" data-items_column4="1" data-arrows="yes" data-pagination="no" data-lazyload="yes" data-loop="no" data-hoverpause="yes">
                                <a data-index="0" class="img thumbnail " data-image="http://www.abasleal.com/imagenes_productos/KP0800-1.jpg" title="Chicken swinesha">
                                    <img src="http://www.abasleal.com/imagenes_productos/KP0800-1.jpg" title="Chicken swinesha" alt="Chicken swinesha">
                                </a>
                                <a data-index="1" class="img thumbnail " data-image="http://www.abasleal.com/imagenes_productos/KP0800-2.jpg" title="Chicken swinesha">
                                    <img src="http://www.abasleal.com/imagenes_productos/KP0800-2.jpg" title="Chicken swinesha" alt="Chicken swinesha">
                                </a>
                                <a data-index="2" class="img thumbnail " data-image="http://www.abasleal.com/imagenes_productos/KP0800.jpg" title="Chicken swinesha">
                                    <img src="http://www.abasleal.com/imagenes_productos/KP0800.jpg" title="Chicken swinesha" alt="Chicken swinesha">
                                </a>

                                </a>
                            </div> --}}

                        </div>

                        <div class="content-product-right col-md-7 col-sm-12 col-xs-12">
                            <div class="title-product">
                                <h1>{{ $p[0]->Descripcion }}</h1>
                            </div>
                            <!-- Review ---->
                            <div class="box-review form-group">
                                {{-- <div class="ratings">
                                    <div class="rating-box">
                                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
                                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
                                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
                                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
                                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
                                    </div>
                                </div> --}}

                                {{-- <a class="reviews_button" href="" onclick="$('a[href=\'#tab-review\']').trigger('click'); return false;">0 reviews</a>  |
                                <a class="write_review_button" href="" onclick="$('a[href=\'#tab-review\']').trigger('click'); return false;">Write a review</a> --}}
                            </div>

                            <div class="product-label form-group">
                                <div class="product_page_price price" itemprop="offerDetails" itemscope="" itemtype="http://data-vocabulary.org/Offer">
                                    <span class="price-new" itemprop="price">$@convert($p[0]->PrecioOferta)</span>
                                    <span class="price-old">$@convert($p[0]->Precio)</span>
                                </div>
                                <div class="stock"><span>Poducto:</span> <span class="status-stock" style="color:green;">Disponible</span></div>
                            </div>

                            <div class="product-box-desc">
                                <div class="inner-box-desc">
                                    <div class="price-tax"><span>Info:</span> Desc</div>
                                    <div class="reward"><span>Info:</span> Desc</div>
                                    <div class="brand"><span>Info:</span><a href="#">Desc</a>     </div>
                                    <div class="model"><span>Info:</span> Desc</div>
                                    <div class="reward"><span>Info:</span> Desc</div>
                                </div>
                            </div>


                            <div id="product">

                                <div class="form-group box-info-product">
                                    <div class="option quantity">
                                        <div class="input-group quantity-control" unselectable="on" style="-webkit-user-select: none;">
                                            <label>Cantidad</label>
                                            <input class="form-control" type="text" name="quantity"
                                            value="1">
                                            <input type="hidden" name="product_id" value="50">
                                            <span class="input-group-addon product_quantity_down">−</span>
                                            <span class="input-group-addon product_quantity_up">+</span>
                                        </div>
                                    </div>
                                    <div class="cart">
                                        <input type="button" data-toggle="tooltip" title="" value="Agregar al carrito" data-loading-text="Loading..." id="button-cart" class="btn btn-mega btn-lg" onclick="cart.add('42', '1');" data-original-title="Agregar al carrito">
                                    </div>
                                    {{-- <div class="add-to-links wish_comp">
                                        <ul class="blank list-inline">
                                            <li class="wishlist">
                                                <a class="icon" data-toggle="tooltip" title=""
                                                onclick="wishlist.add('50');" data-original-title="Add to Wish List"><i class="fa fa-heart"></i>
                                                </a>
                                            </li>
                                            <li class="compare">
                                                <a class="icon" data-toggle="tooltip" title=""
                                                onclick="compare.add('50');" data-original-title="Compare this Product"><i class="fa fa-exchange"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div> --}}

                                </div>

                            </div>
                            <!-- end box info product -->

                        </div>

                    </div>
                </div>
                <!-- Product Tabs -->
                <div class="producttab ">
                    <div class="tabsslider  vertical-tabs col-xs-12">
                        <ul class="nav nav-tabs col-lg-2 col-sm-3">
                            <li class="active"><a data-toggle="tab" href="#tab-1">Descripción</a></li>
                            <li class="item_nonactive"><a data-toggle="tab" href="#tab-review">Opción</a></li>
                            <li class="item_nonactive"><a data-toggle="tab" href="#tab-4">Opción</a></li>
                            <li class="item_nonactive"><a data-toggle="tab" href="#tab-5">Opción </a></li>
                        </ul>
                        <div class="tab-content col-lg-10 col-sm-9 col-xs-12">
                            <div id="tab-1" class="tab-pane fade active in">
                                <p>{{$p[0]->Descripcion}}</p>


                            </div>
                            <div id="tab-review" class="tab-pane fade">
                                {{-- <form>
                                    <div id="review">
                                        <table class="table table-striped table-bordered">
                                            <tbody>
                                                <tr>
                                                    <td style="width: 50%;"><strong>Super Administrator</strong></td>
                                                    <td class="text-right">29/07/2015</td>
                                                </tr>
                                                <tr>
                                                    <td colspan="2">
                                                        <p>Best this product opencart</p>
                                                        <div class="ratings">
                                                            <div class="rating-box">
                                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
                                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
                                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
                                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
                                                                <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <div class="text-right"></div>
                                    </div>
                                    <h2 id="review-title">Write a review</h2>
                                    <div class="contacts-form">
                                        <div class="form-group"> <span class="icon icon-user"></span>
                                            <input type="text" name="name" class="form-control" value="Your Name" onblur="if (this.value == '') {this.value = 'Your Name';}" onfocus="if(this.value == 'Your Name') {this.value = '';}">
                                        </div>
                                        <div class="form-group"> <span class="icon icon-bubbles-2"></span>
                                            <textarea class="form-control" name="text" onblur="if (this.value == '') {this.value = 'Your Review';}" onfocus="if(this.value == 'Your Review') {this.value = '';}">Your Review</textarea>
                                        </div>
                                        <span style="font-size: 11px;"><span class="text-danger">Note:</span>                       HTML is not translated!</span>

                                        <div class="form-group">
                                         <b>Rating</b> <span>Bad</span>&nbsp;
                                        <input type="radio" name="rating" value="1"> &nbsp;
                                        <input type="radio" name="rating"
                                        value="2"> &nbsp;
                                        <input type="radio" name="rating"
                                        value="3"> &nbsp;
                                        <input type="radio" name="rating"
                                        value="4"> &nbsp;
                                        <input type="radio" name="rating"
                                        value="5"> &nbsp;<span>Good</span>

                                        </div>
                                        <div class="buttons clearfix"><a id="button-review" class="btn buttonGray">Continue</a></div>
                                    </div>
                                </form> --}}
                            </div>
                            <div id="tab-4" class="tab-pane fade">
                                {{-- <a href="#">Monitor</a>,
                                <a href="#">Apple</a> --}}
                            </div>
                            <div id="tab-5" class="tab-pane fade">

                            </div>
                        </div>
                    </div>
                </div>
                <!-- //Product Tabs -->

                <!-- Related Products -->
                <div class="related titleLine products-list grid module ">
                    <h3 class="modtitle">Productos relacionados </h3>

                    <div class="releate-products yt-content-slider products-list" data-rtl="no" data-loop="yes" data-autoplay="no" data-autoheight="no" data-autowidth="no" data-delay="4" data-speed="0.6" data-margin="30" data-items_column00="4" data-items_column0="4" data-items_column1="3" data-items_column2="2" data-items_column3="2" data-items_column4="1" data-arrows="yes" data-pagination="no" data-lazyload="yes" data-hoverpause="yes">
                        <div class="product-layout product-grid">
                            <div class="product-item-container item--static">
                                <div class="left-block">
                                    <div class="product-image-container second_img">
                                        <a href="#" target="_self" title="Volup tatem accu">
                                            <img src="http://www.abasleal.com/imagenes_productos/KP0800.jpg" class="img-1 img-responsive" alt="image1">
                                            <img src="http://www.abasleal.com/imagenes_productos/KP0800.jpg" class="img-2 img-responsive" alt="image2">
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
                                            <span>Comprar </span>
                                        </button>
                                        {{-- <button type="button" class="compare btn-button" title="Compare this Product " onclick="compare.add('60');"><i class="fa fa-refresh"></i></button> --}}
                                    </div>
                                    <h4><a href="product.html" title="Volup tatem accu" target="_self">Volup tatem accu</a></h4>
                                    {{-- <div class="rating">    <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                        <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                        <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                        <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                    </div> --}}
                                    <div class="price">
                                      <span class="price">$48.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-layout product-grid">
                            <div class="product-item-container item--static">
                                <div class="left-block">
                                    <div class="product-image-container second_img">
                                        <a href="#" target="_self" title="Volup tatem accu">
                                            <img src="http://www.abasleal.com/imagenes_productos/KP0800.jpg" class="img-1 img-responsive" alt="image1">
                                            <img src="http://www.abasleal.com/imagenes_productos/KP0800.jpg" class="img-2 img-responsive" alt="image2">
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
                                            <span>Comprar </span>
                                        </button>
                                        {{-- <button type="button" class="compare btn-button" title="Compare this Product " onclick="compare.add('60');"><i class="fa fa-refresh"></i></button> --}}
                                    </div>
                                    <h4><a href="product.html" title="Volup tatem accu" target="_self">Volup tatem accu</a></h4>
                                    {{-- <div class="rating">    <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                        <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                        <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                        <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                    </div> --}}
                                    <div class="price">
                                      <span class="price">$48.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="product-layout product-grid">
                            <div class="product-item-container item--static">
                                <div class="left-block">
                                    <div class="product-image-container second_img">
                                        <a href="#" target="_self" title="Volup tatem accu">
                                            <img src="http://www.abasleal.com/imagenes_productos/KP0800.jpg" class="img-1 img-responsive" alt="image1">
                                            <img src="http://www.abasleal.com/imagenes_productos/KP0800.jpg" class="img-2 img-responsive" alt="image2">
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
                                            <span>Comprar </span>
                                        </button>
                                        {{-- <button type="button" class="compare btn-button" title="Compare this Product " onclick="compare.add('60');"><i class="fa fa-refresh"></i></button> --}}
                                    </div>
                                    <h4><a href="product.html" title="Volup tatem accu" target="_self">Volup tatem accu</a></h4>
                                    {{-- <div class="rating">    <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                        <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                        <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                        <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                    </div> --}}
                                    <div class="price">
                                      <span class="price">$48.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="product-layout product-grid">
                            <div class="product-item-container item--static">
                                <div class="left-block">
                                    <div class="product-image-container second_img">
                                        <a href="#" target="_self" title="Volup tatem accu">
                                            <img src="http://www.abasleal.com/imagenes_productos/KP0800.jpg" class="img-1 img-responsive" alt="image1">
                                            <img src="http://www.abasleal.com/imagenes_productos/KP0800.jpg" class="img-2 img-responsive" alt="image2">
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
                                            <span>Comprar </span>
                                        </button>
                                        {{-- <button type="button" class="compare btn-button" title="Compare this Product " onclick="compare.add('60');"><i class="fa fa-refresh"></i></button> --}}
                                    </div>
                                    <h4><a href="product.html" title="Volup tatem accu" target="_self">Volup tatem accu</a></h4>
                                    {{-- <div class="rating">    <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                        <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                        <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                        <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                    </div> --}}
                                    <div class="price">
                                      <span class="price">$48.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="product-layout product-grid">
                            <div class="product-item-container item--static">
                                <div class="left-block">
                                    <div class="product-image-container second_img">
                                        <a href="#" target="_self" title="Volup tatem accu">
                                            <img src="http://www.abasleal.com/imagenes_productos/KP0800.jpg" class="img-1 img-responsive" alt="image1">
                                            <img src="http://www.abasleal.com/imagenes_productos/KP0800.jpg" class="img-2 img-responsive" alt="image2">
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
                                            <span>Comprar </span>
                                        </button>
                                        {{-- <button type="button" class="compare btn-button" title="Compare this Product " onclick="compare.add('60');"><i class="fa fa-refresh"></i></button> --}}
                                    </div>
                                    <h4><a href="product.html" title="Volup tatem accu" target="_self">Volup tatem accu</a></h4>
                                    {{-- <div class="rating">    <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                        <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                        <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                        <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                    </div> --}}
                                    <div class="price">
                                      <span class="price">$48.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>

                <!-- end Related  Products-->
            </div>






            </div>


        </div>
        <!--Middle Part End-->
    </div>
    <!-- //Main Container -->
@endsection
