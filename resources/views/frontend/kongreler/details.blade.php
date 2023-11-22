@extends('frontend.layout.app')
@section('title', $Detay->title. ' SASDER Ulusal Kongre | '.config('app.name'))
@section('content')
    @include('frontend.layout.header2')
    <section class="page-header page-header-modern bg-color-light-scale-1 page-header-lg">
        <div class="container container-xl-custom">
            <div class="row">
                <div class="col-md-12 align-self-center p-static order-2 text-center">
                    <h1 class="font-weight-bold text-dark">SASDER {{ $Detay->title }}</h1>
                </div>
                <div class="col-md-12 align-self-center order-1">
                    <ul class="breadcrumb d-block text-center">
                        <li><a href="/">Anasayfa</a></li>
                        <li><a href="{{route('kongrelerimiz')}}">Kongrelerimiz</a></li>
                        <li class="active">{{ $Detay->title }}</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <div class="container container-xl-custom py-4  mt-2 resimler">
        @include('frontend.layout.uyeol')
        <div class="row mt-3">


            @if($Detay->id == 10)
            <div class="col-md-12">
                <div class="tabs tabs-bottom tabs-center tabs-simple">
                    <ul class="nav nav-tabs">
                        <li class="nav-item active">
                            <a class="nav-link active" href="#genel" data-bs-toggle="tab">Genel Bilgiler</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#program" data-bs-toggle="tab">Bilimsel Program</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#ikikasim" data-bs-toggle="tab">2 Kasım 2023</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#uckasim" data-bs-toggle="tab">3 Kasım 2023</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#dortkasim" data-bs-toggle="tab">4 Kasım 2023</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#gala" data-bs-toggle="tab">GALA</a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane active" id="genel">
                            <div class="">
                                {!! $Detay->tab1 !!}
                             </div>
                        </div>
                        <div class="tab-pane" id="program">
                            <div class="">
                                {!! $Detay->tab4 !!}
                            </div>
                        </div>

                        <div class="tab-pane" id="ikikasim">
                            <div class="">
                                <h2 class="font-weight-bold">2 Kasım 2023 Fotoğrafları</h2>
                                <div class="lightbox" data-plugin-options="{'delegate': 'a', 'type': 'image', 'gallery': {'enabled': true}, 'mainClass': 'mfp-with-zoom', 'zoom': {'enabled': true, 'duration': 300}}">
                                    @foreach($Detay->getMedia('2kasim') as $item)
                                        <a class="masonry-item p-2" href="{{ $item->getUrl() }}">
                                            <img src="{{ $item->getUrl() }}" alt="{{ $Detay->title }}" class="img-fluid">
                                        </a>
                                    @endforeach
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane" id="uckasim">
                            <div class="">
                                <h2 class="font-weight-bold">3 Kasım 2023 Fotoğrafları</h2>

                                <div class="masonry-loader masonry-loader-showing">
                                    <div class="masonry" data-plugin-masonry data-plugin-options="{'itemSelector': '.masonry-item'}" >

                                        <div class="lightbox"
                                             data-plugin-options="{'delegate': 'a', 'type': 'image', 'gallery': {'enabled': true}, 'mainClass': 'mfp-with-zoom', 'zoom': {'enabled': true, 'duration': 300}}">
                                            @foreach($Detay->getMedia('3kasim') as $item)
                                                <a class="masonry-item p-2" href="{{ $item->getUrl() }}">
                                                    <img src="{{ $item->getUrl() }}" alt="{{ $Detay->title }}" class="img-fluid">
                                                </a>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane" id="dortkasim">
                            <div class="">
                                <h2 class="font-weight-bold">4 Kasım 2023 Fotoğrafları</h2>

                                <div class="masonry-loader masonry-loader-showing">
                                    <div class="masonry" data-plugin-masonry data-plugin-options="{'itemSelector': '.masonry-item'}" >

                                        <div class="lightbox"
                                             data-plugin-options="{'delegate': 'a', 'type': 'image', 'gallery': {'enabled': true}, 'mainClass': 'mfp-with-zoom', 'zoom': {'enabled': true, 'duration': 300}}">
                                            @foreach($Detay->getMedia('4kasim') as $item)
                                                <a class="masonry-item p-2" href="{{ $item->getUrl() }}">
                                                    <img src="{{ $item->getUrl() }}" alt="{{ $Detay->title }}" class="img-fluid">
                                                </a>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane" id="gala">
                            <div class="">
                                <h2 class="font-weight-bold">GALA Fotoğrafları</h2>

                                <div class="masonry-loader masonry-loader-showing">
                                    <div class="masonry" data-plugin-masonry data-plugin-options="{'itemSelector': '.masonry-item'}" >

                                        <div class="lightbox"
                                             data-plugin-options="{'delegate': 'a', 'type': 'image', 'gallery': {'enabled': true}, 'mainClass': 'mfp-with-zoom', 'zoom': {'enabled': true, 'duration': 300}}">
                                            @foreach($Detay->getMedia('gala') as $item)
                                                <a class="masonry-item p-2" href="{{ $item->getUrl() }}">
                                                    <img src="{{ $item->getUrl() }}" alt="{{ $Detay->title }}" class="img-fluid">
                                                </a>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            @endif

            <div class="col-md-12">
                {!! $Detay->desc !!}
            </div>

        </div>
    </div>
{{--    <div class="modal fade" id="largeModal" tabindex="-1" role="dialog" aria-labelledby="largeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="largeModalLabel">{{ $Cookies->title }}</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">
                    {!! $Cookies->desc !!}
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">Kapat</button>
                </div>
            </div>
        </div>
    </div>--}}
@endsection

@section('CustomJS')
    <script>

        $('input[type="checkbox"]').on('change', function(){
            this.value ^= 1;
        });

        $(document).ready(function() {
            $("img").addClass("img-fluid");
            $("table").addClass("table table-hovered table-striped table-bordered table-responsive");
        })
    </script>
    @endsection
@section('CustomCSS')
    <style>
        table tr td{
            font-size: 10px !important;
        }
        iframe{
            width: 100% !important;
        }
    </style>
@endsection

