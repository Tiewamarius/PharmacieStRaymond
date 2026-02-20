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
        <h2>Rechercher des produits</h2>

        <div class="search-bar-wrapper">
            <span class="search-icon"><i class="fas fa-magnifying-glass search-icon"></i></span>
            <input type="text" id="productSearch" placeholder="Rechercher un produit...">
        </div>

        <p class="results-count"><span id="count">10286</span> produits trouvés</p>

        <div class="products-grid" id="productsGrid">
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
@endsection