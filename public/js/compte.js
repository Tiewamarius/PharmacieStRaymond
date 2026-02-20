// Gestion des onglets
document.querySelectorAll('.account-menu li').forEach(item => {
    item.addEventListener('click', function () {

        document.querySelectorAll('.account-menu li').forEach(li => li.classList.remove('active'));
        this.classList.add('active');

        const tab = this.getAttribute('data-tab');

        document.querySelectorAll('.tab-content').forEach(content => {
            content.classList.remove('active');
        });

        document.getElementById(tab).classList.add('active');
    });
});

// Preview image profil
document.getElementById('profileImageInput').addEventListener('change', function (event) {
    const reader = new FileReader();
    reader.onload = function () {
        document.getElementById('profilePreview').src = reader.result;
    };
    reader.readAsDataURL(event.target.files[0]);
});
