<nav class="collapse">
    <ul class="nav nav-pills" id="mainNav">
        <li class="dropdown">
            <a class="dropdown-item dropdown-toggle" href="{{ route('home') }}" title="Anasayfa">
                Anasayfa
            </a>
        </li>

        <li class="dropdown">
            <a class="dropdown-item dropdown-toggle" href="#">
                Kurumsal
            </a>
            <ul class="dropdown-menu">
                @foreach($Pages as $item)
                <li>
                    <a class="dropdown-item" href="{{ route('kurumsal', $item->slug) }}">
                        {{ $item->title }}
                    </a>
                </li>
                @endforeach
                <li>
                    <a class="dropdown-item" href="{{ route('yonetimkurulu') }}">
                        Yönetim Kurulu
                    </a>
                </li>
            </ul>
        </li>

        <li class="dropdown">
            <a class="dropdown-item dropdown-toggle" href="#">
                Etkinlikler
            </a>
            <ul class="dropdown-menu">
                <li>
                    <a class="dropdown-item" href="/etkinlikler?name=Eğitim Programları">
                        Eğitim Programları
                    </a>
                </li>
                <li>
                    <a class="dropdown-item" href="/etkinlikler?name=Toplantılar">
                        Toplantılar
                    </a>
                </li>
                <li>
                    <a class="dropdown-item" href="/etkinlikler?name=Seminerler">
                        Seminerler
                    </a>
                </li>
                <li>
                    <a class="dropdown-item" href="/etkinlikler?name=Paneller">
                        Paneller
                    </a>
                </li>
            </ul>
        </li>

        <li class="dropdown">
            <a class="dropdown-item dropdown-toggle" href="#">
                Kongrelerimiz
            </a>
            <ul class="dropdown-menu">
                @foreach($Project as $item)
                    <li>
                        <a class="dropdown-item" href="{{ route('kongredetay', $item->slug) }}">
                            {{ $item->title }}
                        </a>
                    </li>
                @endforeach

            </ul>
        </li>

        <li class="dropdown">
            <a class="dropdown-item dropdown-toggle" href="{{ route('video') }}">
                Video Galeri
            </a>
        </li>

        <li class="dropdown">
            <a class="dropdown-item dropdown-toggle" href="{{ route('iletisim') }}">
                İletişim
            </a>
        </li>
    </ul>
</nav>
