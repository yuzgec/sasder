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
                <div role="main" class="main">
                    @yield('content')
                </main>

            @include('frontend.layout.footer')
            @include('frontend.layout.js')
            @yield('customJS')
        </div>
    </body>
</html>
