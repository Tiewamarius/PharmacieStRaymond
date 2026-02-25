
document.addEventListener("DOMContentLoaded", function() {

    const token = "{{ csrf_token() }}";

    // QUANTITÉ
    document.querySelectorAll(".qty-btn").forEach(button => {

        button.addEventListener("click", function() {

            let id = this.dataset.id;
            let action = this.dataset.action;
            let qtyElement = document.getElementById("qty-" + id);
            let currentQty = parseInt(qtyElement.innerText);

            let newQty = action === "plus" ? currentQty + 1 : currentQty - 1;
            if(newQty < 1) return;

            fetch(`/cart/update-ajax/${id}`, {
                method: "POST",
                headers: {
                    "Content-Type": "application/json",
                    "X-CSRF-TOKEN": token
                },
                body: JSON.stringify({ quantity: newQty })
            })
            .then(res => res.json())
            .then(data => {
                qtyElement.innerText = data.quantity;
                document.getElementById("cart-total").innerText = data.total + " FCFA";
                updateCartCount();
            });

        });

    });

    // SUPPRESSION
    document.querySelectorAll(".remove-btn").forEach(button => {

        button.addEventListener("click", function() {

            let id = this.dataset.id;

            fetch(`/cart/remove-ajax/${id}`, {
                method: "DELETE",
                headers: {
                    "X-CSRF-TOKEN": token
                }
            })
            .then(res => res.json())
            .then(data => {
                this.closest(".cart-item").remove();
                document.getElementById("cart-total").innerText = data.total + " FCFA";
                updateCartCount();
            });

        });

    });

    function updateCartCount() {
        fetch("/cart/count")
        .then(res => res.json())
        .then(data => {
            let badge = document.querySelector(".cart-count");
            if(badge){
                badge.innerText = data.count;
                if(data.count == 0){
                    badge.remove();
                }
            }
        });
    }

});