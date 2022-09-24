<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
 <!--font-family-->
 <!-- Fonts START -->
 <link href="{{ asset('http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700|PT+Sans+Narrow|Source+Sans+Pro:200,300,400,600,700,900&amp;subset=all') }}" rel="stylesheet" type="text/css"> 
 <!-- Fonts END -->

 <!-- Global styles START -->          
 <link href="{{ asset('assets/plugins/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
 <link href="{{ asset('assets/plugins/bootstrap/css/bootstrap.min.css"') }} rel="stylesheet">
 <!-- Global styles END --> 
  
 <!-- Page level plugin styles START -->
 <link href="{{ asset('assets/plugins/fancybox/source/jquery.fancybox.css') }}" rel="stylesheet">
 <link href="{{ asset('assets/plugins/owl.carousel/assets/owl.carousel.css') }}" rel="stylesheet">
 <link href="{{ asset('assets/plugins/uniform/css/uniform.default.css') }}" rel="stylesheet" type="text/css">
 <link href="{{ asset('http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css') }}" rel="stylesheet" type="text/css"><!-- for slider-range -->
 <link href="{{ asset('assets/plugins/rateit/src/rateit.css') }}" rel="stylesheet" type="text/css">
 <!-- Page level plugin styles END -->

 <!-- Theme styles START -->
 <link href="{{ asset('assets/pages/css/components.css') }}" rel="stylesheet">
 <link href="{{ asset('assets/corporate/css/style.css') }}" rel="stylesheet">
 <link href="{{ asset('assets/pages/css/style-shop.css') }}" rel="stylesheet" type="text/css">
 <link href="{{ asset('assets/corporate/css/style-responsive.css') }}" rel="stylesheet">
 <link href="{{ asset('assets/corporate/css/themes/red.css') }}" rel="stylesheet" id="style-color">

 <!-- Theme styles END -->
 <link href="{{ asset('https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i') }}" rel="stylesheet">
    
 <!-- title of site -->
 <title>Furniture</title>

 <!-- CSS only -->
<link href="{{ asset('https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css') }}" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

 <!-- For favicon png -->
 <link rel="shortcut icon" type="image/icon" href="{{ asset('assets/logo/favicon.png') }}"/>
 <!--font-awesome.min.css-->
 <link rel="stylesheet" href="{{ asset('assets/css/font-awesome.min.css') }}">

 <!--linear icon css-->
 <link rel="stylesheet" href="{{ asset('assets/css/linearicons.css') }}">

 <!--animate.css-->
 <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}">

 <!--owl.carousel.css-->
 <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}">
 <link rel="stylesheet" href="{{ asset('assets/css/owl.theme.default.min.css') }}">
 
 <!--bootstrap.min.css-->
 <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
 
 <!-- bootsnav -->
 <link rel="stylesheet" href="{{ asset('assets/css/bootsnav.css') }}" >	
 
 <!--style.css-->
 <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">


<link href="{{ asset('assets/corporate/css/custom.css') }}" rel="stylesheet">

</head>
@include("layouts.header")
<body >
    <div class="container" style="min-height: 57vh;">@yield("content")</div>
</body>

@include("layouts.footer")

</html>



<script src="{{ asset('assets/js/jquery.js') }}"></script>
        
<!--modernizr.min.js-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>

<!--bootstrap.min.js-->
<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>

<!-- bootsnav js -->
<script src="{{ asset('assets/js/bootsnav.js') }}"></script>

<!--owl.carousel.js-->
<script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>

<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>


<!--Custom JS-->
<script src="{{ asset('assets/js/custom.js') }}"></script>

<script src="{{ asset('assets/plugins/jquery.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/plugins/jquery-migrate.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/plugins/bootstrap/js/bootstrap.min.js') }}" type="text/javascript"></script>      
<script src="{{ asset('assets/corporate/scripts/back-to-top.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js') }}" type="text/javascript"></script>
<!-- END CORE PLUGINS -->

<!-- BEGIN PAGE LEVEL JAVASCRIPTS (REQUIRED ONLY FOR CURRENT PAGE) -->
<script src="{{ asset('assets/plugins/fancybox/source/jquery.fancybox.pack.js') }}" type="text/javascript"></script><!-- pop up -->
<script src="{{ asset('assets/plugins/owl.carousel/owl.carousel.min.js') }}" type="text/javascript"></script><!-- slider for products -->
<script src='{{ asset('assets/plugins/zoom/jquery.zoom.min.js') }}' type="text/javascript"></script><!-- product zoom -->
<script src="{{ asset('assets/plugins/bootstrap-touchspin/bootstrap.touchspin.js') }}" type="text/javascript"></script><!-- Quantity -->
<script src="{{ asset('assets/plugins/uniform/jquery.uniform.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/plugins/rateit/src/jquery.rateit.js') }}" type="text/javascript"></script>
<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js" type="text/javascript"></script><!-- for slider-range -->

<script src="{{ asset('assets/corporate/scripts/layout.js') }}" type="text/javascript"></script>




