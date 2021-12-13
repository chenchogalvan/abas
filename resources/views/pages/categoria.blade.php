@extends('index')

@section('content')

<div class="main-container container">
    <ul class="breadcrumb">
        <li><a href="#"><i class="fa fa-home"></i></a></li>
        <li><a href="#">#Nombre</a></li>
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
            <div class="products-category">
                <h3 class="title-category ">#Titulo</h3>
                <div class="category-desc">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="banners">
                                <div>
                                    <a  href="#"><img src="https://demo.smartaddons.com/templates/html/autoparts/image/catalog/demo/category/img-cate.jpg" alt="img cate"><br></a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- Filters -->
                <div class="product-filter product-filter-top filters-panel">
                    <div class="row">
                        <div class="col-md-5 col-sm-3 col-xs-12 view-mode">

                                <div class="list-view">
                                    <button class="btn btn-default grid active" data-view="grid" data-toggle="tooltip"  data-original-title="Grid"><i class="fa fa-th"></i></button>
                                    <button class="btn btn-default list" data-view="list" data-toggle="tooltip" data-original-title="List"><i class="fa fa-th-list"></i></button>
                                </div>

                        </div>
                        {{-- <div class="short-by-show form-inline text-right col-md-7 col-sm-9 col-xs-12">
                            <div class="form-group short-by">
                                <label class="control-label" for="input-sort">Sort By:</label>
                                <select id="input-sort" class="form-control"
                                onchange="location = this.value;">
                                    <option value="" selected="selected">Default</option>
                                    <option value="">Name (A - Z)</option>
                                    <option value="">Name (Z - A)</option>
                                    <option value="">Price (Low &gt; High)</option>
                                    <option value="">Price (High &gt; Low)</option>
                                    <option value="">Rating (Highest)</option>
                                    <option value="">Rating (Lowest)</option>
                                    <option value="">Model (A - Z)</option>
                                    <option value="">Model (Z - A)</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="input-limit">Show:</label>
                                <select id="input-limit" class="form-control" onchange="location = this.value;">
                                    <option value="" selected="selected">15</option>
                                    <option value="">25</option>
                                    <option value="">50</option>
                                    <option value="">75</option>
                                    <option value="">100</option>
                                </select>
                            </div>
                        </div> --}}
                        <!-- <div class="box-pagination col-md-3 col-sm-4 col-xs-12 text-right">
                            <ul class="pagination">
                                <li class="active"><span>1</span></li>
                                <li><a href="">2</a></li><li><a href="">&gt;</a></li>
                                <li><a href="">&gt;|</a></li>
                            </ul>
                        </div> -->
                    </div>
                </div>
                <!-- //end Filters -->

                <!--changed listings-->
                <div class="products-list row nopadding-xs so-filter-gird">

                    @foreach ($c as $r)


                    <div class="product-layout col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <div class="product-item-container item--static">
                            <div class="left-block">
                                <div class="product-image-container second_img">
                                    <a href="/producto/{{$r->Codigo}}" target="_self" title="{{$r->Descripcion}}">

                                        <img src="{{ $r->Imagen }}" class="img-1 img-responsive" alt="{{$r->Descripcion}}">
                                        <img src="{{ $r->Imagen }}" class="img-2 img-responsive" alt="{{$r->Descripcion}}">
                                    </a>
                                </div>
                                {{-- <span class="label-product label-new">New</span> --}}
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
                                <h4><a href="/producto/{{$r->Codigo}}" title="{{ $r->Descripcion }}" target="_self">{{ $r->Descripcion }}</a></h4>
                                {{-- <div class="rating">    <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                    <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                    <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                    <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                    <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                </div> --}}
                                <div class="price">
                                  <span class="price">$@convert($r->Precio)</span>
                                </div>
                                <div class="description item-desc">
                                    <p>{{$r->Descripcion}}</p>
                                </div>
                                <div class="list-block">
                                    <button class="addToCart btn-button" type="button" title="Add to Cart" onclick="cart.add('101', '1');"><i class="fa fa-shopping-basket"></i> Agregar al carrito
                                    </button>
                                    {{-- <button class="wishlist btn-button" type="button" title="Add to Wish List" onclick="wishlist.add('101');"><i class="fa fa-heart"></i>
                                    </button>
                                    <button class="compare btn-button" type="button" title="Compare this Product" onclick="compare.add('101');"><i class="fa fa-refresh"></i>
                                    </button> --}}
                                    <!--quickview-->
                                    {{-- <a class="iframe-link btn-button quickview quickview_handler visible-lg" href="quickview.html" title="Quick view" data-fancybox-type="iframe"><i class="fa fa-eye"></i></a> --}}
                                    <!--end quickview-->
                                </div>
                            </div>
                        </div>
                    </div>

                    @endforeach



                </div>
                <!--// End Changed listings-->
                <!-- Filters -->
                <div class="product-filter product-filter-bottom filters-panel">
                    <div class="row">
                        <div class="col-sm-6 text-left"></div>
                        <div class="col-sm-6 text-right">mostrando 1 de 12  (1 Pagina) {{ $c->links() }}</div>
                    </div>
                </div>
                <!-- //end Filters -->

            </div>

        </div>


        <!--Middle Part End-->
    </div>
</div>

@endsection

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
<script type="text/javascript" src="/js/themejs/so_megamenu.js"></script>
<script type="text/javascript" src="/js/themejs/addtocart.js"></script>
<script type="text/javascript" src="/js/themejs/application.js"></script>
<script type="text/javascript">
// Check if Cookie exists
    if($.cookie('display')){
        view = $.cookie('display');
    }else{
        view = 'grid';
    }
    if(view) display(view);
//--></script>
@endpush

