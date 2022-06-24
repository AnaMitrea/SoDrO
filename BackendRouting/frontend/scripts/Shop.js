const shop_list_div = document.getElementById('shop_list_container');
const choose_page_container = document.getElementById('choose_page_container');

// Get json data configuration - page and sort_by
const json_config_div = document.getElementById('json_page_sort_by');
const json_config = json_config_div.textContent;
// Parse json into data variable
let configuration = JSON.parse(json_config);
let {page} = configuration;
let {sort_by} = configuration;
let {number_of_pages} = configuration;

let page_decimal = page - '0';
let number_of_pages_decimal = number_of_pages - '0';

// Get json data with products
const json_products_div = document.getElementById('json_products');
const json_products = json_products_div.textContent;
// Parse json into data variable
let data = JSON.parse(json_products);


showProducts(data);

function showProducts(data) {
    shop_list_div.innerHTML = ``;

    data[0].forEach(product => {
        const {product_name, image_url, code, brands} = product;

        // Get the Split Name And Brand to fit into div
        let details = configureNameAndBrand(product_name, brands);

        const productEl = document.createElement('div');
        productEl.classList.add("product-cell");

        productEl.innerHTML = `
            <div onclick="window.location.href='/BackendRouting/product?code=${code}'">
                <img class="image-product" src="${image_url}" alt="${details[0]}">
            </div>
            <div class="product-cell-bottom">
                <div class="product-cell-bottom-name">
                    <p class="product-name">${details[0]}</p>
                    <p>${details[1]}</p>
                </div>
                <div id="add-to-list-icon">
                    <button id="favorite-button-${code}" onclick="addToFavorite(${code})">&#9734;</button>
                </div>
            </div>
        `
        shop_list_div.appendChild(productEl);
    })
}

function addToFavorite(code) {
    let favoriteButton = document.getElementById('favorite-button-'+code);
    favoriteButton.style.color = '#232d36';
    favoriteButton.style.fontSize = '25px';
    favoriteButton.style.backgroundColor = '#f69676';
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

renderChoosePage();
function renderChoosePage() {
    if(page_decimal > 1 && page_decimal < number_of_pages_decimal) {
        choose_page_container.innerHTML = `
            <a id="previous-page" href="" onclick="dec()" class='previous'>&laquo; Previous</a>
            <a id="next-page" href="" onclick="inc()" class='next'>Next &raquo;</a>
        `
    } else if (page_decimal === 1) {
        choose_page_container.innerHTML = `
            <a id="next-page" href="" onclick="inc()" class='next'>Next &raquo;</a>
        `
    } else if (page_decimal === number_of_pages_decimal){
        choose_page_container.innerHTML = `
            <a id="previous-page" href="" onclick="dec()" class='previous'>&laquo; Previous</a>
        `
    }
}

function inc() {
    if(sort_by !== null) {
        document.getElementById("next-page").href="/BackendRouting/products?page=" + (page_decimal + 1) + "&sort=" + sort_by;
    } else {
        document.getElementById("next-page").href="/BackendRouting/products?page=" + (page_decimal + 1);
    }
}

function dec(){
    if(sort_by !== null) {
        document.getElementById("previous-page").href="/BackendRouting/products?page=" + (page_decimal - 1) + "&sort=" + sort_by;
    }else{
        document.getElementById("previous-page").href="/BackendRouting/products?page=" + (page_decimal - 1);
    }
}




