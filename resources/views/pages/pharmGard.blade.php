@extends('index')
@section('content')
<div class="container">

    <!-- HEADER -->
    <div class="top-bar">
        <div class="week-select">
            <label>Semaine de garde :</label>
            <select>
                <option>14 févr. - 20 févr. 2026</option>
                <option>21 févr. - 27 févr. 2026</option>
            </select>
        </div>
    </div>

    <!-- CURRENT WEEK BOX -->
    <div class="current-week">
        <span>Semaine en cours</span>
        <h2>14 févr. - 20 févr. 2026</h2>
    </div>

    <!-- FILTER -->
    <div class="filter-section">
        <label>Filtrer par section :</label>
        <select id="sectionFilter">
            <option value="all">Toutes</option>
            <option value="abobo">Pharmacie Agata</option>
            <option value="cocody">St Raymond</option>
        </select>
    </div>

    <!-- SECTION ABODO -->
    <div class="section" data-section="abobo">
        <div id="section-header" class="section-header">
            <h3>AGATA</h3>
            <span class="count">2 pharmacies</span>
        </div>

        <div class="cards">

            <div class="card">
                <h4>Pharmacie St RAYMOND</h4>
                <p>Dr. </p>
                <p>+229 00 00 00 00 01 / +229 00 00 00 00 01</p>
                <a href="tel:0143633011" class="btn">Appeler</a>
            </div>

            <div class="card">
                <h4>Pharmacie St RAYMOND</h4>
                <p>Dr. </p>
                <p>+229 00 00 00 00 01 / +229 00 00 00 00 01</p>
                <a href="tel:0143633011" class="btn">Appeler</a>
            </div>

        </div>
    </div>

</div>
@endsection