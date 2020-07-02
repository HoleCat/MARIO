<!DOCTYPE html>
<html class="no-js" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
            <meta charset="utf-8">
            <meta http-equiv="x-ua-compatible" content="ie=edge">
            <title>App - Coffe</title>
            <meta name="description" content="">
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        
            <link href="https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
            <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
        
            <link rel="icon" type="image/png" href="favicon.ico">
            <!-- Place favicon.ico in the root directory -->
            <link rel="apple-touch-icon" href="apple-touch-icon.png">
        
            <link rel="stylesheet" href="{{ asset('assets/css/fontawesome-min.css') }}">
            <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
            <link rel="stylesheet" href="{{ asset('assets/css/xsIcon.css') }}">
            <link rel="stylesheet" href="{{ asset('assets/css/iconmoon.css') }}">
            <link rel="stylesheet" href="{{ asset('assets/css/isotope.css') }}">
            <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}">
            <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}">
            <link rel="stylesheet" href="{{ asset('assets/css/owl.theme.default.min.css') }}">
            <link rel="stylesheet" href="{{ asset('assets/css/navigation.css') }}">
            <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}">
        
            <!--Theme custom css -->
            <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
        
            <!--Theme Responsive css-->
            <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}"/>
    </head>
    <body>
        <div id="preloader">
            <div class="preloader-wrapper">
                <div class="la-ball-clip-rotate-pulse la-2x">
                    <div></div>
                    <div></div>
                </div>
            </div>
            <a href="" class="cancel-preloader">Cancelar Carga</a>
        </div>	<!-- END prelaoder -->
        
        <!-- header top section -->
        <section class="xs-header-top header-top-box">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-8">
                        <div class="header-top-info">
                            <ul>
                            <li><a href="{{ route('client.contactUs') }}">{{ __('Contactenos') }}</a></li>
                                <li><a href="#">{{ __('Consigue una Cotización') }}</a></li>
                            </ul>
                        </div>
                    </div><!-- .col end -->
        
                    <div class="col-lg-6 align-self-center col-md-4">
                        <div class="header-top-search">
                            <ul>
                                <li class="search-item">
                                    <a href="#" class="search-icon"><i class="icon icon-search"></i></a>
                                    <form>
                                        <input type="search" name="s" class="header-search-field" value="" placeholder="{{ __('Buscar Aquí') }}">
                                    </form>
                                </li>
                                <li class="lang-item">
                                    <img width="20px" src="{{ asset('assets/images/svg/' . App::getLocale() . '.svg') }}" />
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                        {{ Config::get('languages')[App::getLocale()] }}
                                    </a>
                                    <ul class="dropdown-menu">
                                        @foreach (Config::get('languages') as $lang => $language)                                        
                                            @if ($lang != App::getLocale())
                                                <li>
                                                    <img width="20px" src="{{ asset('assets/images/svg/' . $lang . '.svg') }}" />
                                                    <a class="color:white !important" href="{{ route('lang.switch', $lang) }}">{{$language}}</a>
                                                </li>
                                            @endif
                                        @endforeach
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div><!-- .col end -->
                </div><!-- .row end -->
            </div><!-- .container end -->
        </section><!-- End header section -->
        
        <!-- header middle section -->
        <section class="xs-header-middle header-v2-top">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 align-self-center">
                        <div class="logo">
                            <a href="{{ route('client.home') }}">
                                <img src="{{ asset('assets/images/fullbanner-bg-150x86.jpg') }}" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="align-self-center col-md-9">
                        <div class="header-middle-info float-right">
                            <ul>
                                <li>
                                    <i class="icon icon-map-marker2"></i>
                                    <label>{{ __('Visitanos') }}</label>
                                    <p>Av Perú nro 450, Int 35</p>
                                </li>
                                <li>
                                    <i class="icon icon-envelope4"></i>
                                    <label>{{ __('Correo') }}</label>
                                    <p>example@gmail.com</p>
                                </li>
                                <li class="header-social">
                                    <label>{{ __('Síguenos') }}</label>
                                    <div class="header-v2-social">
                                        <a href="#"><span class="fa fa-facebook-f"></span></a>
                                        <a href="#"><span class="fa fa-twitter"></span></a>
                                        <a href="#"><span class="fa fa-google-plus"></span></a>
                                        <a href="#"><span class="fa fa-instagram"></span></a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div><!-- .container end -->
        </section><!-- End header middle section -->
        
        <!-- header nav section -->
        <header class="xs-header-nav xs-heder-nav-v2">
            <div class="container">
                <div class="row  menu-item">
                    <div class="col-lg-12">
                        <nav id="navigation1" class="navigation header-nav clearfix">
        
                            <div class="nav-header">
                                <!--  <a class="nav-brand" href="#"></a>-->
                                <a href="./index.html" class="mobile-logo">
                                    <img src="{{ asset('assets/images/mobile_logo.png') }}" alt="">
                                </a>
                                <div class="nav-toggle"></div>
                            </div>
        
                            <div class="nav-menus-wrapper clearfix">
                                <ul class="nav-menu">
                                <li class="active"><a href="{{ route('client.home') }}">{{ __('Inicio') }}</a></li>
                                    <li><a href="{{ route('client.aboutUs') }}">{{ __('Quienes somos') }}</a></li>
                                    <li><a href="{{ route('client.services') }}">{{ __('Servicios') }}</a></li>
                                    <li><a href="{{ route('client.products') }}">{{ __('Productos') }}</a></li>
                                    <li><a href="{{ route('client.projects') }}">{{ __('Proyectos') }}</a></li>
                                    <li><a href="{{ route('client.clients') }}">{{ __('Clientes') }}</a></li>
                                </ul>
                                <div class="header-nav-right-info align-to-right">
                                    <label><i class="icon icon-phone3"></i> 000 2672 561</label>
                                </div>
                                
                            </div>
        
                        </nav>
                    </div>
                </div><!-- .row end -->
            </div><!-- .container end -->
        </header><!-- End header nav section -->
        
        @yield('content')
        
        <!-- footer section start -->
        <footer class="xs-footer-sec xs-footer-v2">
            <div class="container">
                <div class="footer-top-item">
                    <div class="xs-back-to-top">
                        <a href="#" class="BackTo"><i class="fa fa-angle-double-up"></i> </a>
                    </div>
                  
                </div>
            
                <div class="footer-item">
                    <div class="row">
                        <div class="col-lg-3">
                            <div class="widgets">
                                <div class="footer-logo">
                                        <a href="./index.html"><img src="{{ asset('assets/images/footer.jpg') }}" alt=""> </a>
                                </div>
                                <p>
                                    Estamos especializados en producir y procesar Cafés de especialidad proveniente de pequeños productores para darte la experiencia de un producto fresco y natural.
                                </p>
                                <ul class="footer-social">
                                    <li>
                                        <a href="#"><i class="fa fa-facebook-f"></i> </a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fa fa-twitter"></i> </a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fa fa-google-plus"></i> </a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fa fa-pinterest"></i> </a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fa fa-instagram"></i> </a>
                                    </li>
                                </ul>
                            </div>
                        </div><!-- col end -->
                        <div class="col-md-3">
                            <div class="widgets">
                                <h3 class="widget-title">{{ __('Enlaces Útiles')}}</h3>
                                <ul>
                                    <li>
                                        <a href="#">Inicio</a>
                                    </li>
                                    <li>
                                        <a href="#">Servicios</a>
                                    </li>
                                    <li>
                                        <a href="#">Productos</a>
                                    </li>
                                    <li>
                                        <a href="#">Noticias</a>
                                    </li>
                                    <li>
                                        <a href="#">Preguntas Frecuentes</a>
                                    </li>
                                    <li>
                                        <a href="#">Clientes</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="widgets">
                                <h3 class="widget-title">{{ __('Nuestros Servicios')}}</h3>
                                <ul class="service-link">
                                    <li>
                                        <a href="#">Tostado – Molido y Empacado 1 KG</a>
                                    </li>
                                    <li>
                                        <a href="#">Tostado – Molido y Empacado 1/2 KG</a>
                                    </li>
                                    <li>
                                        <a href="#">Tostado – Molido y Empacado 1/4 KG</a>
                                    </li>
                                    <li>
                                        <a href="#">Tostado & Molido por KG</a>
                                    </li>
                                    <li>
                                        <a href="#">Tostado & Envasado 1 KG</a>
                                    </li>
                                    <li>
                                        <a href="#">Tostado & Envasado 1/2 KG</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="widgets">
                                <h3 class="widget-title">{{ __('Contactenos')}}</h3>
                                <ul class="footer-contact-list">
                                    <li>
                                        <i class="icon icon-map-marker2"></i>
                                        Visitanos
                                        Perú, Lima. La molina, Av Perú nro 450 int 53
                                    </li>
                                    <li>
                                        <i class="icon icon-phone3"></i>
                                        965 776 529
                                    </li>
                                    <li>
                                        <i class="icon icon-envelope"></i>
                                        joserojas@gmail.com
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div><!-- row end -->
                </div>
                <div class="copyright-content">
                    <div class="row">
                    <div class="col-md-6">
                        <p>Copyright 2020, <a href="#">C&R Consulting Group </a>. All Rights Reserved.</p>
                    </div>
                    <div class="col-md-6">
                        <ul class="footer-bottom-menu">
                            <li>
                                <a href="#">{{ __('Terminos y Condiciones') }}</a>
                            </li>
                            <li>
                                <a href="#">{{ __('Politicas de Privacidad') }}</a>
                            </li>
                        </ul>
                    </div>
                    </div>
                </div><!-- copyright end -->
            </div><!-- container end -->
        </footer>
        <div class="icon-whatsapp">
            <img width="200px" src="{{ asset('assets/images/Whatsapp-logo.png') }}" />
        </div>
        <div class="icon-angle-up BackTo"><i class="icon icon-chevron-up"></i></div>
        <script src="{{ asset('assets/js/jquery-3.2.1.min.js') }}"></script>
        <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('assets/js/jquery-mixtub.js') }}"></script>
        <script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
        <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
        <script src="{{ asset('assets/js/navigation.js') }}"></script>
        <script src="{{ asset('assets/js/jquery.appear.min.js') }}"></script>
        <script src="{{ asset('assets/js/isotope.js') }}"></script>
        <script src="{{ asset('assets/js/wow.min.js') }}"></script>
        <script src="{{ asset('assets/js/main.js') }}"></script>
    </body>
    <script type="text/javascript" src="js/app.js"></script>
</html>
