const shop_list_div = document.getElementById('shop_list_container');
const choose_page_container = document.getElementById('choose_page_container');

// Get json data
const json_div = document.getElementById('json_data_from_php');
const json_data = json_div.textContent;
// Parse json into data variable
let data = JSON.parse(json_data);

showProducts(data);

function showProducts(data) {
    shop_list_div.innerHtml = '';
    data[0].forEach(product => {
        const {product_name, image_url, code, brands} = product;
        var modifiedName = configureNameAndBrand(product_name,brands);
        const product_name_minimal = modifiedName[0];
        const brands_minimal = modifiedName[1];
        const productEl = document.createElement('div');
        productEl.classList.add("product-cell");
        productEl.innerHTML = `
            <div onclick="window.location.href='/BackendRouting/product?code=${code}'">
                <img class="image-product" src="${image_url}" alt="${product_name_minimal}">
            </div>
            <div class="product-cell-bottom">
                <div class="product-cell-bottom-name">
                    <p class="product-name">${product_name_minimal}</p>
                    <p>${brands_minimal}</p>
                </div>
                <div id="add-to-list-icon">
                    <button>&#9734;</button>
                </div>
            </div>
        `
        shop_list_div.appendChild(productEl);
    })
}

function configureNameAndBrand(product_name, brands) {
    // Configure Name
    let split_product_name = product_name.split(" ");
    let product_name_minimal = split_product_name.slice(0,2).join(" ");

    // Configure Brand
    let split_brands;
    let brands_minimal = " ";
    if(product_name_minimal.length < 15) {
        split_brands = brands.split(",");
        brands_minimal = split_brands[0];
    }
    return [product_name_minimal, brands_minimal];
}