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
                        <a href="{{ route('kongredetay', $item->slug) }}" title="{{ $item->title }}">
                        <span class="thumb-info border-all thumb-info-show-button-hover">
                            <span class="thumb-info-wrapper">
                                <img class="img-fluid" src="{{ (!$item->getFirstMediaUrl('page')) ? '/resimyok.jpg' : $item->getFirstMediaUrl('page', 'thumb')}}" alt="{{ $item->title }}">
                            </span>
                        </span>
                        </a>
                    </div>

            @endforeach
        </div>

        @include('frontend.layout.uyeol')
    </div>

@endsection
