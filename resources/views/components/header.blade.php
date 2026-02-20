<header class="header" id="header">
    <div class="garde-bar">
        <div class="garde-content">
            <span style="font-size:20px;">Nous sommes de garde</span>
            <a href="tel:+229 00 00 00 00 01" style="font-size:20px;">
                +229 00 00 00 00 01
            </a>
        </div>
    </div>
    <div class="container">
        <div class="header-content">

            {{-- LOGO --}}
            <div class="logo">
                <div class="logo-icon">
                    <a href="{{ url('/') }}" class="image-link">
                        <img src="{{ asset('img/votre-image.jpg') }}" alt="LOGO" class="hero-img">
                    </a>
                </div>
            </div>

            {{-- NAVIGATION --}}
            <nav class="nav" id="nav">
                <a href="{{ url('/') }}" class="nav-link">Accueil</a>
                <a href="{{ url('/services') }}" class="nav-link">Services</a>
                <a href="{{ url('/produits') }}" class="nav-link">Produits</a>
                <a href="{{ url('/conseil') }}" class="nav-link">Conseil</a>
                <a href="{{ url('/contact') }}" class="nav-link">Contact</a>
                <a href="{{ url('/index.html-pharm_Gard') }}" class="nav-link garde-link">Pharmacie de Garde</a>

                {{-- AUTH LINKS --}}
                @if (Route::has('login'))
                @auth
                <a href="{{ url('/dashboard') }}" class="nav-link">
                    Mon compte
                </a>

                <form method="POST" action="{{ route('logout') }}" style="display:inline;">
                    @csrf
                    <button type="submit" class="nav-link" style="background:none;border:none;cursor:pointer;">
                        Quitter
                    </button>
                </form>
                @else
                <a href="{{ route('login') }}" class="nav-link">
                    Log in
                </a>

                @if (Route::has('register'))
                <a href="{{ route('register') }}" class="nav-link">
                    Register
                </a>
                @endif
                @endauth
                @endif

            </nav>

            {{-- MOBILE BUTTON --}}
            <button class="mobile-menu-btn" id="mobileMenuBtn">
                <span></span>
                <span></span>
                <span></span>
            </button>

        </div>
    </div>
</header>