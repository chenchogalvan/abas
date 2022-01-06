<div class="product-layout item-inner style1 ">
    <div class="item-image">
        <div class="item-img-info">
            <a href="{{ route('producto', $codigo) }}" target="_self" title="{{ $descripcion }}">
                <img src="{{ $imagen }}" onerror="this.onerror=null;this.src='/image/imagen.jpg';" alt="{{ $descripcion }}">
                </a>
        </div>

    </div>
    <div class="item-info">
        <div class="item-title">
            <a href="{{ route('producto', $codigo) }}" target="_self" title="{{ $descripcion }}">{{ $descripcion }}</a>
        </div>

        <div class="content_price price">
            <span class="price-new product-price">{{  }}</span>&nbsp;&nbsp;


        </div>
    </div>
    <!-- End item-info -->
    <!-- End item-wrap-inner -->
</div>

