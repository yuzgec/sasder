<footer  class="footer-top-border bg-color-light-scale-1">
    <div class="container container-xl-custom py-4">
        <div class="row py-5">
            <div class="col-12 col-md-3">
                <h5 class="text-3 text-color-dark mb-3">HAKKIMIZDA</h5>
                @foreach($Pages as $item)
                    <p class="mb-1">
                    <a class="text-4"href="{{ route('kurumsal', $item->slug) }}">
                            {{ $item->title }}
                        </a>
                    </p>
                @endforeach
                <p class="mb-1">
                <a class="text-4" href="{{ route('yonetimkurulu') }}">
                        Yönetim Kurulu
                    </a>
                </p>

            </div>
            <div class="col-12 col-md-3">
                <h5 class="text-3 text-color-dark mb-3">ETKİNLİKLER</h5>
                @foreach($Event_Categories as $item)
                    <p class="mb-1">
                        <a  class="text-4" href="{{ route('etkinlikler', [$item->slug] ) }}">
                            {{ $item->title }}
                        </a>
                    </p>
                @endforeach
            </div>

            <div class="col-12 col-md-3">
                <h5 class="text-3 text-color-dark mb-3">KONGRELERİMİZ</h5>
                @foreach($Project as $item)
                    <p class="mb-1">
                        <a href="{{ route('kongredetay', $item->slug) }}" class="text-4" title="{{ $item->title }}">
                            {{ $item->title }}
                        </a>
                    </p>
                @endforeach
           </div>
            <div class="col-md-6 col-lg-3">
                <h5 class="text-3 text-color-dark mb-3">SOSYAL MEDYA</h5>
                <ul class="header-social-icons social-icons">
                    <li class="social-icons-facebook"><a href="http://www.facebook.com/" target="_blank" title="Facebook"><i class="fab fa-facebook-f text-2"></i></a></li>
                    <li class="social-icons-twitter"><a href="http://www.twitter.com/" target="_blank" title="Twitter"><i class="fab fa-twitter text-2"></i></a></li>
                    <li class="social-icons-linkedin"><a href="http://www.linkedin.com/" target="_blank" title="Linkedin"><i class="fab fa-linkedin-in text-2"></i></a></li>
                    <li class="social-icons-instagram"><a href="http://www.instagram.com/" target="_blank" title="instagram"><i class="fab fa-instagram"></i></a></li>
                    <li class="social-icons-youtube"><a href="http://www.youtube.com/" target="_blank" title="youtube"><i class="fab fa-youtube"></i></a></li>

                </ul>
            </div>
        </div>
    </div>
    <div class="footer-copyright footer-top-border bg-color-light-scale-1">
        <div class="container container-xl-custom py-2">
            <div class="row py-4">
                <div class="col-lg-2 d-flex align-items-center justify-content-center justify-content-lg-start mb-2 mb-lg-0">
                    <a href="/" class="logo">
                        <img class="ml-5" alt="Sasder" src="https://sasder.org/media/logo/SASDER-Logo.png" height="48">
                    </a>
                </div>
                <div class="col-lg-6 d-flex align-items-center justify-content-start mb-4 mb-lg-0">
                    <p>© Copyright {{ date('Y') }}. Tüm Hakları Saklıdır.</p>
                </div>
                <div class="col-lg-4 d-flex align-items-center justify-content-center justify-content-lg-end">
                    <nav id="sub-menu">
                        <ul class="d-flex" style="list-style:none">
                            <li><i class="fas fa-angle-right"></i><a href="/" class="ms-1 text-decoration-none text-color-primary"> S.S.S.</a></li>
                            <li><i class="fas fa-angle-right"></i><a href="/" class="ms-1 text-decoration-none text-color-primary"> Site Haritası</a></li>
                            <li><i class="fas fa-angle-right"></i><a href="{{ route('iletisim') }}" class="ms-1 text-decoration-none text-color-primary"> İletişim</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</footer>
