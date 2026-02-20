document.addEventListener('DOMContentLoaded', function() {

// SCRIP DE SECTION SUR L'ACCUEIL

    // Liste de vos catégories de produits
    const categories = [
        "Antibiotiques",
        "Analgésiques (Douleur)",
        "Vitamines et Compléments",
        "Produits Bébé & Maman",
        "Soins Dermatologiques",
        "Hygiène Bucco-dentaire",
        "Matériel Médical",
        "Premiers Secours"
    ];

    const input = document.getElementById('searchInput');
    const resultsDiv = document.getElementById('searchResults');

    input.addEventListener('input', function() {
        const query = this.value.toLowerCase();
        resultsDiv.innerHTML = ''; // On vide les anciens résultats

        if (query.length > 0) {
            // On filtre la liste des catégories
            const filtered = categories.filter(cat => cat.toLowerCase().includes(query));

            if (filtered.length > 0) {
                resultsDiv.style.display = 'block';
                filtered.forEach(cat => {
                    const div = document.createElement('div');
                    div.classList.add('result-item');
                    div.textContent = cat;
                    // Action au clic sur une suggestion
                    div.onclick = function() {
                        input.value = cat;
                        resultsDiv.style.display = 'none';
                    };
                    resultsDiv.appendChild(div);
                });
            } else {
                resultsDiv.style.display = 'none';
            }
        } else {
            resultsDiv.style.display = 'none';
        }
    });

    // Fermer la liste si on clique ailleurs sur la page
    document.addEventListener('click', function(e) {
        if (!input.contains(e.target) && !resultsDiv.contains(e.target)) {
            resultsDiv.style.display = 'none';
        }
    });

// SECTION POUR LA PAGE SEARCH
    const category = document.querySelectorAll('.category-list li');
    const searchInput = document.getElementById('productSearch');

    // Gestion du clic sur les catégories
    category.forEach(item => {
        item.addEventListener('click', function() {
            // Retirer la classe active de tous les items
            categories.forEach(i => i.classList.remove('active'));
            // Ajouter active sur celui cliqué
            this.classList.add('active');
            
            const selectedCat = this.getAttribute('data-category');
            console.log("Filtrage par : " + selectedCat);
            // Ici vous pourriez déclencher une requête Ajax vers Laravel
        });
    });

    // Recherche dynamique
    searchInput.addEventListener('keyup', function() {
        let val = this.value.toLowerCase();
        console.log("Recherche de : " + val);
        // Filtrer les cartes produits affichées
    });
});