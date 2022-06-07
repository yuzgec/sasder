<header id="header" class="header-transparent header-transparent-dark-bottom-border header-transparent-dark-bottom-border-1 header-effect-shrink" data-plugin-options="{'stickyEnabled': false, 'stickyEffect': 'shrink', 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': false, 'stickyChangeLogo': true, 'stickyStartAt': 30, 'stickyHeaderContainerHeight': 70}">
    <div class="header-body border-top-0 bg-dark box-shadow-none">
        <div class="header-top">
            <div class="container container-xl-custom">
                <div class="header-row ">
                    <div class="header-column justify-content-start">
                        <div class="header-row">
                            <ul class="header-social-icons social-icons social-icons-clean">
                                <li class="social-icons-facebook"><a href="http://www.facebook.com/sasder" target="_blank" title="Facebook"><i class="fab fa-facebook-f text-white"></i></a></li>
                                <li class="social-icons-twitter"><a href="http://www.twitter.com/sasdersasder" target="_blank" title="Twitter"><i class="fab fa-twitter text-white"></i></a></li>
                                <li class="social-icons-linkedin"><a href="http://www.linkedin.com/company/sasder" target="_blank" title="Linkedin"><i class="fab fa-linkedin-in text-white"></i></a></li>
                                <li class="social-icons-instagram"><a href="http://www.instagram.com/sasder.official/" target="_blank" title="instagram"><i class="fab fa-instagram text-white"></i></a></li>
                                <li class="social-icons-youtube"><a href="http://www.youtube.com/channel/UCG-ElXveLd4LWMjYXj6EoUQ" target="_blank" title="youtube"><i class="fab fa-youtube text-white"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="header-column justify-content-end">
                        <div class="header-row">
                            <ul class="list list-unstyled list-inline mb-0">
                                <li class="list-inline-item mb-0">
                                    <i class="icons icon-user text-white text-4 position-relative top-4 me-1"></i>
                                    <a href="uyelik" class="text-white font-weight-semibold text-decoration-none text-2">
                                        Giriş Yap / Üye Ol
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-container container container-xl-custom">
            <div class="header-row">
                <div class="header-column">
                    <div class="header-row">
                        <div class="header-logo">
                            <a href="{{ route('home') }}"  title="Anasayfa">
                                <img alt="Sasder" width="250" data-sticky-height="40" src="/frontend/img/sasderlogob.png">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="header-column justify-content-end">
                    <div class="header-row">
                        <div class="header-nav header-nav-links header-nav-dropdowns-dark header-nav-light-text order-2 order-lg-1">
                            <div class="header-nav-main header-nav-main-mobile-dark header-nav-main-square header-nav-main-dropdown-no-borders header-nav-main-effect-2 header-nav-main-sub-effect-1">
                               @include('frontend.layout.menu')
                            </div>
                            <a href="{{ route('uyelik') }}"  title="Üye Ol" class="btn text-white text-color-hover-primary  btn-xl btn-outline btn-rounded btn-light d-none d-sm-block text-1 ms-3 font-weight-bold text-uppercase">Üye Ol</a>

                            <button class="btn header-btn-collapse-nav" data-bs-toggle="collapse" data-bs-target=".header-nav-main nav">
                                <i class="fas fa-bars"></i>
                            </button>
                        </div>
                        <div class="header-nav-features header-nav-features-light header-nav-features-no-border header-nav-features-lg-show-border order-1 order-lg-2">
                            <div class="header-nav-feature header-nav-features-search d-inline-flex">
                                <a href="#" class="header-nav-features-toggle text-decoration-none" data-focus="headerSearch"><i class="fas fa-search header-nav-top-icon"></i></a>
                                <div class="header-nav-features-dropdown header-nav-features-dropdown-mobile-fixed" id="headerTopSearchDropdown">
                                    <form role="search" action="{{ route('home') }}" method="get">
                                        <div class="simple-search input-group">
                                            <input class="form-control text-1" id="headerSearch" name="q" type="search" value="" placeholder="Arama...">
                                            <button class="btn" type="submit">
                                                <i class="fas fa-search header-nav-top-icon"></i>
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
