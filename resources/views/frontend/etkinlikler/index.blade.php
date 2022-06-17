@extends('frontend.layout.app')
@section('title', 'Etkinlikler | '.config('app.name'))
@section('content')
    @include('frontend.layout.header2')
    <section class="page-header page-header-modern bg-color-light-scale-1 page-header-lg">
        <div class="container container-xl-custom">
            <div class="row">
                <div class="col-md-12 align-self-center p-static order-2 text-center">
                    <h1 class="font-weight-bold text-dark">Etkinlikler</h1>
                </div>
                <div class="col-md-12 align-self-center order-1">
                    <ul class="breadcrumb d-block text-center">
                        <li><a href="{{ route('home') }}">Anasayfa</a></li>
                        <li class="active">Etkinlikler</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
@endsection
