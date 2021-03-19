<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from gambolthemes.net/html-items/gambo_supermarket_demo/sign_in.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 01 Feb 2021 21:43:35 GMT -->
    <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, shrink-to-fit=9">
    <meta name="description" content="Gambolthemes">
    <meta name="author" content="Gambolthemes">
    <title>@yield('title')</title>

    <link rel="icon" type="image/png" href="{{asset('../resources/images/fav.jpeg') }} ">
    
 
	<!-- PLUGIN STYLES -->
    <link href="https://fonts.googleapis.com/css2?family=Rajdhani:wght@300;400;500;600;700&amp;display=swap" rel="stylesheet">
    <link href='{{asset('../resources/vendor/unicons-2.0.1/css/unicons.css') }}' rel='stylesheet'>
    <link href="{{asset('../resources/css/style.css') }}" rel="stylesheet">
    <link href="{{asset('../resources/css/responsive.css') }}" rel="stylesheet">
    <link href="{{asset('../resources/css/night-mode.css') }}" rel="stylesheet">
  
	<!-- PLUGIN VENDOR -->
    <link href="{{asset('../resources/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
    <link href="{{asset('../resources/vendor/OwlCarousel/assets/owl.carousel.css') }}" rel="stylesheet">
    <link href="{{asset('../resources/vendor/OwlCarousel/assets/owl.theme.default.min.css') }}" rel="stylesheet">
    <link href="{{asset('../resources/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{asset('../resources/vendor/semantic/semantic.min.css') }}">

</head>
<body>
    <div class="container mt-4">
        <div class="row justify-content-center">
            <div class="col-lg-5">
                <div class="sign-form">
                    <div class="sign-inner">
                        <div class="sign-logo " id="logo">
                            <a href="{{route('inicio')}}"><img style=" width: 230px;" src="{{ asset('../resources/images/logo-1.png') }} " alt=""></a>
                            <a href="{{route('inicio')}}"><img  class="logo-inverse" src="{{ asset('../resources/images/logo-1.png') }} " alt=""></a>
                        </div>
                        @yield('contenido')
                    </div>
                </div>
                <div class="copyright-text text-center mt-3">
                <i class="uil uil-copyright"></i>Copyright <?php echo date('Y');?> <b>Mercomax</b>. Todos los derechos reservados 
                </div>
            </div>
        </div>
    </div>
    
</body>

<!-- PLUGIN JS -->
<script src="{{asset('../resources/js/jquery-3.3.1.min.js') }}"></script>
<script src="{{asset('../resources/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{asset('../resources/vendor/OwlCarousel/owl.carousel.js') }}"></script>
<script src="{{asset('../resources/vendor/semantic/semantic.min.js') }}"></script>
<script src="{{asset('../resources/js/jquery.countdown.min.js') }}"></script>
<script src="{{asset('../resources/js/custom.js') }}"></script>
<script src="{{asset('../resources/js/product.thumbnail.slider.js') }}"></script>
<script src="{{asset('../resources/js/offset_overlay.js') }}"></script>
<script src="{{asset('../resources/js/night-mode.js') }}"></script>
</body>
<!-- Mirrored from gambolthemes.net/html-items/gambo_supermarket_demo/sign_in.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 01 Feb 2021 21:43:35 GMT -->
</html>