@extends('index')

@section('content')

<div class="account-container">

    <div class="account-card">

        <!-- SIDEBAR -->
        <div class="account-sidebar">
            <div class="profile-image">
                <img src="{{ asset('img/default-user.png') }}" alt="Photo profil" id="profilePreview">
                <input type="file" id="profileImageInput" hidden>
                <button onclick="document.getElementById('profileImageInput').click()">
                    Changer photo
                </button>
            </div>

            <h3>{{ Auth::user()->name }}</h3>
            <p>{{ Auth::user()->email }}</p>

            <ul class="account-menu">
                <li class="active" data-tab="profile">Informations personnelles</li>
                <li data-tab="medical">Informations médicales</li>
                <li data-tab="orders">Mes commandes</li>
                <li data-tab="prescriptions">Mes ordonnances</li>
                <li data-tab="password">Sécurité</li>
            </ul>
        </div>

        <!-- CONTENT -->
        <div class="account-content">

            <!-- PROFIL -->
            <div class="tab-content active" id="profile">
                <h2>Mes informations personnelles</h2>

                <form method="POST" action="#">
                    @csrf

                    <div class="form-group">
                        <label>Nom complet</label>
                        <input type="text" name="name" value="{{ Auth::user()->name }}">
                    </div>

                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" name="email" value="{{ Auth::user()->email }}">
                    </div>

                    <div class="form-group">
                        <label>Téléphone</label>
                        <input type="text" name="phone" placeholder="Votre numéro">
                    </div>

                    <div class="form-group">
                        <label>Adresse</label>
                        <input type="text" name="address" placeholder="Votre adresse">
                    </div>

                    <button type="submit" class="btn-primary">
                        Mettre à jour
                    </button>
                </form>
            </div>

            <!-- INFOS MÉDICALES -->
            <div class="tab-content" id="medical">
                <h2>Informations médicales</h2>

                <form method="POST" action="#">
                    @csrf

                    <div class="form-group">
                        <label>Groupe sanguin</label>
                        <input type="text" name="blood_group" placeholder="Ex: O+">
                    </div>

                    <div class="form-group">
                        <label>Allergies</label>
                        <input type="text" name="allergies" placeholder="Ex: Pénicilline">
                    </div>

                    <div class="form-group">
                        <label>Maladies chroniques</label>
                        <input type="text" name="chronic_disease" placeholder="Ex: Diabète">
                    </div>

                    <button type="submit" class="btn-primary">
                        Enregistrer
                    </button>
                </form>
            </div>

            <!-- COMMANDES -->
            <div class="tab-content" id="orders">
                <h2>Historique de mes commandes</h2>

                <div class="info-box">
                    Aucune commande pour le moment.
                </div>
            </div>

            <!-- ORDONNANCES -->
            <div class="tab-content" id="prescriptions">
                <h2>Mes ordonnances</h2>

                <form method="POST" action="#" enctype="multipart/form-data">
                    @csrf

                    <div class="form-group">
                        <label>Uploader une ordonnance</label>
                        <input type="file" name="prescription">
                    </div>

                    <button type="submit" class="btn-primary">
                        Envoyer
                    </button>
                </form>

                <div class="info-box">
                    Aucune ordonnance enregistrée.
                </div>
            </div>

            <!-- SÉCURITÉ -->
            <div class="tab-content" id="password">
                <h2>Modifier le mot de passe</h2>

                <form method="POST" action="#">
                    @csrf

                    <div class="form-group">
                        <label>Mot de passe actuel</label>
                        <input type="password" name="current_password">
                    </div>

                    <div class="form-group">
                        <label>Nouveau mot de passe</label>
                        <input type="password" name="password">
                    </div>

                    <div class="form-group">
                        <label>Confirmer le mot de passe</label>
                        <input type="password" name="password_confirmation">
                    </div>

                    <button type="submit" class="btn-primary">
                        Mettre à jour
                    </button>
                </form>
            </div>

        </div>
    </div>
</div>

@endsection