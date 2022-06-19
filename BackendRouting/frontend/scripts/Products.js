// const main = document.getElementById('main_content');
const shop_list = document.getElementById('products_container');

function getProducts(data) {
    shop_list.innerHtml = '';

    data.forEach(product => {
        const {product_name, image_url, code, brands} = product;
        console.log(product);

        const productEl = document.createElement('div');
        productEl.classList.add("shop-list");

        productEl.innerHTML = `
            <div onclick="window.location.href='/BackendRouting/product?code=${code}'">
                <img class="image-product" src="${image_url}" alt="${product_name}">
            </div>
            <div class="product-cell-bottom">
                <div class="product-cell-bottom-name">
                    <p class="product-name">${product_name}</p>
                    <p>>${brands}</p>
                </div>
                <div id="add-to-list-icon">
                    <button>&#9734;</button>
                </div>
            </div>
        `;
        shop_list.appendChild(productEl);

    })
}