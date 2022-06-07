@extends('frontend.layout.app')
@section('title', 'Yönetim Kurulu | '.config('app.name'))
@section('content')
    @include('frontend.layout.header2')


    <section class="page-header page-header-modern bg-color-light-scale-1 page-header-lg">
        <div class="container container-xl-custom">
            <div class="row">
                <div class="col-md-12 align-self-center p-static order-2 text-center">
                    <h1 class="font-weight-bold text-dark">{{ $Detay->title }}</h1>
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

    <div class="container container-xl-custom py-4  mt-2 resimler"  >

        <div class="row">
            <div class="col-md-{{ $Days->count() > 0 ? 8 : 12 }}">
                {!! $Detay->desc !!}
            </div>

                <div class="col-lg-4">
                    <div class="tabs">
                        <ul class="nav nav-tabs">
                            @foreach($Days as $item)
                            <li class="nav-item">
                                <a class="nav-link @if ($loop->first) active @endif" href="#degistir{{ seo($item->id) }}" data-bs-toggle="tab">{{ $item->speaker_day }}</a>
                            </li>
                           @endforeach
                        </ul>
                        <div class="tab-content">
                            @foreach($Days as $item)

                            <div id="degistir{{ seo($item->id) }}" class="tab-pane @if ($loop->first) active @endif">

                               <table class="table table-bordered table-striped">
                                    <tbody>
                                    @foreach($Konusmacilar->where('speaker_day', $item->speaker_day) as $row)
                                    <tr>
                                        <td>  {{ $row->speaker_name }}
                                        </td>
                                        <td class="justify-content-center">{{ $row->speaker_subject }}</td>
                                    </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                            @endforeach

                        </div>

                    </div>
                </div>

                <div class="col-md-12">

                <div class="masonry-loader masonry-loader-showing">
                    <div class="masonry" data-plugin-masonry data-plugin-options="{'itemSelector': '.masonry-item'}" >

                        <div class="lightbox"
                             data-plugin-options="{'delegate': 'a', 'type': 'image', 'gallery': {'enabled': true}, 'mainClass': 'mfp-with-zoom', 'zoom': {'enabled': true, 'duration': 300}}">
                            @foreach($Detay->getMedia('gallery') as $item)
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

@endsection
@section('CustomJS')
    <script>
        $(document).ready(function() {
            $("img").addClass("img-fluid");
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

