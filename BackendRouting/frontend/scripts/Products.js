
const shop_list_div = document.getElementById('shop_list_container');
const choose_page_container = document.getElementById('choose_page_container');
const json_div = document.getElementById('json_data_from_php');
const json_data = json_div.textContent;
let data = JSON.parse(json_data);

showProducts(data);

function showProducts(data) {
    shop_list_div.innerHtml = '';

    data[0].forEach(product => {
        const {product_name, image_url, code, brands} = product;
        console.log(product);

        const productEl = document.createElement('div');
        productEl.classList.add("product-cell");

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
        `
        shop_list_div.appendChild(productEl);
    })
}