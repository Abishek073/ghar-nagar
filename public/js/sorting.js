document.addEventListener("DOMContentLoaded", function () {
    const productContainer = document.getElementById("productContainer");
    const sortSelect = document.getElementById("sort");

    function sortProductsByPrice(order) {
        const products = Array.from(productContainer.querySelectorAll(".col")).sort((a, b) => {
            const priceA = parseInt(a.querySelector("h3").textContent);
            const priceB = parseInt(b.querySelector("h3").textContent);
            return order === "lowToHigh" ? priceA - priceB : priceB - priceA;
        });

        productContainer.innerHTML = "";
        products.forEach(product => productContainer.appendChild(product));
    }

    sortSelect.addEventListener("change", function () {
        const sortBy = this.value;
        sortProductsByPrice(sortBy);
    });
});