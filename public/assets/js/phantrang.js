document.addEventListener("DOMContentLoaded", function () {
    if (typeof products === "undefined") {
        console.error("Products data is missing!");
        return;
    }

    const itemsPerPage = 9;
    let currentPage = 1;

    function renderProducts(page) {
        const productList = document.getElementById("product-list");
        const pagination = document.getElementById("pagination");
        productList.innerHTML = "";
        pagination.innerHTML = "";

        const start = (page - 1) * itemsPerPage;
        const end = start + itemsPerPage;
        const paginatedProducts = products.slice(start, end);

        paginatedProducts.forEach(p => {
            const productHtml = `<div class="col-md-4 mb-4">
                    <div class="product-item">
                        <div class="product-thumb">
                            <img src="/storage/${p.thumbnail}" alt="Image">
                            <div class="product-action">
                                <a class="action-quick-view" href="#"><i class="ion-ios-cart"></i></a>
                                <a class="action-quick-view" href="#"><i class="ion-arrow-expand"></i></a>
                                <a class="action-quick-view" href="#"><i class="ion-shuffle"></i></a>
                            </div>
                        </div>
                        <div class="product-info text-center">
                            <span>${p.category.name}</span>
                            <h4 class="title">
                                <a href="/product_detail/${p.slug}">${p.title.substring(0, 50)}</a>
                            </h4>
                        </div>
                    </div>
                </div>`;
            productList.innerHTML += productHtml;
        });
    }

    renderProducts(currentPage);
});
