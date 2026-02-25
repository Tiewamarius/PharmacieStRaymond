@extends('index')
@section('content')
<style>
    /* Container */
    .contact-container {
        max-width: 600px;
        margin: 140px auto 80px auto;
        /* espace header */
        padding: 0 20px;
        text-align: center;
    }

    /* Titre */
    .contact-title {
        font-size: 28px;
        margin-bottom: 30px;
    }

    /* Card */
    .contact-card {
        background: #fff;
        border-radius: 12px;
        padding: 40px;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
    }

    .contact-card h3 {
        font-size: 20px;
        margin-bottom: 10px;
    }

    .contact-desc {
        color: #6B7280;
        margin-bottom: 25px;
    }

    /* Boutons */
    .btn-contact {
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 10px;
        padding: 12px;
        border-radius: 8px;
        text-decoration: none;
        font-weight: 500;
        margin-bottom: 15px;
        transition: 0.3s ease;
    }

    .btn-contact.primary {
        background: #10B981;
        color: white;
    }

    .btn-contact.primary:hover {
        background: #059669;
    }

    .btn-contact.secondary {
        border: 1px solid #ccc;
        color: #111;
    }

    .btn-contact.secondary:hover {
        background: #f3f4f6;
    }

    /* Footer */
    .contact-footer {
        margin-top: 20px;
        font-size: 14px;
        color: #6B7280;
    }

    .faq-link {
        display: block;
        margin-top: 5px;
        text-decoration: underline;
        color: #111827;
    }
</style>
<div class="contact-container">

    <h2 class="contact-title">
        Comment pouvons-nous vous aider ?
    </h2>

    <div class="contact-card">

        <h3>Service client</h3>

        <p class="contact-desc">
            Des questions sur votre commande ou votre compte ?
        </p>

        <!-- Bouton Email -->
        <a href="{{ route('contact.create') }}" class="btn-contact primary">
            <i class="fa-solid fa-envelope"></i>
            Écrivez-nous
        </a>

        <!-- Bouton Téléphone -->
        <a href="tel:0972390444" class="btn-contact secondary">
            <i class="fa-solid fa-phone"></i>
            Appelez-nous au +229 00 00 00 00 01
        </a>

        <div class="contact-footer">
            <p>Du lundi au vendredi de 9h à 18h</p>
            <a href="#" class="faq-link">Questions fréquentes</a>
        </div>

    </div>

</div>

@endsection