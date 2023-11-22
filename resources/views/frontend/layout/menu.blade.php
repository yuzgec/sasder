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
            <a class="dropdown-item dropdown-toggle" href="{{ route('etkinlikler') }}">
                Etkinlikler
            </a>
        </li>

        <li class="dropdown">
            <a class="dropdown-item dropdown-toggle" href="#">
                Kongrelerimiz
            </a>
            <ul class="dropdown-menu">
                @foreach($Project as $item)
                    <li>
                        <a class="dropdown-item" href="{{ route('kongredetay', $item->slug) }}" title="{{ $item->title }}">
                            {{ $item->title }}
                        </a>
                    </li>
                @endforeach

            </ul>
        </li>

        <li class="dropdown">
            <a class="dropdown-item dropdown-toggle" href="{{ route('sertifika') }}">
                E-Sertifika
            </a>
        </li>
        <li class="dropdown">
            <a class="dropdown-item dropdown-toggle" href="{{ route('iletisim') }}">
                İletişim
            </a>
        </li>
    </ul>
</nav>
