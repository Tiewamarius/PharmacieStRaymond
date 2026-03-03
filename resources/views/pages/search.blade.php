@extends('index')
@section('content')
<div class="shop-container">
    <aside class="sidebar">
        <h3>Catégories</h3>
        <ul class="category-list">
            <li class="active" data-category="tous">Toutes les catégories</li>
            <li data-category="beauté">ANTIPYRETIQUE</li>
            <li data-category="bebe"> ANTIIBIOTIQUES</li>
            <li data-category="sans-ordonnance">MED. SANS ORDONNANCE</li>
            <li data-category="medicaments">MEDICAMENTS</li>
            <li data-category="veterinaire">VETERINAIRE</li>
            <li data-category="divers">DIVERS</li>
        </ul>
    </aside>

    <main class="products-section">
        <div class="mobile-header" style="display: flex; align-items: center; gap: 15px;">
            <a href="javascript:history.back()" class="back-btn" style="color: #333;"><i class="fas fa-arrow-left"></i></a>
            <h2>Rechercher des produits</h2>
        </div>

        <div class="search-bar-wrapper">
            <input type="text" id="productSearch" placeholder="Rechercher un produit...">
            <button type="submit" class="search-icon-btn">
                <i class="fas fa-magnifying-glass"></i>
            </button>
        </div>

        <p class="results-count"><span id="count">10286</span> produits trouvés</p>

        <div class="products-grid" id="productsGrid">
            <div class="product-card">
                <div class="image-container">
                    <span class="badge-vedette">Vedette</span>
                    <img src="{{ asset('Img/Medoc.jpg') }}" alt="Biberon">
                </div>
                <div class="product-info">
                    <h4>Myocalm Fort douleurs musculaires</h4>
                    <p class="price">3 500 FCFA</p>
                </div>
            </div>

            <div class="product-card">
                <div class="image-container">
                    <span class="badge-vedette">Vedette</span>
                    <img src="{{ asset('images/biberon-bleu.jpg') }}" alt="Biberon">
                </div>
                <div class="product-info">
                    <h4>212K BIBERON BLEU 120ML</h4>
                    <p class="price">3 500 FCFA</p>
                </div>
            </div>

            <div class="product-card">
                <div class="image-container">
                    <span class="badge-vedette">Vedette</span>
                    <img src="{{ asset('images/biberon-bleu.jpg') }}" alt="Biberon">
                </div>
                <div class="product-info">
                    <h4>212K BIBERON BLEU 120ML</h4>
                    <p class="price">3 500 FCFA</p>
                </div>
            </div>

            <div class="product-card">
                <div class="image-container">
                    <span class="badge-vedette">Vedette</span>
                    <img src="{{ asset('images/biberon-bleu.jpg') }}" alt="Biberon">
                </div>
                <div class="product-info">
                    <h4>212K BIBERON BLEU 120ML</h4>
                    <p class="price">3 500 FCFA</p>
                </div>
            </div>
        </div>
    </main>


</div>

<!-- Section pub et promo -->
<div class="hero-banner">
    <div class="banner-slider">

        <!-- Slide -->
        <div class="banner-slide active">
            <div class="banner-content container">

                <div class="banner-left">
                    <img src="{{ asset("Img/banner.jpg")}}" alt="Ergynuit Produits">
                </div>

                <div class="banner-right">
                    <h1>ERGYNUIT<sup>®</sup></h1>
                    <h2>LE SOMMEIL DONT VOUS RÊVEZ</h2>

                    <div class="brand-box">
                        <img src="{{ asset("Backendtheme/assets/images/icons8-online-pharmacy-64.png")}}" alt="Nutergia">
                        <a href="#" class="cta-btn">J’en profite</a>
                    </div>
                </div>

            </div>
        </div>

    </div>

    <!-- Navigation dots -->
    <div class="slider-dots">
        <span class="dot active"></span>
        <span class="dot"></span>
    </div>
</div>
@endsection