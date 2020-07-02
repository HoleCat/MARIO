@extends('layouts.client')

@section('content')
<section class="banner-inner-sec" style="background-image:url('assets/images/our-project/banner.jpg')">
	<div class="banner-table">
		<div class="banner-table-cell">
			<div class="container">
				<div class="banner-inner-content">
					<h2 class="banner-inner-title">{{ __('Clientes') }}</h2>
					<!--<ul class="xs-breadcumb">
						<li><a href="index.html"> Inicio  / </a>  clientes</li>
					</ul>-->
				</div>
			</div>
		</div>
	</div>
</section>
<!--breadcumb end here-->

<!-- start tips and tricks section -->
<section class="tips-tricks-sec section-padding">
        <div class="container">
    
            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <div class="single-tips-tricks">
                        <img src="assets/images/tips-img1.jpg" alt="">
                        <div class="tips-tricks-content">
                            <span>{{ __('nt_cliente_1_fecha') }}</span>
                            <h3>{{ __('nt_cliente_1') }}</h3>
                            <a href="#" class="read_more">{{ __('nt_leer_mas') }}<i class="icon icon-arrow-right"></i> </a>
                        </div>
                        <div class="tag-line">{{ __('nt_cliente_1') }}</div>
                    </div>
                </div>
    
                <div class="col-lg-3 col-md-6">
                    <div class="single-tips-tricks tips-tricks-item">
                        <img src="assets/images/tips-img2.jpg" alt="">
                        <div class="tips-tricks-content">
                            <span>{{ __('nt_cliente_2_fecha') }}</span>
                            <h4>{{ __('nt_cliente_2') }}</h4>
                            <a href="#" class="read_more">{{ __('nt_leer_mas') }}<i class="icon icon-arrow-right"></i> </a>
                        </div>
                        <div class="tag-line">{{ __('nt_cliente_2') }}</div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single-tips-tricks tips-tricks-item">
                        <img src="assets/images/tips-img3.jpg" alt="">
                        <div class="tips-tricks-content">
                            <span>{{ __('nt_cliente_3_fecha') }}</span>
                            <h4>{{ __('nt_cliente_3') }}</h4>
                            <a href="#" class="read_more">{{ __('nt_leer_mas') }}<i class="icon icon-arrow-right"></i> </a>
                        </div>
                        <div class="tag-line">{{ __('nt_cliente_3') }}</div>
                    </div>
                </div>
            </div>
        </div><!-- .container end -->
    </section><!-- End tips and tricks section -->

<!-- header ready to contact section -->
<section class="ready-to-contact section-padding" style="background: url(./assets/images/about/ready-to-contact.jpg) no-repeat center center /cover">
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
</section>
@endsection