@extends('frontend.layout.app')
@section('title', $Detail->title .' Yönetim Kurulu Detay | '.config('app.name'))
@section('content')
    @include('frontend.layout.header2')
    <section class="page-header page-header-modern bg-color-light-scale-1 page-header-lg">
        <div class="container container-xl-custom">
            <div class="row">
                <div class="col-md-12 align-self-center p-static order-2 text-center">
                    <h1 class="font-weight-bold text-dark">{{ $Detail->title }}</h1>
                </div>
                <div class="col-md-12 align-self-center order-1">
                    <ul class="breadcrumb d-block text-center">
                        <li><a href="{{ route('home') }}">Anasayfa</a></li>
                        <li><a href="{{ route('yonetimkurulu') }}">Yönetim Kurulu</a></li>
                        <li class="active">{{ $Detail->title }}</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <div class="container container-xl-custom py-4" >
        <div class="row mb-2">
                <div class="col-lg-7 mb-3">
                    <div class="overflow-hidden">
                        <h2 class="text-color-dark font-weight-bold text-12 mb-2 pt-0 mt-0 line-height-2 appear-animation animated maskUp appear-animation-visible"
                            data-appear-animation="maskUp" data-appear-animation-delay="300" style="animation-delay: 300ms;">{{ $Detail->title }}</h2>
                    </div>
                    <div class="overflow-hidden mb-3">
                        <p class="font-weight-bold text-primary text-uppercase mb-0 appear-animation animated maskUp appear-animation-visible"
                           data-appear-animation="maskUp" data-appear-animation-delay="500" style="animation-delay: 500ms;">{{ $Detail->master }}</p>
                    </div>


                    {{ $Detail->short }}
                    <hr>
                    {!! $Detail->desc !!}
                </div>

                <div class="col-lg-5 mb-3 d-flex flex-column justify-content-center align-items-center">
                    <img src="{{(!$Detail->getFirstMediaUrl('page')) ? '/backend/resimyok.jpg': $Detail->getFirstMediaUrl('page')}}"
                         alt="{{ $Detail->title }}"
                         class="img-fluid border-radius">
                    <ul class="social-icons mt-3">
                        <li class="social-icons-instagram"><a href="https://www.instagram.com/{{ $Detail->master }}" target="_blank" title="instagram"><i class="fab fa-instagram"></i></a></li>
                        <li class="social-icons-youtube"><a href="https://www.youtube.com/{{ $Detail->youtube }}" target="_blank" title="youtube"><i class="fab fa-youtube"></i></a></li>
                        <li class="social-icons-twitter"><a href="https://www.twitter.com/{{ $Detail->master }}" target="_blank" title="twitter"><i class="fab fa-twitter"></i></a></li>
                        <li class="social-icons-linkedin"><a href="https://www.linkedin.com/{{ $Detail->master }}" target="_blank" title="Linkedin"><i class="fab fa-linkedin-in"></i></a></li>
                    </ul>
                </div>
        </div>
        @include('frontend.layout.uyeol')
    </div>

@endsection
