@extends('layouts.client')

@section('content')
<section class="banner-inner-sec" style="background-image:url('assets/images/services/service-banner-v1.jpg')">
	<div class="banner-table">
		<div class="banner-table-cell">
			<div class="container">
				<div class="banner-inner-content">
					<h2 class="banner-inner-title">Servicios</h2>
					<ul class="xs-breadcumb">
						<li><a href="index.html"> Inicio  / </a> Servicios</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</section>
<!--breadcumb end here-->
<!--  service inner section -->
<section class="service-inner-sec single-service-sec section-padding">
    <div class="container">
        <div class="row">
             <div class="col-lg-3 col-md-4">
                <div class="service-sidebar">
                    <div class="widgets">
                        <h3 class="widget-title"><span>Servicio</span> Tostado</h3>
                        <ul class="services-link-item">
                            <li class="active"><a href="#">Todo</a></li>
                            <li><a href="#">Service 1</a></li>
                            <li><a href="#">Service 2</a></li>
                            <li><a href="#">Service 3</a></li>
                            <li><a href="#">Service 4</a></li>
                            <li><a href="#">Service 5</a></li>
                            <li><a href="#">Service 6</a></li>
                        </ul>
                    </div><!-- widgets -->

                    <div class="widgets">
                        <h3 class="widget-title"><span>Nuestro</span> brochures</h3>
                        <ul class="brochures-list">
                            <li><a href="#"><i class="fa fa-file-pdf-o"></i>Descargar .pdf</a></li>
                            <li><a href="#"><i class="fa fa-file-word-o"></i>Decargar .doc</a></li>
                        </ul>
                    </div><!-- widgets -->

                     <div class="widgets testmonial-widget owl-carousel">
                        <div class="single-testmonial-widget">
                            <i class="fa fa-thumbs-o-up testmonial-icon"></i>
                            <p>
                                    orem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod 
                                    tempor incididunt ut labore et dolore magna aliqua.
                            </p>
                            <div class="author-rating">
                                <i class="icon icon-star"></i>
                                <i class="icon icon-star"></i>
                                <i class="icon icon-star"></i>
                                <i class="icon icon-star"></i>
                                <i class="icon icon-star"></i>
                                <label>- Mario Incio</label>
                            </div>
                        </div>
                        <div class="single-testmonial-widget">
                            <i class="fa fa-thumbs-o-up testmonial-icon"></i>
                            <p>
                                "orem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod 
                                tempor incididunt ut labore et dolore magna aliqua.”
                            </p>
                            <div class="author-rating">
                                <i class="icon icon-star"></i>
                                <i class="icon icon-star"></i>
                                <i class="icon icon-star"></i>
                                <i class="icon icon-star"></i>
                                <i class="icon icon-star"></i>
                                <label>- José </label>
                            </div>
                        </div>
                        <div class="single-testmonial-widget">
                            <i class="fa fa-thumbs-o-up testmonial-icon"></i>
                            <p>
                                "orem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod 
                                tempor incididunt ut labore et dolore magna aliqua.”
                            </p>
                            <div class="author-rating">
                                <i class="icon icon-star"></i>
                                <i class="icon icon-star"></i>
                                <i class="icon icon-star"></i>
                                <i class="icon icon-star"></i>
                                <i class="icon icon-star"></i>
                                <label>- Karla Torres</label>
                            </div>
                        </div>
                    </div><!-- widgets -->

                    <div class="widgets call-to-action">
                        <h3>Necesitas ayuda?</h3>
                        <p>
                                lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod 
                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, 
                                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                        </p>
                        <a href="#" class="xs-btn sm-btn">Contactenos</a>
                    </div><!-- widgets -->
                </div><!-- srvice sidebar -->
            </div><!-- col end -->
            <div class="col-lg-9 col-md-8">
                <div class="main-single-service-content">
                    <div class="single-service-post-content">
                        <h2 class="column-title column-title2"><span>Serivicio</span> Nombre del servicio</h2>
                        <img src="assets/images/services/service_1.jpg" alt="">
                        <p>
                                lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod 
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, 
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                        </p>
                        <p>
                                lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod 
                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, 
                                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                        </p>
                    </div>

                    <div class="row key-benifits-item xs-mb-60">
                        <div class="col-lg-6">
                            <div class="key-benifits-content">
                                <h3 class="xs-post-title"><span class="light-text">Lorem</span> Beneficios del servicio</h3>
                                <ul>
                                    <li><i class="fa fa-caret-right"></i>lorem ipsum dolor sit amet.</li>
                                    <li><i class="fa fa-caret-right"></i>lorem ipsum dolor sit amet.</li>
                                    <li><i class="fa fa-caret-right"></i>lorem ipsum dolor sit amet.</li>
                                    <li><i class="fa fa-caret-right"></i>lorem ipsum dolor sit amet. </li>
                                    <li><i class="fa fa-caret-right"></i>lorem ipsum dolor sit amet </li>
                                </ul>
                            </div>
                        </div><!-- col end-->
                        <div class="col-lg-6">
                            <div class="key-benifits-img">
                                <img src="assets/images/services/service_2.jpg" alt="">
                            </div>
                        </div>
                    </div>

                    <div class="row populer-question-item">
                        <div class="col-lg-6">
                            <h3 class="xs-service-title"><span class="light-text">Tips</span></h3>
                            <div class="single-services-item">
                                <img src="assets/images/services/5.jpg" alt="">
                                <span class="date-info">20 May 2020</span>
                                <h4 class="xs-post-title"><a href="single-service-v1.html">lorem ipsum dolor sit amet.</a></h4>
                                <p>
                                        lorem ipsum dolor sit amet.
                                </p>
                                <a href="" class="readMore">Leer mas</a>
                            </div>
                        </div><!-- col end-->

                        <div class="col-lg-6">
                            <h3 class="xs-service-title"><span class="light-text">Preguntas</span> recurrentes</h3>
                            <div class="faq-list-item" id="accordion">
                                <div class="faq-single-item">
                                    <div class="card-header" id="headingOne">
                                        <h4>
                                           
                                            <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne"
                                                    aria-expanded="true" aria-controls="collapseOne">
                                                    <span>01</span>
                                                   Porqué elegir nuestro servicio?
                                            </button>
                                        </h4>
                                    </div>

                                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                                        data-parent="#accordion">
                                        <div class="card-body">
                                            <p>
                                                    lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod 
                                                    tempor incididunt ut labore et dolore magna aliqua.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="faq-single-item">
                                    <div class="card-header" id="headingTwo">
                                        <h4>
                                            
                                            <button class="btn btn-link collapsed" data-toggle="collapse"
                                                    data-target="#collapseTwo" aria-expanded="false"
                                                    aria-controls="collapseTwo">
                                                    <span>02</span>
                                                    Porqué elegir nuestro servicio?
                                            </button>
                                        </h4>
                                    </div>
                                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                                        data-parent="#accordion">
                                        <div class="card-body">
                                            <p>
                                                    lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod 
                                                    tempor incididunt ut labore et dolore magna aliqua.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="faq-single-item">
                                    <div class="card-header" id="headingThree">
                                        <h4>
                                            
                                            <button class="btn btn-link collapsed" data-toggle="collapse"
                                                    data-target="#collapseThree" aria-expanded="false"
                                                    aria-controls="collapseThree">
                                                <span>03</span>
                                                Porqué elegir nuestro servicio?
                                            </button>
                                        </h4>
                                    </div>
                                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                                        data-parent="#accordion">
                                        <div class="card-body">
                                            <p>
                                                    lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod 
                                                    tempor incididunt ut labore et dolore magna aliqua.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="faq-single-item">
                                    <div class="card-header" id="headingFour">
                                        <h4>
                                            
                                            <button class="btn btn-link collapsed" data-toggle="collapse"
                                                    data-target="#collapseFour" aria-expanded="false"
                                                    aria-controls="collapseFour">
                                                    <span>04</span>
                                                    Porqué elegir nuestro servicio?
                                            </button>
                                        </h4>
                                    </div>
                                    <div id="collapseFour" class="collapse" aria-labelledby="headingFour"
                                        data-parent="#accordion">
                                        <div class="card-body">
                                            <p>
                                                    lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod 
                                                    tempor incididunt ut labore et dolore magna aliqua.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- col end-->
                    </div>
                </div>
            </div><!-- col end-->
           
        </div><!-- row end-->
    </div><!-- .container end -->
</section>
@endsection