@extends('index')


@section('content')

<!-- Main Container  -->
<div class="main-container container">
    <ul class="breadcrumb">
        <li><a href="#"><i class="fa fa-home"></i></a></li>
        <li><a href="#">Carrito de compra</a></li>
    </ul>

    <div class="row">
        <!--Middle Part Start-->
        <div id="content" class="col-sm-12">
            <h2 class="title">Carrito de compra</h2>
            <div class="table-responsive form-group">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <td class="text-center">Imagen</td>
                            <td class="text-left">Nombre</td>
                            <td class="text-left">Codigo</td>
                            <td class="text-left">Cantidad</td>
                            <td class="text-right">Precio</td>
                            <td class="text-right">Total</td>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($r as $r)
                        <tr>
                            <td class="text-center">
                                <a href="#"><img width="70px" src="{{ $r->imagen }}" alt="{{ $r->nombre }}" title="{{ $r->nombre }}" class="img-thumbnail" /></a>
                            </td>
                            <td class="text-left"><a href="#">{{ $r->nombre }}</a><br />
                            </td>
                            <td class="text-left">{{ $r->codigoProd }}</td>
                            <td class="text-left" width="200px">
                                1
                                {{-- <div class="input-group btn-block quantity">
                                    <input type="text" name="quantity" value="1" size="1" class="form-control" />
                                    <span class="input-group-btn">
                                <button type="submit" data-toggle="tooltip" title="Update" class="btn btn-primary"><i class="fa fa-clone"></i></button>
                                <button type="button" data-toggle="tooltip" title="Remove" class="btn btn-danger" onClick=""><i class="fa fa-times-circle"></i></button>
                                </span></div> --}}
                            </td>
                            <td class="text-right">{{ $r->precio }}</td>
                            <td class="text-right">{{ $r->precio }}</td>
                        </tr>

                        @endforeach


                    </tbody>
                </table>
            </div>
            {{-- <h3 class="subtitle no-margin">What would you like to do next?</h3>
            <p>Choose if you have a discount code or reward points you want to use or would like to estimate your delivery cost.</p> --}}
            <div class="panel-group" id="accordion">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a href="#collapse-coupon" class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" aria-expanded="true">Cupones de descuento

                    <i class="fa fa-caret-down"></i>
                </a>
                        </h4>
                    </div>
                    <div id="collapse-coupon" class="panel-collapse collapse in" aria-expanded="true">
                        <div class="panel-body">
                            <label class="col-sm-2 control-label" for="input-coupon">Ingresa tu cupon aquí</label>
                            <div class="input-group">
                                <input type="text" name="coupon" value="" placeholder="" id="input-coupon" class="form-control">
                                <span class="input-group-btn"><input type="button" value="Aplicar cupon" id="button-coupon" data-loading-text="Loading..." class="btn btn-primary"></span>
                            </div>
                        </div>
                    </div>
                </div>


            </div>

            <div class="row">
                <div class="col-sm-4 col-sm-offset-8">
                    <table class="table table-bordered">
                        <tbody>
                            <tr>
                                <td class="text-right">
                                    <strong>Sub-Total:</strong>
                                </td>
                                <td class="text-right">$168.71</td>
                            </tr>
                            {{-- <tr>
                                <td class="text-right">
                                    <strong>Flat Shipping Rate:</strong>
                                </td>
                                <td class="text-right">$4.69</td>
                            </tr> --}}
                            <tr>
                                <td class="text-right">
                                    <strong>IVA (-2.00):</strong>
                                </td>
                                <td class="text-right">$5.62</td>
                            </tr>
                            {{-- <tr>
                                <td class="text-right">
                                    <strong>VAT (20%):</strong>
                                </td>
                                <td class="text-right">$34.68</td>
                            </tr> --}}
                            <tr>
                                <td class="text-right">
                                    <strong>Total:</strong>
                                </td>
                                <td class="text-right">$213.70</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="buttons">
                <div class="pull-left"><a href="{{ route('productos') }}" class="btn btn-primary">Continuar comprando</a></div>
                <div class="pull-right"><a href="{{ route('checkout') }}" class="btn btn-primary">Checkout</a></div>
            </div>
        </div>
        <!--Middle Part End -->

    </div>
</div>
<!-- //Main Container -->

@endsection


@push('css')
<link href="css/themecss/so_searchpro.css" rel="stylesheet">
<link href="css/themecss/so_megamenu.css" rel="stylesheet">
<link href="css/themecss/so_advanced_search.css" rel="stylesheet">
<link href="css/themecss/so-listing-tabs.css" rel="stylesheet">
<link href="css/themecss/so-categories.css" rel="stylesheet">
<link href="css/themecss/so-newletter-popup.css" rel="stylesheet">
<link href="css/themecss/so-latest-blog.css" rel="stylesheet">

<link href="/css/footer/footer1.css" rel="stylesheet">
<link href="/css/header/header1.css" rel="stylesheet">
<link id="color_scheme" href="/css/theme.css" rel="stylesheet">
<link href="/css/responsive.css" rel="stylesheet">

<link href="js/lightslider/lightslider.css" rel="stylesheet">
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
    <script type="text/javascript" src="js/themejs/homepage.js"></script>

    <script type="text/javascript" src="js/themejs/so_megamenu.js"></script>
    <script type="text/javascript" src="js/themejs/addtocart.js"></script>
    <script type="text/javascript" src="js/themejs/application.js"></script>
<!--         -->
@endpush
