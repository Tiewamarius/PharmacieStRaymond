@extends('index')

@section('content')

<div class="cart-container">

    @if(session('cart') && count(session('cart')) > 0)

    <h2 class="cart-title">Votre Panier</h2>

    <div class="cart-grid">

        <div class="cart-items">
            @php $total = 0; @endphp

            @foreach(session('cart') as $id => $details)

            @php
            $subtotal = $details['price'] * $details['quantity'];
            $total += $subtotal;
            @endphp

            <div class="cart-item">

                <img src="{{ $details['image'] }}" alt="produit">

                <div class="item-info">
                    <h4>{{ $details['name'] }}</h4>
                    <p>{{ number_format($details['price'], 0, ',', ' ') }} FCFA</p>
                </div>

                <div class="item-qty">

                    <button class="qty-btn" data-id="{{ $id }}" data-action="minus">-</button>

                    <span class="qty-value" id="qty-{{ $id }}">
                        {{ $details['quantity'] }}
                    </span>

                    <button class="qty-btn" data-id="{{ $id }}" data-action="plus">+</button>

                </div>

                <button class="remove-btn" data-id="{{ $id }}">
                    <i class="fa-solid fa-trash"></i>
                </button>

                <div class="item-subtotal">
                    {{ number_format($subtotal, 0, ',', ' ') }} FCFA
                </div>

            </div>

            @endforeach
        </div>

        <div class="cart-summary">
            <h3>Résumé</h3>

            <div class="summary-line">
                <span>Total</span>
                <strong id="cart-total">
                    {{ number_format($total, 0, ',', ' ') }} FCFA
                </strong>
            </div>

            <a href="#" class="btn-checkout">
                Procéder au paiement
            </a>
        </div>

    </div>

    @else

    <!-- PANIER VIDE -->

    <div class="cart-empty">
        <i class="fa-solid fa-bag-shopping empty-icon"></i>
        <h2>Votre panier est vide</h2>
        <p>Vous n'avez aucun article dans votre panier</p>

        <a href="{{ url('/') }}" class="btn-primary">
            Continuer vos achats
        </a>
    </div>

    @endif

</div>

@endsection