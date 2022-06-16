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
                    <h4 class="text-primary text-2 font-weight-bold mb-2">SAĞLIK VE SİGORTA YÖNETİCİLERİ DERNEĞİ</h4>
                    <h3>SASDER SEKTÖR KONUŞUYOR</h3>

                    <div class="col-lg-6">
                        <a href="{{ route('etkinlikler') }}" class="btn btn-modern btn-dark mt-3">Etkinlikler</a>
                        <a href="{{route('iletisim')}}" class="btn btn-modern btn-primary mt-3">İletişim</a>
                    </div>
                </div>

            </div>
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

    @include('frontend.layout.uyeol')

    <section class="section my-0 border-0 mt-2">

        <div class="container container-xl-custom">

            <div class="row justify-content-between align-items-center py-5">
                <div class="col-lg-3">
                    <h4 class="text-primary text-3 font-weight-bold mb-2">SASDER</h4>
                    <h3 class="mb-3">Kongrelerimiz</h3>
                    <p class="mb-5 mb-lg-0">Geçmiş dönemde yapılan kongrelerimiz</p>
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

{{--
    <section class="section my-0 border-0 bg-transparent">
        <div class="container container-xl-custom py-5">
            <div class="row">
                <div class="col">
                    <h3 class="mb-3">ETKİNLİKLER</h3>
                </div>
            </div>
            <div class="row pt-2">
                <div class="col-lg-6 mb-4">
                    <div class="row align-items-center p-relative">
                        <div class="col-lg-6">
                            <img src="https://picsum.photos/500/300/?blur=2" class="img-fluid rounded" alt="Lorem Ipsum Dolor" />
                        </div>
                        <div class="col-lg-6 mt-4 mt-lg-0">
                            <span class="d-block text-color-grey font-weight-semibold positive-ls-2 text-1 text-uppercase">10 Mayıs 2022</span>
                            <h4 class="font-weight-bold text-5 text-color-hover-primary mb-2">ETKİNLİK ADI</h4>
                            <p class="text-3 mb-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit quisque rutrum pellentesqu... </p>
                            <a href="#" class="btn btn-arrow-effect-1 ws-nowrap text-primary text-2 bg-transparent border-0 px-0 text-uppercase stretched-link">Devamını Oku<i class="fas fa-arrow-right ms-2"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mt-5 mt-lg-0 mb-4">
                    <div class="row align-items-center p-relative">
                        <div class="col-lg-6">
                            <img src="https://picsum.photos/500/300/?blur=3" class="img-fluid rounded" alt="Lorem Ipsum Dolor" />
                        </div>
                        <div class="col-lg-6 mt-4 mt-lg-0">
                            <span class="d-block text-color-grey font-weight-semibold positive-ls-2 text-1 text-uppercase">10 Mayıs 2022</span>
                            <h4 class="font-weight-bold text-5 text-color-hover-primary mb-2">ETKİNLİK ADI</h4>
                            <p class="text-3 mb-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit quisque rutrum pellentesqu... </p>
                            <a href="#" class="btn btn-arrow-effect-1 ws-nowrap text-primary text-2 bg-transparent border-0 px-0 text-uppercase stretched-link">Devamını Oku<i class="fas fa-arrow-right ms-2"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 mb-4">
                    <div class="row align-items-center p-relative">
                        <div class="col-lg-6">
                            <img src="https://picsum.photos/500/300/?blur=4" class="img-fluid rounded" alt="Lorem Ipsum Dolor" />
                        </div>
                        <div class="col-lg-6 mt-4 mt-lg-0">
                            <span class="d-block text-color-grey font-weight-semibold positive-ls-2 text-1 text-uppercase">10 Mayıs 2022</span>
                            <h4 class="font-weight-bold text-5 text-color-hover-primary mb-2">ETKİNLİK ADI</h4>
                            <p class="text-3 mb-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit quisque rutrum pellentesqu... </p>
                            <a href="#" class="btn btn-arrow-effect-1 ws-nowrap text-primary text-2 bg-transparent border-0 px-0 text-uppercase stretched-link">Devamını Oku<i class="fas fa-arrow-right ms-2"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mt-5 mt-lg-0 mb-4">
                    <div class="row align-items-center p-relative">
                        <div class="col-lg-6">
                            <img src="https://picsum.photos/500/300/?blur=5" class="img-fluid rounded" alt="Lorem Ipsum Dolor" />
                        </div>
                        <div class="col-lg-6 mt-4 mt-lg-0">
                            <span class="d-block text-color-grey font-weight-semibold positive-ls-2 text-1 text-uppercase">10 Mayıs 2022</span>
                            <h4 class="font-weight-bold text-5 text-color-hover-primary mb-2">ETKİNLİK ADI</h4>
                            <p class="text-3 mb-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit quisque rutrum pellentesqu... </p>
                            <a href="#" class="btn btn-arrow-effect-1 ws-nowrap text-primary text-2 bg-transparent border-0 px-0 text-uppercase stretched-link">Devamını Oku<i class="fas fa-arrow-right ms-2"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>--}}

@endsection

