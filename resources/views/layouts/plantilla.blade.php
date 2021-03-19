<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, shrink-to-fit=9">
        <meta name="description" content="Gambolthemes">
        <meta name="author" content="Gambolthemes">
        <title>@yield('title')</title>
        
        <link rel="icon" type="image/png" href="{{asset('../resources/images/fav.jpeg') }} ">
        
        <link href="https://fonts.googleapis.com/css2?family=Rajdhani:wght@300;400;500;600;700&amp;display=swap" rel="stylesheet">
        <link href='{{ asset('../resources/vendor/unicons-2.0.1/css/unicons.css') }} ' rel='stylesheet'>
        <link href="{{ asset('../resources/css/style.css') }} " rel="stylesheet">
        <link href="{{ asset('../resources/css/responsive.css') }} " rel="stylesheet">
        <link href="{{ asset('../resources/css/night-mode.css') }} " rel="stylesheet">
        
        <link href="{{ asset('../resources/vendor/fontawesome-free/css/all.min.css') }} " rel="stylesheet">
        <link href="{{ asset('../resources/vendor/OwlCarousel/assets/owl.carousel.css') }} " rel="stylesheet">
        <link href="{{ asset('../resources/vendor/OwlCarousel/assets/owl.theme.default.min.css') }} " rel="stylesheet">
        <link href="{{ asset('../resources/vendor/bootstrap/css/bootstrap.min.css') }} " rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="{{ asset('../resources/vendor/semantic/semantic.min.css') }} ">
    </head>
    <body>
        {{-- CATEGORIAS --}}
        <div id="category_model" class="header-cate-model main-gambo-model modal fade" tabindex="-1" role="dialog" aria-modal="false">
            <div class="modal-dialog category-area" role="document">
                <div class="category-area-inner">
                    <div class="modal-header">
                        <button type="button" class="close btn-close" data-dismiss="modal" aria-label="Close">
                            <i class="uil uil-multiply"></i>
                        </button>
                    </div>
                    <div class="category-model-content modal-content">
                        <div class="cate-header">
                            <h4>selecciona una categoría</h4>
                        </div>
                        <ul class="category-by-cat">
                            <li>
                                <a href="{{route('frutas')}}" class="single-cat-item">
                                    <div class="icon">
                                        <img src="{{asset('../resources/images/category/fruta-verdura.svg')}} " alt="">
                                    </div>
                                    <div class="text"> Frutas y verduras</div>
                                </a>
                            </li>
                            <li>
                                <a href="{{route('abarrotes')}}" class="single-cat-item">
                                    <div class="icon">
                                        <img src="{{ asset('../resources/images/category/abarrotes.svg') }} " alt="">
                                    </div>
                                    <div class="text"> Abarrotes </div>
                                </a>
                            </li>
                            <li>
                                <a href="{{route('lacteos')}}" class="single-cat-item">
                                    <div class="icon">
                                        <img src="{{ asset('../resources/images/category/lacteos-huevos.svg') }} " alt="">
                                    </div>
                                    <div class="text"> Lácteos y huevos</div>
                                </a>
                            </li>
                            <li>
                                <a href="{{route('panaderia')}}" class="single-cat-item">
                                    <div class="icon">
                                        <img src="{{asset('../resources/images/category/pan.svg') }} " alt="">
                                    </div>
                                    <div class="text"> Panaderia </div>
                                </a>
                            </li>
                            <li>
                                <a href="{{route('carnes')}}" class="single-cat-item">
                                    <div class="icon">
                                        <img src="{{asset('../resources/images/category/carnes.svg') }} " alt="">
                                    </div>
                                    <div class="text"> Carnes </div>
                                </a>
                            </li>
                            <li>
                                <a href="{{route('bebidas')}}" class="single-cat-item">
                                    <div class="icon">
                                        <img src="{{asset('../resources/images/category/bebidas.svg') }} " alt="">
                                    </div>
                                    <div class="text"> Bebidas </div>
                                </a>
                            </li>
                            <li>
                                <a href="{{route('despensa')}}" class="single-cat-item">
                                    <div class="icon">
                                        <img src="{{ asset('../resources/images/category/despensa.svg')}} " alt="">
                                    </div>
                                    <div class="text"> Despensa </div>
                                </a>
                            </li>
                            <li>
                                <a href="{{route('hogar')}}" class="single-cat-item">
                                    <div class="icon">
                                        <img src="{{asset('../resources/images/category/aseo-hogar.svg') }} " alt="">
                                    </div>
                                    <div class="text"> Aseo del hogar </div>
                                </a>
                            </li>
                            <li>
                                <a href="{{route('personal')}}" class="single-cat-item">
                                    <div class="icon">
                                        <img src="{{asset('../resources/images/category/personal.svg') }} " alt="">
                                    </div>
                                    <div class="text"> Cuidado personal </div>
                                </a>
                            </li>
                            <li>
                                <a href="{{route('mascotas')}}" class="single-cat-item">
                                    <div class="icon">
                                        <img src="{{asset('../resources/images/category/mascota.svg') }} " alt="">
                                    </div>
                                    <div class="text"> Mascotas </div>
                                </a>
                            </li>
                        </ul>
                    
                    </div>
                </div>
            </div>
        </div>

        <div id="search_model" class="header-cate-model main-gambo-model modal fade col-sm-6" tabindex="-1" role="dialog" aria-modal="false">
            <div class="modal-dialog search-ground-area" role="document">
                <div class="category-area-inner">
                    <div class="modal-header">
                        <button type="button" class="close btn-close" data-dismiss="modal" aria-label="Close">
                            <i class="uil uil-multiply"></i>
                        </button>
                    </div>
                    <div class="category-model-content modal-content">
                        <div class="search-header">
                            <form action="#">
                                <input type="text" placeholder="Buscar productos...">
                                <button type="submit"><i class="uil uil-search"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- CARRITO DE COMPRAS --}}
        @include('layouts.partials.carrito')


        {{-- ENCABEZADO --}}
        @include('layouts.partials.header')

        {{-- CONTENIDO DE LA PLANTILLA --}}
        @yield('contenido')


        {{-- FOOTER --}}
        @include('layouts.partials.footer')
    </body>
</html>