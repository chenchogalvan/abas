@extends('index')


@section('content')

    <div class="main-container container">
        <ul class="breadcrumb">
            <li><a href="#"><i class="fa fa-home"></i></a></li>
            <li><a href="#">Checkout</a></li>

        </ul>

        <div class="row">
            <!--Middle Part Start-->
            <div id="content" class="col-sm-12">
                <h2 class="title">Checkout</h2>
                <div class="so-onepagecheckout row">
                    <div class="col-left col-sm-3">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title"><i class="fa fa-sign-in"></i> Crea una cuenta o inicia sesión</h4>
                            </div>
                            <div class="panel-body">
                                <div class="radio">
                                    <label>
                                        <input type="radio" id="input-registro" value="register" name="account">
                                        Registrate</label>
                                </div>
                                <div class="radio">
                                    <label>
                                        <input type="radio" id="input-login" value="returning" name="account" checked>
                                        Inicia sesión</label>
                                </div>
                            </div>
                        </div>

                        <div id="registro" style="display: none;">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title"><i class="fa fa-user"></i> Your Personal Details</h4>
                                </div>
                                <div class="panel-body">
                                    <fieldset id="account">
                                        <div class="form-group required">
                                            <label for="input-payment-firstname" class="control-label">First Name</label>
                                            <input type="text" class="form-control" id="input-payment-firstname"
                                                placeholder="First Name" value="" name="firstname">
                                        </div>
                                        <div class="form-group required">
                                            <label for="input-payment-lastname" class="control-label">Last Name</label>
                                            <input type="text" class="form-control" id="input-payment-lastname"
                                                placeholder="Last Name" value="" name="lastname">
                                        </div>
                                        <div class="form-group required">
                                            <label for="input-payment-email" class="control-label">E-Mail</label>
                                            <input type="text" class="form-control" id="input-payment-email"
                                                placeholder="E-Mail" value="" name="email">
                                        </div>
                                        <div class="form-group required">
                                            <label for="input-payment-telephone" class="control-label">Telephone</label>
                                            <input type="text" class="form-control" id="input-payment-telephone"
                                                placeholder="Telephone" value="" name="telephone">
                                        </div>
                                        <div class="form-group">
                                            <label for="input-payment-fax" class="control-label">Fax</label>
                                            <input type="text" class="form-control" id="input-payment-fax" placeholder="Fax"
                                                value="" name="fax">
                                        </div>
                                    </fieldset>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title"><i class="fa fa-book"></i> Your Address</h4>
                                </div>
                                <div class="panel-body">
                                    <fieldset id="address" class="required">
                                        <div class="form-group">
                                            <label for="input-payment-company" class="control-label">Company</label>
                                            <input type="text" class="form-control" id="input-payment-company"
                                                placeholder="Company" value="" name="company">
                                        </div>
                                        <div class="form-group required">
                                            <label for="input-payment-address-1" class="control-label">Address 1</label>
                                            <input type="text" class="form-control" id="input-payment-address-1"
                                                placeholder="Address 1" value="" name="address_1">
                                        </div>
                                        <div class="form-group">
                                            <label for="input-payment-address-2" class="control-label">Address 2</label>
                                            <input type="text" class="form-control" id="input-payment-address-2"
                                                placeholder="Address 2" value="" name="address_2">
                                        </div>
                                        <div class="form-group required">
                                            <label for="input-payment-city" class="control-label">City</label>
                                            <input type="text" class="form-control" id="input-payment-city" placeholder="City"
                                                value="" name="city">
                                        </div>
                                        <div class="form-group required">
                                            <label for="input-payment-postcode" class="control-label">Post Code</label>
                                            <input type="text" class="form-control" id="input-payment-postcode"
                                                placeholder="Post Code" value="" name="postcode">
                                        </div>
                                        <div class="form-group required">
                                            <label for="input-payment-country" class="control-label">Country</label>
                                            <select class="form-control" id="input-payment-country" name="country_id">
                                                <option value=""> --- Please Select --- </option>
                                                <option value="244">Aaland Islands</option>
                                                <option value="1">Afghanistan</option>
                                                <option value="2">Albania</option>
                                                <option value="3">Algeria</option>
                                                <option value="4">American Samoa</option>
                                                <option value="5">Andorra</option>
                                                <option value="6">Angola</option>
                                                <option value="7">Anguilla</option>
                                                <option value="8">Antarctica</option>
                                                <option value="9">Antigua and Barbuda</option>
                                                <option value="10">Argentina</option>
                                                <option value="11">Armenia</option>
                                                <option value="12">Aruba</option>
                                                <option value="252">Ascension Island (British)</option>
                                                <option value="13">Australia</option>
                                                <option value="14">Austria</option>
                                                <option value="15">Azerbaijan</option>
                                                <option value="16">Bahamas</option>
                                                <option value="17">Bahrain</option>

                                            </select>
                                        </div>
                                        <div class="form-group required">
                                            <label for="input-payment-zone" class="control-label">Region / State</label>
                                            <select class="form-control" id="input-payment-zone" name="zone_id">
                                                <option value=""> --- Please Select --- </option>
                                                <option value="3513">Aberdeen</option>
                                                <option value="3514">Aberdeenshire</option>
                                                <option value="3515">Anglesey</option>
                                                <option value="3516">Angus</option>
                                                <option value="3517">Argyll and Bute</option>
                                                <option value="3518">Bedfordshire</option>
                                                <option value="3519">Berkshire</option>
                                                <option value="3520">Blaenau Gwent</option>
                                                <option value="3521">Bridgend</option>
                                                <option value="3522">Bristol</option>

                                            </select>
                                        </div>
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" checked="checked" value="1" name="shipping_address">
                                                My delivery and billing addresses are the same.</label>
                                        </div>
                                    </fieldset>
                                </div>
                            </div>
                        </div>

                        <div id="login" >
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title"><i class="fa fa-user"></i> Inicio de sesión</h4>
                                </div>
                                <div class="panel-body">
                                    <fieldset id="account">

                                        <div class="form-group required">
                                            <label for="input-payment-email" class="control-label">E-Mail</label>
                                            <input type="text" class="form-control" id="input-payment-email"
                                                placeholder="E-Mail" value="" name="email">
                                        </div>
                                        <div class="form-group">
                                            <label for="input-payment-password" class="control-label">password</label>
                                            <input type="text" class="form-control" id="input-payment-password" placeholder="password"
                                                value="" name="password">
                                        </div>
                                    </fieldset>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-right col-sm-9">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="panel panel-default no-padding">
                                    <div class="col-sm-6 checkout-shipping-methods">
                                        <div class="panel-heading">
                                            <h4 class="panel-title"><i class="fa fa-truck"></i> Métodos de envío</h4>
                                        </div>
                                        <div class="panel-body ">
                                            <p>Selecciona el método de envío que más te agrade.</p>
                                            <div class="radio">
                                                <label>
                                    <input type="radio" id="metodoLocal" checked="checked" name="metodoEnvio" value="local">
                                    Recoger en tienda - $0.00</label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                    <input type="radio" id="metodoPaqueteria" name="metodoEnvio" value="envio">
                                    Envío por paquetería - $250</label>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-sm-6  checkout-payment-methods">
                                        <div class="panel-heading">
                                            <h4 class="panel-title"><i class="fa fa-credit-card"></i> Métodos de pago</h4>
                                        </div>
                                        <div class="panel-body">
                                            <p>Selecciona el metodo de pago que más te guste.</p>
                                            <div class="radio">
                                                <label>
                                    <input type="radio" checked="checked" name="metodoPago">Pagar en tienda</label>
                                            </div>

                                            <div class="radio">
                                                <label>
                                                <input type="radio" name="metodoPago">Mercado pago</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>



                            </div>




                            <div class="col-sm-12">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title"><i class="fa fa-shopping-cart"></i> Carrito de compras</h4>
                                    </div>
                                    <div class="panel-body">
                                        <div class="table-responsive">
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
                                                <tfoot>
                                                    <tr>
                                                        <td class="text-right" colspan="5"><strong>Sub-Total:</strong></td>
                                                        <td class="text-right">$93.73</td>
                                                    </tr>
                                                    <tr id="envioPrecio" style="display: none;">
                                                        <td class="text-right" colspan="5"><strong>Costo de envío:</strong></td>
                                                        <td class="text-right">$250.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-right" colspan="5"><strong>IVA (16%):</strong></td>
                                                        <td class="text-right">$250.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-right" colspan="5"><strong>Total:</strong></td>
                                                        <td class="text-right">$1210.85</td>
                                                    </tr>
                                                </tfoot>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title"><i class="fa fa-pencil"></i> Agrega un comentario a tu orden (Opcional)</h4>
                                    </div>
                                    <div class="panel-body">
                                        <textarea rows="4" class="form-control" id="confirm_comment" name="comments"></textarea>
                                        <br>
                                        {{-- <label class="control-label" for="confirm_agree">
                                            <input type="checkbox" checked="checked" value="1" required="" class="validate required" id="confirm_agree" name="confirm agree">
                                            <span>I have read and agree to the <a class="agree" href="#"><b>Terms &amp; Conditions</b></a></span>
                                        </label> --}}
                                        <div class="buttons">
                                            <div class="pull-right">
                                                {{-- <input type="button" class="btn btn-primary" id="button-confirm" value="Confirmar orden"> --}}
                                                <a href="{{ route('pago') }}" class="btn btn-primary" id="button-confirm">Confirmar orden</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
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
        body {
            font-family: 'Rubik', sans-serif;
        }

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


    <script>
        // ==============================================================


        $('#input-login').on("click", function() {
            $("#registro").slideUp();
            $("#login").fadeIn();
        });

        $('#input-registro').on("click", function() {
            $("#login").slideUp();
            $("#registro").fadeIn();
        });


        $('#metodoLocal').on("click", function() {
            $("#envioPrecio").fadeOut();
        });

        $('#metodoPaqueteria').on("click", function() {
            $("#envioPrecio").fadeIn();
        });



    </script>
@endpush
