<!DOCTYPE html>
<html lang="tr">
    <head>
        {!! SEOMeta::generate() !!}
        {!! OpenGraph::generate() !!}
        {!! Twitter::generate() !!}
        @include('frontend.layout.css')
        @yield('customCSS')

    </head>
    <body data-plugin-page-transition>
        <div class="body">

            <div class="notice-top-bar bg-primary" data-sticky-start-at="180">
                <button class="hamburguer-btn hamburguer-btn-light notice-top-bar-close kapat m-0 active"
                        data-set-active="false">
                    <span class="close">
                        <span></span>
                        <span></span>
                    </span>
                </button>
                <div class="container">
                    <div class="row justify-content-center py-2">
                        <div class="col-9 col-md-12 text-center">
                            <p class="text-color-light font-weight-semibold mb-0">Bu sitede çerezler kullanılmaktadır.
                                Sitede gezinmeye devam ederek çerezlerimizin kullanımını kabul etmiş olursunuz.
                                <button
                                    class="btn btn-primary-scale-2 btn-modern btn-px-2 btn-py-1 ms-1 me-2 notice-top-bar-close m-0"
                                    data-set-active="false">KABUL ET
                                </button>
                                <a href="/kurumsal/kvkk" class="text-white text-2 ml-2">Daha
                                    Fazla Bilgi
                                </a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>

                <div role="main" class="main">
                    @yield('content')
                </main>

            @include('frontend.layout.footer')
            @include('frontend.layout.js')
            @yield('customJS')
        </div>
    </body>
</html>
