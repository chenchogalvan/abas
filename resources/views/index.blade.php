
<!DOCTYPE html>
<html lang="en">
<head>

    <!-- Basic page needs
    ============================================ -->
    <title>Abastecedora Leal</title>
    <meta charset="utf-8">
    <meta name="keywords" content="html5 template, best html5 template, best html template, html5 basic template, multipurpose html5 template, multipurpose html template, creative html templates, creative html5 templates" />
    <meta name="description" content="SuperMarket is a powerful Multi-purpose HTML5 Template with clean and user friendly design. It is definite a great starter for any eCommerce web project." />
    <meta name="author" content="Magentech">
    <meta name="robots" content="index, follow" />

    <!-- Mobile specific metas
    ============================================ -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <!-- Favicon
    ============================================ -->


      <!-- Libs CSS
    ============================================ -->
    <link rel="stylesheet" href="/css/bootstrap/css/bootstrap.min.css">
    <link href="/css/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="/js/datetimepicker/bootstrap-datetimepicker.min.css" rel="stylesheet">
    <link href="/js/owl-carousel/owl.carousel.css" rel="stylesheet">
    <link href="/css/themecss/lib.css" rel="stylesheet">
    <link href="/js/jquery-ui/jquery-ui.min.css" rel="stylesheet">
    <link href="/js/minicolors/miniColors.css" rel="stylesheet">

    <link href="/js/pe-icon-7-stroke/css/pe-icon-7-stroke.css" rel="stylesheet">
    <link href="/pe-icon-7-stroke/css/helper.css" rel="stylesheet">

    <!-- Theme CSS
    ============================================ -->

    @stack('css')


    <link href="/css/responsive.css" rel="stylesheet">

     <!-- Google web fonts
    ============================================ -->
    <link href='https://fonts.googleapis.com/css?family=Rubik:300,400,400i,500,600,700' rel='stylesheet' type='text/css'>
    <style type="text/css">
         body{font-family:'Rubik', sans-serif;}
    </style>

</head>

<body class='@if (Request::is("/")) common-home res layout-6 @else res layout-1 listing-page @endif '>

    <div id="wrapper" class="wrapper-fluid banners-effect-5">

@if (Request::is('/'))
    @include('resources.menu')

@else
    @include('resources.menu2')
@endif




<!-- Main Container  -->
<div class="main-container">
    <div id="content">
        @yield('content')

    </div>
</div>
<!-- //Main Container -->





    </div>


<!-- End Color Scheme
============================================ -->



<!-- Include Libs & Plugins
============================================ -->
<!-- Placed at the end of the document so the pages load faster -->
<script type="text/javascript" src="/js/jquery-2.2.4.min.js"></script>
<script type="text/javascript" src="/js/bootstrap.min.js"></script>
<script type="text/javascript" src="/js/owl-carousel/owl.carousel.js"></script>
<script type="text/javascript" src="/js/slick-slider/slick.js"></script>
<script type="text/javascript" src="/js/themejs/libs.js"></script>
<script type="text/javascript" src="/js/unveil/jquery.unveil.js"></script>
<script type="text/javascript" src="/js/countdown/jquery.countdown.min.js"></script>
<script type="text/javascript" src="/js/dcjqaccordion/jquery.dcjqaccordion.2.8.min.js"></script>
<script type="text/javascript" src="/js/datetimepicker/moment.js"></script>
<script type="text/javascript" src="/js/datetimepicker/bootstrap-datetimepicker.min.js"></script>
<script type="text/javascript" src="/js/jquery-ui/jquery-ui.min.js"></script>
<script type="text/javascript" src="/js/modernizr/modernizr-2.6.2.min.js"></script>
<script type="text/javascript" src="/js/minicolors/jquery.miniColors.min.js"></script>

<script type="text/javascript" src="/js/lightslider/lightslider.js"></script>


<script src="/js/carrito.js"></script>

<!-- Theme files
============================================ -->



@stack('js')


</body>
</html>
