@extends('frontend.layout.app')
@section('content')
    @include('backend.layout.alert')
    @include('frontend.layout.header')
    @include('frontend.layout.slider')

    <section class="section my-0 py-1 border-0 bg-transparent">
        <div class="container container-xl-custom pt-1 pb-2">
            <div class="row py-5">

                <div class="col-lg-6 mt-5 mt-lg-0">
                    <div class="ratio ratio-16x9">
                        <iframe frameborder="0" allowfullscreen="" src="//www.youtube.com/embed/j03RGdHFDEE?showinfo=0&amp;wmode=opaque"></iframe>
                    </div>
                </div>

                <div class="col-lg-6">
                    {{--<img src="/frontend/img/9sasbanner.jpg" alt="SASDER" class="img-fluid">--}}
                    <h4 class="text-primary text-2 font-weight-bold mb-2">SAĞLIK VE SİGORTA YÖNETİCİLERİ DERNEĞİ</h4>
                    <h3>SASDER SEKTÖR KONUŞUYOR</h3>

                    <div class="col-lg-6">
                        <a href="{{ route('etkinlikler') }}" class="btn btn-modern btn-dark mt-3">Etkinlikler</a>
                        <a href="{{route('iletisim')}}" class="btn btn-modern btn-primary mt-3">İletişim</a>
                    </div>
                </div>
            </div>
            @include('frontend.layout.uyeol')
        </div>

    </section>
{{--
    <section class="section my-0 border-0 bg-transparent">
        <div class="container container-xl-custom">
            <div class="row">
                <div class="col">
                    <h4 class="text-center">SPONSORLARIMIZ</h4>
                    <div class="owl-carousel owl-theme show-nav-title show-nav-title-both-sides" data-plugin-options="{'items': 6, 'margin': 10, 'loop': false, 'nav': true, 'dots': false}">
                            <div>
                                <img alt="" class="img-fluid rounded" src="https://sasder.org/media/logo/SASDER-Logo.png">
                            </div>
                            <div>
                                <img alt="" class="img-fluid rounded" src="https://sasder.org/media/logo/SASDER-Logo.png">
                            </div>
                            <div>
                                <img alt="" class="img-fluid rounded" src="https://sasder.org/media/logo/SASDER-Logo.png">
                            </div>
                            <div>
                                <img alt="" class="img-fluid rounded" src="https://sasder.org/media/logo/SASDER-Logo.png">
                            </div>
                            <div>
                                <img alt="" class="img-fluid rounded" src="https://sasder.org/media/logo/SASDER-Logo.png">
                            </div>
                            <div>
                                <img alt="" class="img-fluid rounded" src="https://sasder.org/media/logo/SASDER-Logo.png">
                            </div>
                            <div>
                                <img alt="" class="img-fluid rounded" src="https://sasder.org/media/logo/SASDER-Logo.png">
                            </div>
                            <div>
                                <img alt="" class="img-fluid rounded" src="https://sasder.org/media/logo/SASDER-Logo.png">
                            </div>
                            <div>
                                <img alt="" class="img-fluid rounded" src="https://sasder.org/media/logo/SASDER-Logo.png">
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </section>--}}


    <section class="section my-0 border-0 mt-2">
        <div class="container container-xl-custom">
            <div class="row justify-content-between align-items-center py-5">
                <div class="col-lg-3">
                    <h4 class="text-primary text-3 font-weight-bold mb-2">SASDER</h4>
                    <h3 class="mb-3">Kongrelerimiz</h3>
{{--
                    <p class="mb-5 mb-lg-0">Geçmiş dönemde yapılan kongrelerimiz</p>
--}}
                </div>
                <div class="col-lg-8">
                    <div class="carousel-half-full-width-wrapper carousel-half-full-width-right">
                        <div class="owl-carousel owl-theme carousel-half-full-width-right nav-style-1 nav-dark nav-font-size-lg mb-0" data-plugin-options="{'responsive': {'0': {'items': 1}, '768': {'items': 3}, '992': {'items': 3}, '1200': {'items': 3}}, 'loop': true, 'nav': true, 'dots': false, 'margin': 20}">
                            @foreach($Project as $item)
                            <div class="p-relative">
                                    <span class="thumb-info thumb-info-swap-content anim-hover-inner-wrapper rounded">
                                        <span class="thumb-info-wrapper overlay overlay-show overlay-gradient-bottom-content">
                                               <img class="img-fluid" src="{{ (!$item->getFirstMediaUrl('page')) ? '/resimyok.jpg' : $item->getFirstMediaUrl('page', 'thumb')}}" alt="{{ $item->title }}">
                                        </span>
                                    </span>
                                <h4 class="font-weight-bold mt-4">{{ $item->title }}</h4>

                                <a href="{{ route('kongredetay', $item->slug) }}" title="{{ $item->title }}" class="btn btn-arrow-effect-1 ws-nowrap text-primary text-2 bg-transparent border-0 px-0 text-uppercase stretched-link">
                                    Devamını Gör <i class="fas fa-arrow-right ms-2"></i>
                                </a>
                            </div>
                            @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="modal show" tabindex="-1" role="dialog" id="kongredetay">
        <div class="modal-dialog" role="document" id="banner">
            <div class="modal-content">
                <div class="modal-body">
                    <a href="{{ route('kongredetay', '10-ulusal-kongre#program') }}">
                        <img src="/10kongre.jpg" class="img-fluid">
                    </a>
                </div>
            </div>
        </div>
    </div>


@endsection

@section('customJS')
    <script type="text/javascript">
        $(window).on('load', function() {
            $('#kongredetay').modal('show');
        });
    </script>
@endsection

