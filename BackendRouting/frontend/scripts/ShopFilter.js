const shop_list_sorted_div = document.getElementById('shop-list-container_filter');
// Get json data with products
const json_products_div = document.getElementById('json_data_from_php');
const json_products = json_products_div.textContent;
// Parse json into data variable
let data = JSON.parse(json_products);

showFilteredProducts(data);
function showFilteredProducts(data) {

    if (data[0] === "null") {
        shop_list_sorted_div.innerHTML = `
            <p class='error-message'>There are no products that match the criteria you have selected.</p>
            <p class='error-message'>A good suggestion would be to select as few criteria as possible or only the most important ones.</p>
        `;
    } else {
        data[0].forEach(product => {
            //console.log(product);
            const {product_name, image_url, code, brands} = product;
            //console.log(product_name);

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
                        <button>&#9734;</button>
                    </div>
                </div>
            `;
            shop_list_sorted_div.appendChild(productEl);
        });
    }
}

function configureNameAndBrand(product_name, brands) {
    // Configure Name
    let product_name_minimal;
    if(product_name.indexOf(" ") !== -1) {
        let split_product_name = product_name.split(" ");
        product_name_minimal = split_product_name.slice(0,2).join(" ");
    } else {
        product_name_minimal = product_name;
    }

    // Configure Brand
    let split_brands;
    let brands_minimal = " ";
    if(product_name_minimal.length < 15) {
        if(brands || brands !== "") {
            split_brands = brands.split(",");
            brands_minimal = split_brands[0];
        }
    }
    return [product_name_minimal, brands_minimal];
}

