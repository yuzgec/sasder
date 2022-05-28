@extends('frontend.layout.app')
@section('title', 'Yönetim Kurulu | '.config('app.name'))
@section('content')
    @include('frontend.layout.header2')

    <div class="container container-xl-custom py-4" >

        <div class="row mb-2">
            <div class="col-12">
                <div class="text-center">
                    <h2 class="font-weight-bold text-7 mt-2 mb-3">SAĞLIK VE SİGORTA YÖNETİCİLERİ DERNEĞİ (SASDER) <br>YÖNETİM KURULU</h2>
                </div>

                <div class="row mb-2">
                    @foreach($All as $item)
                    <div class="col-lg-3 mb-3">
                        <span class="thumb-info border-all thumb-info-show-button-hover">
                            <span class="thumb-info-wrapper">
                               <img class="img-fluid" src="{{ (!$item->getFirstMediaUrl('page')) ? '/resimyok.jpg' : $item->getFirstMediaUrl('page', 'thumb')}}" alt="{{ $item->title }}">
                                <span class="thumb-info-title bg-transparent">
                                    <span class="thumb-info-inner pb-3">{{ $item->title }} <em class="opacity-7">{{ $item->master }}</em></span>
                                    <a class="btn btn-light btn-sm text-dark" href="yonetim-detay.php?name=Levent Yiğit&title=Yönetim Kurulu Başkanı">Detaylı Bilgi</a>
                                </span>
                            </span>
                        </span>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>

        @include('frontend.layout.uyeol')
    </div>

@endsection
