@extends('layouts.client')

@section('content')
    <!-- start banner section -->
    <section class="xs-banner-sec xs-banner-v2-sec owl-carousel banner-slider">
            <div class="banner-slider-item banner-item1" style="background-image: url(assets/images/banner-slider/banner_slider_3.jpg);">
                <div class="slider-table">
                    <div class="slider-table-cell">
                        <div class="container">
                            <div class="col-lg-10 offset-lg-1">
                                <div class="banner-content text-center">
                                    <h2>{{ __('nt_titulo_inicial_1') }}</h2>
                                    <p>{{ __('nt_subtitulo_inicial_1') }}
                                    </p>
                                    <div class="xs-btn-wraper">
                                        <a href="#" class="xs-btn">
                                            {{ __('nt_productos') }}
                                        </a>
                                        <a href="#" class="xs-btn fill">
                                            {{ __('nt_cotizar') }}
                                        </a>
                                    </div><!-- .xs-btn-wraper END -->
                                </div><!-- .xs-welcome-wraper END -->
                            </div><!-- .column END -->
                        </div><!-- .container end -->
                    </div><!-- .slider table cell end -->
                </div><!-- .slider table end -->
            </div><!-- .xs-welcome-content END -->
        
            <div class="banner-slider-item banner-item2" style="background-image: url(assets/images/banner-slider/banner_slider_4.jpg);">
                <div class="slider-table">
                    <div class="slider-table-cell">
                        <div class="container">
                            <div class="col-lg-9">
                                <div class="banner-content">
                                    <h2>{{ __('nt_titulo_inicial_2') }}</h2>
                                    <p>{{ __('nt_subtitulo_inicial_2') }}
                                    </p>
                                    <div class="xs-btn-wraper">
                                        <a href="#" class="xs-btn">
                                            {{ __('nt_servicios') }}
                                        </a>
                                        <a href="#" class="xs-btn fill">
                                            {{ __('nt_cotizar') }}
                                        </a>
                                    </div><!-- .xs-btn-wraper END -->
                                </div><!-- .xs-welcome-wraper END -->
                            </div><!-- .column END -->
                        </div><!-- .container end -->
                    </div><!-- .slider table cell end -->
                </div><!-- .slider table end -->
            </div><!-- .xs-welcome-content END -->
        
            <div class="banner-slider-item banner-item3" style="background-image: url(assets/images/banner-slider/banner_slider_5.jpg);">
                <div class="slider-table">
                    <div class="slider-table-cell">
                        <div class="container">
                            <div class="col-lg-8 offset-lg-4">
                                <div class="banner-content text-right">
                                    <h2>{{ __('nt_titulo_inicial_3') }}</h2>
                                    <p>{{ __('nt_subtitulo_inicial_3') }}
                                    </p>
                                    <div class="xs-btn-wraper">
                                        <a href="#" class="xs-btn">
                                            {{ __('nt_servicios') }}
                                        </a>
                                        <a href="#" class="xs-btn fill">
                                            {{ __('nt_cotizar') }}
                                        </a>
                                    </div><!-- .xs-btn-wraper END -->
                                </div><!-- .xs-welcome-wraper END -->
                            </div><!-- .column END -->
                        </div><!-- .container end -->
                    </div><!-- .slider table cell end -->
                </div><!-- .slider table end -->
            </div><!-- .xs-welcome-content END -->
        </section><!-- End banner section -->
        
        <!-- start service section -->
        <section class="service-sec section-padding">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="section-title-item">
                               
                                <h2 class="section-title">
                                     <span class="xs-title">{{ __('nt_estrategias_de_negocio') }}</span>
                                     {{ __('nt_lineamientos') }}
                                </h2>
                            </div>
                        </div>
                    </div><!-- row end-->
                    <div class="row">
                        <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="300ms">
                            <div class="single-service">
                                <div class="service-img">
                                    <img src="assets/images/services/mision.jpg" alt="">
                                    <i class="icon-Our_service_1"></i>
                                </div>
                                <h3 class="xs-service-title"><a href="#">{{ __('nt_titulo_mision') }}</a> </h3>
                                <p>{{ __('nt_mision') }}</p>
                                
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="400ms">
                            <div class="single-service">
                                <div class="service-img">
                                    <img src="assets/images/services/mision.jpg" alt="">
                                    <i class="icon-Our_service_2"></i>
                                </div>
                                <h3 class="xs-service-title"><a href="#">{{ __('nt_titulo_vision') }}</a> </h3>
                                <p>{{ __('nt_vision') }}</p>
                                
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="500ms">
                            <div class="single-service">
                                <div class="service-img">
                                    <img src="assets/images/services/mision.jpg" alt="">
                                    <i class="icon-Our_service_3"></i>
                                </div>
                                <h3 class="xs-service-title"><a href="#">{{ __('nt_titulo_valores') }}</a> </h3>
                                <p>
                                        1. {{ __('nt_titulo_valores_1') }}
                                        2. {{ __('nt_titulo_valores_2') }}
                                        3. {{ __('nt_titulo_valores_3') }}
                                        4. {{ __('nt_titulo_valores_4') }}
                                        5. {{ __('nt_titulo_valores_5') }}
                                        6. {{ __('nt_titulo_valores_6') }}
                                        7. {{ __('nt_titulo_valores_7') }}
                                </p>
                                
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="600ms">
                            <div class="single-service">
                                <div class="service-img">
                                    <img src="assets/images/services/mision.jpg" alt="">
                                    <i class="icon-Our_service_4"></i>
                                </div>
                                <h3 class="xs-service-title"><a href="#">{{ __('nt_titulo_lista_de_clientes') }}</a> </h3>
                                <p>
                                    {{ __('nt_clientes_nacionales') }};
                                    {{ __('nt_clientes_internacionales') }}
                                </p>
                                
                            </div>
                        </div>
                    
                    </div><!-- row end-->
                </div><!-- .container end -->
            </section><!-- End service section -->
        
        <!-- start video section -->
        <section class="video-sec">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-7 xs-padding-0 align-self-center">
                        <div class="video-item">
                            <img src="assets/images/video-img.jpg" alt="">
                            <a href="https://www.youtube.com/watch?v=cWvzwxSgPGM" class="video-play-btn"><i
                                        class="icon icon-play-button2"></i> </a>
                        </div>
                    </div>
                    <div class="col-lg-5 xs-padding-0">
                        <div class="call-to-action-v2">
                            <div class="call-back-content">
        
                                <h3><i class="icon icon-user-1"></i> {{ __('nt_reciba') }} <span>{{ __('nt_una_llamada') }}</span></h3>
                                <p class="call-contact-text">
                                    {{ __('nt_llamada_texto') }} <br/>
                                   <!--<span> 25% Descuento en tu primer servicio</span>-->
                                </p>
                                <form class="call-back-form">
                                    <div class="form-group">
                                        <input type="text" name="name" value="" required placeholder={{ __('Name') }} class="call-back-inp">
                                    </div>
                                    <div class="form-group">
                                        <input type="number" name="number" value="" required placeholder={{ __('Teléfono') }} class="call-back-inp">
                                    </div>
                                    <div class="form-group">
                                        <input type="email" name="email" value="" required placeholder="{{ __('Email') }}" class="call-back-inp">
                                    </div>
                                    <div class="form-group call-back-btn">
                                        <button type="submit" name="submit" class="xs-btn xs-v2-btn">{{ __('nt_enviar') }}</button>
                                        <label class="call-us-number">{{ __('nt_llamenos') }} - <span>{{ __('nt_telefono') }}</span></label>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div><!-- row end-->
            </div><!-- .container end -->
        </section><!-- End  video section -->
        
        <!-- start funfact section -->
        <section class="funfact-sec funfact-v2-sec" style="background: url(./assets/images/funfact-bg-v2.jpg);">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 align-self-center">
                        <div class="funfact-content">
                            <h2 class="column-title2 column-title">
                             <!--<span class="xs-title-2">-->{{ __('nt_colaboradores') }}<!--</span>-->
                             
                            </h2>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="row">
                            <div class="col-sm-4 col-md-4 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="300ms">
                                <div class="single-funfact">
                                    <i class="icon-fun_fact_1"></i>
                                    <h3 class="funfact-title" data-counter="239">239 <strong>+</strong></h3>
                                    <p>{{ __('nt_hombres') }}</p>
                                </div>
                            </div>
                            <div class="col-sm-4 col-md-4 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="400ms">
                                <div class="single-funfact">
                                    <i class="icon-fun-fact-02"></i>
                                    <h3 class="funfact-title" data-counter="55">55 <strong>+</strong></h3>
                                    <p>{{ __('nt_mujeres') }}</p>
                                </div>
                            </div>
                            <div class="col-sm-4 col-md-4 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="500ms">
                                <div class="single-funfact">
                                    <i class="icon-fun_fact_4"></i>
                                    <h3 class="funfact-title" data-counter="294">294 <strong>+</strong></h3>
                                    <p>{{ __('nt_total') }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- row end-->
            </div><!-- .container end -->
        </section><!-- End funfact section -->

         <!-- start Testimonials section -->
         <section class="testimonial-v4-sec v3 section-bg section-padding">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="section-title-item section-title-v2-item">
                               
                                
                                <h2 class="section-title">
                                    <span class="xs-title">{{_('nt_comentarios_clientes')}} </span>
                                     <em>{{_('Nuestros')}}</em> {{_('nt_clientes_dicen')}}
                                </h2>
                                <h3 class="hidden-title">{{_('nt_clientes')}}</h3>
                            </div>
                        </div>
                    </div>
                    <div class="owl-carousel" id="testmonial-slider-v4">
                        <div class="single-testmonial">
                            <div class="testmonial-author">
                                 <img src="assets/images/author1.jpg" alt="">
                            <h4 class="xs-author-title">{{_('nt_cliente_1')}}</h4>
                                <i class="fa fa-quote-right"></i>
                            </div>
                            <p>{{_('nt_cliente_1_comentario')}}
                            </p>
                        </div><!-- single-testmonial end-->
            
                        <div class="single-testmonial">
                            <div class="testmonial-author">
                                 <img src="assets/images/author1.jpg" alt="">
                                <h4 class="xs-author-title">{{_('nt_cliente_2')}}</h4>
                                <i class="fa fa-quote-right"></i>
                            </div>
                            <p>{{_('nt_cliente_2_comentario')}}
                            </p>
                        </div><!-- single-testmonial end-->
            
                        <div class="single-testmonial">
                            <div class="testmonial-author">
                                 <img src="assets/images/author1.jpg" alt="">
                                <h4 class="xs-author-title">{{_('nt_cliente_3')}}</h4>
                                <i class="fa fa-quote-right"></i>
                            </div>
                            <p>{{_('nt_cliente_3_comentario')}}
                            </p>
                        </div><!-- single-testmonial end-->
            
                        <div class="single-testmonial">
                            <div class="testmonial-author">
                                 <img src="assets/images/author1.jpg" alt="">
                                <h4 class="xs-author-title">{{_('nt_cliente_4')}}</h4>
                                <i class="fa fa-quote-right"></i>
                            </div>
                            <p>{{_('nt_cliente_4_comentario')}}
                            </p>
                        </div><!-- single-testmonial end-->
            
                        <div class="single-testmonial">
                            <div class="testmonial-author">
                                 <img src="assets/images/author1.jpg" alt="">
                                <h4 class="xs-author-title">{{_('nt_cliente_5')}}</h4>
                                <i class="fa fa-quote-right"></i>
                            </div>
                            <p>{{_('nt_cliente_5_comentario')}}
                            </p>
                        </div><!-- single-testmonial end-->
                    </div> <!-- row end-->
                </div><!-- .container end -->
            </section><!-- End Testimonials section -->
            
        
        <!-- start faq and client logo section -->
        <section class="faq-and-client-logo-sec section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="faq-item xs-faq-item">
                            <div class="faq-content">
                                <h3>{{_('nt_preguntas_frecuentes')}}</h3>
                            </div>
                            <div id="accordion">
                                <div class="faq-single-item">
                                    <div class="card-header" id="headingOne">
                                        <h5>
                                            <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne"
                                                    aria-expanded="true" aria-controls="collapseOne">{{_('nt_pregunta_frecuente_1')}}
                                            </button>
                                        </h5>
                                    </div>
        
                                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                                         data-parent="#accordion">
                                        <div class="card-body">
                                            <p>
                                                {{_('nt_pregunta_frecuente_1_respuesta')}}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="faq-single-item">
                                    <div class="card-header" id="headingTwo">
                                        <h5>
                                            <button class="btn btn-link collapsed" data-toggle="collapse"
                                                    data-target="#collapseTwo" aria-expanded="false"
                                                    aria-controls="collapseTwo">{{_('nt_pregunta_frecuente_2')}}
                                            </button>
                                        </h5>
                                    </div>
                                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                                         data-parent="#accordion">
                                        <div class="card-body">
                                            <p>
                                                {{_('nt_pregunta_frecuente_2_respuesta')}}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="faq-single-item">
                                    <div class="card-header" id="headingThree">
                                        <h5>
                                            <button class="btn btn-link collapsed" data-toggle="collapse"
                                                    data-target="#collapseThree" aria-expanded="false"
                                                    aria-controls="collapseThree">
                                                    {{_('nt_pregunta_frecuente_3')}}
                                            </button>
                                        </h5>
                                    </div>
                                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                                         data-parent="#accordion">
                                        <div class="card-body">
                                            <p>
                                                {{_('nt_pregunta_frecuente_3_respuesta')}}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="faq-single-item">
                                    <div class="card-header" id="headingFour">
                                        <h5>
                                            <button class="btn btn-link collapsed" data-toggle="collapse"
                                                    data-target="#collapseFour" aria-expanded="false"
                                                    aria-controls="collapseFour">
                                                    {{_('nt_pregunta_frecuente_4')}}
                                            </button>
                                        </h5>
                                    </div>
                                    <div id="collapseFour" class="collapse" aria-labelledby="headingFour"
                                         data-parent="#accordion">
                                        <div class="card-body">
                                            <p>
                                                {{_('nt_pregunta_frecuente_4_respuesta')}}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="client-logo-item faq-item">
                            <div class="faq-content">
                                <h4>{{_('nt_clientes_top')}}</h4>
                                <p>{{_('nt_clientes_top_texto')}}</p>
                            </div>
                            <div class="row">
                                <div class="col-lg-6 col-sm-6 single-client-logo">
                                    <img src="assets/images/client-logo/logo1.png" alt="">
                                </div>
                                <div class="col-lg-6 col-sm-6 single-client-logo">
                                    <img src="assets/images/client-logo/logo2.png" alt="">
                                </div>
                                <div class="col-lg-6 col-sm-6 single-client-logo">
                                    <img src="assets/images/client-logo/logo3.png" alt="">
                                </div>
                                <div class="col-lg-6 col-sm-6 single-client-logo">
                                    <img src="assets/images/client-logo/logo4.png" alt="">
                                </div>
                                <div class="col-lg-6 col-sm-6 single-client-logo">
                                        <img src="assets/images/client-logo/logo1.png" alt="">
                                    </div>
                                    <div class="col-lg-6 col-sm-6 single-client-logo">
                                        <img src="assets/images/client-logo/logo2.png" alt="">
                                    </div>
                            </div>
                        </div>
                    </div>
                </div><!-- row end-->
            </div><!-- .container end -->
        </section><!-- End faq and client logo section -->
@endsection