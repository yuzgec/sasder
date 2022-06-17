@extends('frontend.layout.app')
@section('title', $Detay->title.' | Kurumsal Sayfalar')
@section('content')
    @include('frontend.layout.header2')
    <section class="page-header page-header-modern bg-color-light-scale-1 page-header-lg">
        <div class="container container-xl-custom">
            <div class="row">
                <div class="col-md-12 align-self-center p-static order-2 text-center">
                    <h1 class="font-weight-bold text-dark">{{$Detay->title}}</h1>
                </div>
                <div class="col-md-12 align-self-center order-1">
                    <ul class="breadcrumb d-block text-center">
                        <li><a href="{{ route('home') }}">Anasayfa</a></li>
                        <li class="active">Kurumsal</li>
                        <li class="active">{{$Detay->title}}</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <div class="container container-xl-custom py-4">
        @include('frontend.layout.uyeol')
        <div class="row mb-2">
            <div class="col">

                {!! $Detay->desc !!}

            </div>
        </div>

    </div>


@endsection


