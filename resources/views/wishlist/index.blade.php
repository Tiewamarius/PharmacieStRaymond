@extends('index')

@section('content')

<div class="wishlist-container">

    <div class="wishlist-header">
        <a href="{{ url()->previous() }}" class="back-link">
            ← Retour
        </a>
        <h2>Favoris</h2>
    </div>

    @if($wishlists->count() > 0)

    <div class="wishlist-grid">

        @foreach($wishlists as $wishlist)

        <div class="wishlist-item">

            <img src="{{ $wishlist->product->image }}" alt="produit">

            <div class="wishlist-info">
                <h4>{{ $wishlist->product->name }}</h4>
                <p>
                    {{ number_format($wishlist->product->price, 0, ',', ' ') }} FCFA
                </p>
            </div>

            <div class="wishlist-actions">

                <!-- Ajouter au panier -->
                <form action="{{ route('cart.add', $wishlist->product->id) }}" method="POST">
                    @csrf
                    <input type="hidden" name="name" value="{{ $wishlist->product->name }}">
                    <input type="hidden" name="price" value="{{ $wishlist->product->price }}">
                    <input type="hidden" name="image" value="{{ $wishlist->product->image }}">
                    <button type="submit" class="btn-cart">
                        Ajouter au panier
                    </button>
                </form>

                <!-- Supprimer favori -->
                <form action="{{ route('wishlist.remove', $wishlist->product->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button class="btn-remove">
                        <i class="fa-solid fa-trash"></i>
                    </button>
                </form>

            </div>

        </div>

        @endforeach

    </div>

    @else

    <!-- ÉTAT VIDE -->

    <div class="wishlist-empty">

        <img src="{{ asset('Img/wishlisPNG.PNG') }}" width="800px" height="150px" alt="empty">

        <h3>Aucun favori ajouté</h3>
        <p>
            Épinglez vos produits préférés. Vous pouvez définir des rappels
            et acheter des produits facilement.
        </p>

        <a href="{{ url('/') }}" class="btn-primary">
            Faire desAchats
        </a>

    </div>

    @endif

</div>

@endsection