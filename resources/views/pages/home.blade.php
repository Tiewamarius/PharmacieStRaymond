@extends('index')
@section('content')

<!-- Hero Section -->
<section class="hero" id="accueil">
    <div class="container">
        <div class="hero-content">
            <div class="hero-text">
                <span class="hero-label">Bienvenue à la</span>
                <h1 class="hero-title">Pharmacie St Raymond</h1>
                <p class="hero-description">Votre partenaire santé de confiance à Agata. Nous vous accompagnons au quotidien avec des conseils personnalisés et des produits de qualité.</p>
                <div class="hero-search-container">
                    <div class="search-wrapper">
                        <input id="searchInput" type="text" class="search-input" placeholder="Rechercher un médicament ou un service...">
                        <button type="submit" class="search-icon-btn">
                            <i class="fas fa-magnifying-glass"></i>
                        </button>
                        <div id="searchResults" class="search-results-dropdown" style="display: none;"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Services Section -->
<section class="services" id="services">
    <div class="container">
        <div class="section-header">
            <span class="section-label">Nos Services</span>
            <h2 class="section-title">À Votre Service</h2>
            <p class="section-description">Une gamme complète de services pharmaceutiques pour votre bien-être</p>
        </div>
        <div class="services-grid">
            <div class="service-card">
                <div class="service-icon">
                    <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M19 3H5C3.89543 3 3 3.89543 3 5V19C3 20.1046 3.89543 21 5 21H19C20.1046 21 21 20.1046 21 19V5C21 3.89543 20.1046 3 19 3Z" stroke="currentColor" stroke-width="2" />
                        <path d="M9 7H15M9 12H15M9 17H12" stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                    </svg>
                </div>
                <h3>Ordonnances</h3>
                <p>Délivrance rapide et sécurisée de vos médicaments sur ordonnance</p>
            </div>
            <div class="service-card">
                <div class="service-icon">
                    <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12 2L12 22M2 12L22 12" stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                        <circle cx="12" cy="12" r="10" stroke="currentColor" stroke-width="2" />
                    </svg>
                </div>
                <h3>Conseil Pharmaceutique</h3>
                <p>Des pharmaciens qualifiés pour vous conseiller et vous orienter</p>
            </div>
            <div class="service-card">
                <div class="service-icon">
                    <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M9 11L12 14L22 4" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M21 12V19C21 20.1046 20.1046 21 19 21H5C3.89543 21 3 20.1046 3 19V5C3 3.89543 3.89543 3 5 3H16" stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                    </svg>
                </div>
                <h3>Tests & Dépistage</h3>
                <p>Tests de glycémie, tension artérielle et autres analyses rapides</p>
            </div>
            <div class="service-card">
                <div class="service-icon">
                    <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z" stroke="currentColor" stroke-width="2" />
                        <path d="M12 6V12L16 14" stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                    </svg>
                </div>
                <h3>Pharmacie de Garde</h3>
                <p>Service d'urgence disponible en dehors des heures d'ouverture</p>
            </div>
            <div class="service-card">
                <div class="service-icon">
                    <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M3 9L12 2L21 9V20C21 20.5304 20.7893 21.0391 20.4142 21.4142C20.0391 21.7893 19.5304 22 19 22H5C4.46957 22 3.96086 21.7893 3.58579 21.4142C3.21071 21.0391 3 20.5304 3 20V9Z" stroke="currentColor" stroke-width="2" />
                        <path d="M9 22V12H15V22" stroke="currentColor" stroke-width="2" />
                    </svg>
                </div>
                <h3>Livraison à Domicile</h3>
                <p>Service de livraison rapide pour votre confort</p>
            </div>
            <div class="service-card">
                <div class="service-icon">
                    <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M20.84 4.61C20.3292 4.099 19.7228 3.69364 19.0554 3.41708C18.3879 3.14052 17.6725 2.99817 16.95 2.99817C16.2275 2.99817 15.5121 3.14052 14.8446 3.41708C14.1772 3.69364 13.5708 4.099 13.06 4.61L12 5.67L10.94 4.61C9.9083 3.57831 8.50903 2.99871 7.05 2.99871C5.59096 2.99871 4.19169 3.57831 3.16 4.61C2.1283 5.64169 1.54871 7.04097 1.54871 8.5C1.54871 9.95903 2.1283 11.3583 3.16 12.39L4.22 13.45L12 21.23L19.78 13.45L20.84 12.39C21.351 11.8792 21.7564 11.2728 22.0329 10.6054C22.3095 9.93789 22.4518 9.22248 22.4518 8.5C22.4518 7.77752 22.3095 7.06211 22.0329 6.39464C21.7564 5.72718 21.351 5.12075 20.84 4.61Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </div>
                <h3>Parapharmacie</h3>
                <p>Produits de beauté, hygiène et bien-être</p>
            </div>
        </div>
    </div>
</section>

<!-- Produits Section -->
<section class="produits" id="produits">
    <div class="container">
        <div class="section-header">
            <span class="section-label">Nos Produits</span>
            <h2 class="section-title">Catégories de Produits</h2>
            <p class="section-description">Découvrez notre large gamme de produits pharmaceutiques et parapharmaceutiques</p>
        </div>
        <div class="produits-grid">
            <div class="produit-card">
                <div class="produit-image">
                    <img src="{{ asset('Img/Medoc.jpg') }}" alt="Biberon">>
                </div>
                <div class="produit-content">
                    <h3>Soins Bébé & Maman</h3>
                    <p>Produits adaptés pour les mamans et leurs bébés</p>
                    <a href="#" class="produit-link">Découvrir →</a>
                </div>
            </div>
            <div class="produit-card">
                <div class="produit-image">
                    <img src="{{ asset('Img/Medoc.jpg') }}" alt="Biberon">>
                </div>
                <div class="produit-content">
                    <h3>Soins Bébé & Maman</h3>
                    <p>Produits adaptés pour les mamans et leurs bébés</p>
                    <a href="#" class="produit-link">Découvrir →</a>
                </div>
            </div>
            <div class="produit-card">
                <div class="produit-image">
                    <img src="{{ asset('Img/Medoc.jpg') }}" alt="Biberon">>
                </div>
                <div class="produit-content">
                    <h3>Soins Bébé & Maman</h3>
                    <p>Produits adaptés pour les mamans et leurs bébés</p>
                    <a href="#" class="produit-link">Découvrir →</a>
                </div>
            </div>
            <div class="produit-card">
                <div class="produit-image">
                    <img src="{{ asset('Img/Medoc.jpg') }}" alt="Biberon">>
                </div>
                <div class="produit-content">
                    <h3>Soins Bébé & Maman</h3>
                    <p>Produits adaptés pour les mamans et leurs bébés</p>
                    <a href="#" class="produit-link">Découvrir →</a>
                </div>
            </div>
            <div class="produit-card">
                <div class="produit-image">
                    <img src="{{ asset('Img/Medoc.jpg') }}" alt="Biberon">>
                </div>
                <div class="produit-content">
                    <h3>Soins Bébé & Maman</h3>
                    <p>Produits adaptés pour les mamans et leurs bébés</p>
                    <a href="#" class="produit-link">Découvrir →</a>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- Conseil Section -->
<section class="conseil" id="conseil">
    <div class="container">
        <div class="conseil-content">
            <div class="conseil-image">
                <div class="conseil-decoration"></div>
            </div>
            <div class="conseil-text">
                <span class="section-label">Conseils Santé</span>
                <h2 class="section-title">Votre Bien-être, Notre Expertise</h2>
                <p>Nos pharmaciens diplômés sont à votre disposition pour vous conseiller et répondre à toutes vos questions concernant votre santé et vos traitements.</p>
                <ul class="conseil-list">
                    <li>
                        <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M20 6L9 17L4 12" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                        <span>Conseils personnalisés et gratuits</span>
                    </li>
                    <li>
                        <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M20 6L9 17L4 12" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                        <span>Suivi de vos traitements</span>
                    </li>
                    <li>
                        <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M20 6L9 17L4 12" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                        <span>Prévention et dépistage</span>
                    </li>
                    <li>
                        <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M20 6L9 17L4 12" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                        <span>Éducation thérapeutique</span>
                    </li>
                </ul>
                <a href="contact.html" class="btn btn-primary">Demander Conseil</a>
            </div>
        </div>
    </div>
</section>

<!-- Contact & Horaires Section -->
<section class="contact" id="contact">
    <div class="container">
        <div class="section-header">
            <span class="section-label">Contact & Localisation</span>
            <h2 class="section-title">Venez Nous Voir</h2>
        </div>
        <div class="contact-grid">
            <div class="contact-info">
                <div class="info-card">
                    <div class="info-icon">
                        <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M21 10C21 17 12 23 12 23C12 23 3 17 3 10C3 7.61305 3.94821 5.32387 5.63604 3.63604C7.32387 1.94821 9.61305 1 12 1C14.3869 1 16.6761 1.94821 18.364 3.63604C20.0518 5.32387 21 7.61305 21 10Z" stroke="currentColor" stroke-width="2" />
                            <circle cx="12" cy="10" r="3" stroke="currentColor" stroke-width="2" />
                        </svg>
                    </div>
                    <div>
                        <h3>Adresse</h3>
                        <p>Agata, BENIN<br>Quartier St Raymond</p>
                    </div>
                </div>
                <div class="info-card">
                    <div class="info-icon">
                        <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M22 16.92V19.92C22.0011 20.1985 21.9441 20.4742 21.8325 20.7293C21.7209 20.9845 21.5573 21.2136 21.3521 21.4019C21.1468 21.5901 20.9046 21.7335 20.6407 21.8227C20.3769 21.9119 20.0974 21.9451 19.82 21.92C16.7428 21.5856 13.787 20.5341 11.19 18.85C8.77382 17.3147 6.72533 15.2662 5.18999 12.85C3.49997 10.2412 2.44824 7.27099 2.11999 4.18C2.095 3.90347 2.12787 3.62476 2.21649 3.36162C2.30512 3.09849 2.44756 2.85669 2.63476 2.65162C2.82196 2.44655 3.0498 2.28271 3.30379 2.17052C3.55777 2.05833 3.83233 2.00026 4.10999 2H7.10999C7.5953 1.99522 8.06579 2.16708 8.43376 2.48353C8.80173 2.79999 9.04207 3.23945 9.10999 3.72C9.23662 4.68007 9.47144 5.62273 9.80999 6.53C9.94454 6.88792 9.97366 7.27691 9.8939 7.65088C9.81415 8.02485 9.62886 8.36811 9.35999 8.64L8.08999 9.91C9.51355 12.4135 11.5864 14.4864 14.09 15.91L15.36 14.64C15.6319 14.3711 15.9751 14.1858 16.3491 14.1061C16.7231 14.0263 17.1121 14.0555 17.47 14.19C18.3773 14.5286 19.3199 14.7634 20.28 14.89C20.7658 14.9585 21.2094 15.2032 21.5265 15.5775C21.8437 15.9518 22.0122 16.4296 22 16.92Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </div>
                    <div>
                        <h3>Téléphone</h3>
                        <p>+229 27 XX XX XX XX<br>+229 07 XX XX XX XX</p>
                    </div>
                </div>
                <div class="info-card">
                    <div class="info-icon">
                        <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z" stroke="currentColor" stroke-width="2" />
                            <path d="M12 6V12L16 14" stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                        </svg>
                    </div>
                    <div>
                        <h3>Horaires</h3>
                        <p>Lun - Sam: 8h00 - 20h00<br>Dim: 9h00 - 18h00</p>
                    </div>
                </div>
                <div class="info-card garde-info">
                    <div class="info-icon">
                        <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="12" cy="12" r="10" stroke="currentColor" stroke-width="2" />
                            <path d="M12 6V12L16 16" stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                        </svg>
                    </div>
                    <div>
                        <h3>Pharmacie de Garde</h3>
                        <p>Service disponible 24h/24<br>Appelez-nous pour vérifier</p>
                    </div>
                </div>
            </div>
            <div class="contact-form">
                <h3>Contactez-nous</h3>
                <form id="contactForm">
                    <div class="form-group">
                        <label for="name">Nom complet</label>
                        <input type="text" id="name" name="name" required>
                    </div>
                    <div class="form-group">
                        <label for="phone">Téléphone</label>
                        <input type="tel" id="phone" name="phone" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="message">Message</label>
                        <textarea id="message" name="message" rows="4" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary btn-full">Envoyer le message</button>
                </form>
            </div>
        </div>
    </div>
</section>

<!-- Pharmacie de Garde Section -->
<!-- <section class="garde-section" id="garde">
    <div class="container">
        <div class="garde-content">
            <div class="garde-icon-large">
                <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <circle cx="12" cy="12" r="10" stroke="currentColor" stroke-width="2" />
                    <path d="M12 6V12L16 14" stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                    <path d="M12 2L12 22M2 12L22 12" stroke="currentColor" stroke-width="1" stroke-linecap="round" opacity="0.3" />
                </svg>
            </div>
            <h2>Service de Garde 24/7</h2>
            <p>En cas d'urgence en dehors des heures d'ouverture, notre service de garde est disponible pour vous servir.</p>
            <a href="tel:+22927000000" class="btn btn-primary">Appeler maintenant</a>
        </div>
    </div>
</section> -->
@endsection