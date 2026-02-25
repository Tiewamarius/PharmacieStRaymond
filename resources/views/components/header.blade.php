<header class="header" id="header">
    <div class="garde-bar">
        <div class="garde-content">
            <div class="garde-marquee">
                <span>
                    📢 Nous sommes de garde —
                    <a href="tel:+2290000000001">
                        +229 00 00 00 00 01
                    </a>
                </span>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="header-content">

            <!-- BURGER -->
            <button class="mobile-menu-btn" id="mobileMenuBtn">
                <span></span>
                <span></span>
                <span></span>
            </button>

            <!-- LOGO -->
            <div class="logo">
                <a href="{{ url('/') }}">
                    <img src="{{ asset('img/votre-image.jpg') }}" alt="LOGO" class="hero-img">
                </a>
            </div>
            <div class="header-right">
                <!-- NAVIGATION (SEULEMENT LIENS) -->
                <nav class="nav" id="nav">
                    <a href="{{ url('/') }}" class="nav-link">Accueil</a>
                    <a href="{{ url('/services') }}" class="nav-link">Services</a>
                    <a href="{{ url('/p-search_res-ltas') }}" class="nav-link">Produits</a>
                    <!-- <a href="{{ url('/contact') }}" class="nav-link">Contact</a> -->
                    <a href="{{ url('/index.html-pharm_Gard') }}" class="nav-link garde-link">
                        Pharmacie de Garde
                    </a>
                </nav>

                <!-- ACTIONS (EN DEHORS DU NAV) -->
                <div class="header-actions">

                    @auth
                    <a href="{{ route('dashboard') }}" class="action-item">
                        <i class="fa-regular fa-user"></i>
                        <span class="textCompt">{{Auth::User()->name}}</span>
                    </a>

                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="action-item btn-link">
                            <i class="fa-solid fa-right-from-bracket"></i>
                        </button>
                    </form>
                    @else
                    <a href="{{ route('login') }}" class="action-item">
                        <i class="fa-regular fa-user"></i>
                        <span class="textCompt">compte</span>
                    </a>
                    @endauth

                    <a href="{{ route('contact') }}" class="action-item">
                        <i class="fa-solid fa-headset"></i>
                    </a>

                    <a href="{{route('wishlist.index')}}" class="action-item">
                        <i class="fa-regular fa-heart"></i>
                    </a>

                    @php
                    $count = session('cart') ? array_sum(array_column(session('cart'), 'quantity')) : 0;
                    @endphp

                    <a href="{{ route('cart.index') }}" class="action-item cart-icon">
                        <i class="fa-solid fa-cart-shopping"></i>

                        @if($count > 0)
                        <span class="cart-count">{{ $count }}</span>
                        @endif
                    </a>

                </div>
            </div>


        </div>
    </div>
</header>