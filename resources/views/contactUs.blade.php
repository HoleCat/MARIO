@extends('layouts.client')

@section('content')
<section class="banner-inner-sec" style="background-image:url('assets/images/contact-banner.jpg')">
	<div class="banner-table">
		<div class="banner-table-cell">
			<div class="container">
				<div class="banner-inner-content">
					<h2 class="banner-inner-title">{{ __('Contactenos') }}</h2>
					<ul class="xs-breadcumb">
						<li><a href="index.html"> {{ __('Inicio') }}  / </a>  {{ __('contacto') }}</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</section>
<!--breadcumb end here-->
<!--  get in touch section -->
<!--<section class="xs-get-in-touch">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <div class="get-in-touch-cont text-center">
                    <h3><span class="light-text">Dejanos</span> tu mensaje</h3>
                    <p>La información ingresada por este medio tendrá un trato confidencial, <br/> bajo ninguna circunstancia se compartirá con terceros</p>
                </div>
            </div>
        </div>
    </div>
</section>-->

<!-- header contact section -->
<section class="xs-contact-infomation xs-contact-infomation-v2" style="padding-top: 100px">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 align-self-center">
                <div class="contact-info-group">
                    <i class="icon-address"></i>
                    <h4>{{ __('Nuestras Oficinas') }}</h4>
                    <span>{{ __('nt_avenida') }}</span>
                    <span class="text-color">{{ __('nt_pais') }}, {{ __('nt_provincia') }}, {{ __('nt_distrito') }}</span>
                </div><!-- .contact-info-group END -->
            </div>
            <div class="col-lg-3 col-md-6 align-self-center">
                <div class="contact-info-group">
                    <i class="icon-mail"></i>
                    <h4>{{ __('Email') }}</h4>
                    <a href="mailto:contact@example.com">{{ __('nt_correo_1') }}</a>
                    <a href="mailto:info@example.com">{{ __('nt_correo_2') }}</a>
                </div><!-- .contact-info-group END -->
            </div>
            <div class="col-lg-3 col-md-6 align-self-center">
                <div class="contact-info-group">
                    <i class="icon-call"></i>
                    <h4>{{ __('Llamanos') }}</h4>
                    <span>{{ __('nt_telefono') }}</span>
                    <span class="text-color">({{ __('Lun') }}- {{ __('Dom') }}) 8.am - 8pm</span>
                </div><!-- .contact-info-group END -->
            </div>
            <div class="col-lg-3 col-md-6 align-self-center">
                <div class="contact-info-group">
                    <i class="icon-call"></i>
                    <h4>{{ __('Hora de Trabajo') }}</h4>
                    <span>{{ __('Lun') }} - {{ __('Vie') }}  : 8am - 7pm</span>
                    <span>{{ __('Sábado') }}  : 10am - 4pm</span>
                    <span class="text-color">{{ __('Domingo') }}  : {{ __('Cerrado') }}</span>
                </div><!-- .contact-info-group END -->
            </div>
        </div>
    </div><!-- .container end -->
</section><!-- End contact section -->

<!-- header contact section -->
<section class="xs-contact-sec xs-contact-v2-sec">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <div class="xs-form-group">
                    <h4 class="xs-single-title text-center"><span class="light-text">{{ __('Deja') }}</span> {{ __('tu mensaje') }}</h4>
                    
                    <ul>
                    @if ($errors->any())
                        @foreach ($errors->all() as $error)
                            <li>{{$error}}</li><br>
                        @endforeach
                    @endif
                    </ul>
                    <form method="POST" action="{{ route('client.sendMessage') }}" class="xs-form">
                        @csrf
                        <div class="row">
                            <div class="col-lg-6">
                                <input type="text" class="form-control" name="name" placeholder="{{ __('Nombre') }}"
                                        value="{{ old('name') }}">
                            </div>
                            <div class="col-lg-6">
                                <input type="email" class="form-control" name="email" placeholder="{{ __('Email') }}"
                                        value="{{ old('email') }}">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <input type="number" class="form-control" name="phone-number"
                                       placeholder="{{ __('Teléfono') }}" value="{{ old('phone-number') }}">

                            </div>
                            <div class="col-lg-6">
                                <input type="text" class="form-control" name="Subject" placeholder="{{ __('Asunto') }}"
                                        value="{{ old('Subject') }}">
                            </div>
                        </div>

                        <textarea name="message" placeholder="{{ __('Mensaje') }}"
                                  class="form-control message-box" cols="30" rows="10"  value="{{ old('message') }}"></textarea>

                        <div class="xs-btn-wraper">
                            <input type="submit" class="xs-btn" value="{{ __('Enviar') }}">
                        </div>
                    </form>
                </div>
            </div><!-- col end -->
        </div><!-- .row end -->
    </div><!-- .container end -->
</section><!-- End contact section -->

<!-- start map section -->
<div class="xs-map-sec">
    <div class="xs-maps-wraper">
        <div class="map">
            <iframe src="https://maps.google.com/maps?width=100&amp;height=600&amp;hl=en&amp;q=Perú%Lima%2C%20molina+(My%20Business%20Name)&amp;ie=UTF8&amp;t=&amp;z=14&amp;iwloc=B&amp;output=embed"></iframe>
        </div>
    </div>
</div>
@endsection