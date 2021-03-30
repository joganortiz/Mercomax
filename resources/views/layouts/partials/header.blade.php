<header class="header clearfix">
    <div class="top-header-group">
        <div class="top-header">
            <div class="res_main_logo">
                <a href="{{route('inicio')}}"><img src="{{ asset('../resources/images/fav.jpeg') }} " alt=""></a>
            </div>
            <div class="main_logo" id="logo">
                <a href="{{route('inicio')}}"><img src="{{ asset('../resources/images/logo-1.PNG') }} " alt=""></a>
                <a href="{{route('inicio')}}"><img class="logo-inverse" src="{{ asset('../resources/images/logo-1.png') }} " alt=""></a>
            </div>
            <div class="search120">
                <div class="ui search">
                    <div class="ui left icon input swdh10">
                        <input class="prompt srch10" type="text" placeholder="Buscar productos...">
                        <i class='uil uil-search-alt icon icon1'></i>
                    </div>
                </div>
            </div>
            <div class="header_right">
                <ul>
                    <li>
                        <a href="offers.html" class="offer-link"><i class="uil uil-gift"></i>Ofertas</a>
                    </li>
                    <li>
                        <a href="faq.html" class="offer-link"><i class="uil uil-question-circle"></i>Ayuda</a>
                    </li>
                    <li>
                        <a href="dashboard_my_wishlist.html" class="option_links" title="Wishlist"><i class='uil uil-heart icon_wishlist'></i><span class="noti_count1">3</span></a>
                    </li>
                    <li class="ui dropdown">
                        <a href="#" class="opts_account">
                            <img src="{{ asset('../resources/images/avatar/img-5.jpg') }} " alt="">
                            <span class="user__name">{{ Auth::user()->name }}</span>
                            <i class="uil uil-angle-down"></i>
                        </a>
                        <div class="menu dropdown_account">
                            <div class="night_mode_switch__btn">
                                <a href="#" id="night-mode" class="btn-night-mode">
                                    <i class="uil uil-moon"></i> Modo Noche
                                    <span class="btn-night-mode-switch">
                                        <span class="uk-switch-button"></span>
                                    </span>
                                </a>
                            </div>
                                <!--Finalizar sesion-->
                            <a href="dashboard_my_addresses.html" class="item channel_item"><i class="uil uil-location-point icon__1"></i>Mi dirección</a>
                            <a href="{{ route('logout') }}" class="item channel_item" 
                            onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();"
                            {{ __('Logout') }}><i class="uil uil-lock-alt icon__1"></i>Cerrar sesión</a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="sub-header-group">
        <div class="sub-header">
            <div class="ui dropdown">
                <a href="#" class="category_drop hover-btn" data-toggle="modal" data-target="#category_model" title="Categories"><i class="uil uil-apps"></i><span class="cate__icon">Seleccione Categoría</span></a>
            </div>
            <nav class="navbar navbar-expand-lg navbar-light py-3">
                <div class="container-fluid">
                    <button class="navbar-toggler menu_toggle_btn" type="button" data-target="#navbarSupportedContent"><i class="uil uil-bars"></i></button>
                    <div class="collapse navbar-collapse d-flex flex-column flex-lg-row flex-xl-row justify-content-lg-end bg-dark1 p-3 p-lg-0 mt1-5 mt-lg-0 mobileMenu" id="navbarSupportedContent">
                        <ul class="navbar-nav main_nav align-self-stretch">
                            <li class="nav-item"><a href="#" class="nav-link active" title="Home">Inicio</a></li>
                            <li class="nav-item"><a href="shop_grid.html" class="nav-link new_item" title="New Products">Nuevos Productos</a></li>
                            <li class="nav-item"><a href="shop_grid.html" class="nav-link" title="Featured Products">Productos Destacados</a></li>
                            <li class="nav-item">
                                <div class="ui icon top left dropdown nav__menu">
                                    <a class="nav-link" title="Pages">Páginas <i class="uil uil-angle-down"></i></a>
                                    <div class="menu dropdown_page">
                                        <a href="dashboard_overview.html" class="item channel_item page__links">Cuenta</a>
                                        <a href="about_us.html" class="item channel_item page__links">Sobre nosotros</a>
                                        <a href="shop_grid.html" class="item channel_item page__links">Cuadrícula de la tienda</a>
                                        <a href="single_product_view.html" class="item channel_item page__links">Vista de producto único</a>
                                        <!-- <a href="checkout.html" class="item channel_item page__links">Revisa</a> -->
                                        <a href="request_product.html" class="item channel_item page__links">Solicitud de producto</a>
                                        <a href="order_placed.html" class="item channel_item page__links">Pedido realizado</a>
                                        <a href="{{route('login')}}" class="item channel_item page__links">Iniciar sesión</a>
                                        <a href="{{route('registrar')}}" class="item channel_item page__links">Registrarse</a>
                                        <a href="forgot_password.html" class="item channel_item page__links">Has olvidado tu contraseña</a>
                                    </div>
                                </div>
                            </li>
                            <li class="nav-item"><a href="contact_us.html" class="nav-link" title="Contact">Contáctenos</a></li>
                            </ul>
                        </div>
                </div>
            </nav>
            <div class="catey__icon">
                <a href="#" class="cate__btn" data-toggle="modal" data-target="#category_model" title="Categories"><i class="uil uil-apps"></i></a>
            </div>
            <div class="header_cart order-1">
                <a href="#" class="cart__btn hover-btn pull-bs-canvas-left" title="Cart"><i class="uil uil-shopping-cart-alt"></i><span>Carro</span><ins>2</ins><i class="uil uil-angle-down"></i></a>
            </div>
            <div class="search__icon order-1">
                <a href="#" class="search__btn hover-btn" data-toggle="modal" data-target="#search_model" title="Search"><i class="uil uil-search"></i></a>
            </div>
        </div>
    </div>
</header>