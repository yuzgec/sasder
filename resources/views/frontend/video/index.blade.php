@extends('frontend.layout.app')
@section('title', 'Video Galeri | '.config('app.name'))
@section('content')
    @include('frontend.layout.header2')


    <section class="page-header page-header-modern bg-color-light-scale-1 page-header-lg">
        <div class="container container-xl-custom">
            <div class="row">
                <div class="col-md-12 align-self-center p-static order-2 text-center">
                    <h1 class="font-weight-bold text-dark">Video Galeri</h1>
                </div>
                <div class="col-md-12 align-self-center order-1">
                    <ul class="breadcrumb d-block text-center">
                        <li><a href="/">Anasayfa</a></li>
                        <li class="active">Video Galeri</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <div class="container container-xl-custom py-4">
        <div class="row">
            @foreach($All as $item)
            <div class="col-6 mb-2">
                <div class="ratio ratio-16x9">
                    <iframe frameborder="0" allowfullscreen="" src="//www.youtube.com/embed/{{ $item->video_url }}?showinfo=0&amp;wmode=opaque"></iframe>
                </div>
                <h4 class="birsatir p-1">{{ $item->title }}</h4>
            </div>
            @endforeach
        </div>
    </div>
@endsection
