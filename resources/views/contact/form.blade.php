@extends('index')

@section('content')

<div class="contact-wrapper">

    <!-- COLONNE GAUCHE : FORMULAIRE -->
    <div class="contact-left">

        <h2>Envoyer une demande</h2>

        @if(session('success'))
        <div class="alert-success">
            {{ session('success') }}
        </div>
        @endif

        <form action="{{ route('contact.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="form-group">
                <label>Adresse e-mail</label>
                <input type="email" name="email" value="{{ old('email') }}" required>
            </div>

            <div class="form-group">
                <label>Sujet (valeur facultative)</label>
                <input type="text" name="subject" value="{{ old('subject') }}">
            </div>

            <div class="form-group">
                <label>Sujet</label>
                <select name="category" required>
                    <option value="">-- Sélectionner --</option>
                    <option value="conseil">Conseil produit</option>
                    <option value="compte">Compte client</option>
                    <option value="reglement">Règlement</option>
                    <option value="traitement">Commande en cours de traitement</option>
                    <option value="suivi">Suivi d'article</option>
                    <option value="reception">Question à réception</option>
                    <option value="autre">Autre</option>
                </select>
            </div>

            <div class="form-group">
                <label>Description</label>
                <textarea name="message" rows="6" required>{{ old('message') }}</textarea>
            </div>

            <div class="form-group">
                <label>Pièces jointes (valeur facultative)</label>
                <input type="file" name="attachment">
            </div>

            <div class="form-group checkbox">
                <input type="checkbox" name="consent" required>
                <span>
                    Je donne mon consentement au traitement des
                    <b>données personnelles</b>
                </span>
            </div>

            <button type="submit" class="btn-submit">
                Envoyer
            </button>

        </form>

    </div>


    <!-- COLONNE DROITE : RÉSEAUX SOCIAUX -->
    <div class="contact-right">

        <h3>Suivez-nous</h3>

        <div class="social-list">

            <a href="https://facebook.com" target="_blank" class="social-item">
                <img src="{{ asset('Img/facbook.jpg') }}" alt="Facebook">
                <span>Facebook</span>
            </a>

            <a href="https://instagram.com" target="_blank" class="social-item">
                <img src="{{ asset('Img/instagram.jpg') }}" alt="Instagram">
                <span>Instagram</span>
            </a>

            <a href="https://wa.me/22500000000" target="_blank" class="social-item">
                <img src="{{ asset('Img/whatsapp.jpg') }}" alt="WhatsApp">
                <span>WhatsApp</span>
            </a>

            <!-- <a href="https://tiktok.com" target="_blank" class="social-item">
                <img src="{{ asset('img/tiktok.png') }}" alt="TikTok">
                <span>TikTok</span>
            </a> -->

        </div>

    </div>

</div>

@endsection