@extends('frontend.layout.app')
@section('title', 'Yönetim Kurulu | '.config('app.name'))
@section('content')
    @include('frontend.layout.header2')


    <section class="page-header page-header-modern bg-color-light-scale-1 page-header-lg">
        <div class="container container-xl-custom">
            <div class="row">
                <div class="col-md-12 align-self-center p-static order-2 text-center">
                    <h1 class="font-weight-bold text-dark">SASDER - Kongrelerimiz</h1>
                </div>
                <div class="col-md-12 align-self-center order-1">
                    <ul class="breadcrumb d-block text-center">
                        <li><a href="/">Anasayfa</a></li>
                        <li class="active">Kongrelerimiz</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <div class="container container-xl-custom py-4" >
        <div class="row">
            @foreach($Project as $item)
            <div class="col-lg-4 mb-4">
                <span class="thumb-info border-all thumb-info-show-button-hover">
                    <span class="thumb-info-wrapper">
                        <img src="https://picsum.photos/600/400/?blur=2" class="img-fluid" alt="">
                        <span class="thumb-info-title bg-transparent">
                            <span class="thumb-info-inner pb-3">{{ $item->title }} <em class="opacity-7">09/19/2022</em></span>
                            <a class="btn btn-light btn-sm text-dark" href="{{ route('kongredetay', $item->slug) }}" title="{{ $item->title }}">Detaylı Bilgi</a>
                        </span>
                    </span>
                </span>
            </div>
            @endforeach
        </div>

        @include('frontend.layout.uyeol')
    </div>

@endsection
