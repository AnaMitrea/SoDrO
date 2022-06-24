const trend_category_1 = document.getElementById('json_trending_1');
const trend_category_2 = document.getElementById('json_trending_2');
const trend_category_3 = document.getElementById('json_trending_3');
const trend_category_4 = document.getElementById('json_trending_4');
const trend_category_5 = document.getElementById('json_trending_5');

var spot=1;
let list_category;
showProducts(trend_category_1);
showProducts(trend_category_2);
showProducts(trend_category_3);
showProducts(trend_category_4);
showProducts(trend_category_5);

function showProducts(json_div) {
    const json_data = json_div.textContent;
    let data = JSON.parse(json_data);
    list_category= document.getElementById('carbonated-list-' + spot);
    spot++;
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
        list_category.appendChild(productEl);
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