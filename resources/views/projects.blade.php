@extends('layouts.client')
@section('content')
<section class="banner-inner-sec" style="background-image:url('assets/images/our-project/banner.jpg')">
	<div class="banner-table">
		<div class="banner-table-cell">
			<div class="container">
				<div class="banner-inner-content">
					<h2 class="banner-inner-title">{{_('nt_galeria_proyectos_titulo')}}</h2>
					<!--<ul class="xs-breadcumb">
						<li><a href="index.html"> Inicio  / </a>  proyectos</li>
					</ul>-->
				</div>
			</div>
		</div>
	</div>
</section>
<!--breadcumb end here-->


<!-- header team section -->
<section class="gallery-sec recent-work-sec our-project-sec section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="recent-folio-menu xs-mb-50">
                        <ul class="work-folio-menu">
                            <li class="active filter"  data-filter=".all">{{_('nt_todo')}}</li>
                            <li class="filter" data-filter=".category1">{{_('nt_categoria_1')}}</li>
                            <li class="filter" data-filter=".category2">{{_('nt_categoria_2')}}</li>
                            <li class="filter" data-filter=".category3">{{_('nt_categoria_3')}}</li>
                            <li class="filter" data-filter=".category4">{{_('nt_categoria_4')}}</li>
                        </ul>
    
                    </div>
                </div>
            </div><!-- row end-->
    
          <div class="xs-portfolio-grid grid">
                <div class="xs-portfolio-grid-item category1 grid-item all">
                    <a href="#popup_1" class="xs-single-portfolio-item xs-image-popup" data-effect="mfp-zoom-in">
                        <img src="assets/images/our-project/project_1.jpg" alt="">
                        <div class="single-project-content">
                            <div class="xs-image-popup-icon">
                                <i class="icon icon-plus"></i>
                            </div>
                            <h3 class="xs-single-title">{{_('nt_proyecto_1')}}</h3>
                            <p>
                                    lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod 
                                    tempor incididunt ut labore et dolore magna aliqua.
                            </p>
                        </div>
                    </a><!-- .xs-single-portfolio-item END -->
                    <div id="popup_1" class="container xs-gallery-popup-item mfp-hide">
                        <div class="row">
                            <div class="col-lg-5 xs-padding-0">
                                <div class="xs-popup-img">
                                    <img src="assets/images/our-project/project_1.jpg" alt="">
                                </div>
                            </div>
                            <div class="col-lg-7">
                                <div class="xs-popup-content">
                                    <h2 class="hidden-title">{{_('nt_info_proyecto')}}</h2>
                                    <h3>{{_('nt_proyecto_1')}}</h3>
                                    <div class="row">
                                        <div class="col-lg-5">
                                            <ul class="xs-popup-left-content">
                                                    <li>
                                                        <i class="icon icon-calendar-full"></i>
                                                        <label>{{_('nt_fecha_proyecto')}}</label>
                                                        <span>{{_('nt_proyecto_1_ano')}}</span>
                                                    </li>
                                                    <li>
                                                        <i class="icon icon-tags"></i>
                                                        <label>Categoria</label>
                                                        <span>Tostado,</span>
                                                    </li>
                                                    <li>
                                                        <i class="icon icon-user2"></i>
                                                        <label>Cliente</label>
                                                        <span>Mr. Jordan, Alemania</span>
                                                    </li>
                                                    <li>
                                                        <i class="icon icon-invest"></i>
                                                        <label>Precio</label>
                                                        <span>$ 500</span>
                                                    </li>
                                                    <li>
                                                        <i class="icon icon-map-marker2"></i>
                                                        <label>Ubicación</label>
                                                        <span>Alemania,
                                                        </span>
                                                    </li>
                                                </ul>
                                        </div>
                                        <div class="col-lg-7">
                                            <div class="xs-popup-right-content">
                                                    <p>
                                                            lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod 
                                                            tempor incididunt ut labore et dolore magna aliqua.
                                                    </p>
                                                    <blockquote>
                                                        “lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod 
                                                        tempor incididunt ut labore et dolore magna aliqua.”
                                                    </blockquote>
                                                    <p>
                                                            lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod 
                                                            tempor incididunt ut labore et dolore magna aliqua..
                                                    </p>
                                                    <a href="#" class="xs-btn">LINK DEL PROYECTO</a>
                                                </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- .xs-portfolio-grid-item END -->
    
                <div class="xs-portfolio-grid-item category2 grid-item all">
                    <a href="#popup_2" class="xs-single-portfolio-item xs-image-popup"  data-effect="mfp-zoom-in">
                        <img src="assets/images/our-project/project_3.jpg" alt="">
                        <div class="single-project-content">
                            <div class="xs-image-popup-icon">
                                <i class="icon icon-plus"></i>
                            </div>
                            <h3 class="xs-single-title">{{_('nt_proyecto_2')}}</h3>
                            <p>
                                    lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod 
                                    tempor incididunt ut labore et dolore magna aliqua.
                            </p>
                        </div>
                    </a><!-- .xs-single-portfolio-item END -->
                    <div id="popup_2" class="container xs-gallery-popup-item mfp-hide">
                        <div class="row">
                            <div class="col-lg-5 xs-padding-0">
                                <div class="xs-popup-img">
                                     <img src="assets/images/our-project/project_1.jpg" alt="">
                                </div>
                            </div>
                            <div class="col-lg-7">
                                <div class="xs-popup-content">
                                    <h2 class="hidden-title">{{_('nt_info_proyecto')}}</h2>
                                    <h3>{{_('nt_proyecto_2')}}</h3>
                                    <div class="row">
                                        <div class="col-lg-5">
                                            <ul class="xs-popup-left-content">
                                                    <li>
                                                        <i class="icon icon-calendar-full"></i>
                                                        <label>{{_('nt_fecha_proyecto')}}</label>
                                                        <span>{{_('nt_proyecto_2_ano')}}</span>
                                                    </li>
                                                    <li>
                                                        <i class="icon icon-tags"></i>
                                                        <label>Categoria</label>
                                                        <span>Tostado,</span>
                                                    </li>
                                                    <li>
                                                        <i class="icon icon-user2"></i>
                                                        <label>Cliente</label>
                                                        <span>Mr. Jordan, Alemania</span>
                                                    </li>
                                                    <li>
                                                        <i class="icon icon-invest"></i>
                                                        <label>Precio</label>
                                                        <span>$ 500</span>
                                                    </li>
                                                    <li>
                                                        <i class="icon icon-map-marker2"></i>
                                                        <label>Ubicación</label>
                                                        <span>Alemania,
                                                        </span>
                                                    </li>
                                                </ul>
                                        </div>
                                        <div class="col-lg-7">
                                                <div class="xs-popup-right-content">
                                                        <p>
                                                                lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod 
                                                                tempor incididunt ut labore et dolore magna aliqua.
                                                        </p>
                                                        <blockquote>
                                                            “lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod 
                                                            tempor incididunt ut labore et dolore magna aliqua.”
                                                        </blockquote>
                                                        <p>
                                                                lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod 
                                                                tempor incididunt ut labore et dolore magna aliqua..
                                                        </p>
                                                        <a href="#" class="xs-btn">LINK DEL PROYECTO</a>
                                                    </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- .xs-portfolio-grid-item END -->
                <div class="xs-portfolio-grid-item category3 grid-item all">
      
                    <a href="#popup_3" class="xs-single-portfolio-item xs-image-popup"  data-effect="mfp-zoom-in">
                        <img src="assets/images/our-project/project_2.jpg" alt="">
                        <div class="single-project-content">
                            <div class="xs-image-popup-icon">
                                <i class="icon icon-plus"></i>
                            </div>
                            <h3 class="xs-single-title">{{_('nt_proyecto_3')}}</h3>
                            <p>
                                    lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod 
                                    tempor incididunt ut labore et dolore magna aliqua.
                            </p>
                        </div>
                    </a><!-- .xs-single-portfolio-item END -->
                    <div id="popup_3" class="container xs-gallery-popup-item mfp-hide">
                        <div class="row">
                            <div class="col-lg-5 xs-padding-0">
                                <div class="xs-popup-img">
                                    <img src="assets/images/our-project/project_1.jpg" alt="">
                                </div>
                            </div>
                            <div class="col-lg-7">
                                <div class="xs-popup-content">
                                    <h2 class="hidden-title">{{_('nt_info_proyecto')}}</h2>
                                    <h3>{{_('nt_proyecto_3')}}</h3>
                                    <div class="row">
                                        <div class="col-lg-5">
                                            <ul class="xs-popup-left-content">
                                                <li>
                                                    <i class="icon icon-calendar-full"></i>
                                                    <label>{{_('nt_fecha_proyecto')}}</label>
                                                    <span>{{_('nt_proyecto_3_ano')}}</span>
                                                </li>
                                                <li>
                                                    <i class="icon icon-tags"></i>
                                                    <label>Categoria</label>
                                                    <span>Tostado,</span>
                                                </li>
                                                <li>
                                                    <i class="icon icon-user2"></i>
                                                    <label>Cliente</label>
                                                    <span>Mr. Jordan, Alemania</span>
                                                </li>
                                                <li>
                                                    <i class="icon icon-invest"></i>
                                                    <label>Precio</label>
                                                    <span>$ 500</span>
                                                </li>
                                                <li>
                                                    <i class="icon icon-map-marker2"></i>
                                                    <label>Ubicación</label>
                                                    <span>Alemania,
                                                    </span>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-lg-7">
                                            <div class="xs-popup-right-content">
                                                <p>
                                                        lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod 
                                                        tempor incididunt ut labore et dolore magna aliqua.
                                                </p>
                                                <blockquote>
                                                    “lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod 
                                                    tempor incididunt ut labore et dolore magna aliqua.”
                                                </blockquote>
                                                <p>
                                                        lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod 
                                                        tempor incididunt ut labore et dolore magna aliqua..
                                                </p>
                                                <a href="#" class="xs-btn">LINK DEL PROYECTO</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- .xs-portfolio-grid-item END -->
                <div class="xs-portfolio-grid-item category4 grid-item all">
                    <a href="#popup_4" class="xs-single-portfolio-item xs-image-popup" data-effect="mfp-zoom-in">
                        <img src="assets/images/our-project/project_4.jpg" alt="">
                        <div class="single-project-content">
                            <div class="xs-image-popup-icon">
                                <i class="icon icon-plus"></i>
                            </div>
                            <h3 class="xs-single-title">{{_('nt_proyecto_4')}}</h3>
                            <p>
                                    lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod 
                                    tempor incididunt ut labore et dolore magna aliqua.
                            </p>
                        </div>
                    </a><!-- .xs-single-portfolio-item END -->
                    <div id="popup_4" class="container xs-gallery-popup-item mfp-hide">
                        <div class="row">
                            <div class="col-lg-5 xs-padding-0">
                                <div class="xs-popup-img">
                                     <img src="assets/images/our-project/project_1.jpg" alt="">
                                </div>
                            </div>
                            <div class="col-lg-7">
                                <div class="xs-popup-content">
                                    <h2 class="hidden-title">{{_('nt_info_proyecto')}}</h2>
                                    <h3>{{_('nt_proyecto_4')}}</h3>
                                    <div class="row">
                                        <div class="col-lg-5">
                                                <ul class="xs-popup-left-content">
                                                        <li>
                                                            <i class="icon icon-calendar-full"></i>
                                                            <label>{{_('nt_fecha_proyecto')}}</label>
                                                            <span>{{_('nt_proyecto_4_ano')}}</span>
                                                        </li>
                                                        <li>
                                                            <i class="icon icon-tags"></i>
                                                            <label>Categoria</label>
                                                            <span>Tostado,</span>
                                                        </li>
                                                        <li>
                                                            <i class="icon icon-user2"></i>
                                                            <label>Cliente</label>
                                                            <span>Mr. Jordan, Alemania</span>
                                                        </li>
                                                        <li>
                                                            <i class="icon icon-invest"></i>
                                                            <label>Precio</label>
                                                            <span>$ 500</span>
                                                        </li>
                                                        <li>
                                                            <i class="icon icon-map-marker2"></i>
                                                            <label>Ubicación</label>
                                                            <span>Alemania,
                                                            </span>
                                                        </li>
                                                    </ul>
                                        </div>
                                        <div class="col-lg-7">
                                            <div class="xs-popup-right-content">
                                                <p>
                                                    Darkness dominion dominion her body creature appear make replenish.
                                                    Bring shall him waters saw creepeth creepeth land divided.
                                                </p>
                                                <blockquote>
                                                    “Each which life god all living form fruitful their fowl shed a stars he
                                                    left”
                                                </blockquote>
                                                <p>
                                                    Fowl she'd a stars he let. Creepeth deep sixth you is signs creature.
                                                    Earth divide great whales.
                                                </p>
                                                <a href="#" class="xs-btn">PROJECT LINK</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- .xs-portfolio-grid-item END -->
    
            </div>
        </div><!-- .container end -->
    </section><!-- End team section -->
    
    <!-- header ready to contact section -->
    <section class="ready-to-contact section-padding" style="background: url(./assets/images/about/ready-to-contact.jpg) no-repeat center center /cover">
        <div class="container">
           <div class="col-lg-8 offset-lg-2">
               <div class="ready-to-contact-content">
                   <h2>{{_('nt_estas_listo')}}</h2>
                   <p>{{_('nt_estas_listo_texto')}}
                    </p>
                    <a href="#" class="xs-btn fill">{{_('Contactenos')}}</a>
               </div>
           </div>
        </div><!-- .container end -->
    </section><!-- End ready to contact section -->
@endsection