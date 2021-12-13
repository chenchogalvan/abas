@extends('index')

@push('css')
    <!-- Theme CSS
    ============================================ -->
    <link href="css/themecss/so_searchpro.css" rel="stylesheet">
    <link href="css/themecss/so_megamenu.css" rel="stylesheet">
    <link href="css/themecss/so_advanced_search.css" rel="stylesheet">
    <link href="css/themecss/so-listing-tabs.css" rel="stylesheet">
    <link href="css/themecss/so-categories.css" rel="stylesheet">
    <link href="css/themecss/so-newletter-popup.css" rel="stylesheet">
    <link href="css/themecss/so-latest-blog.css" rel="stylesheet">

    <link href="css/footer/footer1.css" rel="stylesheet">
    <link href="css/header/header1.css" rel="stylesheet">
    <link id="color_scheme" href="css/theme.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">

     <!-- Google web fonts
    ============================================ -->
    <link href='https://fonts.googleapis.com/css?family=Rubik:300,400,400i,500,600,700' rel='stylesheet' type='text/css'>
    <style type="text/css">
         body{font-family:'Rubik', sans-serif;}
    </style>
@endpush

@section('content')
<div class="main-container container">
    <ul class="breadcrumb">
        <li><a href="#"><i class="fa fa-home"></i></a></li>
        <li><a href="#">Cuenta</a></li>
        <li><a href="#">Registro</a></li>
    </ul>

    <div class="row">
        <div id="content" class="col-sm-12">
            <h2 class="title">Registro</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            <form action="{{ route('guardarDatos') }}" method="post" enctype="multipart/form-data" class="form-horizontal account-register clearfix">
                @csrf
                <fieldset id="account">
                    <legend>Información personal</legend>
                    <div class="form-group required" style="display: none;">
                        <label class="col-sm-2 control-label">Customer Group</label>
                        <div class="col-sm-10">
                            <div class="radio">
                                <label>
                                    <input type="radio" name="customer_group_id" value="1" checked="checked"> Default
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group required">
                        <label class="col-sm-2 control-label" for="input-firstname">Nombre</label>
                        <div class="col-sm-10">
                            <input type="text" name="firstname" value="" placeholder="First Name" id="input-firstname" class="form-control">
                        </div>
                    </div>
                    <div class="form-group required">
                        <label class="col-sm-2 control-label" for="input-lastname">Apellidos</label>
                        <div class="col-sm-10">
                            <input type="text" name="lastname" value="" placeholder="Last Name" id="input-lastname" class="form-control">
                        </div>
                    </div>
                    <div class="form-group required">
                        <label class="col-sm-2 control-label" for="input-email">E-Mail</label>
                        <div class="col-sm-10">
                            <input type="email" name="email" value="" placeholder="E-Mail" id="input-email" class="form-control">
                        </div>
                    </div>
                    <div class="form-group required">
                        <label class="col-sm-2 control-label" for="input-telephone">Telefóno</label>
                        <div class="col-sm-10">
                            <input type="tel" name="telephone" value="" placeholder="Telephone" id="input-telephone" class="form-control">
                        </div>
                    </div>

                </fieldset>
                <fieldset>
                    <legend>Faccturación</legend>
                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="input-razon_social">Razon social</label>
                        <div class="col-sm-10">
                            <input type="text" name="razon_social" value="" placeholder="" id="input-razon_social" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="input-RFC">RFC</label>
                        <div class="col-sm-10">
                            <input type="text" name="RFC" value="" placeholder="RFC" id="input-RFC" class="form-control">
                        </div>
                    </div>
                    <input type="hidden" name="formaPago" value="28">
                    <input type="hidden" name="usoCFDI" value="G01">
                </fieldset>
                <fieldset id="address">
                    <legend>Dirección</legend>
                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="input-calle">Calle</label>
                        <div class="col-sm-10">
                            <input type="text" name="calle" value="" placeholder="Aventurita" id="input-calle" class="form-control">
                        </div>
                    </div>
                    <div class="form-group required">
                        <label class="col-sm-2 control-label" for="input-numero">Numero ext.</label>
                        <div class="col-sm-10">
                            <input type="text" name="numero" value="" placeholder="789" id="input-numero" class="form-control">
                        </div>
                    </div>
                    <div class="form-group required">
                        <label class="col-sm-2 control-label" for="input-numero-int">Numero int.</label>
                        <div class="col-sm-10">
                            <input type="text" name="numero_int" value="" placeholder="789" id="input-numero-int" class="form-control">
                        </div>
                    </div>
                    {{-- <div class="form-group">
                        <label class="col-sm-2 control-label" for="input-address-2">Address 2</label>
                        <div class="col-sm-10">
                            <input type="text" name="address_2" value="" placeholder="Address 2" id="input-address-2" class="form-control">
                        </div>
                    </div> --}}
                    <div class="form-group required">
                        <label class="col-sm-2 control-label" for="input-colonia">Colonia</label>
                        <div class="col-sm-10">
                            <input type="text" name="colonia" value="" placeholder="Melchor Ocampo" id="input-colonia" class="form-control">
                        </div>
                    </div>
                    <div class="form-group required">
                        <label class="col-sm-2 control-label" for="input-ciudad">cCudad</label>
                        <div class="col-sm-10">
                            <input type="text" name="ciudad" value="" placeholder="Santa Catarina" id="input-ciudad" class="form-control">
                        </div>
                    </div>
                    <div class="form-group required">
                        <label class="col-sm-2 control-label" for="input-country">Estado</label>
                        <div class="col-sm-10">
                            <select name="country_id" id="input-country" class="form-control">
                                <option value=""> --- Selecciona una opción --- </option>
                                <option value="244">Aaland Islands</option>
                                <option value="1">Afghanistan</option>
                                <option value="2">Albania</option>
                                <option value="3">Algeria</option>
                                <option value="4">American Samoa</option>
                                <option value="5">Andorra</option>
                                <option value="6">Angola</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group required">
                        <label class="col-sm-2 control-label" for="input-postcode">Codigo Postal</label>
                        <div class="col-sm-10">
                            <input type="text" name="postcode" value="" placeholder="Post Code" id="input-postcode" class="form-control">
                        </div>
                    </div>


                </fieldset>
                <fieldset>
                    <legend>Contraseña</legend>
                    <div class="form-group required">
                        <label class="col-sm-2 control-label" for="input-password">Contraseña</label>
                        <div class="col-sm-10">
                            <input type="password" name="password" value="" placeholder="Password" id="input-password" class="form-control">
                        </div>
                    </div>
                    <div class="form-group required">
                        <label class="col-sm-2 control-label" for="input-confirm">Confirmar contraseña</label>
                        <div class="col-sm-10">
                            <input type="password" name="confirm" value="" placeholder="Password Confirm" id="input-confirm" class="form-control">
                        </div>
                    </div>
                </fieldset>
                {{-- <fieldset>
                    <legend>Newsletter</legend>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Subscribe</label>
                        <div class="col-sm-10">
                            <label class="radio-inline">
                                <input type="radio" name="newsletter" value="1"> Yes
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="newsletter" value="0" checked="checked"> No
                            </label>
                        </div>
                    </div>
                </fieldset> --}}
                <div class="buttons">
                    <div class="pull-right">Estoy de acuerdo con los  <a href="#" class="agree"><b>Terminos y condiciones</b></a>
                        <input class="box-checkbox" onchange="document.getElementById('btnEnviar').disabled = !this.checked;" type="checkbox" name="agree" id="terminos"> &nbsp;
                        <input type="submit" value="Registrar" id="btnEnviar" class="btn btn-primary" disabled>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- //Main Container -->
@endsection


@push('js')

@endpush
