@extends('layouts.client')

@section('content')
<section class="banner-inner-sec" style="background-image:url('{{ asset('assets/images/banner/about-banner.jpg') }}')">
	<div class="banner-table">
		<div class="banner-table-cell">
			<div class="container">
				<div class="banner-inner-content">
					<h2 class="banner-inner-title">{{ __('nt_titulo_acerca_de_nosotros') }}</h2>
					<ul class="xs-breadcumb">
						<!--<li><a href="index.html"> Inicio  / </a> Acerca</li>-->
					</ul>
				</div>
			</div>
		</div>
	</div>
</section>
<!--breadcumb end here-->
<!-- header about inner section -->
<section class="about-inner section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="300ms">
                <div class="about-inner-img">
                    <img src="{{ asset('assets/images/about/home1-slider1-600x600.jpg') }}" alt="">
                </div>
            </div><!-- col end -->
            <div class="col-lg-6 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="400ms">
                <div class="about-inner-content">
                    <h2 class="column-title2 column-title">{{ __('nt_titulo_acerca_de_nosotros') }}</h2>
                   <div class="single-about-content">
                        <h3>{{ __('nt_titulo_historia') }} </h3>
                        <p>{{ __('nt_historia') }} 
                        </p>
                   </div>
                   <div class="single-about-content">
                        <h3>Lorem ipsum</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        </p>
                   </div>
                   <div class="row about-funfact">
                       <div class="col-sm-4">
                            <div class="single-about-funfact">
                                <i class="icon-fun_fact_1"></i>
                                <h4 class="funfact-title" data-counter="25">25 +</h4>
                                <p>{{ __('nt_anos_experiencia') }} </p>
                            </div>
                       </div>
                       <div class="col-sm-4">
                            <div class="single-about-funfact">
                                <i class="icon-fun_fact_2"></i>
                                <h4 class="funfact-title" data-counter="502">502 +</h4>
                                <p>{{ __('nt_clientes_satisfechos') }}</p>
                            </div>
                       </div>
                       <div class="col-sm-4">
                            <div class="single-about-funfact">
                                <i class="icon-fun_fact_4"></i>
                                <h4 class="funfact-title" data-counter="100">100</h4>
                                <p>{{ __('nt_expertos_profesionales') }}</p>
                            </div>
                       </div>
                   </div>
                </div>
            </div><!-- col end -->
        </div><!-- row end-->
    </div><!-- .container end -->
</section><!-- End about inner section -->

<!-- header company timeline section -->
<section class="company-timeline-sec section-padding" style="background: url({{ asset('assets/images/about/compnay-timeline.jpg') }})">
    <div class="container-fluid">
        <div class="section-title-item section-title-v2-item white">
            <h2 class="section-title">
             <span class="xs-title">{{ __('nt_titulo_linea_de_tiempo') }}</span>
             {{ __('nt_cronologia_de_la_empresa') }}
            </h2>
            <span class="section-bar"></span>
        </div><!-- .section end -->

        <div class="row company-timeline-item">
            <div class="col-md col-sm-6 single-timeline-item xs-padding-0">
                <div class="history-of-timeline">
                    <span class="circle-border"></span>
                    <label>2000</label>
                </div>
                <div class="single-timeline-content">
                    <img src="{{ asset('assets/images/about/employers-350x350.jpg') }}" alt="">
                    <h3>2000</h3>
                    <p>{{ __('ano_2000') }}
                    </p>
                </div>
            </div>
            <div class="col-md col-sm-6 single-timeline-item xs-padding-0">
                 <div class="history-of-timeline">
                    <span class="circle-border"></span>
                    <label>2004</label>
                </div>
                <div class="single-timeline-content">
                    <img src="{{ asset('assets/images/about/employers-350x350.jpg') }}" alt="">
                    <h3>2004</h3>
                    <p>{{ __('ano_2004') }}
                    </p>
                </div>
            </div>
            <div class="col-md col-sm-6 single-timeline-item xs-padding-0 active">
                <div class="history-of-timeline">
                    <span class="circle-border"></span>
                    <label>2006</label>
                </div>
                <div class="single-timeline-content">
                    <img src="{{ asset('assets/images/about/employers-350x350.jpg') }}" alt="">
                    <h3>2006</h3>
                    <p>{{ __('ano_2006') }}
                    </p>
                </div>
            </div>
            <div class="col-md col-sm-6 single-timeline-item xs-padding-0">
                <div class="history-of-timeline">
                    <span class="circle-border"></span>
                    <label>2009</label>
                </div>
                <div class="single-timeline-content">
                    <img src="{{ asset('assets/images/about/employers-350x350.jpg') }}" alt="">
                    <h3>2009</h3>
                    <p>{{ __('ano_2009') }}
                    </p>
                </div>
            </div>
            <div class="col-md col-sm-6 single-timeline-item xs-padding-0">
                 <div class="history-of-timeline">
                    <span class="circle-border"></span>
                    <label>2011</label>
                </div>
                <div class="single-timeline-content">
                    <img src="{{ asset('assets/images/about/employers-350x350.jpg') }}" alt="">
                    <h3>2011</h3>
                    <p>{{ __('ano_2011') }}
                    </p>
                </div>
            </div>
            <div class="col-md col-sm-6 single-timeline-item xs-padding-0">
                <div class="history-of-timeline">
                   <span class="circle-border"></span>
                   <label>2013</label>
               </div>
               <div class="single-timeline-content">
                   <img src="{{ asset('assets/images/about/employers-350x350.jpg') }}" alt="">
                   <h3>2013</h3>
                   <p>{{ __('ano_2013') }}
                   </p>
               </div>
           </div>
           <div class="col-md col-sm-6 single-timeline-item xs-padding-0">
                <div class="history-of-timeline">
                    <span class="circle-border"></span>
                    <label>2015</label>
                </div>
                <div class="single-timeline-content">
                    <img src="{{ asset('assets/images/about/employers-350x350.jpg') }}" alt="">
                    <h3>2015</h3>
                    <p>{{ __('ano_2015') }}
                    </p>
                </div>
            </div>
            <div class="col-md col-sm-6 single-timeline-item xs-padding-0">
                <div class="history-of-timeline">
                    <span class="circle-border"></span>
                    <label>2017</label>
                </div>
                <div class="single-timeline-content">
                    <img src="{{ asset('assets/images/about/employers-350x350.jpg') }}" alt="">
                    <h3>2017</h3>
                    <p>{{ __('ano_2017') }}
                    </p>
                </div>
            </div>
            <div class="col-md col-sm-6 single-timeline-item xs-padding-0">
                <div class="history-of-timeline">
                    <span class="circle-border"></span>
                    <label>2018</label>
                </div>
                <div class="single-timeline-content">
                    <img src="{{ asset('assets/images/about/employers-350x350.jpg') }}" alt="">
                    <h3>2018</h3>
                    <p>{{ __('ano_diez_ocho') }}
                    </p>
                </div>
            </div>
            <div class="col-md col-sm-6 single-timeline-item xs-padding-0">
                <div class="history-of-timeline">
                    <span class="circle-border"></span>
                    <label>2019</label>
                </div>
                <div class="single-timeline-content">
                    <img src="{{ asset('assets/images/about/employers-350x350.jpg') }}" alt="">
                    <h3>2019</h3>
                    <p>{{ __('ano_2019') }}
                    </p>
                </div>
            </div>
        </div> <!-- company-timeline-item -->
    </div><!-- .container end -->
</section><!-- End company timeline section -->


<!-- header why choose us section -->
<section class="why-choose-us-sec why-choose-inner section-padding section-bg-v2">
    <div class="container">
        <div class="row">
        <div class="col-lg-9 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="400ms">
                <div class="why-choose-content">
                    <h2 class="column-title2 column-title">{{ __('nt_porque_elegirnos') }}</h2>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="single-why-choose-list">
                                <i class="icon-why-choose-1"></i> 
                                <h3>{{ __('nt_certificaciones') }}</h3>
                                <p>{{ __('nt_certificaciones_texto') }}</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="single-why-choose-list">
                                <i class="icon-why-choose-2"></i> 
                                <h3>{{ __('nt_experiencia') }}</h3>
                                <p>{{ __('nt_experiencia_texto') }}</p>
                        </div>
                        </div>
                        <div class="col-md-6">
                            <div class="single-why-choose-list">
                                 <i class="icon-why-choose-3"></i> 
                                <h3>{{ __('nt_equipo_de_trabajo') }}</h3>
                                <p>{{ __('nt_equipo_de_trabajo_texto') }}</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="single-why-choose-list">
                                 <i class="icon-why-choose-4"></i>
                                <h3>{{ __('nt_oferta_productiva') }}</h3>
                                <p>{{ __('nt_oferta_productiva_texto') }}</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="single-why-choose-list">
                                 <i class="icon-why-choose-4"></i>
                                <h3>{{ __('nt_seguimiento_pos_venta') }}</h3>
                                <p>{{ __('nt_seguimiento_pos_venta_texto') }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 align-self-center wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="500ms">
                <div class="why-choose-inner-img">
                    <img src="{{ asset('assets/images/about/why-choose-us-inner.png') }}" alt="">
                </div>
            </div>
            
        </div><!-- row end-->
    </div><!-- .container end -->
</section><!-- End why choose us section -->

<!-- start banner section -->
<section class="promo-area-sec">
    <div class="container">
        <div class="promo-content-item">
            <div class="row">
                <div class="col-md-4 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="300ms">
                    
                        <div class="single-service">
                            <div class="service-img">
                                <img src="{{ asset('assets/images/services/mision.jpg') }}" alt="">
                                
                            </div>
                        </div>
                    
                </div>
                <div class="col-md-4 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="400ms">
                    <div class="single-service">
                        <div class="service-img">
                            <img src="{{ asset('assets/images/services/mision.jpg') }}" alt="">
                            
                        </div>
                    </div>
                </div>
                <div class="col-md-4 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="500ms">
                    <div class="single-service">
                        <div class="service-img">
                            <img src="{{ asset('assets/images/services/mision.jpg') }}" alt="">
                            
                        </div>
                    </div>
                </div>
            </div><!-- row end-->
        </div><!-- promo-content end-->
    </div><!-- .container end -->
</section><!-- End banner section -->

<!-- header team-v2 section -->
<section class="team-sec team-v2-sec v3 section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title-item section-title-v2-item">
                       
                        <h2 class="section-title">
                            <span class="xs-title">{{ __('nt_nuestros_expertos') }}</span>
                            {{ __('nt_reunase_con_nuestros_expertos') }}
                        </h2>
                        <h3 class="hidden-title">{{ __('nt_expertos') }}</h3>
                    </div>
                </div>
            </div><!-- .row end -->
            <div class="row">
               <div class="col-md-4">
                    <div class="single-team">
                        <div class="team-img">
                            <img src="{{ asset('assets/images/team/employers-350x350.jpg') }}" alt="">
                            <div class="team-author">
                                <h3>{{ __('nt_nombre_experto_1') }}</h3>
                                <p>{{ __('nt_ocupacion_experto_1') }}</p>
                            </div>
                            <div class="team-social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-google-plus"></i></a>
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                            </div>
                        </div>
                       
                    </div>
               </div>
               <div class="col-md-4">
                    <div class="single-team">
                        <div class="team-img">
                            <img src="{{ asset('assets/images/team/employers-350x350.jpg') }} " alt="">
                            <div class="team-author">
                                <h3>{{ __('nt_nombre_experto_2') }}</h3>
                                <p>{{ __('nt_ocupacion_experto_2') }}</p>
                            </div>
                            <div class="team-social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-google-plus"></i></a>
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                            </div>
                        </div>
                       
                    </div>
               </div>
               <div class="col-md-4">
                    <div class="single-team">
                        <div class="team-img">
                            <img src="{{ asset('assets/images/team/employers-350x350.jpg') }} " alt="">
                            <div class="team-author">
                                <h3>{{ __('nt_nombre_experto_3') }}</h3>
                                <p>{{ __('nt_ocupacion_experto_3') }}</p>
                            </div>
                            <div class="team-social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-google-plus"></i></a>
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                            </div>
                        </div>
                       
                    </div>
               </div>
            </div><!-- .row end -->
        </div><!-- .container end -->
    </section><!-- End team-v2 section -->


    
<!-- header ready to contact section -->
<section class="ready-to-contact section-padding" style="background: url({{ asset('./assets/images/about/ready-to-contact.jpg') }}) no-repeat center center /cover">
    <div class="container">
       <div class="col-lg-8 offset-lg-2">
           <div class="ready-to-contact-content">
               <h2>{{ __('nt_estas_listo') }}</h2>
               <p>{{ __('nt_estas_listo_texto') }}
                </p>
                <a href="#" class="xs-btn fill">{{ __('Contactenos') }}</a>
           </div>
       </div>
    </div><!-- .container end -->
</section><!-- End ready to contact section -->
@endsection