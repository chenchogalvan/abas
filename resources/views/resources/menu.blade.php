
<!-- Header Container  -->
<header id="header" class="typeheader-6">

    <!-- Header Top -->
    <div class="header-top hidden-compact">
        <div class="container">
            <div class="row">
                <div class="header-top-left col-lg-3 col-md-4 hidden-sm hidden-xs">
                    <div class="telephone ">
                        <ul class="socials">
                         <li class="twitter"><a href="#" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                         <li class="facebook"><a href="#" target="_blank"><i class="fa fa-facebook"></i></a></li>
                         <li class="twitter"><a href="#" target="_blank"><i class="fa fa-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="header-top-right col-lg-9 col-md-8 col-sm-12 col-xs-12">

                    <ul class="top-log list-inline">
                        <li><i class="fa fa-lock"></i><a href="#">Login</a> / </li><li><a href="#">Registro</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="header-bottom hidden-compact">
        <div class="container">
            <div class="row">
                <div class="logo-w col-lg-3 col-md-3 col-sm-4 col-xs-6">
                    <div class="logo">
                        <a href="#"><img src="https://www.abasleal.com/img/logo_450.png" title="Your Store" alt="Your Store" /></a>
                    </div>
                </div>
                <div class="col-lg-9 col-md-9 col-sm-8 col-xs-6 middle-right">
                    <div class="main-menu-w">
                        <div class="responsive so-megamenu megamenu-style-dev">
                            <nav class="navbar-default">
                                <div class=" container-megamenu  horizontal open ">
                                    <div class="navbar-header">
                                        <button type="button" id="show-megamenu" data-toggle="collapse" class="navbar-toggle">
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                        </button>
                                    </div>

                                    <div class="megamenu-wrapper">
                                        <span id="remove-megamenu" class="fa fa-times"></span>
                                        <div class="megamenu-pattern">
                                            <div class="container-mega">
                                                <ul class="megamenu" data-transition="slide" data-animationtime="250">
                                                    <li class="home">
                                                        <a href="#">Inicio</a>

                                                    </li>
                                                    <li class="with-sub-menu">
                                                        <p class="close-menu"></p>
                                                        <a href="{{ route('categorias') }}" class="clearfix">
                                                            <strong>Categorias</strong>
                                                            <b class="caret"></b>
                                                        </a>
                                                    </li>
                                                    <li class="with-sub-menu">
                                                        <p class="close-menu"></p>
                                                        <a href="#" class="clearfix">
                                                            <strong>Accesorios</strong>
                                                            <b class="caret"></b>
                                                        </a>
                                                    </li>
                                                    <li class="with-sub-menu">
                                                        <p class="close-menu"></p>
                                                        <a href="#" class="clearfix">
                                                            <strong>Nosotros</strong>

                                                            <b class="caret"></b>
                                                        </a>
                                                    </li>

                                                    <li class="">
                                                        <p class="close-menu"></p>
                                                        <a href="#" class="clearfix">
                                                            <strong>Contacto</strong>

                                                        </a>

                                                    </li>
                                                    {{-- <li class="">
                                                        <p class="close-menu"></p>
                                                        <a href="#" class="clearfix">
                                                            <strong>Blog</strong>
                                                            <span class="label"></span>
                                                        </a>
                                                    </li> --}}


                                                </ul>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </nav>
                        </div>
                    </div>
                    <div class="shopping_cart">
                        <div id="cart" class="btn-shopping-cart">
                            <a href="javascript:void(0)" data-loading-text="Loading... " class="btn-group top_cart dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
                                <div class="shopcart">
                                    <span class="icon-c">
                                        <i class="fa fa-shopping-cart"></i>
                                    </span>
                                    <div class="shopcart-inner">
                                        <p class="text-shopping-cart">
                                            Mi Carrito
                                        </p>

                                        <span class="total-shopping-cart cart-total-full">
                                        <span class="items_cart">02</span><span class="items_cart2"> item(s)</span><span class="items_carts">$162.00</span>
                                        </span>
                                    </div>
                                </div>
                            </a>

                            <ul class="dropdown-menu pull-right shoppingcart-box" role="menu">
                                <li>
                                    <table class="table table-striped">
                                        <tbody>
                                            <tr>
                                                <td class="text-center" style="width:70px">
                                                    <a href="product.html">
                                                        <img src="image/catalog/demo/product/80/1.jpg" style="width:70px" alt="Producton" title="Producto" class="preview">
                                                    </a>
                                                </td>
                                                <td class="text-left"> <a class="cart_product_name" href="product.html">Producto</a>
                                                </td>
                                                <td class="text-center">x1</td>
                                                <td class="text-center">$80.00</td>
                                                <td class="text-right">
                                                    <a href="product.html" class="fa fa-edit"></a>
                                                </td>
                                                <td class="text-right">
                                                    <a onclick="cart.remove('2');" class="fa fa-times fa-delete"></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-center" style="width:70px">
                                                    <a href="product.html">
                                                        <img src="image/catalog/demo/product/80/2.jpg" style="width:70px" alt="Producto" title="Producto" class="preview">
                                                    </a>
                                                </td>
                                                <td class="text-left"> <a class="cart_product_name" href="product.html">Producto</a>
                                                </td>
                                                <td class="text-center">x1</td>
                                                <td class="text-center">$60.00</td>
                                                <td class="text-right">
                                                    <a href="product.html" class="fa fa-edit"></a>
                                                </td>
                                                <td class="text-right">
                                                    <a onclick="cart.remove('1');" class="fa fa-times fa-delete"></a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </li>
                                <li>
                                    <div>
                                        <table class="table table-bordered">
                                            <tbody>
                                                <tr>
                                                    <td class="text-left"><strong>Sub-Total</strong>
                                                    </td>
                                                    <td class="text-right">$140.00</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-left"><strong>IVA (16%)</strong>
                                                    </td>
                                                    <td class="text-right">$20.00</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-left"><strong>Total</strong>
                                                    </td>
                                                    <td class="text-right">$162.00</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <p class="text-right"> <a class="btn view-cart" href="{{ route('carrito') }}"><i class="fa fa-shopping-cart"></i>Ver carrito</a>&nbsp;&nbsp;&nbsp; <a class="btn btn-mega checkout-cart" href="{{ route('checkout') }}"><i class="fa fa-share"></i>Pagar</a>
                                        </p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</header>
<!-- //Header Container  -->
