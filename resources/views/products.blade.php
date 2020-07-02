@extends('layouts.client')
@section('content')
<section class="banner-inner-sec" style="background-image:url('assets/images/our-project/banner.jpg')">
	<div class="banner-table">
		<div class="banner-table-cell">
			<div class="container">
				<div class="banner-inner-content">
					<h2 class="banner-inner-title">{{_('nt_productos')}}</h2>
					<!--<ul class="xs-breadcumb">
						<li><a href="index.html"> Inicio  / </a>  productos</li>
					</ul>-->
				</div>
			</div>
		</div>
	</div>
</section>
<!--breadcumb end here-->
<!-- start about section -->
<section class="about-v2-sec section-padding about-sec">
        <div class="container">
    
            <div class="row">
                <div class="col-lg-2 col-md-12">
                    <div class="nav flex-column about-tabs-menu" id="v-pills-tab" role="tablist"
                         aria-orientation="vertical">
                        <a class="active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab"
                           aria-controls="v-pills-home" aria-selected="true">
                            <i class="icon-planting-and-growth"></i>
                            {{_('nt_producto_1')}}
                        </a>
                        <a class="" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab"
                           aria-controls="v-pills-profile" aria-selected="false">
                            <i class="icon-caring"></i>
                            {{_('nt_producto_2')}}
                        </a>
                        <a class="" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab"
                           aria-controls="v-pills-messages" aria-selected="false">
                            <i class="icon-grass"></i>
                            {{_('nt_producto_3')}}
                        </a>
                        <a class="" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages_v2" role="tab"
                           aria-controls="v-pills-messages" aria-selected="false">
                            <i class="icon-caring"></i>
                            {{_('nt_producto_4')}}
                        </a>
                    </div>
                </div>
                <div class="col-lg-10 col-md-12">
                    <div class="about-tabs-item">
                        <div class="tab-content" id="v-pills-tabContent">
                            <div class="tab-pane show active" id="v-pills-home" role="tabpanel"
                                 aria-labelledby="v-pills-home-tab">
                                <div class="row">
                                    <div class="col-md-5">
                                        <div class="about-tabs-img">
                                            <img src="assets/images/about/about_1.jpg" alt="">
                                        </div>
                                    </div>
                                    <div class="col-md-7 align-self-center">
                                        <div class="about-tabs-content">
                                            <h3>{{_('nt_producto_1')}}</h3>
                                            <p>
                                                {{_('nt_producto_1_descripcion')}}
                                            </p>
                                            <ul>
                                                <li>
                                                    <i class="icon icon-checked2"></i>
                                                    {{_('nt_producto_1_caracteristica_1')}}
                                                </li>
                                                <li>
                                                    <i class="icon icon-checked2"></i>
                                                    {{_('nt_producto_1_caracteristica_2')}}
                                                </li>
                                                <li>
                                                    <i class="icon icon-checked2"></i>
                                                    {{_('nt_producto_1_caracteristica_3')}}
                                                </li>
                                                <li>
                                                    <i class="icon icon-checked2"></i>
                                                    {{_('nt_producto_1_caracteristica_4')}}
                                                </li>
                                            </ul>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="v-pills-profile" role="tabpanel"
                                 aria-labelledby="v-pills-profile-tab">
                                <div class="row">
                                    <div class="col-md-5">
                                        <div class="about-tabs-img">
                                            <img src="assets/images/about/about_1.jpg" alt="">
                                        </div>
                                    </div>
                                    <div class="col-md-7 align-self-center">
                                        <div class="about-tabs-content">
                                            <h4>{{_('nt_producto_2')}}</h4>
                                            <p>
                                                {{_('nt_producto_2_descripcion')}}
                                            </p>
                                            <ul>
                                                <li>
                                                    <i class="icon icon-checked2"></i>
                                                    {{_('nt_producto_2_caracteristica_1')}}
                                                </li>
                                                <li>
                                                    <i class="icon icon-checked2"></i>
                                                    {{_('nt_producto_2_caracteristica_2')}}
                                                </li>
                                                <li>
                                                    <i class="icon icon-checked2"></i>
                                                    {{_('nt_producto_2_caracteristica_3')}}
                                                </li>
                                                <li>
                                                    <i class="icon icon-checked2"></i>
                                                    {{_('nt_producto_2_caracteristica_4')}}
                                                </li>
                                            </ul>
                                        
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="v-pills-messages" role="tabpanel"
                                 aria-labelledby="v-pills-messages-tab">
                                <div class="row">
                                    <div class="col-md-5">
                                        <div class="about-tabs-img">
                                            <img src="assets/images/about/about_1.jpg" alt="">
                                        </div>
                                    </div>
                                    <div class="col-md-7 align-self-center">
                                        <div class="about-tabs-content">
                                            <h4>{{_('nt_producto_3')}}</h4>
                                            <p>
                                                {{_('nt_producto_3_descripcion')}}
                                            </p>
                                            <ul>
                                                <li>
                                                    <i class="icon icon-checked2"></i>
                                                    {{_('nt_producto_3_caracteristica_1')}}
                                                </li>
                                                <li>
                                                    <i class="icon icon-checked2"></i>
                                                    {{_('nt_producto_3_caracteristica_2')}}
                                                </li>
                                                <li>
                                                    <i class="icon icon-checked2"></i>
                                                    {{_('nt_producto_3_caracteristica_3')}}
                                                </li>
                                                <li>
                                                    <i class="icon icon-checked2"></i>
                                                    {{_('nt_producto_3_caracteristica_4')}}
                                                </li>
                                            </ul>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="v-pills-messages_v2" role="tabpanel"
                                 aria-labelledby="v-pills-messages-tab">
                                <div class="row">
                                    <div class="col-md-5">
                                        <div class="about-tabs-img">
                                            <img src="assets/images/about/about_1.jpg" alt="">
                                        </div>
                                    </div>
                                    <div class="col-md-7 align-self-center">
                                        <div class="about-tabs-content">
                                            <h4>{{_('nt_producto_4')}}</h4>
                                            <p>
                                                {{_('nt_producto_4_descripcion')}}
                                            </p>
                                            <ul>
                                                <li>
                                                    <i class="icon icon-checked2"></i>
                                                    {{_('nt_producto_4_caracteristica_1')}}
                                                </li>
                                                <li>
                                                    <i class="icon icon-checked2"></i>
                                                    {{_('nt_producto_4_caracteristica_2')}}
                                                </li>
                                                <li>
                                                    <i class="icon icon-checked2"></i>
                                                    {{_('nt_producto_4_caracteristica_3')}}
                                                </li>
                                                <li>
                                                    <i class="icon icon-checked2"></i>
                                                    {{_('nt_producto_4_caracteristica_4')}}
                                                </li>
                                            </ul>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- row end -->
        </div><!-- .container end -->
    </section>
@endsection