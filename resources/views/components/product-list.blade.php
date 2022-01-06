<div class="product-layout col-lg-4 col-md-4 col-sm-6 col-xs-12">
    <div class="product-item-container item--static">
        <div class="left-block">
            <div class="product-image-container second_img">
                <a href="/producto/{{ $Codigo }}" target="_self" title="{{ $Descripcion }}">

                    <img src="{{ $Imagen }}" onerror="this.onerror=null;this.src='/image/imagen.jpg';"
                        class="img-1 img-responsive" alt="{{ $Descripcion }}">
                    <img src="{{ $Imagen }}" onerror="this.onerror=null;this.src='/image/imagen.jpg';"
                        class="img-2 img-responsive" alt="{{ $Descripcion }}">
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
                <button type="button" class="addToCart" title="Add to cart">
                    <span>Comprar </span>
                </button>
                {{-- <button type="button" class="compare btn-button" title="Compare this Product " onclick="compare.add('60');"><i class="fa fa-refresh"></i></button> --}}
            </div>
            <h4><a href="/producto/{{ $Codigo }}" title="{{ $Descripcion }}"
                    target="_self">{{ $Descripcion }}</a></h4>
            {{-- <div class="rating">    <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
            </div> --}}
            <div class="price">
                <span class="price">$@convert($Precio)</span>
            </div>
            <div class="description item-desc">
                <p>{{ $Descripcion }}</p>
            </div>
            <div class="list-block">
                <button class="addToCart btn-button" type="button" title="Add to Cart"><i
                        class="fa fa-shopping-basket"></i> Agregar al carrito
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
